<?php
/* Smarty version 4.3.2, created on 2023-11-17 10:07:10
  from 'C:\xampp\htdocs\php_04_smarty_uproszczony\app\security\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65572d3e4c3166_94258942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5afaa2f6e643458c9669123664b0680752c6186c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_smarty_uproszczony\\app\\security\\login.html',
      1 => 1700212026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65572d3e4c3166_94258942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131360058265572d3e4455c2_95872272', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76537971165572d3e4478c2_95484123', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_131360058265572d3e4455c2_95872272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_131360058265572d3e4455c2_95872272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_76537971165572d3e4478c2_95484123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_76537971165572d3e4478c2_95484123',
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
