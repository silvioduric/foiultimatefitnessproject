<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:04:57
         compiled from "templates/registrirani_korisnik_moji_programi_detalji_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17931310655952d6890d2118-58171098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7adef51370bb7c88b9f8528e0411c357f6263c58' => 
    array (
      0 => 'templates/registrirani_korisnik_moji_programi_detalji_body.tpl',
      1 => 1497395791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17931310655952d6890d2118-58171098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podaciDolasci' => 0,
    'p' => 0,
    'podaciNedolasci' => 0,
    'program' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d6892295d9_53437992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d6892295d9_53437992')) {function content_5952d6892295d9_53437992($_smarty_tpl) {?><body>    
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
    <th><h1>DOLASCI</h1></th>
  <tr>
    <th>Datum dolaska</th>
    <th>Opis napredovanja</th>
  </tr>

       <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaciDolasci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
  <tr>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['datum_dolaska'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['opis_napredovanja'];?>
</a></td>
  </tr>
  <?php } ?>
</table>
<table>
    <th><h1>NEDOLASCI</h1></th>
  <tr>
    <th>Datum nedolaska</th>
    <th>Razlog nedolaska</th>
  </tr>

       <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaciNedolasci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
  <tr>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['datum_nedolaska'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['opis_napredovanja'];?>
</a></td>
  </tr>
  <?php } ?>
   <tr>
       <td><input type="submit" value="Kuponi" onclick="window.location='registrirani_korisnik_moji_programi_detalji_kuponi.php?idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
'"/></td>
  </tr>
</table>
</body><?php }} ?>
