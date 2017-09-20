<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        $program = $_GET["idProgram"];
        $vrsta = $_GET["idVrsta"];

        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $upitKorisnici = "SELECT ime, prezime, email FROM korisnici k, korisnik_program_vjezbanja kpv WHERE " .
                " kpv.id_program_vjezbanja = '" . $program . "' AND " .
                " kpv.id_korisnik = k.id_korisnik";
        $rs = $bp->selectDB($upitKorisnici);

        $podaci = array();

        while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }

        $upitKorisnik = "SELECT id_korisnik FROM korisnici k, korisnik_program_vjezbanja kpv WHERE " .
                " kpv.id_program_vjezbanja = '" . $program . "' AND " .
                " kpv.id_korisnik = k.id_korisnik";
        $rsKorisnik = $bp->selectDB($upitKorisnik);
        
        $upitZabrana = "SELECT zabrana FROM korisnik_program_vjezbanja WHERE id_korisnik '".$rsKorisnik."' AND id_program_vjezbanja = '".$program."'";
        $rsZabrana = $bp->selectDB($upitZabrana);
        
        
        if($rsZabrana == 1){
            $smarty->assign('zabrana', '1');
        }else{
            $smarty->assign('zabrana', '0');
        }

        $smarty->assign('program', $program);
        $smarty->assign('podaci', $podaci);
        $smarty->assign('vrsta', $vrsta);
        $smarty->display('templates/moderator_mjesecni_program_detalji_header.tpl');
        $smarty->display('templates/moderator_mjesecni_program_detalji_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    header("Location: prijava.php");
}
?>

