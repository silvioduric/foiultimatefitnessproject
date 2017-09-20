<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-29 23:30:02
         compiled from "templates\registracija_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16563592bc1239a4878-28751935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '464e03118a78d3550dff7ab2134ac73310f1d627' => 
    array (
      0 => 'templates\\registracija_body.tpl',
      1 => 1496093401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16563592bc1239a4878-28751935',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592c8d52396a26_17372877',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c8d52396a26_17372877')) {function content_592c8d52396a26_17372877($_smarty_tpl) {?><body>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
<div class="reg">
  <span style="color: red; margin-left: 100px;" id="imeError"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="imeError2"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="imeError3"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="prezimeError"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="prezimeError2"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="prezimeError3"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="lozinkaError"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="lozinkaError2"></span>
  <br>
  <h1>Registracija novog korisnickog racuna</h1>
  <form class="form" id="regForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
    <input type="text" class="name" name="ime" id="ime" placeholder="Ime">
    <input type="text" class="name" name="prezime" id="prezime" placeholder="Prezime">
    <input type="email" class="email" placeholder="Email">
    <input type="email" class="email" name="lozinka" id="lozinka" placeholder="Lozinka">
    <input type="password" class="email" name="ponovljena" id="ponovljena" placeholder="Ponovite lozinku">
    <input type="submit" class="submit" id="regSubmit" name="regSubmit" value="Registriraj me">
  </form>
</div>
</body>
<?php }} ?>
