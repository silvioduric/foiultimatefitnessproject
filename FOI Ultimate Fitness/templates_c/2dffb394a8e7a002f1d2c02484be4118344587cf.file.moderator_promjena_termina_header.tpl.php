<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:29:52
         compiled from "templates/moderator_promjena_termina_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204366731659415670f11a94-34060513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dffb394a8e7a002f1d2c02484be4118344587cf' => 
    array (
      0 => 'templates/moderator_promjena_termina_header.tpl',
      1 => 1497395789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204366731659415670f11a94-34060513',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59415671005e73_66680301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59415671005e73_66680301')) {function content_59415671005e73_66680301($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Promjena termina</title>
        <meta name="naslov" content="Promjena termina"/>
        <meta name="datum_izrade" content="06.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="icon" href="slike/icon_up.png">
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
