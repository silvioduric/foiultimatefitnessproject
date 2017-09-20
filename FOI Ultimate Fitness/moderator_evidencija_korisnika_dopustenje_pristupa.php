<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

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

        $email = $_GET['idKorisnik'];
        $program = $_GET['idProgram'];

        $upitKorisnik = "SELECT * FROM korisnici WHERE email = '" . $email . "'";
        $rsKorisnik = $bp->selectDB($upitKorisnik);

        while ($row = $rsKorisnik->fetch_assoc()) {
            $id = $row["id_korisnik"];
        }

        $zabranaUpit = "UPDATE korisnik_program_vjezbanja SET zabrana = '" . '0' . "' WHERE id_korisnik = '" . $id . "' AND id_program_vjezbanja = '" . $program . "' ";
        $bp->updateDB($zabranaUpit);

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
                " VALUES (default, '" . $id2 . "' , '" . $kIme . "' , 'Korisniku odobren pristup programu.', '" . $vrijemeS . "')";
        $bp->updateDB($upitDnevnik);

        $bp->zatvoriDB();

        header("Location: moderator_mjesecni_program.php?idVrsta=0");
    }
} else {
    header("Location: prijava.php");
}
?>
