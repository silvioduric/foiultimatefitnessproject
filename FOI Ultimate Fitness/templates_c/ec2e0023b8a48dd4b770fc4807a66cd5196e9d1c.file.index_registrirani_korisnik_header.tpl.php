<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:04:22
         compiled from "templates/index_registrirani_korisnik_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11205458735952d66603ceb2-46381118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec2e0023b8a48dd4b770fc4807a66cd5196e9d1c' => 
    array (
      0 => 'templates/index_registrirani_korisnik_header.tpl',
      1 => 1497395784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11205458735952d66603ceb2-46381118',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d66606eb40_93362891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d66606eb40_93362891')) {function content_5952d66606eb40_93362891($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Pocetna stranica</title>
        <meta name="naslov" content="Pocetna stranica"/>
        <meta name="datum_izrade" content="04.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="icon" href="slike/icon_up.png">
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
