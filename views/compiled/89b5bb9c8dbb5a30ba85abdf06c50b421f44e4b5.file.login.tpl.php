<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 12:42:46
         compiled from "views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145645811a5fbdaf138-06891029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b5bb9c8dbb5a30ba85abdf06c50b421f44e4b5' => 
    array (
      0 => 'views\\login.tpl',
      1 => 1477914165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145645811a5fbdaf138-06891029',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5811a5fbdd9c43_74251760',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811a5fbdd9c43_74251760')) {function content_5811a5fbdd9c43_74251760($_smarty_tpl) {?>
 <div class="inlog">
  <h1>Log In</h1>
   <form method="POST" action="model/login.php"  style="text-align:center;">
    Username<br><input type="text" name="user" placeholder="username"><br>
    Password<br><input type="password" name="pass" placeholder="password"><br>
    <br>
    <button type="submit">Inloggen</button>
    </form>
    </div>
    
    <div class="inlog">
  <h1>Registreer</h1>
   <form method="POST" action="model/signup.php" style="text-align:center;">
    Naam<br><input type="text" name="first" placeholder="firstname"><br>
    Achternaam<br><input type="text" name="last" placeholder="lastname"><br>
    Username<br><input type="text" name="user" placeholder="username"><br>
    Password<br><input type="password" name="pass" placeholder="password"><br>
    <br>
    <button type="submit">Sign Up</button>
    </form>
    </div>
<?php }} ?>
