<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:03:22
         compiled from "templates/vrste_programa_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8046003785952d62a1334b9-68899435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fc05bd34d1a4b427bbf76142f0fc157b0fab783' => 
    array (
      0 => 'templates/vrste_programa_header.tpl',
      1 => 1497395792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8046003785952d62a1334b9-68899435',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d62a169d33_00664355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d62a169d33_00664355')) {function content_5952d62a169d33_00664355($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Vrste programa</title>
        <meta name="naslov" content="Vrste programa"/>
        <meta name="datum_izrade" content="03.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="icon" href="slike/icon_up.png">
         <link rel="stylesheet" type="text/css" href="./css/registracija.css">
         <?php echo '<script'; ?>
 src="javascript/vrste_programa_jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>        
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
            <li style="float: right;"><a id="odjava" href="vrste_programa_vjezbanja.php" class="active">PROGRAMI VJEZBANJA</a></li>
            <li style="float: right;"><a id="odjava" href="admin_kuponi_upload.php">KUPONI</a></li>
            <li style="float: right;"><a id="odjava" href="admin_statistika_lojalnosti.php">STATISTIKA LOJALNOSTI</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
