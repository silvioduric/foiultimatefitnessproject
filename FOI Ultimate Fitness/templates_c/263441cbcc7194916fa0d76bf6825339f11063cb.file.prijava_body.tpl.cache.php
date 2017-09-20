<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-01 16:23:56
         compiled from "templates/prijava_body.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592dbdf527d1c7_56407856',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592dbdf527d1c7_56407856')) {function content_592dbdf527d1c7_56407856($_smarty_tpl) {?><body>
    <?php echo '<script'; ?>
 src="javascript/prijava_jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <span style="color: red; margin-left: 100px;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
    <br>
   <div class="reg">
    <h1 style="text-align: center;">Prijava</h1>
    <form class="form" id="logForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
    <input type="text" class="name" name="korisnicko" id="korisnicko" placeholder="Korisnicko ime"><span id="user-result"></span>
    <input type="password" class="email" name="lozinka" id="lozinka" placeholder="Lozinka">
    <br><br>
    <input type="submit" class="submit" id="logSubmit" name="logSubmit" value="Prijavi me">
    </form>
   </div>
</body><?php }} ?>
