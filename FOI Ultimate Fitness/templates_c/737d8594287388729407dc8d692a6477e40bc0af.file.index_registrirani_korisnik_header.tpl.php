<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 17:48:24
         compiled from "templates/index_registrirani_korisnik_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1132341853593ac348648c28-28473648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '737d8594287388729407dc8d692a6477e40bc0af' => 
    array (
      0 => 'templates/index_registrirani_korisnik_header.tpl',
      1 => 1497021954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1132341853593ac348648c28-28473648',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593ac3486817d4_77069435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593ac3486817d4_77069435')) {function content_593ac3486817d4_77069435($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Pocetna stranica</title>
        <meta name="naslov" content="Pocetna stranica"/>
        <meta name="datum_izrade" content="04.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/pocetna.css">
    </head>

    <header>
        <ul>
            <li><a href="index_registrirani_korisnik.php" class="active">HOME</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>   
            <li style="float: right;"><a id="bodovi" href="registrirani_korisnik_kosarica_lista.php?bodovi=0">KOSARICA</a></li>
            <li style="float: right;"><a id="programi" href="registrirani_korisnik_aktivni_programi.php">SVI PROGRAMI</a></li>
            <li style="float: right;"><a id="programi" href="registrirani_korisnik_moji_programi.php">MOJI PROGRAMI</a></li>
            <li style="float: right;"><a id="bodovi" href="registrirani_korisnik_bodovi.php">BODOVI</a></li>
            <li style="float: right;"><a id="bodovi" href="registrirani_korisnik_ispis_kodova.php">KODOVI KUPONA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
