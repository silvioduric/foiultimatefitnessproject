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

        $korisnikUpit = "SELECT * FROM korisnici WHERE email = '" . $_GET['idKorisnik'] . "'";
        $rsKorisnik = $bp->selectDB($korisnikUpit);

        while ($row = $rsKorisnik->fetch_assoc()) {
            $id = $row["id_korisnik"];
        }

        $korisnikDolasci = "SELECT opis_napredovanja, datum_dolaska FROM dolazak d, korisnik_dolazak kd, program_dolazak dp WHERE " .
                " '" . $id . "' = kd.id_korisnik AND " .
                " kd.id_dolazak = d.id_dolazak AND " .
                " dp.id_program = '" . $_GET['idProgram'] . "' AND " .
                " dp.id_dolazak = kd.id_dolazak";
        $rsKorisnikDolasci = $bp->selectDB($korisnikDolasci);

        $podaci = array();

        while (($row = mysqli_fetch_array($rsKorisnikDolasci, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }

        $korisnikNeDolasci = "SELECT opis_napredovanja, datum_nedolaska FROM nedolazak d, korisnik_nedolazak kd, program_nedolazak dp WHERE " .
                " '" . $id . "' = kd.id_korisnik AND " .
                " kd.id_nedolazak = d.id_nedolaska AND " .
                " dp.id_program = '" . $_GET['idProgram'] . "' AND " .
                " dp.id_nedolazak = kd.id_nedolazak";
        $rsKorisnikNeDolasci = $bp->selectDB($korisnikNeDolasci);

        $podaci2 = array();

        while (($row = mysqli_fetch_array($rsKorisnikNeDolasci, MYSQLI_ASSOC)) != false) {
            $podaci2[] = $row;
        }


        $smarty->assign('program', $_GET['idProgram']);
        $smarty->assign('korisnik', $id);
        $smarty->assign('podaci', $podaci);
        $smarty->assign('podaci2', $podaci2);
        $smarty->display('templates/moderator_evidencija_korisnika_header.tpl');
        $smarty->display('templates/moderator_evidencija_korisnika_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    header("Location: prijava.php");
}
?>

