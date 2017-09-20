<?php

require './baza.class.php';

$bp = new Baza();
$bp->spojiDB();

if ($bp->pogreskaDB()) {
    echo "Problem kod upita na bazu!";
    exit;
}

$id = $_GET["idProgram"];

$upit1 = "SELECT * FROM vrste_programa WHERE id_vrste_programa LIKE '" . $id . "' ";
$rs = $bp->selectDB($upit1);

while ($row = $rs->fetch_assoc()) {
    $id2 = $row["id_vrste_programa"];
}

$upit2 = "DELETE FROM vrste_programa WHERE id_vrste_programa = '" . $id2 . "'";
$bp->updateDB($upit2);

$bp->zatvoriDB();

header("Location: vrste_programa_vjezbanja.php");
?>


