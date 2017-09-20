<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:40:48
         compiled from "templates/zaboravljena_lozinka_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38909620459415900e51ba9-22323619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62e0480ac1a2d4eb429a47c438b858a339a374a9' => 
    array (
      0 => 'templates/zaboravljena_lozinka_body.tpl',
      1 => 1497395792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38909620459415900e51ba9-22323619',
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
  'unifunc' => 'content_59415900e6d304_77345670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59415900e6d304_77345670')) {function content_59415900e6d304_77345670($_smarty_tpl) {?><body>
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
