<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:29
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stviewedproducts/views/templates/hook/stviewedproducts-side.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f10ca310_20937434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fdd3bf45880a7a5e35a68978ed1e86d62f7911f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stviewedproducts/views/templates/hook/stviewedproducts-side.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-slider-item-compact.tpl' => 1,
  ),
),false)) {
function content_668a67f10ca310_20937434 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stviewedproducts -->
<nav class="st-menu" id="side_viewed">
	<div class="st-menu-header flex_container">
		<h3 class="st-menu-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recently Viewed','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</h3>
    	<a href="javascript:;" class="close_right_side" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-cancel-2"></i></a>
	</div>
	<div id="side_viewed_block" class="pad_10 base_list_line medium_list">
		<?php if ((isset($_smarty_tpl->tpl_vars['viewed_products']->value)) && count($_smarty_tpl->tpl_vars['viewed_products']->value)) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['viewed_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
	            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-slider-item-compact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_google_rich_snippets'=>true), 0, true);
?>
	        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<div class="viewed_products_no_products">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

			</div>
		<?php }?>
	</div>
</nav>
<!-- /MODULE st stviewedproducts --><?php }
}
