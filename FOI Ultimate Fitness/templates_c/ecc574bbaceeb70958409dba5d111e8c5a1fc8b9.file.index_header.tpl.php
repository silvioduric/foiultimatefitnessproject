<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:42:15
         compiled from "templates/index_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124588861459415957107580-49097001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecc574bbaceeb70958409dba5d111e8c5a1fc8b9' => 
    array (
      0 => 'templates/index_header.tpl',
      1 => 1497395783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124588861459415957107580-49097001',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5941595714ffe1_24599879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5941595714ffe1_24599879')) {function content_5941595714ffe1_24599879($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Pocetna stranica</title>
        <meta name="naslov" content="Pocetna stranica"/>
        <meta name="datum_izrade" content="29.05.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/registracija.css">
        <link rel="icon" href="slike/icon_up.png">
        <?php echo '<script'; ?>
 src="javascript/index_jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/64c88ae3e6e5b135da1d3cef175ab922.js"><?php echo '</script'; ?>
>
    </head>

    <header>
        <ul>
            <li><a href="index.php" class="active">HOME</a></li>
            <li style="float: right;"><a id="dokumentacija" href="o_autoru.php">O AUTORU</a></li>
            <li style="float: right;"><a id="dokumentacija" href="dokumentacija.php">DOKUMENTACIJA</a></li>
            <li style="float: right;"><a href="registracija.php">REGISTRACIJA</a></li>
            <li style="float: right;"><a id="odjava" href="https://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x034/prijava.php">PRIJAVA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
