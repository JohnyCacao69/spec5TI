<?php
/* Smarty version 4.3.2, created on 2023-11-17 10:48:33
  from 'C:\xampp\htdocs\php_04_smarty_uproszczony\app\security\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_655736f19761a5_37569388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df3957ed6f3994283b7bf55b589cb285f17e096f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_smarty_uproszczony\\app\\security\\login.html',
      1 => 1700214382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655736f19761a5_37569388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1009592181655736f1944614_82230352', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1845674782655736f194b0d9_03000763', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.html");
}
/* {block 'footer'} */
class Block_1009592181655736f1944614_82230352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1009592181655736f1944614_82230352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1845674782655736f194b0d9_03000763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1845674782655736f194b0d9_03000763',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div style="width:90%; margin: 2em auto;">


<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="login">login: </label>
		<input id="login" type="text" name="login" />
		<label for="pass">pass: </label>
		<input id="pass" type="password" name="pass" />
	</fieldset>
	<button type="submit"class="pure-button pure-button-primary">Zaloguj</button>
</form>	
</div>
<div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>




</div>

<?php
}
}
/* {/block 'content'} */
}
