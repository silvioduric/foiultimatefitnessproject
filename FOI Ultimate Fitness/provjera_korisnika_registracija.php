<?php
require 'baza.class.php';

if (isset($_POST["korisnickoIme"])) {
    $bp = new Baza();
    $bp->spojiDB();

    if ($bp->pogreskaDB()) {
        echo "Problem kod upita na bazu!";
        exit;
    }
    
    $korisnickoIme = filter_var($_POST["korisnickoIme"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    $upitKorisnicko = "SELECT ime FROM korisnici WHERE korisnicko_ime LIKE "." '$korisnickoIme' ";
    
    $rs = $bp->selectDB($upitKorisnicko);
    
    if(mysqli_num_rows($rs) > 0){
        die('<img src="slike/ne-dostupno.png" />');
    }else{
        die('<img src="slike/dostupno.png" />');
    }
    
    $bp->zatvoriDB();
}
?>