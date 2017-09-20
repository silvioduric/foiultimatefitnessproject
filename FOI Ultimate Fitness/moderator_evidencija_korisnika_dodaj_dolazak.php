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

        if (isset($_POST['dolazakSubmit'])) {
            if ($_POST['datum'] != "" && $_POST['opisNapredovanja'] != "") {
                $korisnik = $_GET['idKorisnik'];
                $program = $_GET['idProgram'];

                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $insertDolasci = "INSERT INTO dolazak (id_dolazak, opis_napredovanja, datum_dolaska) " .
                        " VALUES (default, '" . $_POST['opisNapredovanja'] . "', '" . $_POST['datum'] . "')";
                $bp->updateDB($insertDolasci);

                $selectDolazak = "SELECT * FROM dolazak WHERE " .
                        " opis_napredovanja = '" . $_POST['opisNapredovanja'] . "' ";
                $rsDolazak = $bp->selectDB($selectDolazak);

                while ($row = $rsDolazak->fetch_assoc()) {
                    $idDolazak = $row["id_dolazak"];
                }

                $insertKorisnikDolazak = "INSERT INTO korisnik_dolazak (id_korisnik, id_dolazak) " .
                        " VALUES ('" . $korisnik . "', '" . $idDolazak . "')";
                $bp->updateDB($insertKorisnikDolazak);

                $insertProgramDolazak = "INSERT INTO program_dolazak (id_program, id_dolazak) " .
                        " VALUES ('" . $program . "', '" . $idDolazak . "')";
                $bp->updateDB($insertProgramDolazak);

                $selectVrsta = "SELECT * FROM vrsta_programa_program WHERE id_programa = '" . $program . "'";
                $rsVrsta = $bp->selectDB($selectVrsta);

                while ($row = $rsVrsta->fetch_assoc()) {
                    $brojDolazaka = $row["broj_dolazaka"];
                }

                $noviBroj = $brojDolazaka + 1;

                $updateDolasci = "UPDATE vrsta_programa_program SET broj_dolazaka = '" . $noviBroj . "' WHERE id_programa = '" . $program . "'";
                $bp->updateDB($updateDolasci);

                $selectStatus = "SELECT * FROM korisnici WHERE id_korisnik = '" . $korisnik . "'";
                $rsStatus = $bp->selectDB($selectStatus);
                while ($row = $rsStatus->fetch_assoc()) {
                    $bodovi = $row["bodovi"];
                    $bodoviSkupljeni = $row["broj_skupljenih_bodova"];
                }

                $dodaj = $bodovi + 10;

                $insertBodovi = "UPDATE korisnici SET bodovi = '" . $dodaj . "' WHERE id_korisnik = '" . $korisnik . "'";
                $bp->updateDB($insertBodovi);

                $skupljeniNovi = $bodoviSkupljeni + 10;
                $insertBodoviSkupljeni = "UPDATE korisnici SET broj_skupljenih_bodova = '" . $skupljeniNovi . "' WHERE id_korisnik = '" . $korisnik . "'";
                $bp->updateDB($insertBodoviSkupljeni);

                $selectKorisnik = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
                $rsKorisnik = $bp->selectDB($selectKorisnik);

                while ($row = $rsKorisnik->fetch_assoc()) {
                    $id2 = $row["id_korisnik"];
                    $kIme = $row["korisnicko_ime"];
                }

                $selectAkcija = "SELECT * FROM korisnik_akcija WHERE id_korisnik = '" . $korisnik . "' AND id_akcije = '" . '4' . "'";
                $rsAkcija = $bp->selectDB($selectAkcija);

                while ($row = $rsAkcija->fetch_assoc()) {
                    $akcijaBodovi = $row["skupljeno_bodova"];
                }

                $noviBodoviAkcija = $akcijaBodovi + 10;
                $insertAkcije2 = "UPDATE korisnik_akcija SET skupljeno_bodova = '" . $noviBodoviAkcija . "' WHERE id_korisnik = '" . $korisnik . "' AND id_akcije = '" . '4' . "'";
                $bp->updateDB($insertAkcije2);

                $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
                $rsVirtualno = $bp->selectDB($selectVirtualno);

                while ($row = $rsVirtualno->fetch_assoc()) {
                    $pomak = $row['vrijeme'];
                }

                $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

                $upitDnevnik = "INSERT INTO dnevnik " .
                        " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                        " VALUES (default, '" . $id2 . "' , '" . $kIme . "' , 'Dodan dolazak korisniku.', '" . $vrijemeS . "')";
                $bp->updateDB($upitDnevnik);


                header("Location: moderator_mjesecni_program.php?idVrsta=0");
            } else {
                $smarty->assign('korisnik', $korisnik);
                $smarty->assign('program', $program);
                $smarty->assign('error', '<a>*Sve vrijednosti moraju biti unesene!</a>');
                $smarty->display('templates/moderator_evidencija_korisnika_dodaj_dolazak_header.tpl');
                $smarty->display('templates/moderator_evidencija_korisnika_dodaj_dolazak_body.tpl');
                $smarty->display('templates/_footer.tpl');
            }
        } else {
            $smarty->assign('korisnik', $korisnik);
            $smarty->assign('program', $program);
            $smarty->assign('error', '');
            $smarty->display('templates/moderator_evidencija_korisnika_dodaj_dolazak_header.tpl');
            $smarty->display('templates/moderator_evidencija_korisnika_dodaj_dolazak_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
    }
} else {
    header("Location: prijava.php");
}
?>

