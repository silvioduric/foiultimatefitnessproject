<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:40:23
         compiled from "templates/prijava_dva_koraka_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1125353150594158e7237c32-32190159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e6c3d163fe75454f562e6900eb2cdd7d53a1c64' => 
    array (
      0 => 'templates/prijava_dva_koraka_body.tpl',
      1 => 1497395789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1125353150594158e7237c32-32190159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594158e7250547_49682966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594158e7250547_49682966')) {function content_594158e7250547_49682966($_smarty_tpl) {?><body>
   <div class="reg">
    <span style="color: red; margin: 0 auto;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
    <br>
    <h1 style="text-align: center;">Potvrda prijave</h1>
    <h3 style="text-align: center; color: white;">Unesite kod koji vam je poslan na email</h3>
    <form class="form" id="logForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
    <input type="text" class="name" name="potvrda" id="potvrda">
    <br><br>
    <input type="submit" class="submit" id="potvrdaSubmit" name="potvrdaSubmit" value="Potvrdi">
    </form>
   </div>
</body><?php }} ?>
