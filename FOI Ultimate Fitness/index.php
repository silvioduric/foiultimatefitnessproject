<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

Sesija::kreirajSesiju();

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] === "Administrator") {
        header("Location: index_admin.php");
    } elseif ($_SESSION["uloga"] === "Moderator") {
        header("Location: index_moderator.php");
    }
} else {
    if (isset($_GET['idVrste'])) {
        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }
        
        $idVrstePrograma = $_GET['idVrste'];

        $selectTopTri = "SELECT naziv_programa FROM programi_vjezbanja pv, vrsta_programa_program vpp WHERE " .
                " vpp.id_vrste = '" . $idVrstePrograma . "' AND " .
                " vpp.id_programa = pv.id_program ORDER BY broj_dolazaka DESC LIMIT 3";
        $rsTopTri = $bp->selectDB($selectTopTri);


        $topTri = array();

        while (($row = mysqli_fetch_array($rsTopTri, MYSQLI_ASSOC)) != false) {
            $topTri[] = $row;
        }

        $selectVrsta = "SELECT id_vrste_programa, opis_vrste_programa FROM vrste_programa";
        $rsVrstaPrograma = $bp->selectDB($selectVrsta);

        $vrstePrograma = array();

        while (($row = mysqli_fetch_array($rsVrstaPrograma, MYSQLI_ASSOC)) != false) {
            $vrstePrograma[] = $row;
        }

        $smarty->assign('zastavica', '1');
        $smarty->assign('vrste', $vrstePrograma);
        $smarty->assign('topTri', $topTri);
        $smarty->display('templates/index_header.tpl');
        $smarty->display('templates/index_body.tpl');
        $smarty->display('templates/_footer.tpl');
    } else {
        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $selectVrsta = "SELECT id_vrste_programa, opis_vrste_programa FROM vrste_programa";
        $rsVrstaPrograma = $bp->selectDB($selectVrsta);

        $vrstePrograma = array();

        while (($row = mysqli_fetch_array($rsVrstaPrograma, MYSQLI_ASSOC)) != false) {
            $vrstePrograma[] = $row;
        }

        $smarty->assign('zastavica', '0');
        $smarty->assign('vrste', $vrstePrograma);
        $smarty->display('templates/index_header.tpl');
        $smarty->display('templates/index_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
}
?>


