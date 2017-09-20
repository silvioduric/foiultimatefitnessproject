<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-11 13:29:00
         compiled from "templates/prijava_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61548907593d297cb99262-15425594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '263441cbcc7194916fa0d76bf6825339f11063cb' => 
    array (
      0 => 'templates/prijava_body.tpl',
      1 => 1497021957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61548907593d297cb99262-15425594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593d297cbb2615_47264283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593d297cbb2615_47264283')) {function content_593d297cbb2615_47264283($_smarty_tpl) {?><body>
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
