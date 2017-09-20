<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-03 18:00:28
         compiled from "templates\prijava_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315105932dd1cb1f5b5-57931417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54c31e06933bd764fc70b7eb8d8c81250780efe5' => 
    array (
      0 => 'templates\\prijava_header.tpl',
      1 => 1496175492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315105932dd1cb1f5b5-57931417',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5932dd1cb48cf5_03586431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5932dd1cb48cf5_03586431')) {function content_5932dd1cb48cf5_03586431($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Prijava</title>
        <meta name="naslov" content="Stranica prijave"/>
        <meta name="datum_izrade" content="30.05.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/registracija.css">
        <?php echo '<script'; ?>
 src="javascript/registracija.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="javascript/registracija_jquery.js" type="text/javascript"><?php echo '</script'; ?>
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
            <li><a href="index.php">HOME</a></li>
            <li style="float: right;" ><a  >REGISTRACIJA</a></li>
            <li style="float: right;"><a href="prijava.php" class="active">PRIJAVA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
