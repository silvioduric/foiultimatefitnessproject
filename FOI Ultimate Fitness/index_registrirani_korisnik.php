<?php

include './smartyHeader.php';
include("./sesija.class.php");

$smarty->display('templates/index_registrirani_korisnik_header.tpl');
$smarty->display('templates/index_registrirani_korisnik_body.tpl');
$smarty->display('templates/_footer.tpl');

?>

