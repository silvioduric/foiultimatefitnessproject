<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        $program = $_GET['idProgram'];

        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }
        
        $upitKuponiProgram = "SELECT naziv_kupona, pdf, slika FROM kuponi k, programi_kuponi pk WHERE ".
                             " pk.id_program = '".$program."' AND ".
                             " pk.id_kupon = k.id_kupona";
        $rsUpitKuponi = $bp->selectDB($upitKuponiProgram);
        
        $podaci = array();

        while (($row = mysqli_fetch_array($rsUpitKuponi, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }
        
        $smarty->assign('podaci', $podaci);
        $smarty->assign('program', $program);
        $smarty->display('templates/moderator_kuponi_header.tpl');
        $smarty->display('templates/moderator_kuponi_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    header("Location: prijava.php");
}
?>
