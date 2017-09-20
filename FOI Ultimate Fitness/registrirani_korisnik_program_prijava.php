<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    $program = $_GET["idProgram"];

    $bp = new Baza();
    $bp->spojiDB();

    if ($bp->pogreskaDB()) {
        echo "Problem kod upita na bazu!";
        exit;
    }

    $korisnikUpit = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION["korisnik"] . "'";
    $rs = $bp->selectDB($korisnikUpit);

    while ($row = $rs->fetch_assoc()) {
        $id = $row["id_korisnik"];
        $bodovi = $row["bodovi"];
        $kIme = $row["korisnicko_ime"];
        $skupljeni = $row["broj_skupljenih_bodova"];
    }

    $programUpit = "INSERT INTO korisnik_program_vjezbanja (id_korisnik, id_program_vjezbanja) " .
            " VALUES ('" . $id . "', '" . $program . "')";
    $rs2 = $bp->updateDB($programUpit);

    $dodaj = $bodovi + 20;

    $insertBodovi = "UPDATE korisnici SET bodovi = '" . $dodaj . "' WHERE id_korisnik = '" . $id . "'";
    $bp->updateDB($insertBodovi);

    $noviSkupljeni = $skupljeni + 20;
    $insertBodoviSkupljeni = "UPDATE korisnici SET broj_skupljenih_bodova = '" . $noviSkupljeni . "' WHERE id_korisnik = '" . $id . "'";
    $bp->updateDB($insertBodoviSkupljeni);


    $selectAkcija = "SELECT * FROM korisnik_akcija WHERE id_korisnik = '" . $id . "' AND id_akcije = '" . '2' . "'";
    $rsAkcija = $bp->selectDB($selectAkcija);

    while ($row = $rsAkcija->fetch_assoc()) {
        $akcijaBodovi = $row["skupljeno_bodova"];
    }

    $noviBodoviAkcija = $akcijaBodovi + 20;
    $insertAkcije2 = "UPDATE korisnik_akcija SET skupljeno_bodova = '" . $noviBodoviAkcija . "' WHERE id_korisnik = '" . $id . "' AND id_akcije = '" . '2' . "'";
    $bp->updateDB($insertAkcije2);

    $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
    $rsVirtualno = $bp->selectDB($selectVirtualno);

    while ($row = $rsVirtualno->fetch_assoc()) {
        $pomak = $row['vrijeme'];
    }

    $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

    $upitDnevnik = "INSERT INTO dnevnik " .
            " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
            " VALUES (default, '" . $id . "' , '" . $kIme . "' , 'Prijava u novi mjesecni program vjezbanja.', '" . $vrijemeS . "')";
    $bp->updateDB($upitDnevnik);

    //header("Location: registrirani_korisnik_moji_programi.php");
    header("Location: registrirani_korisnik_aktivni_programi_detalji.php?idProgram=$program.php");
} else {
    header("Location: prijava.php");
}
?>
