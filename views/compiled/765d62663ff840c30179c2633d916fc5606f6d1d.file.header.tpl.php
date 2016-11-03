<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 10:13:20
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1212957f222ba285ef1-42609713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1477642399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1212957f222ba285ef1-42609713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f222ba2ce3c9_01141452',
  'variables' => 
  array (
    'name' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f222ba2ce3c9_01141452')) {function content_57f222ba2ce3c9_01141452($_smarty_tpl) {?><header>
<img src="Afbeeldingen/Eminem-banner.jpg"  alt="banner" style="width: 15%; height:5%;">
   <br>
<!--   <button><a href="?action=admin"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></button>-->
    <ul>
        <li><a href="?action=home">Home</a></li>
        <li><a href="?action=muziek">Muziek</a></li>
        <input type="search" value="Zoeken">
        <?php if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?>
        <li><a href="?action=login">Log in/out</a></li>
        <?php } else { ?>
        <li><a href="?action=admin">Admin/logout</a></li>
        <?php }?>
        <li><a href="?action=about">About</a></li>
        
    </ul>
</header>
<br>


<?php if (!isset($_smarty_tpl->tpl_vars['user']->value==false)) {?>
<h2>Welkom!, <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h2>
<?php }?><?php }} ?>
