<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 18:32:21
         compiled from "templates/moderator_programi_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1184635230593acd9556fb17-83993890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef2d8edcf0326d565193b22f299156f38d02924' => 
    array (
      0 => 'templates/moderator_programi_body.tpl',
      1 => 1497021956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1184635230593acd9556fb17-83993890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podaci' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593acd955a4aa9_05234521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593acd955a4aa9_05234521')) {function content_593acd955a4aa9_05234521($_smarty_tpl) {?><body>    
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
    <th>Naziv vrste</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
  <tr>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['opis_vrste_programa'];?>
</a></td>
      <td><input type="submit" value="Kreiraj mjesecni program" onclick="window.location='moderator_mjesecni_program.php?idVrsta=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_vrste_programa'];?>
'"/></td>
  </tr>
  <?php } ?>
</table>
</body><?php }} ?>
