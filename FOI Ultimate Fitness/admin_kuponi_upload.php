<?php

include './smartyHeader.php';
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

        $selectKupon = "SELECT slika FROM kuponi";

        $rs = $bp->selectDB($selectKupon);
        $podaci = array();

        while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }
        
        $smarty->assign('podaci', $podaci);
        $smarty->display('templates/admin_kuponi_header.tpl');
        $smarty->display('templates/admin_kuponi_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    header("Location: prijava.php");
}
?>

