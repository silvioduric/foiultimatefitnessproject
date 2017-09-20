<?php

include("sesija.class.php");
require './baza.class.php';

$bp = new Baza();
$bp->spojiDB();

if ($bp->pogreskaDB()) {
    echo "Problem kod upita na bazu!";
    exit;
}

if (Sesija::dajKorisnika() != NULL) {
    $upit = "SELECT * FROM korisnici WHERE korisnicko_ime LIKE '" . $_SESSION["korisnik"] . "' ";
    $rs = $bp->selectDB($upit);

    while ($row = $rs->fetch_assoc()) {
        $id = $row["id_korisnik"];
    }

    $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
    $rsVirtualno = $bp->selectDB($selectVirtualno);

    while ($row = $rsVirtualno->fetch_assoc()) {
        $pomak = $row['vrijeme'];
    }

    $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));


    $upitDnevnik = "INSERT INTO dnevnik " .
            " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
            " VALUES (default, '" . $id . "' , '" . $_SESSION["korisnik"] . "' , 'Odjava korisnika iz sustava', '" . $vrijemeS . "')";
    $bp->updateDB($upitDnevnik);
}

Sesija::obrisiSesiju();
header("Location: prijava.php");
?>

