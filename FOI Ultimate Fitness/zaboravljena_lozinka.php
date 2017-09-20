<?php

include './smartyHeader.php';
require 'baza.class.php';

if (isset($_POST["zaboravljenaSubmit"])) {

    $email = $_POST["email"];

    if ($email !== "") {

        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $upit = "SELECT * FROM korisnici WHERE email = '" . $email . "' ";
        $rs = $bp->selectDB($upit);

        if (mysqli_num_rows($rs) == null) {
            $smarty->assign("succes", "");
            $smarty->assign("error", "<a>*Korisnik s unesenim emailom ne postoji u bazi. Pokusajte ponovno!</a>");
        } else {
            while ($row = $rs->fetch_assoc()) {
                $email = $row["email"];
                $id = $row["id_korisnik"];
                $kIme = $row["korisnicko_ime"];
            }

            $abeceda = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $sifra = array();
            $duzina = strlen($abeceda) - 1;
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $duzina);
                $sifra[] = $abeceda[$n];
            }
            $novaSifra = implode($sifra);

            $sol = sha1(time());
            $kriptiranaLozinka = sha1($sol . "--" . $novaSifra);

            $mail_to = $email;
            $mail_from = "From: WebDiP_2017@foi.hr";
            $mail_subject = "Resetiranje lozinke";
            $mail_body = "Vasa nova lozinka je: " . $novaSifra . " ";

            $upit = "UPDATE korisnici SET lozinka = '" . $novaSifra . "' WHERE email='" . $email . "'";
            $bp->selectDB($upit);

            $upit2 = "UPDATE korisnici SET lozinka_kriptirani_oblik = '" . $kriptiranaLozinka . "' WHERE email='" . $email . "'";
            $bp->selectDB($upit2);

            $upitDnevnik = "INSERT INTO dnevnik " .
                    " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                    " VALUES (default, '" . $id . "' , '" . $kIme . "' , 'Promjena zaboravljene lozinke korisnika', '" . date("F j, Y, g:i a") . "')";
            $bp->updateDB($upitDnevnik);

            if (mail($mail_to, $mail_subject, $mail_body, $mail_from)) {
                $smarty->assign("error", "");
                $smarty->assign("succes", "<a>*Uspjesno ste promjenili vasu lozinku!</a>");
                header("Location: prijava.php");
            } else {
                $smarty->assign("succes", "");
                $smarty->assign("error", "<a>*Email nije uspjesno poslan!</a>");
            }
        }

        $smarty->display('templates/zaboravljena_lozinka_header.tpl');
        $smarty->display('templates/zaboravljena_lozinka_body.tpl');
        $smarty->display('templates/_footer.tpl');
    } else {
        $smarty->assign("error", "<a>*Potrebno je unjeti email!</a>");
        $smarty->display('templates/zaboravljena_lozinka_header.tpl');
        $smarty->display('templates/zaboravljena_lozinka_body.tpl');
        $smarty->display('templates/_footer.tpl');
    }
} else {
    $smarty->assign("succes", "");
    $smarty->assign("error", "");
    $smarty->display('templates/zaboravljena_lozinka_header.tpl');
    $smarty->display('templates/zaboravljena_lozinka_body.tpl');
    $smarty->display('templates/_footer.tpl');
}
?>

