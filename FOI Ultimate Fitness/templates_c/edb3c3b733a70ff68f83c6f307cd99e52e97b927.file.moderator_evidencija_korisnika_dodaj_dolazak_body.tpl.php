<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-14 17:22:29
         compiled from "templates/moderator_evidencija_korisnika_dodaj_dolazak_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161994249594154b50adcf3-62501856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edb3c3b733a70ff68f83c6f307cd99e52e97b927' => 
    array (
      0 => 'templates/moderator_evidencija_korisnika_dodaj_dolazak_body.tpl',
      1 => 1497395786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161994249594154b50adcf3-62501856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'korisnik' => 0,
    'program' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594154b50e1fc2_07316812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594154b50e1fc2_07316812')) {function content_594154b50e1fc2_07316812($_smarty_tpl) {?><body>    
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
<div class="reg">
        <span style="color: red; margin: 0 auto;" id="korisnickoImeError"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
        <br>
        <h1 style="text-align: center;">Dodavanje dolaska</h1>
     <form class="form" id="logForma" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?idKorisnik=<?php echo $_smarty_tpl->tpl_vars['korisnik']->value;?>
&idProgram=<?php echo $_smarty_tpl->tpl_vars['program']->value;?>
">
         <input type="date" class="name" name="datum" id="datum" style="display: inline-block; text-align: center;">
         <br>
        <textarea name="opisNapredovanja" id="opisNapredovanja" cols="40" rows="5"></textarea>
        <input type="submit" class="submit" id="dolazakSubmit" name="dolazakSubmit" value="Dodaj">
     </form>
</div>
</body><?php }} ?>
