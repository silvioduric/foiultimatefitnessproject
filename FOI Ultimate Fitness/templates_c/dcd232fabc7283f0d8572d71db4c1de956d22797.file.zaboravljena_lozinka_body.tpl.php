<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-03 19:55:40
         compiled from "templates/zaboravljena_lozinka_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3659016785932f81c5bc561-18356152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd232fabc7283f0d8572d71db4c1de956d22797' => 
    array (
      0 => 'templates/zaboravljena_lozinka_body.tpl',
      1 => 1496510029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3659016785932f81c5bc561-18356152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'succes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5932f81c5d8655_94219583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5932f81c5d8655_94219583')) {function content_5932f81c5d8655_94219583($_smarty_tpl) {?><body>
   <div class="reg">
    <span style="color: red; margin: 0 auto;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
    <br>
    <span style="color: green; margin: 0 auto;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['succes']->value;?>
</span>
    <br>
    <h3 style="text-align: center; color: white;">Unesite email s kojim ste registrirali vas korisnicki racun</h3>
    <form class="form" id="logForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
    <input type="email" class="name" name="email" id="email">
    <br><br>
    <input type="submit" class="submit" id="zaboravljenaSubmit" name="zaboravljenaSubmit" value="Posalji">
    </form>
   </div>
</body><?php }} ?>
