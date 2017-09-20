<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-13 15:14:18
         compiled from "templates/moderator_evidencija_korisnika_dodaj_nedolazak_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1547813933593fe52a8048d9-66204949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e618b08a6064227c7fb72842b7454d52bffb870' => 
    array (
      0 => 'templates/moderator_evidencija_korisnika_dodaj_nedolazak_header.tpl',
      1 => 1497268358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1547813933593fe52a8048d9-66204949',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593fe52a9574d4_90415752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593fe52a9574d4_90415752')) {function content_593fe52a9574d4_90415752($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Dodavanje nedolaska</title>
        <meta name="naslov" content="Dodavanje nedolaska"/>
        <meta name="datum_izrade" content="07.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/registracija.css">
    </head>

    <header>
        <ul>
           <li><a href="index_moderator.php" >HOME</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>  
            <li style="float: right;"><a href="index_registrirani_korisnik.php">REGISTRIRANI KORISNIK</a></li>
            <li style="float: right;"><a id="programi" href="moderator_provjera_kupona.php">PROVJERA KUPONA</a></li>
            <li style="float: right;"><a id="programi" href="moderator_mjesecni_program.php?idVrsta=0" class="active">MOJI PROGRAMI</a></li>
            <li style="float: right;"><a id="programi" href="moderator_programi.php">MOJE VRSTE</a></li>  
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
