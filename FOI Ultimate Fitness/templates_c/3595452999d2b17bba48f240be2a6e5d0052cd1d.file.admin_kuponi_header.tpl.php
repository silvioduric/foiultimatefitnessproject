<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 18:57:57
         compiled from "templates/admin_kuponi_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:521603801593ad395bae7c6-03057880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3595452999d2b17bba48f240be2a6e5d0052cd1d' => 
    array (
      0 => 'templates/admin_kuponi_header.tpl',
      1 => 1497021948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '521603801593ad395bae7c6-03057880',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593ad395be68d9_06351839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593ad395be68d9_06351839')) {function content_593ad395be68d9_06351839($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Kuponi</title>
        <meta name="naslov" content="Kuponi"/>
        <meta name="datum_izrade" content="03.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/registracija.css">      
    </head>

    <header>
        <ul>
           <li><a href="index.php" >HOME</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>
            <li style="float: right;"><a href="index_moderator.php">MODERATOR</a></li>
            <li style="float: right;"><a href="index_registrirani_korisnik.php">REGISTRIRANI KORISNIK</a></li>
            <li style="float: right;"><a href="korisnici.php">KORISNICI</a></li>
            <li style="float: right;"><a id="odjava" href="vrste_programa_vjezbanja.php" >PROGRAMI VJEZBANJA</a></li>
            <li style="float: right;"><a id="odjava" href="admin_kuponi_upload.php" class="active">KUPONI</a></li>
            <li style="float: right;"><a id="odjava" href="admin_statistika_lojalnosti.php">STATISTIKA LOJALNOSTI</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
