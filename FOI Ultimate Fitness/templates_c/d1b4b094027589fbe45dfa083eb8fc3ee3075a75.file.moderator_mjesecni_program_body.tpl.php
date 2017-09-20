<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:02:57
         compiled from "templates/moderator_mjesecni_program_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17107189185952d611e552e7-61872212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b4b094027589fbe45dfa083eb8fc3ee3075a75' => 
    array (
      0 => 'templates/moderator_mjesecni_program_body.tpl',
      1 => 1497395787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17107189185952d611e552e7-61872212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'idVrste' => 0,
    'podaci' => 0,
    'p' => 0,
    'error' => 0,
    'opisVrste' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d611f1b3c1_76857042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d611f1b3c1_76857042')) {function content_5952d611f1b3c1_76857042($_smarty_tpl) {?><body>    
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
    <th>Naziv vrste</th>
    <th>Naziv programa</th>
    <th>Dan u tjednu</th>
    <th>Mjesec</th>
    <th>Vrijeme</th>
    <th>Broj polaznika</th>
  </tr>
  <?php if ($_smarty_tpl->tpl_vars['idVrste']->value==0) {?>
      <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
  <tr>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['opis_vrste_programa'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['naziv_programa'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['dan_u_tjednu'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['mjesec'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['vrijeme'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['broj_polaznika'];?>
</a></td>
      <td><input type="submit" value="Detalji" onclick="window.location='moderator_detalji_mjesecnog_programa.php?idVrsta=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_vrste_programa'];?>
&idProgram=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_program'];?>
'"/></td>
  </tr>
  <?php } ?>
  
  <?php } elseif ($_smarty_tpl->tpl_vars['idVrste']->value!=0) {?>
       <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
  <tr>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['opis_vrste_programa'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['naziv_programa'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['dan_u_tjednu'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['mjesec'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['vrijeme'];?>
</a></td>
      <td><a><?php echo $_smarty_tpl->tpl_vars['p']->value['broj_polaznika'];?>
</a></td>
  </tr>
  <?php } ?>
    <tr>
      <td>
          <span style="color: red; margin: 0 auto;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
           <br>
          <form class="form" id="logForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?idVrsta=<?php echo $_smarty_tpl->tpl_vars['idVrste']->value;?>
">
              <input  class="" name="program" id="program" value="<?php echo $_smarty_tpl->tpl_vars['opisVrste']->value;?>
" disabled="true">
              <input  class="" name="nazivPrograma" id="nazivPrograma" placeholder="Naziv programa">
              <input  class="" name="danUtjednu" id="danUtjednu" placeholder="Dan u tjednu">
              <input  class="" name="mjesec" id="mjesec" placeholder="Mjesec">
              <input class="" name="vrijeme" id="vrijeme" placeholder="Vrijeme">
              <input class="" name="brojPolaznika" id="brojPolaznika" placeholder="Broj polaznika">
              <input type="submit" class="submit" id="programSubmit" name="programSubmit" value="Kreiraj">
          </form>
      </td>
  </tr>
  <?php }?>
</table>
</body><?php }} ?>
