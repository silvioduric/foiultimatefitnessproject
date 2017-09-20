<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } elseif ($_SESSION["uloga"] == "Moderator") {
        header("Location: index_moderator.php");
    } else {

        if (isset($_POST['submitKupon'])) {

            $bp = new Baza();
            $bp->spojiDB();

            if ($bp->pogreskaDB()) {
                echo "Problem kod upita na bazu!";
                exit;
            }

            $namePdf = $_FILES['pdf']['name'];
            $nameSlika = $_FILES['slika']['name'];
            $nameVideo = $_FILES['video']['name'];

            $tmp_name = $_FILES['pdf']['tmp_name'];
            $tmp_name1 = $_FILES['slika']['tmp_name'];
            $tmp_name2 = $_FILES['video']['tmp_name'];

            $positionPdf = strpos($namePdf, ".");
            $positionSlika = strpos($nameSlika, ".");
            $positionVideo = strpos($nameVideo, ".");

            $fileextensionPdf = substr($namePdf, $positionPdf + 1);
            $fileextensionSlika = substr($nameSlika, $positionSlika + 1);
            $fileextensionVideo = substr($nameVideo, $positionVideo + 1);

            $fileextensionPdf = strtolower($fileextensionPdf);
            $fileextensionSlika = strtolower($fileextensionSlika);
            $fileextensionVideo = strtolower($fileextensionVideo);

            $nazivKupona = $_POST['nazivKupona'];

            if (isset($namePdf)) {

                $pathSlike = './upload/slike/';
                $pathPdf = './upload/pdf/';
                $pathVideo = './upload/video/';

                if (!empty($namePdf)) {
                    if (move_uploaded_file($tmp_name, $pathPdf . $namePdf)) {
                        //echo 'Uploaded!';
                    }
                    if (move_uploaded_file($tmp_name1, $pathSlike . $nameSlika)) {
                        //echo 'Uploaded!';
                    }
                    if (move_uploaded_file($tmp_name2, $pathVideo . $nameVideo)) {
                        //echo 'Uploaded!';
                    }
                }
            }

            if (!empty($nazivKupona)) {
                $bp->updateDB("INSERT INTO kuponi (id_kupona, naziv_kupona, pdf, slika, video) VALUES (default, '" . $nazivKupona . "', '" . $namePdf . "' , '" . $nameSlika . "', '" . $nameVideo . "')");
            }

            $selectKorisnik = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
            $rsKorisnik = $bp->selectDB($selectKorisnik);

            while ($row = $rsKorisnik->fetch_assoc()) {
                $id = $row["id_korisnik"];
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
                    " VALUES (default, '" . $id . "' , '" . $kIme . "' , 'Dodan je novi kupon.', '" . $vrijemeS . "')";
            $bp->updateDB($upitDnevnik);

            $bp->zatvoriDB();

            header("Location: admin_kuponi_upload.php");
        } else {
            $smarty->display('templates/admin_kuponi_upload_dodaj_kupon_header.tpl');
            $smarty->display('templates/admin_kuponi_upload_dodaj_kupon_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
    }
} else {
    header("Location: prijava.php");
}
?>


