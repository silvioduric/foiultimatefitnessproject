<?php /*%%SmartyHeaderCode:1605759094592dbdf526c4b8-73991855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '263441cbcc7194916fa0d76bf6825339f11063cb' => 
    array (
      0 => 'templates/prijava_body.tpl',
      1 => 1496327023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1605759094592dbdf526c4b8-73991855',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593024a161daa4_82070666',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593024a161daa4_82070666')) {function content_593024a161daa4_82070666($_smarty_tpl) {?><body>
    <script src="javascript/prijava_jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <span style="color: red; margin-left: 100px;" id="korisnickoImeError"><a>Korisnicko ime i lozinka moraju biti uneseni!</a></span>
    <br>
   <div class="reg">
    <h1 style="text-align: center;">Prijava</h1>
    <form class="form" id="logForma" method="post" action="/WebDiP/2016_projekti/WebDiP2016x034/Teretana/prijava.php">
    <input type="text" class="name" name="korisnicko" id="korisnicko" placeholder="Korisnicko ime"><span id="user-result"></span>
    <input type="password" class="email" name="lozinka" id="lozinka" placeholder="Lozinka">
    <br><br>
    <input type="submit" class="submit" id="logSubmit" name="logSubmit" value="Prijavi me">
    </form>
   </div>
</body><?php }} ?>
