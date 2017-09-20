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
        if (isset($_POST['submitPretraga'])) {
            $bp = new Baza();
            $bp->spojiDB();

            if ($bp->pogreskaDB()) {
                echo "Problem kod upita na bazu!";
                exit;
            }

            $dnevnikUpit = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik WHERE naziv_korisnik = '" . $_POST['moderator'] . "'";
            $rsDnevnik = $bp->selectDB($dnevnikUpit);


            $podaci = array();

            while (($row = mysqli_fetch_array($rsDnevnik, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }
            
            $smarty->assign('broj', 0);
            $smarty->assign('podaci', $podaci);
            $smarty->display('templates/admin_dnevnik_header.tpl');
            $smarty->display('templates/admin_dnevnik_body.tpl');
            $smarty->display('templates/_footer.tpl');
        } else {
            if (isset($_GET['page'])) {
                $stranica = $_GET['page'];
                if ($stranica == "" || $stranica == "1") {
                    $bp = new Baza();
                    $bp->spojiDB();

                    if ($bp->pogreskaDB()) {
                        echo "Problem kod upita na bazu!";
                        exit;
                    }

                    $dnevnikUpit = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik LIMIT 0,5";
                    $rsDnevnik = $bp->selectDB($dnevnikUpit);

                    $podaci = array();

                    while (($row = mysqli_fetch_array($rsDnevnik, MYSQLI_ASSOC)) != false) {
                        $podaci[] = $row;
                    }


                    $dnevnikUpit1 = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik";
                    $rsDnevnik1 = $bp->selectDB($dnevnikUpit1);


                    $brojStranica = mysqli_num_rows($rsDnevnik1);
                    $brojPodijeli = $brojStranica / 5;
                    $zaokruzi = ceil($brojPodijeli);

                    $smarty->assign('broj', $zaokruzi);
                    $smarty->assign('podaci', $podaci);
                    $smarty->display('templates/admin_dnevnik_header.tpl');
                    $smarty->display('templates/admin_dnevnik_body.tpl');
                    $smarty->display('templates/_footer.tpl');
                } else {
                    $bp = new Baza();
                    $bp->spojiDB();

                    if ($bp->pogreskaDB()) {
                        echo "Problem kod upita na bazu!";
                        exit;
                    }

                    $str = ($stranica * 5) - 5;

                    $dnevnikUpit = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik LIMIT $str,5";
                    $rsDnevnik = $bp->selectDB($dnevnikUpit);

                    $podaci = array();

                    while (($row = mysqli_fetch_array($rsDnevnik, MYSQLI_ASSOC)) != false) {
                        $podaci[] = $row;
                    }


                    $dnevnikUpit1 = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik";
                    $rsDnevnik1 = $bp->selectDB($dnevnikUpit1);


                    $brojStranica = mysqli_num_rows($rsDnevnik1);
                    $brojPodijeli = $brojStranica / 5;
                    $zaokruzi = ceil($brojPodijeli);

                    $smarty->assign('broj', $zaokruzi);
                    $smarty->assign('podaci', $podaci);
                    $smarty->display('templates/admin_dnevnik_header.tpl');
                    $smarty->display('templates/admin_dnevnik_body.tpl');
                    $smarty->display('templates/_footer.tpl');
                }
            } else {
                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $dnevnikUpit = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik LIMIT 0,5";
                $rsDnevnik = $bp->selectDB($dnevnikUpit);

                $podaci = array();

                while (($row = mysqli_fetch_array($rsDnevnik, MYSQLI_ASSOC)) != false) {
                    $podaci[] = $row;
                }


                $dnevnikUpit1 = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik";
                $rsDnevnik1 = $bp->selectDB($dnevnikUpit1);


                $brojStranica = mysqli_num_rows($rsDnevnik1);
                $brojPodijeli = $brojStranica / 5;
                $zaokruzi = ceil($brojPodijeli);

                $smarty->assign('broj', $zaokruzi);
                $smarty->assign('podaci', $podaci);
                $smarty->display('templates/admin_dnevnik_header.tpl');
                $smarty->display('templates/admin_dnevnik_body.tpl');
                $smarty->display('templates/_footer.tpl');
            }
        }
    }
} else {
    header("Location: prijava.php");
}




