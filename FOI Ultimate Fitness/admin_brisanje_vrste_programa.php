<?php

include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } elseif ($_SESSION["uloga"] == "Moderator") {
        header("Location: index_moderator.php");
    } else {

        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $id = $_GET["idProgram"];

        $upit1 = "SELECT * FROM vrste_programa WHERE id_vrste_programa LIKE '" . $id . "' ";
        $rs = $bp->selectDB($upit1);

        while ($row = $rs->fetch_assoc()) {
            $id2 = $row["id_vrste_programa"];
        }

        $upit2 = "DELETE FROM vrste_programa WHERE id_vrste_programa = '" . $id2 . "'";
        $bp->updateDB($upit2);

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
                " VALUES (default, '" . $id2 . "' , '" . $kIme . "' , 'Obrisana jedna vrsta programa vjezbanja.', '" . $vrijemeS . "')";
        $bp->updateDB($upitDnevnik);

        $bp->zatvoriDB();

        header("Location: vrste_programa_vjezbanja.php");
    }
} else {
    header("Location: prijava.php");
}
?>


