<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        $kupon = $_GET['idKupon'];
        $program = $_GET['idProgram'];
        if (isset($_POST['kuponSubmit'])) {
            if ($_POST['datumOd'] != "" && $_POST['datumDo'] != "" && $_POST['brojBodova'] != "") {

                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $kupon = $_GET['idKupon'];
                $program = $_GET['idProgram'];

                $insertKupon = "INSERT INTO programi_kuponi (id_program, id_kupon, vrijedi_od, vrijedi_do, broj_bodova) " .
                        " VALUES ('" . $program . "', '" . $kupon . "', '" . $_POST['datumOd'] . "',  '" . $_POST['datumDo'] . "', '" . $_POST['brojBodova'] . "')";
                $bp->updateDB($insertKupon);

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
                        " VALUES (default, '" . $id2 . "' , '" . $kIme . "' , 'Kreiran novi kupon za mjesecni program vjezbanja.', '" . $vrijemeS . "')";
                $bp->updateDB($upitDnevnik);

                header("Location: moderator_mjesecni_program.php?idVrsta=0");
            } else {
                $smarty->assign('kupon', $kupon);
                $smarty->assign('program', $program);
                $smarty->assign('error', '<a>*Sve vrijednosti moraju biti unesene!</a>');
                $smarty->display('templates/moderator_kuponi_dodaj_kupon_odabir_header.tpl');
                $smarty->display('templates/moderator_kuponi_dodaj_kupon_odabir_body.tpl');
                $smarty->display('templates/_footer.tpl');
            }
        } else {
            $smarty->assign('error', '<a></a>');
            $smarty->assign('kupon', $kupon);
            $smarty->assign('program', $program);
            $smarty->display('templates/moderator_kuponi_dodaj_kupon_odabir_header.tpl');
            $smarty->display('templates/moderator_kuponi_dodaj_kupon_odabir_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
    }
} else {
    header("Location: prijava.php");
}
?>
