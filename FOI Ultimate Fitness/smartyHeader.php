<?php

require_once './Smarty/libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->caching = false;
$smarty->compile_check = true;
$smarty->force_compile = true;
$smarty->template_dir = './templates';
$smarty->compile_dir = './templates_c';

?>
