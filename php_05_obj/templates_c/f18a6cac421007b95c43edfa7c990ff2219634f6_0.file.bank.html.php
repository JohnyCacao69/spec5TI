<?php
/* Smarty version 4.3.2, created on 2024-02-16 10:47:24
  from 'C:\xampp\htdocs\php_05_obj\app\bank.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65cf2f2cdeded6_26979943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f18a6cac421007b95c43edfa7c990ff2219634f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_obj\\app\\bank.html',
      1 => 1708076830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cf2f2cdeded6_26979943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156889124565cf2f2cda7a99_18782502', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42842535765cf2f2cdab298_30048295', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_156889124565cf2f2cda7a99_18782502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_156889124565cf2f2cda7a99_18782502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_42842535765cf2f2cdab298_30048295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_42842535765cf2f2cdab298_30048295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div style="width:90%; margin: 2em auto;">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div> 

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/bank.php" method="post">
<fieldset>
	<label for="kwota">Podaj kwote kredytu: </label>
	<input id="kwota" type="number" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" /><br />

	<label for="proc">Podaj procent: </label>
	<input id="proc" type="text" name="proc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->proc;?>
" /><br/>

	<label for="rok">Podaj na ile lat bierzesz kredyt: </label>
	<input id="rok" type="number" name="rok" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rok;?>
" /><br />
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
	
</form>	

<div class="messages">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	
<?php }?>


	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>

<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
