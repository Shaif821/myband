<?php /* Smarty version Smarty-3.1.18, created on 2016-10-11 10:53:00
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1844057f22988e00d87-07030092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1476175979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1844057f22988e00d87-07030092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f22988e49c49_78955255',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f22988e49c49_78955255')) {function content_57f22988e49c49_78955255($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\School-Localhost\\School\\Leerjaar-2\\Project\\MyBand-local\\libs\\plugins\\modifier.date_format.php';
?><section>
  <hr>
   <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
   <article>
       <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
       <img class="artimg" src="Afbeeldingen/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
"><br><br>
       <content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content><br>
       <br>
<!--       <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d %B %Y");?>
</p>   -->
  <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d %B %Y");?>
</p>
  <hr>
    </article>
   <?php } ?>

</section>
















<?php }} ?>
