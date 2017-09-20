<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $selectKorisnik = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
        $rsKorisnik = $bp->selectDB($selectKorisnik);

        while ($row = $rsKorisnik->fetch_assoc()) {
            $id = $row["id_korisnik"];
            $bodovi = $row["bodovi"];
        }
        
        $smarty->assign('bodovi', $bodovi);
        $smarty->display('templates/registrirani_korisnik_bodovi_header.tpl');
        $smarty->display('templates/registrirani_korisnik_bodovi_body.tpl');
        $smarty->display('templates/_footer.tpl');
}else{
    header("Location: prijava.php");
}
?>
