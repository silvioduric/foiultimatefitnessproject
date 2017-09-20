<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        $korisnik = $_GET['idKorisnik'];
        $program = $_GET['idProgram'];

        if (isset($_POST['nedolazakSubmit'])) {
            if ($_POST['datum'] != "" && $_POST['razlogNedolaska'] != "") {
                $korisnik = $_GET['idKorisnik'];
                $program = $_GET['idProgram'];

                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $insertNeDolasci = "INSERT INTO nedolazak (id_nedolaska, opis_napredovanja, datum_nedolaska) " .
                        " VALUES (default, '" . $_POST['razlogNedolaska'] . "', '" . $_POST['datum'] . "')";
                $bp->updateDB($insertNeDolasci);

                $selectNeDolazak = "SELECT * FROM nedolazak WHERE " .
                        " opis_napredovanja = '" . $_POST['razlogNedolaska'] . "' ";
                $rsNeDolazak = $bp->selectDB($selectNeDolazak);

                while ($row = $rsNeDolazak->fetch_assoc()) {
                    $idNeDolazak = $row["id_nedolaska"];
                }

                $insertKorisnikNeDolazak = "INSERT INTO korisnik_nedolazak (id_korisnik, id_nedolazak) " .
                        " VALUES ('" . $korisnik . "', '" . $idNeDolazak . "')";
                $bp->updateDB($insertKorisnikNeDolazak);

                $insertProgramNeDolazak = "INSERT INTO program_nedolazak (id_program, id_nedolazak) " .
                        " VALUES ('" . $program . "', '" . $idNeDolazak . "')";
                $bp->updateDB($insertProgramNeDolazak);

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
                        " VALUES (default, '" . $id2 . "' , '" . $kIme . "' , 'Dodan nedolazak korisniku.', '" . $vrijemeS . "')";
                $bp->updateDB($upitDnevnik);

                header("Location: moderator_mjesecni_program.php?idVrsta=0");
            } else {
                $smarty->assign('korisnik', $korisnik);
                $smarty->assign('program', $program);
                $smarty->assign('error', '<a>*Sve vrijednosti moraju biti unesene!</a>');
                $smarty->display('templates/moderator_evidencija_korisnika_dodaj_nedolazak_header.tpl');
                $smarty->display('templates/moderator_evidencija_korisnika_dodaj_nedolazak_body.tpl');
                $smarty->display('templates/_footer.tpl');
            }
        } else {
            $smarty->assign('korisnik', $korisnik);
            $smarty->assign('program', $program);
            $smarty->assign('error', '');
            $smarty->display('templates/moderator_evidencija_korisnika_dodaj_nedolazak_header.tpl');
            $smarty->display('templates/moderator_evidencija_korisnika_dodaj_nedolazak_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
    }
} else {
    header("Location: prijava.php");
}
?>

