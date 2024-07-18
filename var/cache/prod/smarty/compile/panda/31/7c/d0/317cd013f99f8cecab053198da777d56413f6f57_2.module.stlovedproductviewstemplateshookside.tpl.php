<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:stlovedproductviewstemplateshookside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa65c4378_54442905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '317cd013f99f8cecab053198da777d56413f6f57' => 
    array (
      0 => 'module:stlovedproductviewstemplateshookside.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-slider-item-compact.tpl' => 1,
    'module:stblog/views/templates/slider/simple.tpl' => 1,
  ),
),false)) {
function content_668adaa65c4378_54442905 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stlovedproduct -->
<nav class="st-menu" id="side_loved">
	<div class="st-menu-header flex_container">
		<h3 class="st-menu-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loved','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</h3>
    	<a href="javascript:;" class="close_right_side" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-cancel-2"></i></a>
	</div>
	<div id="side_loved_block" class="pad_10">
			<?php $_smarty_tpl->_assignInScope('has_love_items', 0);?>
			<?php if ((isset($_smarty_tpl->tpl_vars['products']->value)) && count($_smarty_tpl->tpl_vars['products']->value)) {?>
        		<h3 class="page_heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loved products','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</h3>
		        <?php $_smarty_tpl->_assignInScope('has_love_items', 1);?>  
		        <div class="base_list_line medium_list">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
		            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-slider-item-compact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('lazy_load'=>false), 0, true);
?>
		        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
		        </div>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['blogs']->value)) && count($_smarty_tpl->tpl_vars['blogs']->value)) {?>
        		<h3 class="page_heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loved articles','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</h3>
		        <?php $_smarty_tpl->_assignInScope('has_love_items', 1);?>  
		        <div class="base_list_line medium_list">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
		            <?php $_smarty_tpl->_subTemplateRender("module:stblog/views/templates/slider/simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('lazy_load'=>false), 0, true);
?>
		        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		        </div>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['has_love_items']->value) {?>
				<div class="loved_products_no_products">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No items','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

				</div>
			<?php } else { ?>
		        <div class="text-center m-t-1">
		        	<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'stlovedproduct','controller'=>'myloved'),$_smarty_tpl ) );?>
" class="btn btn-default btn-more-padding" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a>
		        </div>
			<?php }?>
	</div>
</nav>
<!-- /MODULE st stlovedproduct --><?php }
}
