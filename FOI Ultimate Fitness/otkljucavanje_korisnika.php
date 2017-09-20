<?php

require './baza.class.php';
include './smartyHeader.php';
include("./sesija.class.php");

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $korisnik = $_GET["korisnicko_ime"];

        $upit = "UPDATE korisnici SET zakljucan = '0' WHERE korisnicko_ime LIKE '" . $korisnik . "'";
        $bp->updateDB($upit);

        $upit1 = "SELECT * FROM korisnici WHERE korisnicko_ime LIKE '" . $korisnik . "' ";
        $rs = $bp->selectDB($upit1);

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
                " VALUES (default, '" . $id . "' , '" . $korisnik . "' , 'Otkljucavanje korisnickog racuna', '" . $vrijemeS . "')";
        $bp->updateDB($upitDnevnik);

        $bp->zatvoriDB();

        header("Location: korisnici.php");
    }
} else {
    header("Location: prijava.php");
}
?>

