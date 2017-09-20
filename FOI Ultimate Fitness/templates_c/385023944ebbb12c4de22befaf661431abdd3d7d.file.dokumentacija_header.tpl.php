<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-10 22:32:42
         compiled from "templates/dokumentacija_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1695198945593c576a083a03-29978055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '385023944ebbb12c4de22befaf661431abdd3d7d' => 
    array (
      0 => 'templates/dokumentacija_header.tpl',
      1 => 1497021950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1695198945593c576a083a03-29978055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593c576a0bb787_51616476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593c576a0bb787_51616476')) {function content_593c576a0bb787_51616476($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Dokumentacija</title>
        <meta name="naslov" content="Dokumentacija"/>
        <meta name="datum_izrade" content="29.05.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/registracija.css">
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
            <li><a href="index.php">HOME</a></li>
            <li style="float: right;"><a id="dokumentacija" href="dokumentacija.php"  class="active">DOKUMENTACIJA</a></li>
            <li style="float: right;"><a href="registracija.php">REGISTRACIJA</a></li>
            <li style="float: right;"><a id="odjava" href="prijava.php">PRIJAVA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

</header><?php }} ?>
