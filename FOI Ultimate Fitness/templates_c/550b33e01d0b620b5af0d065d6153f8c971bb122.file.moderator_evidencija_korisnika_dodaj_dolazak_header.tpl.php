<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:22:29
         compiled from "templates/moderator_evidencija_korisnika_dodaj_dolazak_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:834499821594154b506d9b6-99151545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '550b33e01d0b620b5af0d065d6153f8c971bb122' => 
    array (
      0 => 'templates/moderator_evidencija_korisnika_dodaj_dolazak_header.tpl',
      1 => 1497395786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '834499821594154b506d9b6-99151545',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594154b50a8276_85418626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594154b50a8276_85418626')) {function content_594154b50a8276_85418626($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Dodavanje dolaska</title>
        <meta name="naslov" content="Dodavanje dolaska"/>
        <meta name="datum_izrade" content="07.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="icon" href="slike/icon_up.png">
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
