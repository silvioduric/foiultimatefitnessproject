<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:03:39
         compiled from "templates/registracija_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19322566085952d63b1c63d8-44317080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ced2294bb54214f70c683ead347990f11ff9b94e' => 
    array (
      0 => 'templates/registracija_header.tpl',
      1 => 1497395790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19322566085952d63b1c63d8-44317080',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d63b24bb92_54892657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d63b24bb92_54892657')) {function content_5952d63b24bb92_54892657($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Registracija</title>
        <meta name="naslov" content="Stranica registracije"/>
        <meta name="datum_izrade" content="29.05.2017"/>
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
        <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
    </head>

    <header>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li style="float: right;"><a id="dokumentacija" href="o_autoru.php">O AUTORU</a></li>
            <li style="float: right;"><a id="dokumentacija" href="dokumentacija.php">DOKUMENTACIJA</a></li>
            <li style="float: right;" ><a href="registracija.php" class="active">REGISTRACIJA</a></li>
            <li style="float: right;"><a href="https://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x034/prijava.php">PRIJAVA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
