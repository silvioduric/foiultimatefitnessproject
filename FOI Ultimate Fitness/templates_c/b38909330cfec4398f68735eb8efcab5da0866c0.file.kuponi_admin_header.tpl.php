<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-07 18:08:24
         compiled from "templates/kuponi_admin_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:607572324593824f805c8b7-39389232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38909330cfec4398f68735eb8efcab5da0866c0' => 
    array (
      0 => 'templates/kuponi_admin_header.tpl',
      1 => 1496850027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '607572324593824f805c8b7-39389232',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593824f8094119_99041006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593824f8094119_99041006')) {function content_593824f8094119_99041006($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Vrste programa</title>
        <meta name="naslov" content="Vrste programa"/>
        <meta name="datum_izrade" content="03.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/registracija.css">      
    </head>

    <header>
        <ul>
           <li><a href="index.php" >HOME</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>
            <li style="float: right;"><a href="korisnici.php">KORISNICI</a></li>
            <li style="float: right;"><a id="odjava" href="vrste_programa_vjezbanja.php" >PROGRAMI VJEZBANJA</a></li>
            <li style="float: right;"><a id="odjava" href="admin_kuponi_upload.php" class="active">KUPONI</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
