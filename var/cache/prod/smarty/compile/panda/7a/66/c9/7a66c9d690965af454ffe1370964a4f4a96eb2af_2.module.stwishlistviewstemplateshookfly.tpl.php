<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:13:04
  from 'module:stwishlistviewstemplateshookfly.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adab0c5a876_30172655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a66c9d690965af454ffe1370964a4f4a96eb2af' => 
    array (
      0 => 'module:stwishlistviewstemplateshookfly.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adab0c5a876_30172655 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stwishlist -->
<a class="add_to_wishlist hover_fly_btn <?php if ((isset($_smarty_tpl->tpl_vars['classname']->value))) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['fromnocache']->value)) && $_smarty_tpl->tpl_vars['fromnocache']->value && (isset($_smarty_tpl->tpl_vars['is_wished']->value)) && $_smarty_tpl->tpl_vars['is_wished']->value) {?> st_added <?php }?> pro_right_item stwish_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
 <?php if (!(isset($_smarty_tpl->tpl_vars['fromnocache']->value)) || !$_smarty_tpl->tpl_vars['fromnocache']->value) {?> stwish_from_cache_block <?php }?>" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow"><div class="hover_fly_btn_inner"><i class="fto-star icon_btn"></i><span class="btn_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['count'])) && $_smarty_tpl->tpl_vars['product']->value['count']) {?>(<span class="wishlist_product_count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['count'], ENT_QUOTES, 'UTF-8');?>
</span>)<?php }?></div></a>
<!-- /MODULE st stwishlist --><?php }
}
