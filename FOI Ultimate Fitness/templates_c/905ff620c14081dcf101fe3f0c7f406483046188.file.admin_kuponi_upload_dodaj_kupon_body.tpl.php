<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:03:10
         compiled from "templates/admin_kuponi_upload_dodaj_kupon_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20214466705952d61e9d7ae8-48808264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '905ff620c14081dcf101fe3f0c7f406483046188' => 
    array (
      0 => 'templates/admin_kuponi_upload_dodaj_kupon_body.tpl',
      1 => 1497395781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20214466705952d61e9d7ae8-48808264',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d61ea0daf8_50276674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d61ea0daf8_50276674')) {function content_5952d61ea0daf8_50276674($_smarty_tpl) {?><body>
    <div class="reg">
         <form action="#file" id="novi" class="novi_proizvod" method='post' enctype="multipart/form-data">
             <input type="text" name="nazivKupona" placeholder="Naziv kupona"/>
             <br><br>
             <label for="file" style="font-size: 16px; color: white; font-weight: bold;">PDF (opis kupona):</label>
             <input type="file" name="pdf" id="pdf" style="color: white; "/><br><br>
             <label for="file1" style="font-size: 16px; color: white; font-weight: bold;">Slika:</label>
             <input type="file" name="slika" id="slika" style="color: white; "/><br><br>
             <label for="file1" style="font-size: 16px; color: white; font-weight: bold;">Video:</label>
             <input type="file2" name="video" id="video" style="color: white; "/><br><br>

                <input id="submitKupon" class="submitKupon" type="submit" name="submitKupon" value="Unesi novi kupon"/><br><br>
    </form>
    </div>
</body><?php }} ?>
