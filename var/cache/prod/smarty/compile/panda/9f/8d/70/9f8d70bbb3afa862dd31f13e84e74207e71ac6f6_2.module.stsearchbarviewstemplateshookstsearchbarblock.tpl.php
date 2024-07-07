<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stsearchbarviewstemplateshookstsearchbarblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f077fb98_79162921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f8d70bbb3afa862dd31f13e84e74207e71ac6f6' => 
    array (
      0 => 'module:stsearchbarviewstemplateshookstsearchbarblock.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f077fb98_79162921 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search_widget_block <?php if ((isset($_smarty_tpl->tpl_vars['headerclass']->value))) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['headerclass']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?>">
<div class="search_widget" data-search-controller-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form method="get" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="search_widget_form">
		<input type="hidden" name="controller" value="search">
		<div class="search_widget_form_inner input-group round_item js-parent-focus input-group-with-border">
	      <input type="text" class="form-control search_widget_text js-child-focus" name="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php if ((isset($_smarty_tpl->tpl_vars['quick_search_placeholder']->value)) && $_smarty_tpl->tpl_vars['quick_search_placeholder']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['quick_search_placeholder']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	      <span class="input-group-btn">
	        <button class="btn btn-search btn-no-padding btn-spin search_widget_btn link_color icon_btn" type="submit"><i class="fto-search-1"></i></button>
	      </span>
	    </div>

	</form>
	<div class="search_results <?php if ($_smarty_tpl->tpl_vars['quick_search_as_results']->value&1) {?> search_show_img <?php }
if ($_smarty_tpl->tpl_vars['quick_search_as_results']->value&2) {?> search_show_name <?php }
if ($_smarty_tpl->tpl_vars['quick_search_as_results']->value&4) {?> search_show_price <?php }?>"></div>
	<a href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More products.','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow" class="display_none search_more_products go"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click for more products.','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a>
	<div class="display_none search_no_products"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products were found.','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</div>
</div>
</div>
<?php }
}
