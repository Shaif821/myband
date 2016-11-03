<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 14:12:04
         compiled from "views\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2291158008fffbb2961-61545356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b9e15c8bea74af24c568bdf519895827a0da35e' => 
    array (
      0 => 'views\\admin.tpl',
      1 => 1478092323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2291158008fffbb2961-61545356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58008fffbe7aa0_62367437',
  'variables' => 
  array (
    'name' => 0,
    'result3' => 0,
    'threeItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58008fffbe7aa0_62367437')) {function content_58008fffbe7aa0_62367437($_smarty_tpl) {?>
<div class="admin">
<h2>Ingelogd als <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>

<form action="model/logout.php">
  <button>Uitloggen</button>
    </form>
    </div>
    
    <div class="content">
   <h1 class="insert">Voeg nieuwe artikelen toe</h1>
   <form method="POST" action="model/insert_newsarticles.php" class="log" enctype="multipart/form-data">
       Afbeelding:<br><input type="file" name="afb" placeholder="Bestand kiezen..."><br>
       Title:<br><input type="text" name="title" placeholder="Vul in..."><br>
       Content:<br><textarea style="height:300px; width: 500px;" type="text" name="cont" placeholder="Vul in..."></textarea><br>
       Video <br>(rechter muisklik op Youtube video en Video-url kopiëren):<br><input type="text" name="vid" placeholder="Vul de url in"><br>
       <br>
       <button type="submit" name="sub">Plaatsen</button>
   </form>
   <br><br>
   
   <hr>
   <div class="admin">
   <h2>Hier kan je nieuwe tracks toevoegen aan de muziek pagina</h2>
   </div>
   <form method="POST" action="model/insert_url.php" class="log" style="background:white; text-align:center;">
       Hieronder kan je Video-url kopiëren. Deze worden toegevoegd aan de Muziek tab<br>
       <input type="text" name="url" placeholder="https://youtu.be/....."><br>
       <button type="submit"> Plaatsen</button>
   </form>
   
   <br>
   
   <hr>
   <div class="delete">
       <h2>Artikelen verwijderen:</h2>
       <form method="POST" action="model/delete_article.php">
       <?php  $_smarty_tpl->tpl_vars['threeItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['threeItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['threeItem']->key => $_smarty_tpl->tpl_vars['threeItem']->value) {
$_smarty_tpl->tpl_vars['threeItem']->_loop = true;
?>
        <div style="border: 2px solid black;">
       <h3><?php echo $_smarty_tpl->tpl_vars['threeItem']->value['title'];?>
</h3><input type="radio" name="del" value="<?php echo $_smarty_tpl->tpl_vars['threeItem']->value['id'];?>
"><br>
       <button name="submit" type="submit">Verwijderen</button>
       </div>
       <?php } ?>
       </form>
      
   </div>
   
  </div><?php }} ?>
