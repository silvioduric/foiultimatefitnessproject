<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
        $program = $_GET["idProgram"];
        
        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $programiUpit = "SELECT * FROM programi_vjezbanja WHERE id_program = '".$program."'";
        $rs = $bp->selectDB($programiUpit);

        $podaci = array();

        while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }
        
        $mjestaUpit = "SELECT * FROM korisnik_program_vjezbanja WHERE id_program_vjezbanja = '".$program."'";
        $rs2 = $bp->selectDB($mjestaUpit);
        
        $brojZauzatih = mysqli_num_rows($rs2);
        
        $korisnikUpit = "SELECT * FROM korisnici WHERE korisnicko_ime = '".$_SESSION["korisnik"]."'";
        $rs3 = $bp->selectDB($korisnikUpit);

         while ($row = $rs3->fetch_assoc()) {
                $id = $row["id_korisnik"];
            }
            
        $prijavljenUpit = "SELECT * FROM korisnik_program_vjezbanja WHERE id_korisnik = '".$id."' AND id_program_vjezbanja = '".$program."'";
        $rs4 = $bp->selectDB($prijavljenUpit);
        
        $prijavljenBrojac = mysqli_num_rows($rs4);
        
        $smarty->assign('brojZauzatih', $brojZauzatih);
        $smarty->assign('prijavljen', $prijavljenBrojac);
        $smarty->assign('podaci', $podaci);
        $smarty->display('templates/registrirani_korisnik_aktivni_programi_detalji_header.tpl');
        $smarty->display('templates/registrirani_korisnik_aktivni_programi_detalji_body.tpl');
        $smarty->display('templates/_footer.tpl');
} else {
    header("Location: prijava.php");
}

?>