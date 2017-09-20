<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    $korisnik = $_GET['idKorisnik'];
    $kupon = $_GET['idKupon'];

    $bp = new Baza();
    $bp->spojiDB();

    if ($bp->pogreskaDB()) {
        echo "Problem kod upita na bazu!";
        exit;
    }
    $deleteKupon = "DELETE FROM kosarica WHERE id_korisnik = '" . $korisnik . "' AND id_kupon = '" . $kupon . "'";
    $bp->selectDB($deleteKupon);

    $selectKorisnik = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
    $rsKorisnik = $bp->selectDB($selectKorisnik);

    while ($row = $rsKorisnik->fetch_assoc()) {
        $id2 = $row["id_korisnik"];
        $kIme = $row["korisnicko_ime"];
    }

    $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
    $rsVirtualno = $bp->selectDB($selectVirtualno);

    while ($row = $rsVirtualno->fetch_assoc()) {
        $pomak = $row['vrijeme'];
    }

    $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

    $upitDnevnik = "INSERT INTO dnevnik " .
            " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
            " VALUES (default, '" . $id2 . "' , '" . $kIme . "' , 'Obrisan kupon popusta iz kosarice.', '" . $vrijemeS . "')";
    $bp->updateDB($upitDnevnik);

    header("Location: registrirani_korisnik_kosarica_lista.php?bodovi=0");
} else {
    header("Location: prijava.php");
}
?>
