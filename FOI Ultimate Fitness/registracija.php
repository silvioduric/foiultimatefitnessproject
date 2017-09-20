<?php

include './smartyHeader.php';

$smarty->assign('aktivnaSkripta', $_SERVER["PHP_SELF"]);

$poruka = "";
$poruka2 = "";

$smarty->assign('poruka', $poruka);
$smarty->assign('poruka2', $poruka2);

$smarty->display('templates/registracija_header.tpl');
$smarty->display('templates/registracija_body.tpl');
$smarty->display('templates/_footer.tpl');
?>

<?php

require 'baza.class.php';
require_once 'recaptchalib.php';

$zastavicaIme = 0;
$zastavicaIme2 = 0;
$zastavicaIme3 = 0;

$zastavicaPrezime = 0;
$zastavicaPrezime2 = 0;
$zastavicaPrezime3 = 0;

$emailZastavica = 0;
$emailZastavica2 = 0;

$lozinkaZastavica = 0;
$lozinkaZastavica2 = 0;

$ponovljenaZastavica = 0;
$ponovljenaZastavica2 = 0;

$recaptchaZastavica = 0;

if (isset($_POST["regSubmit"])) {
    $korisnickoIme = $_POST["korisnicko"];
    if ($_POST["ime"] == "") {
        $zastavicaIme = 1;
    } else {
        $zastavicaIme = 0;
        if (preg_match("/\"|\(|\)|\/|{|}|\'|\#|\\|\!/", $_POST["ime"])) {
            $zastavicaIme2 = 1;
        } else {
            $zastavicaIme2 = 0;
            if (strtoupper($_POST["ime"][0]) == $_POST["ime"][0]) {
                $zastavicaIme3 = 0;
            } else {
                $zastavicaIme3 = 1;
            }
        }
    }

    if ($_POST["prezime"] == "") {
        $zastavicaPrezime = 1;
    } else {
        $zastavicaPrezime = 0;
        if (preg_match("/\"|\(|\)|\/|{|}|\'|\#|\\|\!/", $_POST["prezime"])) {
            $zastavicaPrezime2 = 1;
        } else {
            $zastavicaPrezime2 = 0;
            if (strtoupper($_POST["prezime"][0]) == $_POST["prezime"][0]) {
                $zastavicaPrezime3 = 0;
            } else {
                $zastavicaPrezime3 = 1;
            }
        }
    }

    if ($_POST["email"] == "") {
        $emailZastavica = 1;
    } else {
        $emailZastavica = 0;
        if (preg_match("/\S+@\S+\.\S+/", $_POST["email"]) == false) {
            $emailZastavica2 = 1;
        } else {
            $emailZastavica2 = 0;
        }
    }

    if ($_POST["lozinka"] == "") {
        $lozinkaZastavica = 1;
    } else {
        $lozinkaZastavica = 0;
        if (preg_match("/^(?=(?:.*[A-Z]){2,})(?=(?:.*[a-z]){2,})(?=(?:.*[0-9]){1,})\S{5,15}$/", $_POST["lozinka"]) == false) {
            $lozinkaZastavica2 = 1;
        } else {
            $lozinkaZastavica2 = 0;
        }
    }

    if ($_POST["ponovljena"] == "") {
        $ponovljenaZastavica = 1;
    } else {
        $ponovljenaZastavica = 0;
        if ($_POST["ponovljena"] != $_POST["lozinka"]) {
            $ponovljenaZastavica2 = 1;
        } else {
            $ponovljenaZastavica2 = 0;
        }
    }

    $secret = '6LdPdCMUAAAAAKJUHjnbnUzhPRgpL6R1nAJGTVTT';
    $response = null;
    $reCaptcha = new ReCaptcha($secret);

    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
                $_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]
        );
    }

    if ($response != null && $response->success) {
        $recaptchaZastavica = 0;
    } else {
        $recaptchaZastavica = 1;
    }

    if ($zastavicaIme == 0 && $zastavicaIme2 == 0 && $zastavicaIme3 == 0 && $zastavicaPrezime == 0 && $zastavicaPrezime2 == 0 && $zastavicaPrezime3 == 0 && $emailZastavica == 0 && $emailZastavica2 == 0 && $lozinkaZastavica == 0 && $lozinkaZastavica2 == 0 && $ponovljenaZastavica == 0 && $ponovljenaZastavica2 == 0 && $recaptchaZastavica == 0) {
        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $korak = $_POST["broj_koraka"];
        $lozinka = $_POST["lozinka"];
        $email = $_POST["email"];

        $sol = sha1(time());
        $kriptiranaLozinka = sha1($sol . "--" . $lozinka);

        $vrijeme = sha1(date("F j, Y, g:i a"));
        $korisnicko = sha1($korisnickoIme);
        $aktivacijskiKod = sha1($vrijeme . "--" . $korisnicko);

        $upit = "insert into korisnici " .
                "(id_korisnik, ime, prezime, korisnicko_ime, email, lozinka, lozinka_kriptirani_oblik, broj_koraka, aktivacijski_kod, aktiviran, zakljucan, brojac, kod_autentikacija, vrijeme_kod_autentikacija, status, bodovi) " .
                "values (default ,'" . $_POST["ime"] . "', '" . $_POST["prezime"] . "', '" . $_POST["korisnicko"] . "', '" . $_POST["email"] . "', '" . $_POST["lozinka"] . "', '" . $kriptiranaLozinka . "', '" . $korak . "', '" . $aktivacijskiKod . "', '" . '0' . "', '" . '0' . "', '" . '0' . "', '" . '0' . "', '" . '' . "', '" . '0' . "', '" . '10' . "')";

        $bp->updateDB($upit);
        
        $upitKorisnik = "SELECT * FROM korisnici WHERE korisnicko_ime = '". $_POST['korisnicko'] ."'";
        $rsUpitKorisnici = $bp->selectDB($upitKorisnik);
        
        while ($row = $rsUpitKorisnici->fetch_assoc()) {
                $idTip = $row["id_korisnik"];
            }
            
        $insertTip = "INSERT INTO korisnik_tip_korisnika (id_korisnik, id_tip) VALUES ('". $idTip ."', '". '3' ."')";
        $bp->updateDB($insertTip);
        
        $mail_to = $email;
        $mail_from = "From: WebDiP_2017@foi.hr";
        $mail_subject = "Aktiviranje racuna";
        $link = "http://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x034/aktivacija.php" . "?korisnickoIme=" . $_POST["korisnicko"] . "&key=" . $aktivacijskiKod . "";
        $mail_body = "Za aktivaciju vaseg racuna idite na iduci link: " . $link . " ";

        if (mail($mail_to, $mail_subject, $mail_body, $mail_from)) {
            $poruka = "Čestitamo uspješno ste se registrirali!";
            $poruka2 = "Provjerite vasu email postu kako bi aktivirali vas korisnicki racun!";
        } else {
            $poruka = "Registracija nije uspjesna!";
            $poruka2 = "";
        }
    }
}
?>
