<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 18:10:54
         compiled from "templates/registrirani_korisnik_moji_programi_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:305098593ac88e913bc1-46400178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0835813846a054c7f5777382317c8248f7d03839' => 
    array (
      0 => 'templates/registrirani_korisnik_moji_programi_body.tpl',
      1 => 1497021963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305098593ac88e913bc1-46400178',
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
  'unifunc' => 'content_593ac88e95bcb2_14797808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593ac88e95bcb2_14797808')) {function content_593ac88e95bcb2_14797808($_smarty_tpl) {?><body>    
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
      <td><input type="submit" value="Detalji" onclick="window.location='registrirani_korisnik_moji_programi_detalji.php?idProgram=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_program'];?>
'"/></td>
  </tr>
  <?php } ?>
</table>
</body><?php }} ?>
