<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
        if ($_GET['bodovi'] == 1) {
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
            }

            $upitKuponi = "SELECT id_kupona, naziv_kupona, pdf, slika FROM kuponi k, kosarica ks WHERE " .
                    " ks.id_korisnik = '" . $id . "' AND " .
                    " ks.id_kupon = k.id_kupona";
            $rsUpitKuponi = $bp->selectDB($upitKuponi);

            $podaci = array();

            while (($row = mysqli_fetch_array($rsUpitKuponi, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }
            
            $smarty->assign('dobar', "<a></a>");
            $smarty->assign('nema', "<a>*Nemate dovoljno bodova da kupite odabrane kupone!</a>");
            $smarty->assign('podaci', $podaci);
            $smarty->assign('korisnik', $id);
            $smarty->display('templates/registrirani_korisnik_kosarica_lista_header.tpl');
            $smarty->display('templates/registrirani_korisnik_kosarica_lista_body.tpl');
            $smarty->display('templates/_footer.tpl');
        } elseif ($_GET['bodovi'] == 2) {
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
            }

            $upitKuponi = "SELECT id_kupona, naziv_kupona, pdf, slika FROM kuponi k, kosarica ks WHERE " .
                    " ks.id_korisnik = '" . $id . "' AND " .
                    " ks.id_kupon = k.id_kupona";
            $rsUpitKuponi = $bp->selectDB($upitKuponi);

            $podaci = array();

            while (($row = mysqli_fetch_array($rsUpitKuponi, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }

            $smarty->assign('nema', "<a></a>");
            $smarty->assign('dobar', "<a>Uspjesno ste obavili kupnju kupona! Kodovi kupona su vam poslani na email!</a>");
            $smarty->assign('podaci', $podaci);
            $smarty->assign('korisnik', $id);
            $smarty->display('templates/registrirani_korisnik_kosarica_lista_header.tpl');
            $smarty->display('templates/registrirani_korisnik_kosarica_lista_body.tpl');
            $smarty->display('templates/_footer.tpl');
        } else {
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
            }

            $upitKuponi = "SELECT id_kupona, naziv_kupona, pdf, slika FROM kuponi k, kosarica ks WHERE " .
                    " ks.id_korisnik = '" . $id . "' AND " .
                    " ks.id_kupon = k.id_kupona";
            $rsUpitKuponi = $bp->selectDB($upitKuponi);

            $podaci = array();

            while (($row = mysqli_fetch_array($rsUpitKuponi, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }
            
            $smarty->assign('dobar', "<a></a>");
            $smarty->assign('nema', "<a></a>");
            $smarty->assign('podaci', $podaci);
            $smarty->assign('korisnik', $id);
            $smarty->display('templates/registrirani_korisnik_kosarica_lista_header.tpl');
            $smarty->display('templates/registrirani_korisnik_kosarica_lista_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
} else {
    header("Location: prijava.php");
}
?>
