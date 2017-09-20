<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:16:29
         compiled from "templates/moderator_kuponi_dodaj_kupon_odabir_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8611127955941534db1c363-02515392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3c1532d3ef0b21e85641cc8762e2119b914ff75' => 
    array (
      0 => 'templates/moderator_kuponi_dodaj_kupon_odabir_body.tpl',
      1 => 1497395786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8611127955941534db1c363-02515392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'kupon' => 0,
    'program' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5941534db3d696_06646016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5941534db3d696_06646016')) {function content_5941534db3d696_06646016($_smarty_tpl) {?><body>
     <div class="reg">
        <span style="color: red; margin: 0 auto;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
        <br>
        <form class="form" id="logForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?idKupon=<?php echo $_smarty_tpl->tpl_vars['kupon']->value;?>
&idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
">
            <label style="color: white" for="datumOd"><a>Vrijedi od: </a></label>
            <input type="date"  class="" name="datumOd" id="datumOd">
            <label style="color: white" for="datumDo"><a>Vrijedi do: </a></label>
            <input type="date"  class="" name="datumDo" id="datumDo">
            <br><br>
            <input type="text" class="" name="brojBodova" id="brojBodova" placeholder="Broj bodova">
            <input type="submit" class="kuponSubmit" id="kuponSubmit" name="kuponSubmit" value="Kreiraj">
          </form>
    </div>
</body><?php }} ?>
