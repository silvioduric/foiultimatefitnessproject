<?php

include './smartyHeader.php';
include("./sesija.class.php");

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] === "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        $smarty->display('templates/index_moderator_header.tpl');
        $smarty->display('templates/index_moderator_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
}
?>

