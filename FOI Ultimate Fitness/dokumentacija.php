<?php

require 'baza.class.php';
include './smartyHeader.php';
include("sesija.class.php");

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] === "Administrator") {
        header("Location: index_admin.php");
    } elseif ($_SESSION["uloga"] === "Moderator") {
        header("Location: index_moderator.php");
    }
} else {
    $smarty->display('templates/dokumentacija_header.tpl');
    $smarty->display('templates/dokumentacija_body.tpl');
    $smarty->display('templates/_footer.tpl');
}
?>