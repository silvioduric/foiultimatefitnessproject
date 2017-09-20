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

            $selectKorisnik = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
            $rsKorisnik = $bp->selectDB($selectKorisnik);

            while ($row = $rsKorisnik->fetch_assoc()) {
                $id = $row["id_korisnik"];
            }

            $str = 0;

            $upitProgrami = "SELECT id_program, naziv_programa, dan_u_tjednu, mjesec, vrijeme FROM programi_vjezbanja pv, korisnik_program_vjezbanja kpv WHERE " .
                    " kpv.id_korisnik = '" . $id . "' AND " .
                    " kpv.id_program_vjezbanja = pv.id_program AND " .
                    " kpv.zabrana = '" . '0' . "' LIMIT 0,5";
            $rsProgrami = $bp->selectDB($upitProgrami);

            $podaci = array();

            while (($row = mysqli_fetch_array($rsProgrami, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }
            
            $upitProgrami1 = "SELECT id_program, naziv_programa, dan_u_tjednu, mjesec, vrijeme FROM programi_vjezbanja pv, korisnik_program_vjezbanja kpv WHERE " .
                    " kpv.id_korisnik = '" . $id . "' AND " .
                    " kpv.id_program_vjezbanja = pv.id_program AND " .
                    " kpv.zabrana = '" . '0' . "'";
            $rsProgrami1 = $bp->selectDB($upitProgrami1);

            $brojStranica = mysqli_num_rows($rsProgrami1);
            $brojPodijeli = $brojStranica / 5;
            $zaokruzi = ceil($brojPodijeli);

            $smarty->assign('broj', $zaokruzi);
            $smarty->assign('podaci', $podaci);
            $smarty->display('templates/registrirani_korisnik_moji_programi_header.tpl');
            $smarty->display('templates/registrirani_korisnik_moji_programi_body.tpl');
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

            $str = ($stranica*5)-5;

            $upitProgrami = "SELECT id_program, naziv_programa, dan_u_tjednu, mjesec, vrijeme FROM programi_vjezbanja pv, korisnik_program_vjezbanja kpv WHERE " .
                    " kpv.id_korisnik = '" . $id . "' AND " .
                    " kpv.id_program_vjezbanja = pv.id_program AND " .
                    " kpv.zabrana = '" . '0' . "' LIMIT $str,5";
            $rsProgrami = $bp->selectDB($upitProgrami);

            $podaci = array();

            while (($row = mysqli_fetch_array($rsProgrami, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }
            
            $upitProgrami1 = "SELECT id_program, naziv_programa, dan_u_tjednu, mjesec, vrijeme FROM programi_vjezbanja pv, korisnik_program_vjezbanja kpv WHERE " .
                    " kpv.id_korisnik = '" . $id . "' AND " .
                    " kpv.id_program_vjezbanja = pv.id_program AND " .
                    " kpv.zabrana = '" . '0' . "'";
            $rsProgrami1 = $bp->selectDB($upitProgrami1);

            $brojStranica = mysqli_num_rows($rsProgrami1);
            $brojPodijeli = $brojStranica / 5;
            $zaokruzi = ceil($brojPodijeli);

            $smarty->assign('broj', $zaokruzi);
            $smarty->assign('podaci', $podaci);
            $smarty->display('templates/registrirani_korisnik_moji_programi_header.tpl');
            $smarty->display('templates/registrirani_korisnik_moji_programi_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
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

        $upitProgrami = "SELECT id_program, naziv_programa, dan_u_tjednu, mjesec, vrijeme FROM programi_vjezbanja pv, korisnik_program_vjezbanja kpv WHERE " .
                " kpv.id_korisnik = '" . $id . "' AND " .
                " kpv.id_program_vjezbanja = pv.id_program AND " .
                " kpv.zabrana = '" . '0' . "' LIMIT 0,5";
        $rsProgrami = $bp->selectDB($upitProgrami);

        $podaci = array();

        while (($row = mysqli_fetch_array($rsProgrami, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }
        
        $upitProgrami1 = "SELECT id_program, naziv_programa, dan_u_tjednu, mjesec, vrijeme FROM programi_vjezbanja pv, korisnik_program_vjezbanja kpv WHERE " .
                " kpv.id_korisnik = '" . $id . "' AND " .
                " kpv.id_program_vjezbanja = pv.id_program AND " .
                " kpv.zabrana = '" . '0' . "'";
        $rsProgrami1 = $bp->selectDB($upitProgrami1);

        $brojStranica = mysqli_num_rows($rsProgrami1);
        $brojPodijeli = $brojStranica / 5;
        $zaokruzi = ceil($brojPodijeli);

        $smarty->assign('broj', $zaokruzi);
        $smarty->assign('podaci', $podaci);
        $smarty->display('templates/registrirani_korisnik_moji_programi_header.tpl');
        $smarty->display('templates/registrirani_korisnik_moji_programi_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    header("Location: prijava.php");
}
?>
