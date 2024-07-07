<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:33:27
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stmegamenu/views/templates/admin/_configure/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab5473794a3_41833510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '108a00018c62f2629197b76e5a6af3c27af32c90' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stmegamenu/views/templates/admin/_configure/helpers/list/list_header.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab5473794a3_41833510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190683082668ab5473777b9_73468463', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_190683082668ab5473777b9_73468463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_190683082668ab5473777b9_73468463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['navigate']->value)) && count($_smarty_tpl->tpl_vars['navigate']->value)) {?>
	<ul class="breadcrumb cat_bar2">
		<?php $_smarty_tpl->_assignInScope('i', 0);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigate']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<li>
			<?php if ($_smarty_tpl->tpl_vars['i']->value++ == 0) {?>
				<i class="icon-home"></i>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['item']->value;?>

		</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
    <?php }
}
}
/* {/block 'override_header'} */
}
