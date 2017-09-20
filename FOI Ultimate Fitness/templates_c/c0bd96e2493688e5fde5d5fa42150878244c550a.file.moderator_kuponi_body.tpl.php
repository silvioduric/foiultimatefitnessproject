<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:16:43
         compiled from "templates/moderator_kuponi_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13090291775941535bed9454-29108372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0bd96e2493688e5fde5d5fa42150878244c550a' => 
    array (
      0 => 'templates/moderator_kuponi_body.tpl',
      1 => 1497395786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13090291775941535bed9454-29108372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podaci' => 0,
    'p' => 0,
    'program' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5941535bf12b50_21973781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5941535bf12b50_21973781')) {function content_5941535bf12b50_21973781($_smarty_tpl) {?><body>    
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
   <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
     <tr>
         <td><img width="400" height="200" src="./upload/slike/<?php echo $_smarty_tpl->tpl_vars['p']->value['slika'];?>
"></td>
         <br>
    </tr>
    <tr>
        <td>
            <a style="color: #000;">
                <?php echo $_smarty_tpl->tpl_vars['p']->value['naziv_kupona'];?>

            </a>
        </td>
    </tr>
        <?php } ?>
  <tr>
      <td><input type="submit" value="Dodaj kupon" onclick="window.location='moderator_kuponi_dodaj_kupon.php?idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
'"/></td>
  </tr>
</table>
</body><?php }} ?>
