<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-07 18:08:24
         compiled from "templates/kuponi_admin_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2132015338593824f82df301-08782426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eb4527d521b556d8cb36b9a879a76b147a55846' => 
    array (
      0 => 'templates/kuponi_admin_body.tpl',
      1 => 1496850026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132015338593824f82df301-08782426',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593824f82e2a05_25287734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593824f82e2a05_25287734')) {function content_593824f82e2a05_25287734($_smarty_tpl) {?><body>    
   <div class="reg">
    <h1 style="text-align: center;">Dodavanje kupona</h1>
    <form enctype="multipart/form-data" class="form" id="regForma" method="post" action="kuponi_upload.php">
    <input type="text" class="name" name="nazivKupona" id="nazivKupona" placeholder="Naziv kupona">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Dodaj PDF: <input type="file" />
    <input type="submit" class="submit" id="kuponSubmit" name="kuponSubmit" value="Kreiraj">
    </form>
   </div>
</body><?php }} ?>
