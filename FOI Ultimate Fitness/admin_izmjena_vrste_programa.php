<?php

include("./sesija.class.php");
if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Moderator") {
        header("Location: index_moderator.php");
    } elseif ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        if (isset($_POST["programSubmit"])) {
            require './baza.class.php';
            $bp = new Baza();
            $bp->spojiDB();

            if ($bp->pogreskaDB()) {
                echo "Problem kod upita na bazu!";
                exit;
            }

            $id = $_GET["idProgram"];

            $upit = "UPDATE vrste_programa SET opis_vrste_programa = '" . $_POST["program"] . "' WHERE id_vrste_programa LIKE '" . $id . "'";
            $bp->updateDB($upit);

            $upit2 = "SELECT * FROM korisnici WHERE " .
                    " korisnicko_ime = '" . $_POST["moderator"] . "'";
            $rs = $bp->selectDB($upit2);

            while ($row = $rs->fetch_assoc()) {
                $idModerator = $row["id_korisnik"];
            }

            $upit = "UPDATE moderator_vrsta_programa SET id_moderatora = '" . $idModerator . "' WHERE id_vrste LIKE '" . $id . "'";
            $bp->updateDB($upit);

            $selectKorisnik = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
            $rsKorisnik = $bp->selectDB($selectKorisnik);

            while ($row = $rsKorisnik->fetch_assoc()) {
                $id2 = $row["id_korisnik"];
                $kIme = $row["korisnicko_ime"];
            }

            $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
            $rsVirtualno = $bp->selectDB($selectVirtualno);

            while ($row = $rsVirtualno->fetch_assoc()) {
                $pomak = $row['vrijeme'];
            }

            $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

            $upitDnevnik = "INSERT INTO dnevnik " .
                    " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                    " VALUES (default, '" . $id2 . "' , '" . $kIme . "' , 'Izmjenjena je jedna vrsta programa.', '" . $vrijemeS . "')";
            $bp->updateDB($upitDnevnik);

            header("Location: vrste_programa_vjezbanja.php");
        } else {
            require './baza.class.php';
            include './smartyHeader.php';

            $bp = new Baza();
            $bp->spojiDB();

            if ($bp->pogreskaDB()) {
                echo "Problem kod upita na bazu!";
                exit;
            }

            $id = $_GET["idProgram"];

            $upit15 = "SELECT * FROM moderator_vrsta_programa WHERE " .
                    " id_vrste = '" . $id . "' ";
            $rs = $bp->selectDB($upit15);

            while ($row = $rs->fetch_assoc()) {
                $idModerator = $row["id_moderatora"];
            }


            $upit1 = "SELECT id_vrste_programa, opis_vrste_programa, korisnicko_ime " .
                    "FROM korisnici k, vrste_programa v " .
                    " WHERE v.id_vrste_programa = $id AND" .
                    " k.id_korisnik = '" . $idModerator . "'";

            $rs = $bp->selectDB($upit1);
            $podaci = array();

            while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }
            $smarty->assign('podaci', $podaci);
            $smarty->display('templates/admin_izmjena_vrste_programa_header.tpl');
            $smarty->display('templates/admin_izmjena_vrste_programa_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
    }
} else {
    header("Location: prijava.php");
}
?>