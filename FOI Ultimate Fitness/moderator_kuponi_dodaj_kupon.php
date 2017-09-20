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

        $selectKupon = "SELECT id_kupona, slika FROM kuponi";

        $rs = $bp->selectDB($selectKupon);
        $podaci = array();

        while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }

        $smarty->assign('program', $program);
        $smarty->assign('podaci', $podaci);
        $smarty->display('templates/moderator_kuponi_dodaj_kupon_header.tpl');
        $smarty->display('templates/moderator_kuponi_dodaj_kupon_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    header("Location: prijava.php");
}
?>


