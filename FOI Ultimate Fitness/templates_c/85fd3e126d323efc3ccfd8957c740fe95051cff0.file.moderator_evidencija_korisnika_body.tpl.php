<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:25:31
         compiled from "templates/moderator_evidencija_korisnika_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7664497365941556b61ad90-54706954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85fd3e126d323efc3ccfd8957c740fe95051cff0' => 
    array (
      0 => 'templates/moderator_evidencija_korisnika_body.tpl',
      1 => 1497395785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7664497365941556b61ad90-54706954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podaci' => 0,
    'p' => 0,
    'program' => 0,
    'korisnik' => 0,
    'podaci2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5941556b68a2b4_98758833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5941556b68a2b4_98758833')) {function content_5941556b68a2b4_98758833($_smarty_tpl) {?><body>    
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
 $_from = $_smarty_tpl->tpl_vars['podaci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
   <tr>
       <td><input type="submit" value="Dodaj dolazak" onclick="window.location='moderator_evidencija_korisnika_dodaj_dolazak.php?idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
&idKorisnik=<?php echo $_smarty_tpl->tpl_vars['korisnik']->value;?>
'"/></td>
  </tr>
</table>
<table>
    <th><h1>NEDOLASCI</h1></th>
  <tr>
    <th>Datum nedolaska</th>
    <th>Razlog nedolaska</th>
  </tr>

       <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaci2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
       <td><input type="submit" value="Dodaj nedolazak" onclick="window.location='moderator_evidencija_korisnika_dodaj_nedolazak.php?idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
&idKorisnik=<?php echo $_smarty_tpl->tpl_vars['korisnik']->value;?>
'"/></td>
  </tr>
</table>
</body><?php }} ?>
