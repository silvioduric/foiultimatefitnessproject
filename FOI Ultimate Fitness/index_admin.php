<?php
include './smartyHeader.php';
include("./sesija.class.php");

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] === "Moderator") {
        header("Location: index_moderator.php");
    } elseif ($_SESSION["uloga"] === "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        $smarty->display('templates/index_admin_header.tpl');
        $smarty->display('templates/index_admin_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else { 
    header("Location: prijava.php");
}
?>