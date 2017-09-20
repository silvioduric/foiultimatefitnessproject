<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 18:30:09
         compiled from "templates/moderator_provjera_kupona_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1804287161593acd11d7dd77-11757333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6e8feaaac52f2b046417f3686e7390210579cb2' => 
    array (
      0 => 'templates/moderator_provjera_kupona_body.tpl',
      1 => 1497021956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1804287161593acd11d7dd77-11757333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'dobar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593acd11d9ba06_36297700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593acd11d9ba06_36297700')) {function content_593acd11d9ba06_36297700($_smarty_tpl) {?><body>
    <div class="reg">
        <span style="color: red; margin: 0 auto; font-weight: bold; font-size: 18px;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
        <br>
        <span style="color: green; margin: 0 auto; font-weight: bold; font-size: 18px;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['dobar']->value;?>
</span>
        <br>
        <h1 style="text-align: center;">Unesite kod kupona</h1>
     <form class="form" id="logForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
         <input type="text" class="name" name="kod" id="kod">
         <br>
        <input type="submit" class="submit" id="kodSubmit" name="kodSubmit" value="Provjeri">
     </form>
</div>
</body><?php }} ?>
