<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-03 17:47:23
         compiled from "templates\korisnici2_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117565932da0b2a2d68-41457097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '662cf721eddeb7eb842fedd647571fa50674a454' => 
    array (
      0 => 'templates\\korisnici2_header.tpl',
      1 => 1496504807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117565932da0b2a2d68-41457097',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5932da0b2eebf8_70899265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5932da0b2eebf8_70899265')) {function content_5932da0b2eebf8_70899265($_smarty_tpl) {?><!DOCTYPE html>
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
            <li><a href="index_admin.php" >HOME</a></li>
            <li style="float: right;"><a href="korisnici.php" class="active">KORISNICI</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="./slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header<?php }} ?>
