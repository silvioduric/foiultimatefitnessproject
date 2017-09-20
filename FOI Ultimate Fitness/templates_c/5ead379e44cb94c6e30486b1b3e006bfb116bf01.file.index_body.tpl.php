<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:42:15
         compiled from "templates/index_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212955367159415957157708-52187447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ead379e44cb94c6e30486b1b3e006bfb116bf01' => 
    array (
      0 => 'templates/index_body.tpl',
      1 => 1497395783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212955367159415957157708-52187447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vrste' => 0,
    'v' => 0,
    'zastavica' => 0,
    'topTri' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594159571c44a8_84900843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594159571c44a8_84900843')) {function content_594159571c44a8_84900843($_smarty_tpl) {?><body>
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
     <div class="reg">
        <h1 style="text-align: center;">VRSTE PROGRAMA</h1>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vrste']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <form class="form" id="programForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?idVrste=<?php echo $_smarty_tpl->tpl_vars['v']->value['id_vrste_programa'];?>
">
                 <input type="submit" class="submitProgram" id="submitProgram" name="submitProgram" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['opis_vrste_programa'];?>
">
           </form>
        <?php } ?>
        </div>  
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zastavica']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1) {?>
        <table>
            <th><h1>MJESECNI PROGRAMI VJEZBANJA</h1></th>
            <br>
       <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topTri']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['t']->value['naziv_programa'];?>
</td>
                </tr>
        <?php } ?>
        </table>
        <?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zastavica']->value==0;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2) {?>
            
        <?php }}?>
     
 </body><?php }} ?>
