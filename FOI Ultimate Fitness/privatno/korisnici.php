<?php

require './../baza.class.php';
include './smartyHeader.php';

$bp = new Baza();
$bp->spojiDB();

if ($bp->pogreskaDB()) {
    echo "Problem kod upita na bazu!";
    exit;
}

$upitKorisnici = "SELECT ime, prezime, korisnicko_ime, email, lozinka, naziv_tipa " .
        "FROM korisnici k, tip_korisnika t, korisnik_tip_korisnika ktk " .
        "WHERE k.id_korisnik = ktk.id_korisnik " .
        "AND t.id_tip = ktk.id_tip";

$rs = $bp->selectDB($upitKorisnici);
$podaci = array();

while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
    $podaci[] = $row;
}

$smarty->assign('podaci', $podaci);

$smarty->display('./../templates/korisnici_header.tpl');
$smarty->display('./../templates/korisnici_body.tpl');
$smarty->display('./../templates/_footer.tpl');

unset($podaci);

$bp->zatvoriDB();

?>

