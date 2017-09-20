<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    if (isset($_GET['page'])) {
        $stranica = $_GET['page'];
        if ($stranica == "" || $stranica == "1") {
            $bp = new Baza();
            $bp->spojiDB();

            if ($bp->pogreskaDB()) {
                echo "Problem kod upita na bazu!";
                exit;
            }

            $programiUpit = "SELECT * FROM programi_vjezbanja LIMIT 0,5";
            $rs = $bp->selectDB($programiUpit);

            $podaci = array();

            while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }

            $programiUpit1 = "SELECT * FROM programi_vjezbanja";
            $rs1 = $bp->selectDB($programiUpit1);

            $brojStranica = mysqli_num_rows($rs1);
            $brojPodijeli = $brojStranica / 5;
            $zaokruzi = ceil($brojPodijeli);

            $smarty->assign('broj', $zaokruzi);
            $smarty->assign('podaci', $podaci);
            $smarty->display('templates/registrirani_korisnik_aktivni_programi_header.tpl');
            $smarty->display('templates/registrirani_korisnik_aktivni_programi_body.tpl');
            $smarty->display('templates/_footer.tpl');
        } else {
            $bp = new Baza();
            $bp->spojiDB();

            if ($bp->pogreskaDB()) {
                echo "Problem kod upita na bazu!";
                exit;
            }
            
            $str = ($stranica*5)-5;

            $programiUpit = "SELECT * FROM programi_vjezbanja LIMIT $str,5";
            $rs = $bp->selectDB($programiUpit);

            $podaci = array();

            while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }

            $programiUpit1 = "SELECT * FROM programi_vjezbanja";
            $rs1 = $bp->selectDB($programiUpit1);

            $brojStranica = mysqli_num_rows($rs1);
            $brojPodijeli = $brojStranica / 5;
            $zaokruzi = ceil($brojPodijeli);

            $smarty->assign('broj', $zaokruzi);
            $smarty->assign('podaci', $podaci);
            $smarty->display('templates/registrirani_korisnik_aktivni_programi_header.tpl');
            $smarty->display('templates/registrirani_korisnik_aktivni_programi_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
    } else {
        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $programiUpit = "SELECT * FROM programi_vjezbanja LIMIT 0,5";
        $rs = $bp->selectDB($programiUpit);

        $podaci = array();

        while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }

        $programiUpit1 = "SELECT * FROM programi_vjezbanja";
        $rs1 = $bp->selectDB($programiUpit1);

        $brojStranica = mysqli_num_rows($rs1);
        $brojPodijeli = $brojStranica / 5;
        $zaokruzi = ceil($brojPodijeli);

        $smarty->assign('broj', $zaokruzi);
        $smarty->assign('podaci', $podaci);
        $smarty->display('templates/registrirani_korisnik_aktivni_programi_header.tpl');
        $smarty->display('templates/registrirani_korisnik_aktivni_programi_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    header("Location: prijava.php");
}
?>
