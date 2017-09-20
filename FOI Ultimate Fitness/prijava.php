<?php

require 'baza.class.php';
include './smartyHeader.php';
include("sesija.class.php");

if (Sesija::dajKorisnika() != NULL) {
    Sesija::obrisiSesiju();
}

if (isset($_POST["logSubmit"])) {

    $korisnickoIme = $_POST["korisnicko"];
    $lozinka = $_POST["lozinka"];

    if ($korisnickoIme !== "" && $lozinka !== "") {

        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $upit = "SELECT * FROM korisnici WHERE korisnicko_ime LIKE '" . $korisnickoIme . "' ";
        $rs = $bp->selectDB($upit);

        if (mysqli_num_rows($rs) == 0) {
            $smarty->assign("error", "<a>*Korisnik s unesenim korisnickim imenom ne postoji u bazi!</a>");
        } else {
            while ($row = $rs->fetch_assoc()) {
                $zakljucan = $row["zakljucan"];
                $aktiviran = $row["aktiviran"];
                $lozinkaPost = $row["lozinka"];
                $brojac = $row["brojac"];
                $koraci = $row["broj_koraka"];
                $email = $row["email"];
                $kIme = $row["korisnicko_ime"];
                $id = $row["id_korisnik"];
            }
            if ($zakljucan == 1) {
                $smarty->assign("error", "<a>*Korisnik s ovim korisnickom imenom je zakljucan!</a>");
            } else {
                if ($aktiviran == 0) {
                    $smarty->assign('error', "<a>Ovaj korisnicki racun jos nije aktiviran! Provjerite vas email!</a>");
                } else {
                    if ($lozinkaPost !== $lozinka) {
                        $smarty->assign("error", "<a>*Unijeli ste krivu lozinku!!</a>");
                        $brojac++;
                        $upit3 = "UPDATE korisnici SET brojac = '" . $brojac . "' WHERE korisnicko_ime='" . $korisnickoIme . "'";
                        $bp->selectDB($upit3);
                        if ($brojac == 3) {
                            $smarty->assign("error", "<a>*Nakon 3 pogresna unosa ovaj korisnicki racun je sada zakljucan!!</a>");
                            $upit4 = "UPDATE korisnici SET zakljucan = '" . 1 . "' WHERE korisnicko_ime='" . $korisnickoIme . "'";
                            $bp->selectDB($upit4);
                        }
                    } else {
                        $upit5 = "UPDATE korisnici SET brojac = '" . 0 . "' WHERE korisnicko_ime='" . $korisnickoIme . "'";
                        $bp->selectDB($upit5);
                        if ($koraci == 2) {
                            $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
                            $rsVirtualno = $bp->selectDB($selectVirtualno);

                            while ($row = $rsVirtualno->fetch_assoc()) {
                                $pomak = $row['vrijeme'];
                            }

                            $vrijeme = sha1(date("F j, Y, g:i a"));
                            $trenutno = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));
                            $korisnicko = sha1($korisnickoIme);
                            $kod = sha1($vrijeme . "--" . $korisnicko);
                            $mail_to = $email;
                            $mail_from = "From: WebDiP_2017@foi.hr";
                            $mail_subject = "Kod za autentikaciju";
                            $upit6 = "UPDATE korisnici SET kod_autentikacija = '" . $kod . "' WHERE korisnicko_ime='" . $korisnickoIme . "'";
                            $bp->selectDB($upit6);
                            $upit7 = "UPDATE korisnici SET vrijeme_kod_autentikacija = '" . $trenutno . "' WHERE korisnicko_ime='" . $korisnickoIme . "'";
                            $bp->selectDB($upit7);

                            $mail_body = "Unesite ovaj kod na stranici prijave kako bi ste završili prijavu u dva koraka: " . $kod . "";
                            if (mail($mail_to, $mail_subject, $mail_body, $mail_from)) {
                                header("Location: prijava_drugi_korak.php");
                            } else {
                                $smarty->assign("error", "<a>*Kod nije poslan uspjesno! Ponovite prijavu!</a>");
                            }
                        } else {
                            $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
                            $rsVirtualno = $bp->selectDB($selectVirtualno);

                            while ($row = $rsVirtualno->fetch_assoc()) {
                                $pomak = $row['vrijeme'];
                            }
                            $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

                            $upitDnevnik = "INSERT INTO dnevnik " .
                                    " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                                    " VALUES (default, '" . $id . "' , '" . $kIme . "' , 'Prijava korisnika', '" . $vrijemeS . "')";
                            $bp->updateDB($upitDnevnik);

                            $upit10 = "SELECT naziv_tipa " .
                                    "FROM  tip_korisnika t, korisnik_tip_korisnika ktk " .
                                    "WHERE '" . $id . "' = ktk.id_korisnik " .
                                    "AND ktk.id_tip = t.id_tip ";
                            $rs10 = $bp->selectDB($upit10);

                            while ($row10 = $rs10->fetch_assoc()) {
                                $uloga = $row10["naziv_tipa"];
                            }
                            Sesija::kreirajKorisnika($kIme, $uloga);
                            if ($uloga === "Administrator") {
                                header("Location: index_admin.php");
                            }

                            if ($uloga === "Moderator") {
                                header("Location: index_moderator.php");
                            }

                            if ($uloga === "Obični korisnik") {
                                $selectStatus = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $kIme . "'";
                                $rsStatus = $bp->selectDB($selectStatus);
                                while ($row = $rsStatus->fetch_assoc()) {
                                    $idKorisnik = $row["id_korisnik"];
                                    $bodovi = $row["bodovi"];
                                    $status = $row["status"];
                                    $bodoviSkupljeni = $row["broj_skupljenih_bodova"];
                                }

                                if ($status == 0) {
                                    $noviBodovi = $bodovi + 10;
                                    $insertBodovi = "UPDATE korisnici SET bodovi = '" . $noviBodovi . "' WHERE id_korisnik = '" . $idKorisnik . "'";
                                    $bp->updateDB($insertBodovi);
                                    $upit3 = "UPDATE korisnici SET status = '" . 1 . "' WHERE id_korisnik='" . $id . "'";
                                    $bp->selectDB($upit3);
                                    $noviSkupljeni = $bodoviSkupljeni + 10;
                                    $upitSkupljeni = "UPDATE korisnici SET broj_skupljenih_bodova = '" . $noviSkupljeni . "' WHERE id_korisnik='" . $idKorisnik . "'";
                                    $bp->selectDB($upitSkupljeni);

                                    $insertAkcije = "INSERT INTO korisnik_akcija (id_korisnik, id_akcije, skupljeno_bodova, datum) " .
                                            " VALUES ('" . $idKorisnik . "', '" . '1' . "', '" . '10' . "', '" . $vrijemeS . "')";

                                    $insertAkcije1 = "INSERT INTO korisnik_akcija (id_korisnik, id_akcije, skupljeno_bodova, datum) " .
                                            " VALUES ('" . $idKorisnik . "', '" . '2' . "', '" . '0' . "', '" . $vrijemeS . "')";

                                    $insertAkcije2 = "INSERT INTO korisnik_akcija (id_korisnik, id_akcije, skupljeno_bodova, datum) " .
                                            " VALUES ('" . $idKorisnik . "', '" . '3' . "', '" . '0' . "', '" . $vrijemeS . "')";

                                    $insertAkcije3 = "INSERT INTO korisnik_akcija (id_korisnik, id_akcije, skupljeno_bodova, datum) " .
                                            " VALUES ('" . $idKorisnik . "', '" . '4' . "', '" . '0' . "', '" . $vrijemeS . "')";

                                    $bp->updateDB($insertAkcije);
                                    $bp->updateDB($insertAkcije1);
                                    $bp->updateDB($insertAkcije2);
                                    $bp->updateDB($insertAkcije3);
                                }

                                header("Location: index_registrirani_korisnik.php");
                            }
                        }
                    }
                }
            }
        }
        $smarty->assign("error", "<a></a>");
        $smarty->display('templates/prijava_header.tpl');
        $smarty->display('templates/prijava_body.tpl');
        $smarty->display('templates/_footer.tpl');
    } else {
        $smarty->assign("error", "<a>*Korisnicko ime i lozinka moraju biti uneseni!</a>");
        $smarty->display('templates/prijava_header.tpl');
        $smarty->display('templates/prijava_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    $smarty->assign("error", " ");
    $smarty->display('templates/prijava_header.tpl');
    $smarty->display('templates/prijava_body.tpl');
    $smarty->display('templates/_footer.tpl');
}
?>