<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:00:49
         compiled from "templates/admin_konfiguracija_sustava_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6794013065952d5916969d3-50846405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '265be5f944964cea2e2c33329f1fea40ad5d1328' => 
    array (
      0 => 'templates/admin_konfiguracija_sustava_body.tpl',
      1 => 1497395781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6794013065952d5916969d3-50846405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d591700f54_38455124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d591700f54_38455124')) {function content_5952d591700f54_38455124($_smarty_tpl) {?><body>
    <div class="reg">
        <span style="color: red; margin: 0 auto;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
           <br>      
        <form class="form" id="logForma" method="post" action="admin_virtualno_redirect.php">              
              <input type="submit" class="submit" id="programSubmit" name="programSubmit" value="Virtualno vrijeme">
          </form>
    </div>
</body><?php }} ?>
