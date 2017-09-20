<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
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
        $email = $row["email"];
        $bodoviKorisnik = $row["bodovi"];
        $kIme = $row["korisnicko_ime"];
        $skupljeni = $row["broj_skupljenih_bodova"];
        $potroseni = $row["broj_potrosenih_bodova"];
    }

    $bodoviSelect = "SELECT * FROM programi_kuponi pk, kosarica k WHERE " .
            " k.id_korisnik = '" . $id . "' AND " .
            " k.id_kupon = pk.id_kupon ";
    $rsBodovi = $bp->selectDB($bodoviSelect);

    $bodovi = array();

    while (($row = mysqli_fetch_assoc($rsBodovi))) {
        $bodovi[] = $row['broj_bodova'];
    }

    $sumaBodova = 0;

    for ($i = 0; $i < sizeof($bodovi); $i++) {
        $sumaBodova = $sumaBodova + (int) $bodovi[$i];
    }

    if ($sumaBodova < $bodoviKorisnik) {

        for ($i = 0; $i < sizeof($bodovi); $i++) {
            $abeceda = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $kod = array();
            $duzina = strlen($abeceda) - 1;
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $duzina);
                $kod[] = $abeceda[$n];
            }
            $kodKupona = implode($kod);

            $insertKod = "INSERT INTO korisnik_kodovi_kupona (id_kod, id_korisnik, kod) " .
                    "  VALUES (default, '" . $id . "', '" . $kodKupona . "')";

            $bp->updateDB($insertKod);

            $mail_to = $email;
            $mail_from = "From: WebDiP_2017@foi.hr";
            $mail_subject = "Kod kupona";
            $mail_body = "Kod kupljenog kupona je '" . $kodKupona . "'";

            mail($mail_to, $mail_subject, $mail_body, $mail_from);
        }

        $noviBodovi = $bodoviKorisnik - $sumaBodova;

        $smanjiBodove = "UPDATE korisnici SET bodovi = '" . $noviBodovi . "' WHERE id_korisnik = '" . $id . "'";
        $bp->updateDB($smanjiBodove);

        $kosaricaPrazni = "DELETE FROM kosarica WHERE id_korisnik = '" . $id . "'";
        $bp->updateDB($kosaricaPrazni);

        $dodaj = $noviBodovi + 10;

        $insertBodovi = "UPDATE korisnici SET bodovi = '" . $dodaj . "' WHERE id_korisnik = '" . $id . "'";
        $bp->updateDB($insertBodovi);

        $dodajSkupljeni = $skupljeni + 10;
        $insertSkupljeni = "UPDATE korisnici SET broj_skupljenih_bodova = '" . $dodajSkupljeni . "' WHERE id_korisnik = '" . $id . "'";
        $bp->updateDB($insertSkupljeni);


        $noviPotroseni = $potroseni + $sumaBodova;
        $insertPotroseni = "UPDATE korisnici SET broj_potrosenih_bodova = '" . $noviPotroseni . "' WHERE id_korisnik = '" . $id . "'";
        $bp->updateDB($insertPotroseni);

        $selectAkcija = "SELECT * FROM korisnik_akcija WHERE id_korisnik = '" . $id . "' AND id_akcije = '" . '3' . "'";
        $rsAkcija = $bp->selectDB($selectAkcija);

        while ($row = $rsAkcija->fetch_assoc()) {
            $akcijaBodovi = $row["skupljeno_bodova"];
        }

        $noviBodoviAkcija = $akcijaBodovi + 10;
        $insertAkcije2 = "UPDATE korisnik_akcija SET skupljeno_bodova = '" . $noviBodoviAkcija . "' WHERE id_korisnik = '" . $id . "' AND id_akcije = '" . '3' . "'";
        $bp->updateDB($insertAkcije2);

        $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
        $rsVirtualno = $bp->selectDB($selectVirtualno);

        while ($row = $rsVirtualno->fetch_assoc()) {
            $pomak = $row['vrijeme'];
        }

        $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));


        $upitDnevnik = "INSERT INTO dnevnik " .
                " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                " VALUES (default, '" . $id . "' , '" . $kIme . "' , 'Obavljena kupovina kupona.', '" . $vrijemeS . "')";
        $bp->updateDB($upitDnevnik);

        $bp->zatvoriDB();

        header("Location: registrirani_korisnik_kosarica_lista.php?bodovi=2");
    } else {
        header("Location: registrirani_korisnik_kosarica_lista.php?bodovi=1");
    }
} else {
    header("Location: prijava.php");
}
?>