/*
            if (isset($_POST['submitPretraga'])) {
                if (isset($_GET['get'])) {
                    $stranica = $_GET['page'];
                    if ($stranica == "" || $stranica == "1") {
                    $bp = new Baza();
                    $bp->spojiDB();

                    if ($bp->pogreskaDB()) {
                        echo "Problem kod upita na bazu!";
                        exit;
                    }

                    $dnevnikUpit = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik WHERE naziv_korisnik = '" . $_POST['moderator'] . "' LIMIT 0,5";
                    $rsDnevnik = $bp->selectDB($dnevnikUpit);


                    $podaci = array();

                    while (($row = mysqli_fetch_array($rsDnevnik, MYSQLI_ASSOC)) != false) {
                        $podaci[] = $row;
                    }


                    $dnevnikUpit1 = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik WHERE naziv_korisnik = '" . $_POST['moderator'] . "'";
                    $rsDnevnik1 = $bp->selectDB($dnevnikUpit1);


                    $brojStranica = mysqli_num_rows($rsDnevnik1);
                    $brojPodijeli = $brojStranica / 5;
                    $zaokruzi = ceil($brojPodijeli);

                    $smarty->assign('str', $stranica);
                    $smarty->assign('broj', $zaokruzi);
                    $smarty->assign('podaci', $podaci);
                    $smarty->display('templates/admin_dnevnik_header.tpl');
                    $smarty->display('templates/admin_dnevnik_body.tpl');
                    $smarty->display('templates/_footer.tpl');
                } else {
                    
                }
                    
                } else {
                    
                }
                
            } else {
                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $dnevnikUpit = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik LIMIT 0,5";
                $rsDnevnik = $bp->selectDB($dnevnikUpit);


                $podaci = array();

                while (($row = mysqli_fetch_array($rsDnevnik, MYSQLI_ASSOC)) != false) {
                    $podaci[] = $row;
                }

                $dnevnikUpit1 = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik";
                $rsDnevnik1 = $bp->selectDB($dnevnikUpit1);

                $brojStranica = mysqli_num_rows($rsDnevnik1);
                $brojPodijeli = $brojStranica / 5;
                $zaokruzi = ceil($brojPodijeli);

                $smarty->assign('str', $stranica);
                $smarty->assign('broj', $zaokruzi);
                $smarty->assign('podaci', $podaci);
                $smarty->display('templates/admin_dnevnik_header.tpl');
                $smarty->display('templates/admin_dnevnik_body.tpl');
                $smarty->display('templates/_footer.tpl');
            } else {
                if (isset($_POST['submitPretraga'])) {
                    $bp = new Baza();
                    $bp->spojiDB();

                    if ($bp->pogreskaDB()) {
                        echo "Problem kod upita na bazu!";
                        exit;
                    }

                    $str = ($stranica * 5) - 5;

                    $dnevnikUpit = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik WHERE naziv_korisnik = '" . $_POST['moderator'] . "' LIMIT $str,5";
                    $rsDnevnik = $bp->selectDB($dnevnikUpit);

                    $podaci = array();

                    while (($row = mysqli_fetch_array($rsDnevnik, MYSQLI_ASSOC)) != false) {
                        $podaci[] = $row;
                    }


                    $dnevnikUpit1 = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik WHERE naziv_korisnik = '" . $_POST['moderator'] . "'";
                    $rsDnevnik1 = $bp->selectDB($dnevnikUpit1);

                    $brojStranica = mysqli_num_rows($rsDnevnik1);
                    $brojPodijeli = $brojStranica / 5;
                    $zaokruzi = ceil($brojPodijeli);

                    $smarty->assign('str', $stranica);
                    $smarty->assign('str', $stranica);
                    $smarty->assign('broj', $zaokruzi);
                    $smarty->assign('podaci', $podaci);
                    $smarty->display('templates/admin_dnevnik_header.tpl');
                    $smarty->display('templates/admin_dnevnik_body.tpl');
                    $smarty->display('templates/_footer.tpl');
                } else {
                    $bp = new Baza();
                    $bp->spojiDB();

                    if ($bp->pogreskaDB()) {
                        echo "Problem kod upita na bazu!";
                        exit;
                    }

                    $str = ($stranica * 5) - 5;

                    $dnevnikUpit = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik LIMIT $str,5";
                    $rsDnevnik = $bp->selectDB($dnevnikUpit);


                    $podaci = array();

                    while (($row = mysqli_fetch_array($rsDnevnik, MYSQLI_ASSOC)) != false) {
                        $podaci[] = $row;
                    }

                    $dnevnikUpit1 = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik";
                    $rsDnevnik1 = $bp->selectDB($dnevnikUpit1);

                    $brojStranica = mysqli_num_rows($rsDnevnik1);
                    $brojPodijeli = $brojStranica / 5;
                    $zaokruzi = ceil($brojPodijeli);

                    $smarty->assign('str', $stranica);
                    $smarty->assign('broj', $zaokruzi);
                    $smarty->assign('podaci', $podaci);
                    $smarty->display('templates/admin_dnevnik_header.tpl');
                    $smarty->display('templates/admin_dnevnik_body.tpl');
                    $smarty->display('templates/_footer.tpl');
                }
            }
        } else {
            $bp = new Baza();
            $bp->spojiDB();

            if ($bp->pogreskaDB()) {
                echo "Problem kod upita na bazu!";
                exit;
            }

            $dnevnikUpit = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik LIMIT 0,5";
            $rsDnevnik = $bp->selectDB($dnevnikUpit);


            $podaci = array();

            while (($row = mysqli_fetch_array($rsDnevnik, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }

            $dnevnikUpit1 = "SELECT id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja FROM dnevnik";
            $rsDnevnik1 = $bp->selectDB($dnevnikUpit1);

            $brojStranica = mysqli_num_rows($rsDnevnik1);
            $brojPodijeli = $brojStranica / 5;
            $zaokruzi = ceil($brojPodijeli);

            $smarty->assign('str', '');
            $smarty->assign('broj', $zaokruzi);
            $smarty->assign('podaci', $podaci);
            $smarty->display('templates/admin_dnevnik_header.tpl');
            $smarty->display('templates/admin_dnevnik_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
    }
} 
?>

*/