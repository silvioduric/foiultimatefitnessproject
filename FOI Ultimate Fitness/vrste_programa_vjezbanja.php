<?php

require './baza.class.php';
include './smartyHeader.php';
include("./sesija.class.php");

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] === "Moderator") {
        header("Location: index_moderator.php");
    } elseif ($_SESSION["uloga"] === "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }


        if (isset($_POST["programSubmit"])) {
            $upitKorisnici = "SELECT id_vrste_programa, opis_vrste_programa, prezime, ime " .
                    "FROM korisnici k, vrste_programa v, moderator_vrsta_programa m " .
                    " WHERE k.id_korisnik = m.id_moderatora AND" .
                    " m.id_vrste = v.id_vrste_programa";

            $rs = $bp->selectDB($upitKorisnici);
            $podaci = array();

            while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }

            if ($_POST['program'] !== "" && $_POST['moderator'] !== "") {
                $upitModerator = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_POST['moderator'] . "'";

                $rs = $bp->selectDB($upitModerator);

                if ((mysqli_num_rows($rs) == 0)) {
                    $smarty->assign("error", "<a>*Korisnik s unesenim korisnickim imenom ne postoji u bazi!</a>");
                    $smarty->assign('podaci', $podaci);

                    $smarty->display('templates/vrste_programa_header.tpl');
                    $smarty->display('templates/vrste_programa_body.tpl');
                    $smarty->display('templates/_footer.tpl');
                } else {
                    $smarty->assign("error", "<a></a>");
                    while ($row = $rs->fetch_assoc()) {
                        $ime = $row['ime'];
                        $id = $row["id_korisnik"];
                    }


                    $upitVrsta = "INSERT INTO vrste_programa " .
                            " (id_vrste_programa, opis_vrste_programa) " .
                            " VALUES (default, '" . $_POST['program'] . "')";
                    $bp->updateDB($upitVrsta);

                    $upitId = "SELECT * FROM vrste_programa " .
                            " WHERE opis_vrste_programa = '" . $_POST['program'] . "'";
                    $rs4 = $bp->selectDB($upitId);

                    while ($row = $rs4->fetch_assoc()) {
                        $id2 = $row["id_vrste_programa"];
                    }

                    $upitVrsta2 = "INSERT INTO moderator_vrsta_programa " .
                            " (id_moderatora, id_vrste) " .
                            " VALUES ($id, $id2)";
                    $bp->updateDB($upitVrsta2);

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
                            " VALUES (default, '" . $id2 . "' , '" . $kIme . "' , 'Kreirana nova vrsta programa vjezbanja.', '" . $vrijemeS . "')";
                    $bp->updateDB($upitDnevnik);

                    header("Location: vrste_programa_vjezbanja.php");
                }
            } else {
                $smarty->assign("error", "<a>*Nisu uneseni svi podaci!</a>");
                $smarty->assign('podaci', $podaci);

                $smarty->display('templates/vrste_programa_header.tpl');
                $smarty->display('templates/vrste_programa_body.tpl');
                $smarty->display('templates/_footer.tpl');
            }
        } else {
            $smarty->assign("error", "<a></a>");
            $upitKorisnici = "SELECT id_vrste_programa, opis_vrste_programa, prezime, ime " .
                    "FROM korisnici k, vrste_programa v, moderator_vrsta_programa m " .
                    " WHERE k.id_korisnik = m.id_moderatora AND" .
                    " m.id_vrste = v.id_vrste_programa";

            $rs = $bp->selectDB($upitKorisnici);
            $podaci = array();

            while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }

            $smarty->assign('podaci', $podaci);

            $smarty->display('templates/vrste_programa_header.tpl');
            $smarty->display('templates/vrste_programa_body.tpl');
            $smarty->display('templates/_footer.tpl');

            unset($podaci);
        }



        $bp->zatvoriDB();
    }
} else {
    header("Location: prijava.php");
}
?>

