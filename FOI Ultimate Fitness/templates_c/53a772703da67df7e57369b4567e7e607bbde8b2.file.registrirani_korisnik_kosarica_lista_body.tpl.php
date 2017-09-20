<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-09 18:07:44
         compiled from "templates/registrirani_korisnik_kosarica_lista_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1136217025593ac7d03459d5-83258817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53a772703da67df7e57369b4567e7e607bbde8b2' => 
    array (
      0 => 'templates/registrirani_korisnik_kosarica_lista_body.tpl',
      1 => 1497021963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1136217025593ac7d03459d5-83258817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nema' => 0,
    'dobar' => 0,
    'podaci' => 0,
    'p' => 0,
    'korisnik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593ac7d0393cb4_63541544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593ac7d0393cb4_63541544')) {function content_593ac7d0393cb4_63541544($_smarty_tpl) {?><body>   
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
    <span style="color: red; margin: 0 auto;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['nema']->value;?>
</span>
    <br>
    <span style="color: green; margin: 0 auto; font-size: 20px; font-weight: bold;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['dobar']->value;?>
</span>
    <br>
</div>
    <table>
    
    <th><h1>POPIS KUPONA</h1></th>
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
         <td><input id="obrisi" name="obrisi" type="submit" value="Obrisi" onclick="window.location='registrirani_korisnik_kosarica_lista_obrisi.php?idKupon=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_kupona'];?>
&idKorisnik=<?php echo $_smarty_tpl->tpl_vars['korisnik']->value;?>
.php'"/></td>
    </tr>
        <?php } ?>
        <tr>
            <td><input id="checkout" name="checkout" type="submit" value="Kupi" onclick="window.location='registrirani_korisnik_kosarica_lista_checkout.php'"/></td>
         <br><br>
        </tr>
</table>
</body><?php }} ?>
