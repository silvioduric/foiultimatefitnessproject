<?php

require 'baza.class.php';
include './smartyHeader.php';

$bp = new Baza();
$bp->spojiDB();

$korisnickoIme = $_GET["korisnickoIme"];
$aktivacijskiKod = $_GET["key"];

$upit = "SELECT ime FROM korisnici  WHERE korisnicko_ime LIKE " . " '$korisnickoIme' AND aktivacijski_kod LIKE " . " '$aktivacijskiKod' ";

$rs = $bp->selectDB($upit);

if (mysqli_num_rows($rs) > 0) {
    $upitAktiviraj = "UPDATE korisnici SET aktiviran = '1' WHERE korisnicko_ime LIKE " . " '$korisnickoIme' ";

    $bp->selectDB($upitAktiviraj);

    $smarty->assign('poruka', 'Uspjesno ste aktivirali korisnicki racun!');

    $upit21 = "SELECT * FROM korisnici WHERE korisnicko_ime LIKE '" . $korisnickoIme . "' ";
    $rs21 = $bp->selectDB($upit21);

    while ($row = $rs21->fetch_assoc()) {
        $id = $row["id_korisnik"];
    }

    $upit22 = "insert into korisnik_tip_korisnika " .
            "(id_korisnik, id_tip) " .
            "values ('" . $id . "', 3)";

    $bp->updateDB($upit22);

    $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
    $rsVirtualno = $bp->selectDB($selectVirtualno);

    while ($row = $rsVirtualno->fetch_assoc()) {
        $pomak = $row['vrijeme'];
    }

    $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

    $upitDnevnik = "INSERT INTO dnevnik " .
            " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
            " VALUES (default, '" . $id . "' , '" . $korisnickoIme . "' , 'Aktivacija racuna', '" . $vrijemeS . "')";
    $bp->updateDB($upitDnevnik);

    header("Location: prijava.php");
    exit;
} else {
    $smarty->assign('poruka', 'Problem prilikom aktivacije racuna!');
}

$smarty->display('templates/aktivacija_header.tpl');
$smarty->display('templates/aktivacija_body.tpl');
$smarty->display('templates/_footer.tpl');
?>

