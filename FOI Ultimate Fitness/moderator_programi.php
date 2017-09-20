<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_admin.php");
    } else {
        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $upitUlogiran = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
        $rs1 = $bp->selectDB($upitUlogiran);

        while ($row = $rs1->fetch_assoc()) {
            $id = $row["id_korisnik"];
        }

        $upitProgrami = "SELECT id_vrste_programa, opis_vrste_programa " .
                "FROM vrste_programa v, moderator_vrsta_programa m " .
                " WHERE m.id_moderatora = '" . $id . "' AND " .
                " m.id_vrste = v.id_vrste_programa";

        $rs = $bp->selectDB($upitProgrami);
        $podaci = array();

        while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }

        $smarty->assign('podaci', $podaci);

        $smarty->display('templates/moderator_programi_header.tpl');
        $smarty->display('templates/moderator_programi_body.tpl');
        $smarty->display('templates/_footer.tpl');

        unset($podaci);

        $bp->zatvoriDB();
    }
} else {
    header("Location: prijava.php");
}
?>