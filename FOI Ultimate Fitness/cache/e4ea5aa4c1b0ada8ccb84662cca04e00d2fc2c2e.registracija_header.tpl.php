<?php /*%%SmartyHeaderCode:970489506592c5819da6899-24939600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ea5aa4c1b0ada8ccb84662cca04e00d2fc2c2e' => 
    array (
      0 => 'templates/registracija_header.tpl',
      1 => 1496310812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '970489506592c5819da6899-24939600',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592fe45b6cd289_79238380',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592fe45b6cd289_79238380')) {function content_592fe45b6cd289_79238380($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Registracija</title>
        <meta name="naslov" content="Stranica registracije"/>
        <meta name="datum_izrade" content="29.05.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/registracija.css">
        <script src="javascript/registracija.js" type="text/javascript"></script>
        <script src="javascript/registracija_jquery.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <header>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li style="float: right;" ><a href="registracija.php" class="active">REGISTRACIJA</a></li>
            <li style="float: right;"><a>PRIJAVA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
