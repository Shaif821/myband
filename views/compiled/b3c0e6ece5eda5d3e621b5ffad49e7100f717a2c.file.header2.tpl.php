<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 10:23:41
         compiled from "views\header2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1356858130b0dcde2b0-02586103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3c0e6ece5eda5d3e621b5ffad49e7100f717a2c' => 
    array (
      0 => 'views\\header2.tpl',
      1 => 1477643019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1356858130b0dcde2b0-02586103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58130b0dd0d985_65598487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58130b0dd0d985_65598487')) {function content_58130b0dd0d985_65598487($_smarty_tpl) {?><header>
<img src="Afbeeldingen/Eminem-banner.jpg"  alt="banner" style="width: 15%; height:5%;">
   <br>
<!--   <button><a href="?action=admin"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></button>-->
    <ul>
        <li><a href="?action=home">Home</a></li>
        <li><a href="?action=muziek">Muziek</a></li>
        <input type="search" value="Zoeken">
<!--
        <?php if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?>
        <li><a href="?action=admin">Admin/logout</a></li>
        <?php } else { ?>
-->
        <li><a href="?action=login">Log in/out</a></li>
<!--        <?php }?>-->
        <li><a href="?action=about">About</a></li>
        
    </ul>
</header>
<br><?php }} ?>
