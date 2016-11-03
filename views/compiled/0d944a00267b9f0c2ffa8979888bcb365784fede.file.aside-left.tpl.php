<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 13:22:25
         compiled from "views\aside-left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114495817182566b0d0-94099906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d944a00267b9f0c2ffa8979888bcb365784fede' => 
    array (
      0 => 'views\\aside-left.tpl',
      1 => 1478089344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114495817182566b0d0-94099906',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5817182566d493_92643939',
  'variables' => 
  array (
    'result2' => 0,
    'twoItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5817182566d493_92643939')) {function content_5817182566d493_92643939($_smarty_tpl) {?><aside> 
<h3>Recente posts</h3>
<hr>
<?php  $_smarty_tpl->tpl_vars['twoItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['twoItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['twoItem']->key => $_smarty_tpl->tpl_vars['twoItem']->value) {
$_smarty_tpl->tpl_vars['twoItem']->_loop = true;
?>
<p><?php echo $_smarty_tpl->tpl_vars['twoItem']->value['title'];?>
</p>
<?php } ?>
</aside>
<article>

<?php }} ?>
