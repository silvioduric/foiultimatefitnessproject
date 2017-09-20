<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:05:00
         compiled from "templates/registrirani_korisnik_aktivni_programi_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13607305645952d68cda3c46-25460727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cbdaea3cdc4dd0dc94b8ca2dba7498f50bdc30e' => 
    array (
      0 => 'templates/registrirani_korisnik_aktivni_programi_body.tpl',
      1 => 1497395790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13607305645952d68cda3c46-25460727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podaci' => 0,
    'p' => 0,
    'broj' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d68ce20177_58816049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d68ce20177_58816049')) {function content_5952d68ce20177_58816049($_smarty_tpl) {?><body>    
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

.button {
    width: 15px;
    height: 5px;
    background: white;
    padding: 10px;
    text-align: center;
    border-radius: 10px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
    </style>
<table>
  <tr>
    <th>Naziv programa</th>
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
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['broj_polaznika'];?>
</a></td>
      <td><input type="submit" value="Detalji" onclick="window.location='registrirani_korisnik_aktivni_programi_detalji.php?idProgram=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_program'];?>
'"/></td>
  </tr>
  <?php } ?>
</table>
<br><br>
<div class="reg">
     <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['broj']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['broj']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
         <a class="button" href="registrirani_korisnik_aktivni_programi.php?page=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" style="color: #000;"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
<?php }} ?> 
  </div>
</body><?php }} ?>
