<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 17:52:15
         compiled from "templates/registrirani_korisnik_bodovi_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188719494593ac42f969b55-29446507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aabf39ae14267dfe01917a308b0896d38d59e40' => 
    array (
      0 => 'templates/registrirani_korisnik_bodovi_body.tpl',
      1 => 1497021959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188719494593ac42f969b55-29446507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bodovi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593ac42f97fa12_17502783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593ac42f97fa12_17502783')) {function content_593ac42f97fa12_17502783($_smarty_tpl) {?><body>
    <div class="reg">
        <a style="font-size: 48px; color: white;">
            Trenutno stanje bodova:
        </a>
        <a style="font-size: 48px; color: white;">
            <?php echo $_smarty_tpl->tpl_vars['bodovi']->value;?>

        </a>
    </div>
</body><?php }} ?>
