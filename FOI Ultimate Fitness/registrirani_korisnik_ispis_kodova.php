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
                $kIme = $row["korisnicko_ime"];
            }

            $selectKorisnikKod = "SELECT kod FROM korisnik_kodovi_kupona WHERE id_korisnik = '" . $id . "' LIMIT 0,5";
            $rsKodovi = $bp->selectDB($selectKorisnikKod);

            $podaci = array();

            while (($row = mysqli_fetch_array($rsKodovi, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }

            $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
            $rsVirtualno = $bp->selectDB($selectVirtualno);

            while ($row = $rsVirtualno->fetch_assoc()) {
                $pomak = $row['vrijeme'];
            }

            $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

            $upitDnevnik = "INSERT INTO dnevnik " .
                    " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                    " VALUES (default, '" . $id . "' , '" . $kIme . "' , 'Ispis kodova kupljenih kupona.', '" . $vrijemeS . "')";
            $bp->updateDB($upitDnevnik);

            $selectKorisnikKod1 = "SELECT kod FROM korisnik_kodovi_kupona WHERE id_korisnik = '" . $id . "'";
            $rsKodovi = $bp->selectDB($selectKorisnikKod1);

            $brojStranica = mysqli_num_rows($rsKodovi);
            $brojPodijeli = $brojStranica / 5;
            $zaokruzi = ceil($brojPodijeli);

            $smarty->assign('broj', $zaokruzi);
            $smarty->assign('podaci', $podaci);
            $smarty->display('templates/registrirani_korisnik_ispis_kodova_header.tpl');
            $smarty->display('templates/registrirani_korisnik_ispis_kodova_body.tpl');
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
                $kIme = $row["korisnicko_ime"];
            }

            $str = ($stranica * 5) - 5;

            $selectKorisnikKod = "SELECT kod FROM korisnik_kodovi_kupona WHERE id_korisnik = '" . $id . "' LIMIT $str,5";
            $rsKodovi = $bp->selectDB($selectKorisnikKod);

            $podaci = array();

            while (($row = mysqli_fetch_array($rsKodovi, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }

            $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
            $rsVirtualno = $bp->selectDB($selectVirtualno);

            while ($row = $rsVirtualno->fetch_assoc()) {
                $pomak = $row['vrijeme'];
            }

            $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

            $upitDnevnik = "INSERT INTO dnevnik " .
                    " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                    " VALUES (default, '" . $id . "' , '" . $kIme . "' , 'Ispis kodova kupljenih kupona.', '" . $vrijemeS . "')";
            $bp->updateDB($upitDnevnik);

            $selectKorisnikKod1 = "SELECT kod FROM korisnik_kodovi_kupona WHERE id_korisnik = '" . $id . "'";
            $rsKodovi = $bp->selectDB($selectKorisnikKod1);

            $brojStranica = mysqli_num_rows($rsKodovi);
            $brojPodijeli = $brojStranica / 5;
            $zaokruzi = ceil($brojPodijeli);

            $smarty->assign('broj', $zaokruzi);
            $smarty->assign('podaci', $podaci);
            $smarty->display('templates/registrirani_korisnik_ispis_kodova_header.tpl');
            $smarty->display('templates/registrirani_korisnik_ispis_kodova_body.tpl');
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
            $kIme = $row["korisnicko_ime"];
        }

        $selectKorisnikKod = "SELECT kod FROM korisnik_kodovi_kupona WHERE id_korisnik = '" . $id . "' LIMIT 0,5";
        $rsKodovi = $bp->selectDB($selectKorisnikKod);

        $podaci = array();

        while (($row = mysqli_fetch_array($rsKodovi, MYSQLI_ASSOC)) != false) {
            $podaci[] = $row;
        }

        $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
        $rsVirtualno = $bp->selectDB($selectVirtualno);

        while ($row = $rsVirtualno->fetch_assoc()) {
            $pomak = $row['vrijeme'];
        }

        $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

        $upitDnevnik = "INSERT INTO dnevnik " .
                " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                " VALUES (default, '" . $id . "' , '" . $kIme . "' , 'Ispis kodova kupljenih kupona.', '" . $vrijemeS . "')";
        $bp->updateDB($upitDnevnik);

        $selectKorisnikKod1 = "SELECT kod FROM korisnik_kodovi_kupona WHERE id_korisnik = '" . $id . "'";
        $rsKodovi = $bp->selectDB($selectKorisnikKod1);

        $brojStranica = mysqli_num_rows($rsKodovi);
        $brojPodijeli = $brojStranica / 5;
        $zaokruzi = ceil($brojPodijeli);

        $smarty->assign('broj', $zaokruzi);
        $smarty->assign('podaci', $podaci);
        $smarty->display('templates/registrirani_korisnik_ispis_kodova_header.tpl');
        $smarty->display('templates/registrirani_korisnik_ispis_kodova_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    header("Location: prijava.php");
}
?>
