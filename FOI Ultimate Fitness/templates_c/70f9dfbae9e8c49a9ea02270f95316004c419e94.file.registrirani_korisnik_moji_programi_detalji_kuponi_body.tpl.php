<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:41:14
         compiled from "templates/registrirani_korisnik_moji_programi_detalji_kuponi_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17255751825941591a4e4893-10863053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70f9dfbae9e8c49a9ea02270f95316004c419e94' => 
    array (
      0 => 'templates/registrirani_korisnik_moji_programi_detalji_kuponi_body.tpl',
      1 => 1497395791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17255751825941591a4e4893-10863053',
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
  'unifunc' => 'content_5941591a51d185_61254303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5941591a51d185_61254303')) {function content_5941591a51d185_61254303($_smarty_tpl) {?><body>   
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
tr:nth-child(odd) td { background: #EEE; }



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
    <th><h1>KUPONI</h1></th>
    <br>
       <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
     <tr>
         <td><img width="400" height="200" src="./upload/slike/<?php echo $_smarty_tpl->tpl_vars['p']->value['slika'];?>
"></td>
         <br>
         <td><input type="submit" value="Odaberi" onclick="window.location='registrirani_korisnik_moji_programi_detalji_kuponi_detalji.php?idKupon=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_kupona'];?>
&idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
'"/></td>
    </tr>
        <?php } ?>
</table>
</body><?php }} ?>
