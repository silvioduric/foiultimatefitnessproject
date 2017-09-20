<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-03 12:57:58
         compiled from "templates/prijava_dva_koraka_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200392538959329636b87c41-13424783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef01dfd2cc8f2157e1a9ff633fbcfa43ead88054' => 
    array (
      0 => 'templates/prijava_dva_koraka_body.tpl',
      1 => 1496484818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200392538959329636b87c41-13424783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59329636b9e4c3_30821354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59329636b9e4c3_30821354')) {function content_59329636b9e4c3_30821354($_smarty_tpl) {?><body>
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
