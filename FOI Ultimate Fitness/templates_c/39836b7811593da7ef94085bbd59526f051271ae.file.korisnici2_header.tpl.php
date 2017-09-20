<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-11 13:13:44
         compiled from "templates/korisnici2_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1239343603593d25e8a37516-15772760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39836b7811593da7ef94085bbd59526f051271ae' => 
    array (
      0 => 'templates/korisnici2_header.tpl',
      1 => 1497021954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1239343603593d25e8a37516-15772760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593d25e8a706a8_05998593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593d25e8a706a8_05998593')) {function content_593d25e8a706a8_05998593($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Korisnici</title>
        <meta name="naslov" content="Stranica svih korisnika"/>
        <meta name="datum_izrade" content="30.05.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="./css/registracija.css">
    </head>

    <header>
        <ul>
            <li><a href="index.php" >HOME</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>
            <li style="float: right;"><a href="index_moderator.php">MODERATOR</a></li>
            <li style="float: right;"><a href="index_registrirani_korisnik.php">REGISTRIRANI KORISNIK</a></li>
            <li style="float: right;"><a href="korisnici.php" class="active">KORISNICI</a></li>
            <li style="float: right;"><a id="odjava" href="vrste_programa_vjezbanja.php" >PROGRAMI VJEZBANJA</a></li>
            <li style="float: right;"><a id="odjava" href="admin_kuponi_upload.php">KUPONI</a></li>
            <li style="float: right;"><a id="odjava" href="admin_statistika_lojalnosti.php">STATISTIKA LOJALNOSTI</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="./slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header<?php }} ?>
