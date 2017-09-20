<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:03:07
         compiled from "templates/admin_statistika_lojalnosti_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5052728585952d61b97ef96-71698104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83f24691a6122e7da137f416c3e1e1db5ff4cd7a' => 
    array (
      0 => 'templates/admin_statistika_lojalnosti_body.tpl',
      1 => 1497395782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5052728585952d61b97ef96-71698104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zastavica' => 0,
    'korisnikBodovi' => 0,
    'kb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d61ba677f7_03000160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d61ba677f7_03000160')) {function content_5952d61ba677f7_03000160($_smarty_tpl) {?><body>
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
        <h1 style="text-align: center;">KATEGORIJE LOJALNOSTI</h1>
            <form class="form" id="skupljeniForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?idVrste=1">
                 <input type="submit" class="submitSkupljeniKorisnik" id="submitSkupljeniKorisnik" name="submitSkupljeniKorisnik" value="KORISNIK - SKUPLJENI BODOVI (NAJVECI - NAJMANJI)">
           </form>
        </div>  
        <div class="reg">
            <form class="form" id="skupljeniForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?idVrste=2">
                 <input type="submit" class="submitSkupljeniKorisnik" id="submitSkupljeniKorisnik" name="submitSkupljeniKorisnik" value="KORISNIK - SKUPLJENI BODOVI (NAJMANJI - NAJVECI)">
           </form>
        </div>  
       <div class="reg">
            <form class="form" id="potroseniForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?idVrste=3">
                 <input type="submit" class="submitPotroseniKorisnik" id="submitPotroseniKorisnik" name="submitPotroseniKorisnik" value="KORISNIK - POTROSENI BODOVI (NAJVECI - NAJMANJI)">
           </form>
        </div>  
         <div class="reg">
            <form class="form" id="potroseniForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?idVrste=4">
                 <input type="submit" class="submitPotroseniKorisnik" id="submitPotroseniKorisnik" name="submitPotroseniKorisnik" value="KORISNIK - POTROSENI BODOVI (NAJMANJI - NAJVECI)">
           </form>
        </div>  
         <div class="reg">
            <form class="form" id="potroseniForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?idVrste=5">
                 <input type="submit" class="submitPotroseniKorisnik" id="submitPotroseniKorisnik" name="submitSkupljeniKorisnik" value="KORISNIK - SKUPLJENI BODOVI AKCIJA (NAJVECI - NAJMANJI)">
           </form>
        </div>  
           <div class="reg">
            <form class="form" id="potroseniForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?idVrste=6">
                 <input type="submit" class="submitPotroseniKorisnik" id="submitPotroseniKorisnik" name="submitSkupljeniKorisnik" value="KORISNIK - SKUPLJENI BODOVI AKCIJA (NAJMANJI - NAJVECI)">
           </form>
        </div>  
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zastavica']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1) {?>
        <table>
            <tr>
                <th>IME</th>
                <th>PREZIME</th>
                <th>BROJ SKUPLJENIH BODOVA</th>
            </tr>
       <?php  $_smarty_tpl->tpl_vars['kb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['korisnikBodovi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kb']->key => $_smarty_tpl->tpl_vars['kb']->value) {
$_smarty_tpl->tpl_vars['kb']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['kb']->value['ime'];?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['kb']->value['prezime'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['kb']->value['broj_skupljenih_bodova'];?>
</td>
            </tr>
        <?php } ?>
        </table>    
        <?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zastavica']->value==2;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2) {?>
            <table>
            <tr>
                <th>IME</th>
                <th>PREZIME</th>
                <th>BROJ POTROSENIH BODOVA</th>
            </tr>
       <?php  $_smarty_tpl->tpl_vars['kb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['korisnikBodovi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kb']->key => $_smarty_tpl->tpl_vars['kb']->value) {
$_smarty_tpl->tpl_vars['kb']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['kb']->value['ime'];?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['kb']->value['prezime'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['kb']->value['broj_potrosenih_bodova'];?>
</td>
            </tr>
        <?php } ?>
        </table>   
         <?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zastavica']->value==3;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3) {?>
            <table>
            <tr>
                <th>IME</th>
                <th>PREZIME</th>
                <th>AKCIJA</th>
                <th>BROJ SKUPLJENIH BODOVA</th>
            </tr>
       <?php  $_smarty_tpl->tpl_vars['kb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['korisnikBodovi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kb']->key => $_smarty_tpl->tpl_vars['kb']->value) {
$_smarty_tpl->tpl_vars['kb']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['kb']->value['ime'];?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['kb']->value['prezime'];?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['kb']->value['naziv_akcije'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['kb']->value['skupljeno_bodova'];?>
</td>
            </tr>
        <?php } ?>
        </table>   
        <?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['zastavica']->value==0;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4) {?>
            
        <?php }}}}?>
     
 </body><?php }} ?>
