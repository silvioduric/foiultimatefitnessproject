<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-08-04 16:33:30
         compiled from "templates/prijava_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144806210598485badc99b5-68172059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ccbf047131b7b19f1051dbb20564754c381a253' => 
    array (
      0 => 'templates/prijava_body.tpl',
      1 => 1497395789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144806210598485badc99b5-68172059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_598485bade0c22_16765893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598485bade0c22_16765893')) {function content_598485bade0c22_16765893($_smarty_tpl) {?><body>
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
    
   <div class="reg">
    <span style="color: red; margin: 0 auto;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
    <br>
    <h1 style="text-align: center;">Prijava</h1>
    <form class="form" id="logForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
    <input type="text" class="name" name="korisnicko" id="korisnicko" placeholder="Korisnicko ime"><span id="user-result"></span>
    <input type="password" class="email" name="lozinka" id="lozinka" placeholder="Lozinka">
    <a style="color: white; font-size: 12px;" href="zaboravljena_lozinka.php">Zaboravljena lozinka?</a>
    <br><br>
    <input type="submit" class="submit" id="logSubmit" name="logSubmit" value="Prijavi me">
    </form>
   </div>
</body><?php }} ?>
