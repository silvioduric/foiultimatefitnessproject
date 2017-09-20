<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    $program = $_GET['idProgram'];

    $bp = new Baza();
    $bp->spojiDB();

    if ($bp->pogreskaDB()) {
        echo "Problem kod upita na bazu!";
        exit;
    }

    $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
    $rsVirtualno = $bp->selectDB($selectVirtualno);

    while ($row = $rsVirtualno->fetch_assoc()) {
        $pomak = $row['vrijeme'];
    }

    $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

    $upitKuponiProgram = "SELECT id_kupona, naziv_kupona, pdf, slika FROM kuponi k, programi_kuponi pk, korisnici kr WHERE " .
            " pk.id_program = '" . $program . "' AND " .
            " pk.id_kupon = k.id_kupona AND " .
            " kr.bodovi >= pk.broj_bodova AND " .
            " pk.vrijedi_do > NOW()";
    $rsUpitKuponi = $bp->selectDB($upitKuponiProgram);

    $podaci = array();

    while (($row = mysqli_fetch_array($rsUpitKuponi, MYSQLI_ASSOC)) != false) {
        $podaci[] = $row;
    }

    $smarty->assign('podaci', $podaci);
    $smarty->assign('program', $program);
    $smarty->display('templates/registrirani_korisnik_moji_programi_detalji_kuponi_header.tpl');
    $smarty->display('templates/registrirani_korisnik_moji_programi_detalji_kuponi_body.tpl');
    $smarty->display('templates/_footer.tpl');
} else {
    header("Location: prijava.php");
}
?>
