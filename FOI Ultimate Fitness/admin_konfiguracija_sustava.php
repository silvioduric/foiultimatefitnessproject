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
        $url = "http://barka.foi.hr/WebDiP/pomak_vremena/pomak.php?format=xml";

        if (!($fp = fopen($url, 'r'))) {
            $smarty->assign('error', 'Problem: nije moguce otvoriti url virtualnog vremena');
            exit();
        }

        $xml_string = fread($fp, 10000);
        fclose($fp);

        $domdoc = new DOMDocument;
        $domdoc->loadXML($xml_string);

        $params = $domdoc->getElementsByTagName('brojSati');
        $sati = 0;

        if ($params != NULL) {
            $sati = $params->item(0)->nodeValue;
        }

        $vrijemeServera = time();
        $vrijemeSustava = $vrijemeServera + ($sati * 60 * 60);

        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }
        
        $insertVrijeme = "UPDATE virtualno_vrijeme SET vrijeme = '".$sati."' WHERE id_vrijeme = 1";
        $bp->updateDB($insertVrijeme);

        $smarty->assign('vrijemeServera', $vrijemeServera);
        $smarty->assign('vrijemeSustava', $vrijemeSustava);
        $smarty->assign('error', '');
        $smarty->display('templates/admin_konfiguracija_sustava_header.tpl');
        $smarty->display('templates/admin_konfiguracija_sustava_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    header("Location: prijava.php");
}
?>
