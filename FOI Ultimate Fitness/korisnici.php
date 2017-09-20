<?php
include("./sesija.class.php");
require './baza.class.php';
include './smartyHeader.php';

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

        $upitKorisnici = "SELECT ime, prezime, korisnicko_ime, email, lozinka, naziv_tipa, zakljucan " .
                "FROM korisnici k, tip_korisnika t, korisnik_tip_korisnika ktk " .
                " WHERE k.id_korisnik = ktk.id_korisnik " .
                " AND t.id_tip = ktk.id_tip";

        $rs = $bp->selectDB($upitKorisnici);
        $podaci = array();

        while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }

        $smarty->assign('podaci', $podaci);

        $smarty->display('templates/korisnici2_header.tpl');
        $smarty->display('templates/korisnici2_body.tpl');
        $smarty->display('templates/_footer.tpl');

        unset($podaci);

        $bp->zatvoriDB();
    }
} else {
    header("Location: prijava.php");
}
?>


