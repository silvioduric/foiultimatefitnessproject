<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    $kupon = $_GET['idKupon'];
    $program = $_GET['idProgram'];

    $bp = new Baza();
    $bp->spojiDB();

    if ($bp->pogreskaDB()) {
        echo "Problem kod upita na bazu!";
        exit;
    }

    $selectKorisnik = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
    $rsKorisnik = $bp->selectDB($selectKorisnik);

    while ($row = $rsKorisnik->fetch_assoc()) {
        $id = $row["id_korisnik"];
        $kIme = $row["korisnicko_ime"];
    }

    $insertKosarica = "INSERT INTO kosarica (id_program, id_kupon, id_korisnik) " .
            " VALUES ('" . $program . "', '" . $kupon . "', '" . $id . "')";
    $bp->updateDB($insertKosarica);


    $selectKupon = "SELECT * FROM kuponi WHERE id_kupona = '" . $kupon . "'";
    $rsKupon = $bp->selectDB($selectKupon);

    while ($row = $rsKupon->fetch_assoc()) {
        $idKupon = $row["id_kupona"];
    }

    $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
    $rsVirtualno = $bp->selectDB($selectVirtualno);

    while ($row = $rsVirtualno->fetch_assoc()) {
        $pomak = $row['vrijeme'];
    }

    $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

    $upitDnevnik = "INSERT INTO dnevnik " .
            " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
            " VALUES (default, '" . $id . "' , '" . $kIme . "' , 'U kosaricu je dodan kupon popusta za mjesecni program vjezbanja.', '" . $vrijemeS . "')";
    $bp->updateDB($upitDnevnik);

    header("Location: registrirani_korisnik_moji_programi.php");
} else {
    header("Location: prijava.php");
}
?>
