<?php

include './smartyHeader.php';
require 'baza.class.php';
include("sesija.class.php");

if (Sesija::dajKorisnika() == NULL) {
    $ok = "Korisnik trenutno ne postoji!";
} else {
    header('Location: index.php');
}

if (isset($_POST["potvrdaSubmit"])) {

    $kodPotvrde = $_POST["potvrda"];

    if ($kodPotvrde !== "") {

        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $upit = "SELECT * FROM korisnici WHERE kod_autentikacija = '" . $kodPotvrde . "' ";
        $rs = $bp->selectDB($upit);

        if (mysqli_num_rows($rs) == null) {
            $smarty->assign("error", "<a>*Kod autentikacije nije dobar. Pokusajte ponovno!</a>");
        } else {
            while ($row = $rs->fetch_assoc()) {
                $id = $row["id_korisnik"];
                $zakljucan = $row["zakljucan"];
                $aktiviran = $row["aktiviran"];
                $lozinkaPost = $row["lozinka"];
                $brojac = $row["brojac"];
                $koraci = $row["broj_koraka"];
                $email = $row["email"];
                $vrijeme = $row["vrijeme_kod_autentikacija"];
                $kIme = $row["korisnicko_ime"];
            }

            $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
            $rsVirtualno = $bp->selectDB($selectVirtualno);

            while ($row = $rsVirtualno->fetch_assoc()) {
                $pomak = $row['vrijeme'];
            }

            $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));
            
            $vrijemeSPrijava = date('Y-m-d H:i:s', time() + ($pomak * 5 * 60));
            
            $trenutnoVrijeme = $vrijemeS;
            $datetime1 = strtotime($trenutnoVrijeme);
            $datetime2 = strtotime($vrijeme);

            $razlika = abs($datetime1 - $datetime2);
            $minute = round($razlika / 60);



            if ($vrijemeSPrijava > $vrijeme) {
                $smarty->assign("error", "<a>*Kod autentikacije je istekao. Molimo prijavite se ponovno!</a>");
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
                $smarty->assign("error", "");
                $upit2 = "SELECT naziv_tipa " .
                        " FROM tip_korisnika t, korisnik_tip_korisnika ktk " .
                        " WHERE t.id_tip = ktk.id_tip " .
                        " AND ktk.id_korisnik = '" . $id . "'";
                $rs2 = $bp->selectDB($upit2);

                while ($row2 = $rs2->fetch_assoc()) {
                    $uloga = $row2["naziv_tipa"];
                }
                Sesija::kreirajKorisnika($kIme, $uloga);
                $upit3 = "UPDATE korisnici SET status = '" . 1 . "' WHERE id_korisnik='" . $id . "'";
                $rs2 = $bp->selectDB($upit3);
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
                                " VALUES ('" . $idKorisnik . "', '" . '1' . "', '" . '10' . "', '" . date("F j, Y, g:i a") . "')";

                        $insertAkcije1 = "INSERT INTO korisnik_akcija (id_korisnik, id_akcije, skupljeno_bodova, datum) " .
                                " VALUES ('" . $idKorisnik . "', '" . '2' . "', '" . '0' . "', '" . date("F j, Y, g:i a") . "')";

                        $insertAkcije2 = "INSERT INTO korisnik_akcija (id_korisnik, id_akcije, skupljeno_bodova, datum) " .
                                " VALUES ('" . $idKorisnik . "', '" . '3' . "', '" . '0' . "', '" . date("F j, Y, g:i a") . "')";

                        $insertAkcije3 = "INSERT INTO korisnik_akcija (id_korisnik, id_akcije, skupljeno_bodova, datum) " .
                                " VALUES ('" . $idKorisnik . "', '" . '4' . "', '" . '0' . "', '" . date("F j, Y, g:i a") . "')";

                        $bp->updateDB($insertAkcije);
                        $bp->updateDB($insertAkcije1);
                        $bp->updateDB($insertAkcije2);
                        $bp->updateDB($insertAkcije3);
                    }
                    header("Location: index_registrirani_korisnik.php");
                }
            }
        }

        $smarty->display('templates/prijava_dva_koraka_header.tpl');
        $smarty->display('templates/prijava_dva_koraka_body.tpl');
        $smarty->display('templates/_footer.tpl');
    } else {
        $smarty->assign("error", "<a>*Kod potvrde mora biti unesen!</a>");
        $smarty->display('templates/prijava_dva_koraka_header.tpl');
        $smarty->display('templates/prijava_dva_koraka_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    $smarty->assign("error", " ");
    $smarty->display('templates/prijava_dva_koraka_header.tpl');
    $smarty->display('templates/prijava_dva_koraka_body.tpl');
    $smarty->display('templates/_footer.tpl');
}
?>
