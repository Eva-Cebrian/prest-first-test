<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:29
  from 'module:stsidebarviewstemplateshookrightbaritem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f1112726_71896940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c5d3614f01ee531b413b9ce188b3c8d8690f744' => 
    array (
      0 => 'module:stsidebarviewstemplateshookrightbaritem.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f1112726_71896940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 1) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_cart rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_products_cart" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my shopping cart','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-glyph icon_btn <?php }?>"></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	        <span class="ajax_cart_quantity amount_circle <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] == 0) {?> lingge simple_hidden <?php }
if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 9) {?> dozens <?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 2) {?>
	<section id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_compare rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_products_compared" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'),'html' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare Products','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-adjust icon_btn <?php }?>"></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	        <span class="compare_quantity amount_circle <?php if (!count($_smarty_tpl->tpl_vars['compared_products']->value)) {?> lingge simple_hidden <?php }
if (count($_smarty_tpl->tpl_vars['compared_products']->value) > 9) {?> dozens <?php }?>"><?php echo htmlspecialchars((string) count($_smarty_tpl->tpl_vars['compared_products']->value), ENT_QUOTES, 'UTF-8');?>
</span>
	    </a>
	</section>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 3) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_viewed rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_viewed" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recently Viewed','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-history icon_btn<?php }?>"></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	        <span class="products_viewed_nbr amount_circle <?php if ($_smarty_tpl->tpl_vars['products_viewed_nbr']->value == 0) {?> lingge <?php }?> <?php if ($_smarty_tpl->tpl_vars['products_viewed_nbr']->value > 9) {?> dozens <?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['products_viewed_nbr']->value, ENT_QUOTES, 'UTF-8');?>
</span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 4) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_qrcode rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_qrcode" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'QR code','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-qrcode<?php }?>"></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'QR code','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 5) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="to_top_wrap rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> href="#top_bar" class="to_top_btn<?php }?> icon_wrap with_text" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>"><i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-up-open-2<?php }?>"></i><span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span></a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 6) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_menu rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
		<a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_stmobilemenu" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
		    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-menu<?php }?>"></i>
		    <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
		</a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 7) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_nav rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_mobile_nav" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-ellipsis<?php }?>"></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 8) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_search rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_search" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-search-1<?php }?>"></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 14) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_advanced_search rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_advanced_search" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-search-1<?php }?>"></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 9) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_share rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_share" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-share-1<?php }?>"></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 10) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_loved rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_loved" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loved products','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-heart-4 icon_btn <?php }?>"></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loved','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	        <span class="products_loved_nbr amount_circle <?php if ($_smarty_tpl->tpl_vars['products_loved_nbr']->value == 0) {?> lingge <?php }
if ($_smarty_tpl->tpl_vars['products_loved_nbr']->value > 9) {?> dozens <?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['products_loved_nbr']->value, ENT_QUOTES, 'UTF-8');?>
</span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 13) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_compare rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a href="<?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stcompare_url']->value, ENT_QUOTES, 'UTF-8');
}?>" class="icon_wrap with_text" data-name="side_compare" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product comparison','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-ajust icon_btn <?php }?>"></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	        <span class="stcompare_quantity amount_circle <?php if ($_smarty_tpl->tpl_vars['stcompare_nbr']->value == 0) {?> lingge <?php }
if ($_smarty_tpl->tpl_vars['stcompare_nbr']->value > 9) {?> dozens <?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stcompare_nbr']->value, ENT_QUOTES, 'UTF-8');?>
</span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 15) {?>
	<?php if ((isset($_smarty_tpl->tpl_vars['nav_products']->value)) && ($_smarty_tpl->tpl_vars['nav_products']->value['prev'] || $_smarty_tpl->tpl_vars['nav_products']->value['next'])) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav_products']->value, 'product', false, 'nav');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
			<?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
				<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nav']->value, ENT_QUOTES, 'UTF-8');?>
" class="rightbar_product_link_nav rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
				    <a class="icon_wrap with_text" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
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
}?>"></i><span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['nav']->value == 'prev') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prev','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['nav']->value == 'next') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span></a>
				</div>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }
} elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 11 || $_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 12) {
} elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 16) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_customersignin rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a href="<?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'my-account'),$_smarty_tpl ) );
}?>" class="icon_wrap with_text" data-name="side_customersignin_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
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
} else { ?>fto-user icon_btn<?php }?>"></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->tpl_vars['logged']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}
}?></span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 17) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_language rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_language" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language switcher','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
}?>"><?php if (!$_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');
}?></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 18) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_currency rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_currency" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency switcher','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
}?>"><?php if (!$_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');
}?></i>
	        <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
	    </a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 19) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_menu rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
		<a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_steasymenu" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
		    <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-menu<?php }?>"></i>
		    <span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
		</a>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 20) {?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_menu rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
		<a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="side_feds_offcanvas_tri <?php }?> icon_wrap with_text" data-name="side_stfacetedsearch" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" rel="nofollow" title="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filters','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>">
			<i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-menu<?php }?>"></i>
			<span class="icon_text"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
		</a>
	</div>
<?php } else { ?>
	<div id="rightbar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" class="rightbar_custom rightbar_wrap rightbar_visi_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
">
	    <a <?php if ((isset($_smarty_tpl->tpl_vars['sidebar_item']->value['url'])) && $_smarty_tpl->tpl_vars['sidebar_item']->value['url']) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class=" <?php } else { ?> href="javascript:;"  class="rightbar_tri <?php }?> icon_wrap with_text" data-name="side_custom_sidebar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['direction'] == 2) {?>left<?php } else { ?>right<?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
	        <i class="<?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-info-circled<?php }?>"></i>
	        <span class="icon_text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
	    </a>
	</div>
<?php }
}
}
