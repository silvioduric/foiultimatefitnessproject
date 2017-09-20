<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 00:31:54
         compiled from "templates/moderator_kuponi_dodaj_kupon_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1201527645939d05ac546d3-32057669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f15738e771b1377b36e913b724e84f5ffcca7fe2' => 
    array (
      0 => 'templates/moderator_kuponi_dodaj_kupon_header.tpl',
      1 => 1496958313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1201527645939d05ac546d3-32057669',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5939d05ac9d016_12592871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5939d05ac9d016_12592871')) {function content_5939d05ac9d016_12592871($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Mjesecni program kuponi dodaj</title>
        <meta name="naslov" content="Mjesecni program kuponi daoj"/>
        <meta name="datum_izrade" content="06.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
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
