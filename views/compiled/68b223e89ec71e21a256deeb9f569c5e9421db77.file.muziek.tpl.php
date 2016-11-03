<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 09:09:37
         compiled from "views\muziek.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2707658134bb3e1f8f7-01793124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68b223e89ec71e21a256deeb9f569c5e9421db77' => 
    array (
      0 => 'views\\muziek.tpl',
      1 => 1478160148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2707658134bb3e1f8f7-01793124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58134bb3e202b8_05455571',
  'variables' => 
  array (
    'result1' => 0,
    'frame1' => 0,
    'twoItem' => 0,
    'frame2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58134bb3e202b8_05455571')) {function content_58134bb3e202b8_05455571($_smarty_tpl) {?>
  <br><br>
   <div class="wrapper">
    <?php  $_smarty_tpl->tpl_vars['twoItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['twoItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['twoItem']->key => $_smarty_tpl->tpl_vars['twoItem']->value) {
$_smarty_tpl->tpl_vars['twoItem']->_loop = true;
?>
    <section>
        <article>
             <?php echo $_smarty_tpl->tpl_vars['frame1']->value;?>
<?php echo $_smarty_tpl->tpl_vars['twoItem']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['frame2']->value;?>

        </article>
        <br>
    </section>
    <?php } ?>
</div>
<?php }} ?>
