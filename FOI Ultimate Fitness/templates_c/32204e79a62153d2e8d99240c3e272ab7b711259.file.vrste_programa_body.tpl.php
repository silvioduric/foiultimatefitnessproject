<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:03:22
         compiled from "templates/vrste_programa_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2040952055952d62a16fae5-26525592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32204e79a62153d2e8d99240c3e272ab7b711259' => 
    array (
      0 => 'templates/vrste_programa_body.tpl',
      1 => 1497395792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2040952055952d62a16fae5-26525592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podaci' => 0,
    'p' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d62a1e0394_72163670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d62a1e0394_72163670')) {function content_5952d62a1e0394_72163670($_smarty_tpl) {?><body>    
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


#moderator, #program{
  width:80%;
  padding:15px;
  border-radius:5px;
  color: #FFF;
  font:14px Oswald;
  text-transform:uppercase;
  border:1px solid #000;
}
    </style>
<table>
  <tr>
    <th>Naziv vrste</th>
    <th>Prezime i ime moderatora</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value['opis_vrste_programa'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value['prezime'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['ime'];?>
</td>
    <td><input type="submit" value="Obrisi" onclick="window.location='admin_brisanje_vrste_programa.php?idProgram=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_vrste_programa'];?>
'"/> </td>
    <td><input type="submit" value="Izmjeni" onclick="window.location='admin_izmjena_vrste_programa.php?idProgram=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_vrste_programa'];?>
'"/> </td>
  </tr>
  <?php } ?>
  <tr>
      <td>
          <form class="form" id="logForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
              <span style="color: red; margin: 0 auto;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
              <br>
              <input style="color: #000" class="" name="program" id="program" placeholder="Naziv programa">
              <input style="color: #000"  class="" name="moderator" id="moderator" placeholder="Korisnicko ime moderatora">
              <input type="submit" class="submit" id="programSubmit" name="programSubmit" value="Kreiraj">
          </form>
      </td>
  </tr>
</table>
</body><?php }} ?>
