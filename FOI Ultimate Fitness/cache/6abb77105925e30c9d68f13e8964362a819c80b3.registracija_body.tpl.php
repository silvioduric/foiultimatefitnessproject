<?php /*%%SmartyHeaderCode:51231378592c5819de5707-28315874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6abb77105925e30c9d68f13e8964362a819c80b3' => 
    array (
      0 => 'templates/registracija_body.tpl',
      1 => 1496310812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51231378592c5819de5707-28315874',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592fe45b722049_92513605',
  'variables' => 
  array (
    'poruka' => 0,
    'poruka2' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592fe45b722049_92513605')) {function content_592fe45b722049_92513605($_smarty_tpl) {?><body>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="javascript/registracija.js" type="text/javascript"></script>
    <script src="javascript/registracija_jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=hr'></script>
    <div>
        <a style="text-align: center;"></a>
        <a style="text-align: center;"></a>
    </div>
    
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
  <span style="color: red; margin-left: 100px;" id="lozinkaError3"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="emailError2"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="emailError"></span>
  <br>
  <h1>Registracija novog korisnickog racuna</h1>
  <form class="form" id="regForma" method="post" action="/WebDiP/2016_projekti/WebDiP2016x034/Teretana/registracija.php">
    <input type="text" class="name" name="ime" id="ime" placeholder="Ime">
    <input type="text" class="name" name="prezime" id="prezime" placeholder="Prezime">
    <input type="text" class="name" name="korisnicko" id="korisnicko" placeholder="Korisnicko ime"><span id="user-result"></span>
    <input type="email" class="email" name="email" id="email" placeholder="Email">
    <input type="password" class="email" name="lozinka" id="lozinka" placeholder="Lozinka">
    <input type="password" class="email" name="ponovljena" id="ponovljena" placeholder="Ponovite lozinku">
    <br><br>
    <input  id="broj_koraka" type="radio" name="broj_koraka" value="1" checked="checked"><a style="color: white;">Prijava 1 korak</a>
    <br>
    <input  id="broj_koraka" type="radio" name="broj_koraka" value="2"><a style="color: white;">Prijava 2 koraka</a>
    <br><br>
    <div class="g-recaptcha" data-sitekey="6LdPdCMUAAAAABOxt5MYVmtFOYuJgA5iH9VRlaEs"></div>
    <br><br>
    <input type="submit" class="submit" id="regSubmit" name="regSubmit" value="Registriraj me">
  </form>
</div>
</body>
<?php }} ?>
