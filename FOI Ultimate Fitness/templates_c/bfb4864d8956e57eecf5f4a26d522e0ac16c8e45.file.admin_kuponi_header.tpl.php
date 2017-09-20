<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:03:09
         compiled from "templates/admin_kuponi_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8098390005952d61d02a592-72404544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfb4864d8956e57eecf5f4a26d522e0ac16c8e45' => 
    array (
      0 => 'templates/admin_kuponi_header.tpl',
      1 => 1497395781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8098390005952d61d02a592-72404544',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d61d062289_04263827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d61d062289_04263827')) {function content_5952d61d062289_04263827($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Kuponi</title>
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
            <li style="float: right;"><a href="admin_konfiguracija_sustava.php">KONFIGURACIJA SUSTAVA</a></li>
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
