<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        $bp = new Baza();
        $bp->spojiDB();

        if ($bp->pogreskaDB()) {
            echo "Problem kod upita na bazu!";
            exit;
        }

        $searchTerm = $_GET['term'];

        $upit = "SELECT * FROM korisnici WHERE ime LIKE '%" . $searchTerm . "%'";
        $rs = $bp->selectDB($upit);
        $array = array();
        while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
            $array[] = $row['korisnicko_ime'];
        }
        echo json_encode($array);
    }
} else {
    header("Location: prijava.php");
}
?>
