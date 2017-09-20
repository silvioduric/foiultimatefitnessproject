<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 18:33:14
         compiled from "templates/moderator_mjesecni_program_detalji_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1723445963593acdca109f19-57909942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '873b6dd3cfcb11abbc6138ba4cdbd7e6d10cda83' => 
    array (
      0 => 'templates/moderator_mjesecni_program_detalji_body.tpl',
      1 => 1497021955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1723445963593acdca109f19-57909942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podaci' => 0,
    'p' => 0,
    'program' => 0,
    'vrsta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593acdca1836e2_53600478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593acdca1836e2_53600478')) {function content_593acdca1836e2_53600478($_smarty_tpl) {?><body>    
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

#moderator, #nazivPrograma, #danUtjednu, #mjesec, #vrijeme, #brojPolaznika, #program{
  width:80%;
  padding:15px;
  border-radius:5px;
  color: #333;
  font:14px Oswald;
  text-transform:uppercase;
  border:1px solid #000;
}
    </style>
<table>
  <tr>
    <th>Ime</th>
    <th>Prezime</th>
    <th>Email</th>
  </tr>

       <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
  <tr>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['ime'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['prezime'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['email'];?>
</a></td>
      <td><input type="submit" value="Evidencija" onclick="window.location='moderator_evidencija_korisnika.php?idKorisnik=<?php echo $_smarty_tpl->tpl_vars['p']->value['email'];?>
&idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
'"/></td>
      <td><input type="submit" value="Dopusti pristup" onclick="window.location='moderator_evidencija_korisnika_dopustenje_pristupa.php?idKorisnik=<?php echo $_smarty_tpl->tpl_vars['p']->value['email'];?>
&idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
'"/></td>
      <td><input type="submit" value="Zabrani pristup" onclick="window.location='moderator_evidencija_korisnika_zabrana_pristupa.php?idKorisnik=<?php echo $_smarty_tpl->tpl_vars['p']->value['email'];?>
&idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
'"/></td>
  </tr>
  <?php } ?>
  <tr>
      <td><input type="submit" value="Promjena termina" onclick="window.location='moderator_promjena_termina_programa.php?idVrsta=<?php echo $_smarty_tpl->tpl_vars['vrsta']->value;?>
&idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
'"/></td>
  </tr>
  <tr>
      <td><input type="submit" value="Kuponi" onclick="window.location='moderator_kuponi.php?idVrsta=<?php echo $_smarty_tpl->tpl_vars['vrsta']->value;?>
&idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
'"/></td>
  </tr>
</table>
</body><?php }} ?>
