<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 18:30:09
         compiled from "templates/moderator_provjera_kupona_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1799398491593acd11cf68b8-03869202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4f42f79040bc6c5a91107374f59b925be598a51' => 
    array (
      0 => 'templates/moderator_provjera_kupona_header.tpl',
      1 => 1497021957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1799398491593acd11cf68b8-03869202',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593acd11d5b4b7_65421546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593acd11d5b4b7_65421546')) {function content_593acd11d5b4b7_65421546($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Promjena termina</title>
        <meta name="naslov" content="Promjena termina"/>
        <meta name="datum_izrade" content="06.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/registracija.css">
    </head>

    <header>
        <ul>
           <li><a href="index_moderator.php" >HOME</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>  
            <li style="float: right;"><a href="index_registrirani_korisnik.php">REGISTRIRANI KORISNIK</a></li>
            <li style="float: right;"><a id="programi" href="moderator_provjera_kupona.php" class="active">PROVJERA KUPONA</a></li>  
            <li style="float: right;"><a id="programi" href="moderator_mjesecni_program.php?idVrsta=0">MOJI PROGRAMI</a></li>
            <li style="float: right;"><a id="programi" href="moderator_programi.php">MOJE VRSTE</a></li>  
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
