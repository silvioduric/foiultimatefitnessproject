<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-08-04 16:33:30
         compiled from "templates/prijava_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:603964958598485bad22688-44264477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58783400a39624d6f651d6654286411d6d550c48' => 
    array (
      0 => 'templates/prijava_header.tpl',
      1 => 1497395789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603964958598485bad22688-44264477',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_598485bad89772_64365417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598485bad89772_64365417')) {function content_598485bad89772_64365417($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Prijava</title>
        <meta name="naslov" content="Stranica prijave"/>
        <meta name="datum_izrade" content="30.05.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="icon" href="slike/icon_up.png">
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
            <li style="float: right;"><a id="dokumentacija" href="o_autoru.php">O AUTORU</a></li>
            <li style="float: right;"><a id="dokumentacija" href="dokumentacija.php">DOKUMENTACIJA</a></li>
            <li style="float: right;" ><a href="registracija.php" >REGISTRACIJA</a></li>
            <li style="float: right;"><a href="https://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x034/prijava.php" class="active">PRIJAVA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
