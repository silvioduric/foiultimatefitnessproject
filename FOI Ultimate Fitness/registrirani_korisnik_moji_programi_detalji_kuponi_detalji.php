<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
        $program = $_GET['idProgram'];
        $kupon = $_GET['idKupon'];

        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }
        
        $upitKuponiProgram = "SELECT naziv_kupona, pdf, slika FROM kuponi k, programi_kuponi pk WHERE ".
                             " pk.id_program = '".$program."' AND ".
                             " '".$kupon."' = pk.id_kupon AND ".
                             " pk.id_kupon = k.id_kupona";
        $rsUpitKuponi = $bp->selectDB($upitKuponiProgram);
        
        $podaci = array();

        while (($row = mysqli_fetch_array($rsUpitKuponi, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }
        
        $smarty->assign('kupon', $kupon);
        $smarty->assign('podaci', $podaci);
        $smarty->assign('program', $program);
        $smarty->display('templates/registrirani_korisnik_moji_programi_detalji_kuponi_detalji_header.tpl');
        $smarty->display('templates/registrirani_korisnik_moji_programi_detalji_kuponi_detalji_body.tpl');
        $smarty->display('templates/_footer.tpl');
} else {
    header("Location: prijava.php");
}
?>
