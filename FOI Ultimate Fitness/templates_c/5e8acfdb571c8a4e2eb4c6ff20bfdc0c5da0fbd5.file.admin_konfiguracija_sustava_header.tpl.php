<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:00:49
         compiled from "templates/admin_konfiguracija_sustava_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1306449285952d591635000-83145361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e8acfdb571c8a4e2eb4c6ff20bfdc0c5da0fbd5' => 
    array (
      0 => 'templates/admin_konfiguracija_sustava_header.tpl',
      1 => 1497395781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1306449285952d591635000-83145361',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d591690a04_82609473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d591690a04_82609473')) {function content_5952d591690a04_82609473($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Konfiguracija sustava</title>
        <meta name="naslov" content="Kuponi"/>
        <meta name="datum_izrade" content="03.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="icon" href="slike/icon_up.png">
        <link rel="stylesheet" type="text/css" href="css/registracija.css">      
    </head>

    <header>
        <ul>
           <li><a href="index.php" >HOME</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>
            <li style="float: right;"><a href="admin_dnevnik.php">DNEVNIK</a></li>
            <li style="float: right;"><a href="admin_konfiguracija_sustava.php"  class="active">KONFIGURACIJA SUSTAVA</a></li>
            <li style="float: right;"><a href="index_moderator.php">MODERATOR</a></li>
            <li style="float: right;"><a href="index_registrirani_korisnik.php">REGISTRIRANI KORISNIK</a></li>
            <li style="float: right;"><a href="korisnici.php">KORISNICI</a></li>
            <li style="float: right;"><a id="odjava" href="vrste_programa_vjezbanja.php" >PROGRAMI VJEZBANJA</a></li>
            <li style="float: right;"><a id="odjava" href="admin_kuponi_upload.php">KUPONI</a></li>
            <li style="float: right;"><a id="odjava" href="admin_statistika_lojalnosti.php">STATISTIKA LOJALNOSTI</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
