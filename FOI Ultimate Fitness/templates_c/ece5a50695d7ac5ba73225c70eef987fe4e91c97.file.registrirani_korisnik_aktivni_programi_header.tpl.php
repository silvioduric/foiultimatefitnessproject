<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 18:06:07
         compiled from "templates/registrirani_korisnik_aktivni_programi_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2140281994593ac76f1d7694-75363050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ece5a50695d7ac5ba73225c70eef987fe4e91c97' => 
    array (
      0 => 'templates/registrirani_korisnik_aktivni_programi_header.tpl',
      1 => 1497021959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2140281994593ac76f1d7694-75363050',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593ac76f213477_71315028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593ac76f213477_71315028')) {function content_593ac76f213477_71315028($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Korisnik - Svi programi</title>
        <meta name="naslov" content="Korisnik - Svi programi"/>
        <meta name="datum_izrade" content="06.06.2017"/>
        <meta name="autor" content="Silvio Duric"/>
        <link rel="stylesheet" type="text/css" href="css/registracija.css">
    </head>

    <header>
        <ul>
            <li><a href="index_registrirani_korisnik.php" >HOME</a></li>
            <li style="float: right;"><a id="odjava" href="odjava.php">ODJAVA</a></li>
            <li style="float: right;"><a id="bodovi" href="registrirani_korisnik_kosarica_lista.php?bodovi=0">KOSARICA</a></li>
            <li style="float: right;"><a id="programi" href="registrirani_korisnik_aktivni_programi.php" class="active">SVI PROGRAMI</a></li>
            <li style="float: right;"><a id="programi" href="registrirani_korisnik_moji_programi.php">MOJI PROGRAMI</a></li>
            <li style="float: right;"><a id="bodovi" href="registrirani_korisnik_bodovi.php">BODOVI</a></li>
            <li style="float: right;"><a id="bodovi" href="registrirani_korisnik_ispis_kodova.php">KODOVI KUPONA</a></li>
        </ul>
        <figure id='logo'>
            <figcaption class="naslov"></figcaption>
            <img src="slike/logo.png" width="400" height="300" alt="Logo"/>
        </figure>

    </header><?php }} ?>
