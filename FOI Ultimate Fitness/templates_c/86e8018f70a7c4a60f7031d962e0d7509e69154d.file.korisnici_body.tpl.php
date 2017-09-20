<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:10:58
         compiled from "./../templates/korisnici_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205931489659415202d04694-52219000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86e8018f70a7c4a60f7031d962e0d7509e69154d' => 
    array (
      0 => './../templates/korisnici_body.tpl',
      1 => 1497395785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205931489659415202d04694-52219000',
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
  'unifunc' => 'content_59415202d511e3_43345706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59415202d511e3_43345706')) {function content_59415202d511e3_43345706($_smarty_tpl) {?><body>     
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
    <th>Korisnicko ime</th>
    <th>Prezime</th>
    <th>Ime</th>
    <th>Email</th>
    <th>Lozinka</th>
    <th>Tip korisnika</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>

  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value['korisnicko_ime'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value['prezime'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value['ime'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value['email'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value['lozinka'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value['naziv_tipa'];?>
</td>
  </tr>
  <?php } ?>
</table>  
</body><?php }} ?>
