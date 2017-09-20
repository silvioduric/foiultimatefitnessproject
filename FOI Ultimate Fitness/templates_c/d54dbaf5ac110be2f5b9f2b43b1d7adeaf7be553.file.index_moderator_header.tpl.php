<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:01:50
         compiled from "templates/index_moderator_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15916988565952d5ce4a7067-57169738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd54dbaf5ac110be2f5b9f2b43b1d7adeaf7be553' => 
    array (
      0 => 'templates/index_moderator_header.tpl',
      1 => 1497395783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15916988565952d5ce4a7067-57169738',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d5ce539093_40192958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d5ce539093_40192958')) {function content_5952d5ce539093_40192958($_smarty_tpl) {?><!DOCTYPE html>
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
            <li><a href="index_moderator.php" class="active">HOME</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>   
            <li style="float: right;"><a href="index_registrirani_korisnik.php">REGISTRIRANI KORISNIK</a></li>
             <li style="float: right;"><a id="programi" href="moderator_provjera_kupona.php">PROVJERA KUPONA</a></li>
            <li style="float: right;"><a id="programi" href="moderator_mjesecni_program.php?idVrsta=0">MOJI PROGRAMI</a></li>
            <li style="float: right;"><a id="programi" href="moderator_programi.php">MOJE VRSTE</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
