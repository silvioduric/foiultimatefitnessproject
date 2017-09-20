<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:04:35
         compiled from "templates/registrirani_korisnik_bodovi_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12919812625952d673695ab0-84443284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2abb40ba27a01bb0cebb8f060b1c7b10084f383c' => 
    array (
      0 => 'templates/registrirani_korisnik_bodovi_body.tpl',
      1 => 1497395790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12919812625952d673695ab0-84443284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bodovi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d6736c4536_60111561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d6736c4536_60111561')) {function content_5952d6736c4536_60111561($_smarty_tpl) {?><body>
    <div class="reg">
        <a style="font-size: 48px; color: white;">
            Trenutno stanje bodova:
        </a>
        <a style="font-size: 48px; color: white;">
            <?php echo $_smarty_tpl->tpl_vars['bodovi']->value;?>

        </a>
    </div>
</body><?php }} ?>
