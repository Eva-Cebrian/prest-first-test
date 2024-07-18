<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:stshoppingcartviewstemplateshookstshoppingcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa606ac68_56511038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52332e14d92f82d3c12217bc32b7318ae730bb0c' => 
    array (
      0 => 'module:stshoppingcartviewstemplateshookstshoppingcart.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stshoppingcart/views/templates/hook/stshoppingcart-list.tpl' => 1,
  ),
),false)) {
function content_668adaa606ac68_56511038 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stshoppingcart -->
<div class="blockcart dropdown_wrap top_bar_item shopping_cart_style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_cart_style']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['block_cart_style']->value == 4) {?> header_icon_btn_3 <?php }?> clearfix" data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my shopping cart','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow" class="st_shopping_cart dropdown_tri header_item <?php if ($_smarty_tpl->tpl_vars['click_on_header_cart']->value) {?> rightbar_tri <?php }?>" data-name="side_products_cart" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['click_on_header_cart']->value == 2) {?>left<?php } else { ?>right<?php }?>"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "block_cart_info", null, null);
if ($_smarty_tpl->tpl_vars['block_cart_info']->value&1) {?><span class="cart_text mar_r4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping cart','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><?php }
if ($_smarty_tpl->tpl_vars['block_cart_info']->value&2) {?><span class="ajax_cart_quantity mar_r4"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span><span class="ajax_cart_product_txt mar_r4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'item(s)','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><?php }
if (($_smarty_tpl->tpl_vars['block_cart_info']->value&1 || $_smarty_tpl->tpl_vars['block_cart_info']->value&2) && $_smarty_tpl->tpl_vars['block_cart_info']->value&8) {?><span class="ajax_cart_split mar_r4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><?php }
if ($_smarty_tpl->tpl_vars['block_cart_info']->value&8) {?><span class="ajax_cart_total mar_r4"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['block_cart_style']->value == 4 || $_smarty_tpl->tpl_vars['block_cart_style']->value == 3 || $_smarty_tpl->tpl_vars['block_cart_style']->value == 2) {?><span class="header_icon_btn_icon header_v_align_m <?php if ($_smarty_tpl->tpl_vars['block_cart_style']->value != 4) {?> mar_r4 <?php }?>"><i class="fto-glyph icon_btn"></i><?php if ($_smarty_tpl->tpl_vars['block_cart_info']->value&4) {?><span class="ajax_cart_quantity amount_circle <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 9) {?> dozens <?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span><span class="header_icon_btn_text header_v_align_m"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'block_cart_info');?>
</span><?php } else { ?><div class="flex_container"><div class="ajax_cart_bag mar_r4"><?php if ($_smarty_tpl->tpl_vars['block_cart_info']->value&4) {?><span class="ajax_cart_quantity amount_circle <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 9) {?> dozens <?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?><span class="ajax_cart_bg_handle"></span></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'block_cart_info');?>
</div><?php }?></a><?php if ($_smarty_tpl->tpl_vars['hover_display_cp']->value) {?><div class="dropdown_list cart_body <?php if ($_smarty_tpl->tpl_vars['hover_display_cp']->value == 1 && !$_smarty_tpl->tpl_vars['cart']->value['products_count']) {?> no_show_empty <?php }?>"><div class="dropdown_box"><?php $_smarty_tpl->_subTemplateRender('module:stshoppingcart/views/templates/hook/stshoppingcart-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('from'=>"dropdown"), 0, false);
?></div></div><?php }?></div><!-- /MODULE st stshoppingcart --><?php }
}
