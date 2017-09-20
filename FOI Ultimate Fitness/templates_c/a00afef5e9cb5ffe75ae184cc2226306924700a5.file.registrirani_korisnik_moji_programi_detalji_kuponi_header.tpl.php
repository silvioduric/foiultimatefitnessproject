<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:41:14
         compiled from "templates/registrirani_korisnik_moji_programi_detalji_kuponi_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5933824975941591a4a7134-78572370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a00afef5e9cb5ffe75ae184cc2226306924700a5' => 
    array (
      0 => 'templates/registrirani_korisnik_moji_programi_detalji_kuponi_header.tpl',
      1 => 1497395792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5933824975941591a4a7134-78572370',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5941591a4dd4e4_85258376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5941591a4dd4e4_85258376')) {function content_5941591a4dd4e4_85258376($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Moji programi - kuponi - detalji</title>
        <meta name="naslov" content="Moji programi - detalji"/>
        <meta name="datum_izrade" content="06.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="icon" href="slike/icon_up.png">
        <link rel="stylesheet" type="text/css" href="css/registracija.css">
    </head>

    <header>
        <ul>
            <li><a href="index_registrirani_korisnik.php" >HOME</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>   
            <li style="float: right;"><a id="bodovi" href="registrirani_korisnik_kosarica_lista.php?bodovi=0">KOSARICA</a></li>
            <li style="float: right;"><a id="programi" href="registrirani_korisnik_aktivni_programi.php">SVI PROGRAMI</a></li>
            <li style="float: right;"><a id="programi" href="registrirani_korisnik_moji_programi.php" class="active">MOJI PROGRAMI</a></li>
            <li style="float: right;"><a id="bodovi" href="registrirani_korisnik_bodovi.php">BODOVI</a></li>
            <li style="float: right;"><a id="bodovi" href="registrirani_korisnik_ispis_kodova.php">KODOVI KUPONA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
