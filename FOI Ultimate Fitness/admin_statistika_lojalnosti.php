<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

Sesija::kreirajSesiju();

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] === "Obični korisnik") {
        header("Location: index_registriani_korisnik.php");
    } elseif ($_SESSION["uloga"] === "Moderator") {
        header("Location: index_moderator.php");
    } else {
        if (isset($_GET['idVrste'])) {
            if ($_GET['idVrste'] == 1) {
                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $korisnikSkupljeni = "SELECT id_korisnik, ime, prezime, broj_skupljenih_bodova FROM korisnici ORDER BY broj_skupljenih_bodova DESC";
                $rsSkupljeni = $bp->selectDB($korisnikSkupljeni);

                $korisnikBodovi = array();

                while (($row = mysqli_fetch_array($rsSkupljeni, MYSQLI_ASSOC)) != false) {
                    $korisnikBodovi[] = $row;
                }

                $smarty->assign('zastavica', '1');
                $smarty->assign('korisnikBodovi', $korisnikBodovi);
                $smarty->display('templates/admin_statistika_lojalnosti_header.tpl');
                $smarty->display('templates/admin_statistika_lojalnosti_body.tpl');
                $smarty->display('templates/_footer.tpl');
            } elseif ($_GET['idVrste'] == 2) {
                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $korisnikSkupljeni = "SELECT id_korisnik, ime, prezime, broj_skupljenih_bodova FROM korisnici ORDER BY broj_skupljenih_bodova ASC";
                $rsSkupljeni = $bp->selectDB($korisnikSkupljeni);

                $korisnikBodovi = array();

                while (($row = mysqli_fetch_array($rsSkupljeni, MYSQLI_ASSOC)) != false) {
                    $korisnikBodovi[] = $row;
                }

                $smarty->assign('zastavica', '1');
                $smarty->assign('korisnikBodovi', $korisnikBodovi);
                $smarty->display('templates/admin_statistika_lojalnosti_header.tpl');
                $smarty->display('templates/admin_statistika_lojalnosti_body.tpl');
                $smarty->display('templates/_footer.tpl');
            } elseif ($_GET['idVrste'] == 3) {
                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $korisnikSkupljeni = "SELECT id_korisnik, ime, prezime, broj_potrosenih_bodova FROM korisnici ORDER BY broj_potrosenih_bodova DESC";
                $rsSkupljeni = $bp->selectDB($korisnikSkupljeni);

                $korisnikBodovi = array();

                while (($row = mysqli_fetch_array($rsSkupljeni, MYSQLI_ASSOC)) != false) {
                    $korisnikBodovi[] = $row;
                }

                $smarty->assign('zastavica', '2');
                $smarty->assign('korisnikBodovi', $korisnikBodovi);
                $smarty->display('templates/admin_statistika_lojalnosti_header.tpl');
                $smarty->display('templates/admin_statistika_lojalnosti_body.tpl');
                $smarty->display('templates/_footer.tpl');
            } elseif ($_GET['idVrste'] == 4) {
                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $korisnikSkupljeni = "SELECT id_korisnik, ime, prezime, broj_potrosenih_bodova FROM korisnici ORDER BY broj_potrosenih_bodova ASC";
                $rsSkupljeni = $bp->selectDB($korisnikSkupljeni);

                $korisnikBodovi = array();

                while (($row = mysqli_fetch_array($rsSkupljeni, MYSQLI_ASSOC)) != false) {
                    $korisnikBodovi[] = $row;
                }

                $smarty->assign('zastavica', '2');
                $smarty->assign('korisnikBodovi', $korisnikBodovi);
                $smarty->display('templates/admin_statistika_lojalnosti_header.tpl');
                $smarty->display('templates/admin_statistika_lojalnosti_body.tpl');
                $smarty->display('templates/_footer.tpl');
            } elseif ($_GET['idVrste'] == 5) {
                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $korisnikSkupljeni = "SELECT ime, prezime, naziv_akcije, skupljeno_bodova FROM korisnici k, akcije a, korisnik_akcija ka WHERE " .
                        " ka.id_korisnik = k.id_korisnik AND " .
                        " ka.id_akcije = a.id_akcije ORDER BY skupljeno_bodova DESC";
                $rsSkupljeni = $bp->selectDB($korisnikSkupljeni);

                $korisnikBodovi = array();

                while (($row = mysqli_fetch_array($rsSkupljeni, MYSQLI_ASSOC)) != false) {
                    $korisnikBodovi[] = $row;
                }

                $smarty->assign('zastavica', '3');
                $smarty->assign('korisnikBodovi', $korisnikBodovi);
                $smarty->display('templates/admin_statistika_lojalnosti_header.tpl');
                $smarty->display('templates/admin_statistika_lojalnosti_body.tpl');
                $smarty->display('templates/_footer.tpl');
            } elseif ($_GET['idVrste'] == 6) {
                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $korisnikSkupljeni = "SELECT ime, prezime, naziv_akcije, skupljeno_bodova FROM korisnici k, akcije a, korisnik_akcija ka WHERE " .
                        " ka.id_korisnik = k.id_korisnik AND " .
                        " ka.id_akcije = a.id_akcije ORDER BY skupljeno_bodova ASC";
                $rsSkupljeni = $bp->selectDB($korisnikSkupljeni);

                $korisnikBodovi = array();

                while (($row = mysqli_fetch_array($rsSkupljeni, MYSQLI_ASSOC)) != false) {
                    $korisnikBodovi[] = $row;
                }

                $smarty->assign('zastavica', '3');
                $smarty->assign('korisnikBodovi', $korisnikBodovi);
                $smarty->display('templates/admin_statistika_lojalnosti_header.tpl');
                $smarty->display('templates/admin_statistika_lojalnosti_body.tpl');
                $smarty->display('templates/_footer.tpl');
            }
        } else {
            $smarty->assign('zastavica', '0');
            $smarty->display('templates/admin_statistika_lojalnosti_header.tpl');
            $smarty->display('templates/admin_statistika_lojalnosti_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
    }
} else {
    header("Location: prijava.php");
}
?>


