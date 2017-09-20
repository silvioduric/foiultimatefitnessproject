<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:40:22
         compiled from "templates/prijava_dva_koraka_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1838376327594158e641e759-76784091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b0cf58d88d906efa1118a3c8ced79cbd88e5ec1' => 
    array (
      0 => 'templates/prijava_dva_koraka_header.tpl',
      1 => 1497395789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1838376327594158e641e759-76784091',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594158e6459dc7_90616484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594158e6459dc7_90616484')) {function content_594158e6459dc7_90616484($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Potvrda prijave</title>
        <meta name="naslov" content="Potvrda prijave"/>
        <meta name="datum_izrade" content="01.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="icon" href="slike/icon_up.png">
        <link rel="stylesheet" type="text/css" href="css/registracija.css">
        <?php echo '<script'; ?>
 src="javascript/registracija.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="javascript/registracija_jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
    </head>

    <header>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li style="float: right;"><a id="dokumentacija" href="o_autoru.php">O AUTORU</a></li>
            <li style="float: right;"><a id="dokumentacija" href="dokumentacija.php">DOKUMENTACIJA</a></li>
            <li style="float: right;" ><a href="registracija.php" >REGISTRACIJA</a></li>
            <li style="float: right;"><a href="prijava.php">PRIJAVA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
