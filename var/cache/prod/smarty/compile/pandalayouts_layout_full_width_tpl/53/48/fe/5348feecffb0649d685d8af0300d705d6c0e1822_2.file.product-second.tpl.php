<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:31:30
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/product/product-second.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4d28d1c17_11197273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5348feecffb0649d685d8af0300d705d6c0e1822' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/product/product-second.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-tabs.tpl' => 1,
  ),
),false)) {
function content_668ab4d28d1c17_11197273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1679457786668ab4d28ce1e5_10170100', 'product_middle');
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayProductDescRightColumn", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductDescRightColumn"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('show_desc_right_column', 0);
if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_desc_secondary_column_md'] && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayProductDescRightColumn') ))) {
$_smarty_tpl->_assignInScope('show_desc_right_column', 1);
}?>
<div class="row product_desc_block">
<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['product_tabs'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?><div class="product_desc_column col-md-<?php if ($_smarty_tpl->tpl_vars['show_desc_right_column']->value) {
echo htmlspecialchars((string) 12-$_smarty_tpl->tpl_vars['sttheme']->value['pro_desc_secondary_column_md'], ENT_QUOTES, 'UTF-8');
} else { ?>12<?php }
if ($_smarty_tpl->tpl_vars['sttheme']->value['product_tabs']) {?> display_none <?php }?>"><div class="bottom_more_info_block pro_more_info p-t-1 p-b-1 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_tabs_style'] == 1) {?> accordion_more_info <?php }?>"><?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['product_tabs']) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?></div></div><?php }?>

<div class="product_desc_right_column <?php if ($_smarty_tpl->tpl_vars['show_desc_right_column']->value) {?>col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_desc_secondary_column_md'], ENT_QUOTES, 'UTF-8');
} else { ?>display_none<?php }?>">
	<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayProductDescRightColumn');?>

</div>
</div><?php }
/* {block 'product_middle'} */
class Block_1679457786668ab4d28ce1e5_10170100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_middle' => 
  array (
    0 => 'Block_1679457786668ab4d28ce1e5_10170100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMiddleProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'product_middle'} */
}
