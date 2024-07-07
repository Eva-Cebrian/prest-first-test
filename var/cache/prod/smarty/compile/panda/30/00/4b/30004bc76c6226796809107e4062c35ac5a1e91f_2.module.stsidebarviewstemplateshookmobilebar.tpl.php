<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stsidebarviewstemplateshookmobilebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a8dddb0_63143659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30004bc76c6226796809107e4062c35ac5a1e91f' => 
    array (
      0 => 'module:stsidebarviewstemplateshookmobilebar.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stsearchbar/views/templates/hook/stsearchbar-block.tpl' => 1,
  ),
),false)) {
function content_668ab42a8dddb0_63143659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (count($_smarty_tpl->tpl_vars['mobilebar']->value)) {?>
	<!-- MODULE st stsidebar -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mobilebar']->value, 'sidebar_item');
$_smarty_tpl->tpl_vars['sidebar_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sidebar_item']->value) {
$_smarty_tpl->tpl_vars['sidebar_item']->do_else = false;
if ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 1) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my shopping cart','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=" <?php } else { ?> href="javascript:;" class="mobile_bar_tri <?php }?> cart_mobile_bar_tri mobile_bar_item shopping_cart_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_cart_style']->value, ENT_QUOTES, 'UTF-8');?>
" data-name="side_products_cart" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>">
		<div class="ajax_cart_bag">
			<?php $_smarty_tpl->_assignInScope('block_cart_info', Configuration::get('ST_BLOCK_CART_INFO'));?>
			<?php if ($_smarty_tpl->tpl_vars['block_cart_info']->value&4) {?><span class="ajax_cart_quantity amount_circle <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 9) {?> dozens <?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			<span class="ajax_cart_bg_handle"></span>
			<i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-glyph icon_btn <?php }?> fs_xl"></i>
		</div>
		<span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 2) {?>
	
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 3) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=" <?php } else { ?> href="javascript:;" class="mobile_bar_tri <?php }?> viewed_mobile_bar_tri mobile_bar_item" data-name="side_viewed" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recently Viewed','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-history icon_btn <?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['products_viewed_nbr']->value, ENT_QUOTES, 'UTF-8');?>
)</span>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 4) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=" <?php } else { ?> href="javascript:;" class="mobile_bar_tri <?php }?> qrcode_mobile_bar_tri mobile_bar_item" data-name="side_qrcode" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'QR code','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-qrcode<?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'QR code','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 5) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="to_top_mobile_bar_tri mobile_bar_item"  href="<?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');
} else { ?>#top_bar<?php }?>" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-up-open-2<?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 6) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=" <?php } else { ?> href="javascript:;" class="mobile_bar_tri <?php }?> menu_mobile_bar_tri mobile_bar_item  <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['menu_icon_with_text'] == 1) {?> with_text<?php }?>" data-name="side_stmobilemenu" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-menu<?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 7) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=" <?php } else { ?> href="javascript:;" class="mobile_bar_tri <?php }?> customer_mobile_bar_tri mobile_bar_item" data-name="side_mobile_nav" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-ellipsis<?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 8) {?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['quick_search_mobile']->value)) || !$_smarty_tpl->tpl_vars['quick_search_mobile']->value) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" data-name="side_search" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=" <?php } else { ?> href="javascript:;" class="mobile_bar_tri <?php }?> search_mobile_bar_tri mobile_bar_item" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-search-1<?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	</a>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender('module:stsearchbar/views/templates/hook/stsearchbar-block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php }
} elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 14) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" data-name="side_advanced_search" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=" <?php } else { ?> href="javascript:;" class="mobile_bar_tri <?php }?> advanced_search_mobile_bar_tri mobile_bar_item" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-search-1<?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 9) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" data-name="side_share" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=" <?php } else { ?> href="javascript:;" class="mobile_bar_tri <?php }?> share_mobile_bar_tri mobile_bar_item" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-share-1<?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 10) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" data-name="side_loved" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=" <?php } else { ?> href="javascript:;" class="mobile_bar_tri <?php }?> loved_mobile_bar_tri mobile_bar_item" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loved','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-heart-4 icon_btn <?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loved','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 13) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" data-name="side_compare" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" href="<?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stcompare_url']->value, ENT_QUOTES, 'UTF-8');
}?>" class="compare_mobile_bar_tri mobile_bar_item" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product comparison','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-ajust icon_btn <?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 15) {?>
	<?php if ((isset($_smarty_tpl->tpl_vars['nav_products']->value)) && ($_smarty_tpl->tpl_vars['nav_products']->value['prev'] || $_smarty_tpl->tpl_vars['nav_products']->value['next'])) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav_products']->value, 'product', false, 'nav');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
			<?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
				<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nav']->value, ENT_QUOTES, 'UTF-8');?>
" class="productlinknav_mobile_bar_tri mobile_bar_item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-name="side_productlinknav" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['nav']->value == 'prev') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous product','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['nav']->value == 'next') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next product','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>"><i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
if ($_smarty_tpl->tpl_vars['nav']->value == 'prev') {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['nav']->value == 'next') {
echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'],'left','right'), ENT_QUOTES, 'UTF-8');
}
} else { ?>fto-<?php if ($_smarty_tpl->tpl_vars['nav']->value == 'prev') {?>left<?php }
if ($_smarty_tpl->tpl_vars['nav']->value == 'next') {?>right<?php }
}?> fs_xl"></i><span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['nav']->value == 'prev') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prev','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['nav']->value == 'next') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span></a>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }
} elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 11 || $_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 12) {
} elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 16) {?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" data-name="side_customersignin" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" href="<?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'my-account'),$_smarty_tpl ) );
}?>" class="customersignin_mobile_bar_tri mobile_bar_item" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->tpl_vars['logged']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}
}?>">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-user icon_btn<?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->tpl_vars['logged']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}
}?></span>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 17) {?>
	    <a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
"  data-name="side_language" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="mobile_bar_tri <?php }?> language_mobile_bar_tri mobile_bar_item" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language switcher','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
}?> fs_xl"><?php if (!$_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');
}?></i>
	        <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	    </a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 18) {?>
	    <a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
"  data-name="side_currency" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="mobile_bar_tri <?php }?> currency_mobile_bar_tri mobile_bar_item" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency switcher','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
}?> fs_xl"><?php if (!$_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');
}?></i>
	        <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	    </a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 19) {?>
		<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
"  data-name="side_steasymenu" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="mobile_bar_tri <?php }?> easymenu_mobile_bar_tri mobile_bar_item" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
		    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-menu<?php }?> fs_xl"></i>
		    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
		</a>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 20) {?>
		<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
"  data-name="side_stfacetedsearch" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="mobile_bar_tri <?php }?> easymenu_mobile_bar_tri mobile_bar_item" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Transformer'),$_smarty_tpl ) );
}?>">
		    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-menu<?php }?> fs_xl"></i>
		    <span class="mobile_bar_tri_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Transformer'),$_smarty_tpl ) );
}?></span>
		</a>
<?php } else { ?>
	<a id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" data-name="side_custom_sidebar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class=" <?php } else { ?> href="javascript:;" class="mobile_bar_tri <?php }?> custom_mobile_bar_tri mobile_bar_item" rel="nofollow" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
	    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-info-circled<?php }?> fs_xl"></i>
	    <span class="mobile_bar_tri_text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
	</a>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /MODULE st stsidebar -->
<?php }
}
}
