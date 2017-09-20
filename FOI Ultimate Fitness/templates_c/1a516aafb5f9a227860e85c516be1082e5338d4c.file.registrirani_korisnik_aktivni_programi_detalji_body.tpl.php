<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:41:01
         compiled from "templates/registrirani_korisnik_aktivni_programi_detalji_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20064778975941590d87fb88-33665250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a516aafb5f9a227860e85c516be1082e5338d4c' => 
    array (
      0 => 'templates/registrirani_korisnik_aktivni_programi_detalji_body.tpl',
      1 => 1497395790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20064778975941590d87fb88-33665250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podaci' => 0,
    'p' => 0,
    'brojZauzatih' => 0,
    'prijavljen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5941590d8f51f4_06182957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5941590d8f51f4_06182957')) {function content_5941590d8f51f4_06182957($_smarty_tpl) {?><body>    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="javascript/vrste_programa_jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
    <style>
        table { 
  color: #333;
  font-family: Helvetica, Arial, sans-serif;
  width: 640px;
  border-collapse: collapse; border-spacing: 0; 
  margin: 0 auto;
}
		
td, th {  border: 0 none; height: 30px; }
			
th {
	background: linear-gradient(#333 0%,#444 100%);
	color: #FFF; font-weight: bold;
	height: 40px;
}
		
td { background: #FAFAFA; text-align: center; }

		
tr:nth-child(even) td { background: #EEE; } 
tr:nth-child(odd) td { background: #FDFDFD; }



/* Add border-radius to specific cells! */
tr:first-child th:nth-child(2) { 
  border-radius: 5px 0 0 0; 
} 

tr:first-child th:last-child { 
  border-radius: 0 5px 0 0; 
}
    </style>
<table>
  <tr>
    <th>Naziv programa</th>
    <th>Dan u tjednu</th>
    <th>Mjesec</th>
    <th>Vrijeme</th>
    <th>Broj polaznika</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
  <tr>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['naziv_programa'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['dan_u_tjednu'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['mjesec'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['vrijeme'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['brojZauzatih']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['broj_polaznika'];?>
</a></td>
  </tr>
   <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['brojZauzatih']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['p']->value['broj_polaznika'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp1<$_tmp2) {?>
       <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['prijavljen']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==0) {?>
        <td><input type="submit" value="Prijavi se" onclick="window.location='registrirani_korisnik_program_prijava.php?idProgram=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_program'];?>
'"/></td>
       <?php }?>
   <?php }?>
   
  <?php } ?>
</table>
</body><?php }} ?>
