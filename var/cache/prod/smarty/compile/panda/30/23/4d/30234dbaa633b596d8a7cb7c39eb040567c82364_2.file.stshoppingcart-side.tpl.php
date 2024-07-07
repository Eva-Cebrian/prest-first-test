<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stshoppingcart/views/templates/hook/stshoppingcart-side.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b0f6492_29674531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30234dbaa633b596d8a7cb7c39eb040567c82364' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stshoppingcart/views/templates/hook/stshoppingcart-side.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:stshoppingcart/views/templates/hook/stshoppingcart-list.tpl' => 1,
  ),
),false)) {
function content_668ab42b0f6492_29674531 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stshoppingcart -->
<nav class="st-menu" id="side_products_cart">
	<div class="st-menu-header flex_container">
		<h3 class="st-menu-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping cart','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</h3>
    	<a href="javascript:;" class="close_right_side" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-cancel-2"></i></a>
	</div>
	<div id="side_cart_block" class="pad_10">
		<?php $_smarty_tpl->_subTemplateRender('module:stshoppingcart/views/templates/hook/stshoppingcart-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</nav>
<!-- /MODULE st stshoppingcart --><?php }
}
