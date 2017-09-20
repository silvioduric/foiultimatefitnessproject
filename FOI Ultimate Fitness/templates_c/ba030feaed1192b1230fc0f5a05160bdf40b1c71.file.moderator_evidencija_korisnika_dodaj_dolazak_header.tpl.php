<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 16:14:29
         compiled from "templates/moderator_evidencija_korisnika_dodaj_dolazak_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1155323979593aad45103a17-55195588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba030feaed1192b1230fc0f5a05160bdf40b1c71' => 
    array (
      0 => 'templates/moderator_evidencija_korisnika_dodaj_dolazak_header.tpl',
      1 => 1497009283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1155323979593aad45103a17-55195588',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593aad45193d89_44930412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593aad45193d89_44930412')) {function content_593aad45193d89_44930412($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Dodavanje dolaska</title>
        <meta name="naslov" content="Dodavanje dolaska"/>
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
