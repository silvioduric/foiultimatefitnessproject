<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-29 14:35:44
         compiled from "templates\index_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25992592bbdb55e7eb2-26489369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eb757d2378810c5a2f2e59c126e5243f937b937' => 
    array (
      0 => 'templates\\index_header.tpl',
      1 => 1496061340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25992592bbdb55e7eb2-26489369',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592bbdb562f937_05099146',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592bbdb562f937_05099146')) {function content_592bbdb562f937_05099146($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Pocetna stranica</title>
        <meta name="naslov" content="Pocetna stranica"/>
        <meta name="datum_izrade" content="29.05.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/pocetna.css">
    </head>

    <header>
        <ul>
            <li><a href="index.php" class="active">HOME</a></li>
            <li style="float: right;"><a href="registracija.php">REGISTRACIJA</a></li>
            <li style="float: right;"><a href="">PRIJAVA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
