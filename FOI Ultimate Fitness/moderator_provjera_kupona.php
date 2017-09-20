<?php

include './smartyHeader.php';
include("./sesija.class.php");

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] === "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {

        if (isset($_POST['kodSubmit'])) {
            require './baza.class.php';
            $bp = new Baza();
            $bp->spojiDB();

            if ($bp->pogreskaDB()) {
                echo "Problem kod upita na bazu!";
                exit;
            }

            $upitKod = "SELECT id_kod FROM korisnik_kodovi_kupona WHERE kod = '" . $_POST['kod'] . "'";
            $rs = $bp->selectDB($upitKod);

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

            if (mysqli_num_rows($rs) > 0) {
                $smarty->assign('dobar', '<a>Uneseni kod kupona je ispravan/postoji!</a>');
                $smarty->assign('error', '<a></a>');
                $upitDnevnik = "INSERT INTO dnevnik " .
                        " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                        " VALUES (default, '" . $id2 . "' , '" . $kIme . "' , 'Uspjesna provjera kupona.', '" . $vrijemeS . "')";
                $bp->updateDB($upitDnevnik);
            } else {
                $smarty->assign('error', '<a>Uneseni kod kupona je neispravan/nepostoji!</a>');
                $smarty->assign('dobar', '<a></a>');
                $upitDnevnik = "INSERT INTO dnevnik " .
                        " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                        " VALUES (default, '" . $id2 . "' , '" . $kIme . "' , 'Neuspjesna provjera kupona.', '" . $vrijemeS . "')";
                $bp->updateDB($upitDnevnik);
            }

            $smarty->display('templates/moderator_provjera_kupona_header.tpl');
            $smarty->display('templates/moderator_provjera_kupona_body.tpl');
            $smarty->display('templates/_footer.tpl');

            $bp->zatvoriDB();
        } else {
            $smarty->assign('dobar', '<a></a>');
            $smarty->assign('error', '<a></a>');
            $smarty->display('templates/moderator_provjera_kupona_header.tpl');
            $smarty->display('templates/moderator_provjera_kupona_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
    }
} else {
    header("Location: prijava.php");
}
?>