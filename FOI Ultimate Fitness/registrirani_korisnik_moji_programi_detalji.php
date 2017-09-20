<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $idProgram = $_GET['idProgram'];

        $korisnikUpit = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
        $rsKorisnik = $bp->selectDB($korisnikUpit);

        while ($row = $rsKorisnik->fetch_assoc()) {
            $id = $row["id_korisnik"];
        }

        $korisnikDolasci = "SELECT opis_napredovanja, datum_dolaska FROM dolazak d, korisnik_dolazak kd, program_dolazak dp WHERE " .
                " '" . $id . "' = kd.id_korisnik AND " .
                " kd.id_dolazak = d.id_dolazak AND " .
                " dp.id_program = '" . $idProgram . "' AND " .
                " dp.id_dolazak = kd.id_dolazak";
        $rsKorisnikDolasci = $bp->selectDB($korisnikDolasci);

        $podaciDolasci = array();

        while (($row = mysqli_fetch_array($rsKorisnikDolasci, MYSQLI_ASSOC)) != false) {
            $podaciDolasci[] = $row;
        }


        $korisnikNeDolasci = "SELECT opis_napredovanja, datum_nedolaska FROM nedolazak d, korisnik_nedolazak kd, program_nedolazak dp WHERE " .
                " '" . $id . "' = kd.id_korisnik AND " .
                " kd.id_nedolazak = d.id_nedolaska AND " .
                " dp.id_program = '" . $_GET['idProgram'] . "' AND " .
                " dp.id_nedolazak = kd.id_nedolazak";
        $rsKorisnikNeDolasci = $bp->selectDB($korisnikNeDolasci);

        $podaciNedolasci = array();

        while (($row = mysqli_fetch_array($rsKorisnikNeDolasci, MYSQLI_ASSOC)) != false) {
            $podaciNedolasci[] = $row;
        }

        
        $smarty->assign('program', $idProgram);
        $smarty->assign('podaciDolasci', $podaciDolasci);
        $smarty->assign('podaciNedolasci', $podaciNedolasci);
        $smarty->display('templates/registrirani_korisnik_moji_programi_detalji_header.tpl');
        $smarty->display('templates/registrirani_korisnik_moji_programi_detalji_body.tpl');
        $smarty->display('templates/_footer.tpl');
} else {
    header("Location: prijava.php");
}
?>
