<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 18:32:38
         compiled from "templates/moderator_mjesecni_program_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1199229548593acda663ef37-36730131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde6c8c5d81c9c21d1d56839a96978d73e61ace3' => 
    array (
      0 => 'templates/moderator_mjesecni_program_header.tpl',
      1 => 1497021955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1199229548593acda663ef37-36730131',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593acda76c3455_28153562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593acda76c3455_28153562')) {function content_593acda76c3455_28153562($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Moji programi</title>
        <meta name="naslov" content="Moji programi"/>
        <meta name="datum_izrade" content="04.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/registracija.css">
    </head>

    <header>
        <ul>
           <li><a href="index_moderator.php" >HOME</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>  
            <li style="float: right;"><a href="index_registrirani_korisnik.php">REGISTRIRANI KORISNIK</a></li>
            <li style="float: right;"><a id="programi" href="moderator_provjera_kupona.php">PROVJERA KUPONA</a></li>
            <li style="float: right;"><a id="programi" href="moderator_mjesecni_program.php?idVrsta=0"  class="active">MOJI PROGRAMI</a></li>
            <li style="float: right;"><a id="programi" href="moderator_programi.php">MOJE VRSTE</a></li>  
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
