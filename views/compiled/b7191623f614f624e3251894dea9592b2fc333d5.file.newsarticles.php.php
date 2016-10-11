<?php /* Smarty version Smarty-3.1.18, created on 2016-10-03 11:48:39
         compiled from "views\newsarticles.php" */ ?>
<?php /*%%SmartyHeaderCode:2705157f22977949ad3-15469161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7191623f614f624e3251894dea9592b2fc333d5' => 
    array (
      0 => 'views\\newsarticles.php',
      1 => 1475487428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2705157f22977949ad3-15469161',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f229779c10f1_87505625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f229779c10f1_87505625')) {function content_57f229779c10f1_87505625($_smarty_tpl) {?><<?php ?>?php

echo '<section>';

//fetch_assoc should not be in the view!
foreach ($result as $newsItem => $oneItem) {
	
	echo '<article>';
	echo '<h1>'.$oneItem['title'].'</h1>';
	echo '<content>'.$oneItem['content'].'</content>';
    echo '<br><br><img style="width: 500px; height: 300px;" src="Afbeeldingen/' . $oneItem['image'].'" >';
    echo '<p>'.$oneItem['date_created'].'</p';
	echo '</article>';
}

echo '</section>';<?php }} ?>
