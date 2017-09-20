<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:41:17
         compiled from "templates/registrirani_korisnik_moji_programi_detalji_kuponi_detalji_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16162812485941591d185760-60257572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bc70d3b85a6780fd2712bd0a9e8225b7c8ee88f' => 
    array (
      0 => 'templates/registrirani_korisnik_moji_programi_detalji_kuponi_detalji_body.tpl',
      1 => 1497404451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16162812485941591d185760-60257572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'podaci' => 0,
    'p' => 0,
    'kupon' => 0,
    'program' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5941591d1d5cb2_98372130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5941591d1d5cb2_98372130')) {function content_5941591d1d5cb2_98372130($_smarty_tpl) {?><body>   
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
    <th><h1></h1></th>
    <br>
       <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['podaci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
      <tr>
         <td><a style="color: #000; font-size: 24px; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['p']->value['naziv_kupona'];?>
</a></td>
         <br><br><br>
    </tr>
     <tr>
         <td><img width="400" height="200" src="./upload/slike/<?php echo $_smarty_tpl->tpl_vars['p']->value['slika'];?>
"></td>
         <br>
         <td><input type="submit" value="Dodaj u kosaricu" onclick="window.location='registrirani_korisnik_kosarica.php?idKupon=<?php echo $_smarty_tpl->tpl_vars['kupon']->value;?>
&idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
'"/></td>
         <br><br>
    </tr>
    <tr>
         <td><a target="_blank" style="color: #000; font-size: 18px;" href="http://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x034/upload/pdf/<?php echo $_smarty_tpl->tpl_vars['p']->value['pdf'];?>
">Opis kupona (PDF)</a></td>
         <br>
    </tr>
        <?php } ?>
          
</table>
    <a href="http://www.facebook.com/sharer.php?u=http://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x034/upload/pdf/<?php echo $_smarty_tpl->tpl_vars['p']->value['pdf'];?>
" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
</body><?php }} ?>
