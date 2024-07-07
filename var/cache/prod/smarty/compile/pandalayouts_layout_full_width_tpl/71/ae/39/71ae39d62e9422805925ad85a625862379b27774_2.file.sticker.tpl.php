<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/sticker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f09c9949_61669685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71ae39d62e9422805925ad85a625862379b27774' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/sticker.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f09c9949_61669685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('has_sticker_static', 0);
if ((isset($_smarty_tpl->tpl_vars['stickers']->value)) && $_smarty_tpl->tpl_vars['stickers']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stickers']->value, 'ststicker');
$_smarty_tpl->tpl_vars['ststicker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ststicker']->value) {
$_smarty_tpl->tpl_vars['ststicker']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['sticker_position']->value) && in_array($_smarty_tpl->tpl_vars['ststicker']->value['sticker_position'],$_smarty_tpl->tpl_vars['sticker_position']->value) || ((isset($_smarty_tpl->tpl_vars['show_sticker']->value)) && $_smarty_tpl->tpl_vars['show_sticker']->value == 1 && ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 8) && !$_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'] && $_smarty_tpl->tpl_vars['sticker_position']->value[0] != 13)) {
if (!$_smarty_tpl->tpl_vars['has_sticker_static']->value) {?><div class="st_sticker_block"><?php $_smarty_tpl->_assignInScope('has_sticker_static', 1);
}?><div class="st_sticker layer_btn <?php if (in_array(10,$_smarty_tpl->tpl_vars['sticker_position']->value) || in_array(11,$_smarty_tpl->tpl_vars['sticker_position']->value) || in_array(13,$_smarty_tpl->tpl_vars['sticker_position']->value)) {?> st_sticker_static <?php }?> st_sticker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['id_st_sticker'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ststicker']->value['type']) {?> st_sticker_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['type'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang']) {?> st_sticker_img <?php }?>"><?php if ($_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang']) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['height'], ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><span class="st_sticker_text" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ((isset($_smarty_tpl->tpl_vars['ststickers']->value)) && $_smarty_tpl->tpl_vars['ststickers']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ststickers']->value, 'ststicker');
$_smarty_tpl->tpl_vars['ststicker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ststicker']->value) {
$_smarty_tpl->tpl_vars['ststicker']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['sticker_position']->value) && in_array($_smarty_tpl->tpl_vars['ststicker']->value['sticker_position'],$_smarty_tpl->tpl_vars['sticker_position']->value) && (($_smarty_tpl->tpl_vars['flag']->value['type'] == 'new' && $_smarty_tpl->tpl_vars['ststicker']->value['type'] == 1) || ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'on-sale' && $_smarty_tpl->tpl_vars['ststicker']->value['type'] == 2) || ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'online-only' && $_smarty_tpl->tpl_vars['ststicker']->value['type'] == 5) || ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'pack' && $_smarty_tpl->tpl_vars['ststicker']->value['type'] == 6))) {
if (!$_smarty_tpl->tpl_vars['has_sticker_static']->value) {?><div class="st_sticker_block"><?php $_smarty_tpl->_assignInScope('has_sticker_static', 1);
}?><div class="st_sticker layer_btn <?php if (in_array(10,$_smarty_tpl->tpl_vars['sticker_position']->value) || in_array(11,$_smarty_tpl->tpl_vars['sticker_position']->value) || in_array(13,$_smarty_tpl->tpl_vars['sticker_position']->value)) {?> st_sticker_static <?php }?> st_sticker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['id_st_sticker'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ststicker']->value['type']) {?> st_sticker_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['type'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang']) {?> st_sticker_img <?php }?>"><?php if ($_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang']) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
"  width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['height'], ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><span class="st_sticker_text" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ststickers']->value, 'ststicker');
$_smarty_tpl->tpl_vars['ststicker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ststicker']->value) {
$_smarty_tpl->tpl_vars['ststicker']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['sticker_position']->value) && in_array($_smarty_tpl->tpl_vars['ststicker']->value['sticker_position'],$_smarty_tpl->tpl_vars['sticker_position']->value) && ($_smarty_tpl->tpl_vars['product']->value['reduction'] && $_smarty_tpl->tpl_vars['product']->value['show_price'] && $_smarty_tpl->tpl_vars['ststicker']->value['type'] == 3)) {
if (!$_smarty_tpl->tpl_vars['has_sticker_static']->value) {?><div class="st_sticker_block"><?php $_smarty_tpl->_assignInScope('has_sticker_static', 1);
}?><div class="st_sticker layer_btn <?php if (in_array(10,$_smarty_tpl->tpl_vars['sticker_position']->value) || in_array(11,$_smarty_tpl->tpl_vars['sticker_position']->value) || in_array(13,$_smarty_tpl->tpl_vars['sticker_position']->value)) {?> st_sticker_static <?php }?> st_sticker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['id_st_sticker'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ststicker']->value['type']) {?> st_sticker_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['type'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang']) {?> st_sticker_img <?php }?>"><?php if ($_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang']) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
"  width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['height'], ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><span class="st_sticker_text" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
<span class="st_reduce" title="<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');
} else { ?>-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_to_display'], ENT_QUOTES, 'UTF-8');
}?>"><?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');
} else { ?>-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_to_display'], ENT_QUOTES, 'UTF-8');
}?></span></span><?php }?></div><?php }
if (!empty($_smarty_tpl->tpl_vars['sticker_position']->value) && (!(isset($_smarty_tpl->tpl_vars['is_from_product_page']->value)) || !$_smarty_tpl->tpl_vars['is_from_product_page']->value) && in_array($_smarty_tpl->tpl_vars['ststicker']->value['sticker_position'],$_smarty_tpl->tpl_vars['sticker_position']->value) && (($_smarty_tpl->tpl_vars['ststicker']->value['type'] == 4 && $_smarty_tpl->tpl_vars['sticker_quantity']->value <= 0 && !$_smarty_tpl->tpl_vars['sticker_allow_oosp']->value && $_smarty_tpl->tpl_vars['sticker_quantity_all_versions']->value <= 0) || ($_smarty_tpl->tpl_vars['ststicker']->value['type'] == 7 && ($_smarty_tpl->tpl_vars['sticker_quantity']->value > 0 || $_smarty_tpl->tpl_vars['sticker_allow_oosp']->value || $_smarty_tpl->tpl_vars['sticker_quantity_all_versions']->value > 0)))) {
if (!$_smarty_tpl->tpl_vars['has_sticker_static']->value) {?><div class="st_sticker_block"><?php $_smarty_tpl->_assignInScope('has_sticker_static', 1);
}?><div class="st_sticker layer_btn <?php if (in_array(10,$_smarty_tpl->tpl_vars['sticker_position']->value) || in_array(11,$_smarty_tpl->tpl_vars['sticker_position']->value) || in_array(13,$_smarty_tpl->tpl_vars['sticker_position']->value)) {?> st_sticker_static <?php }?> st_sticker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['id_st_sticker'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ststicker']->value['type']) {?> st_sticker_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['type'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang']) {?> st_sticker_img <?php }?>"><?php if ($_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang']) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['image_multi_lang'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker_stock_text']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker_stock_text']->value, ENT_QUOTES, 'UTF-8');?>
"  width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['height'], ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><span class="st_sticker_text" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker_stock_text']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker_stock_text']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ststicker']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['has_sticker_static']->value) {?></div><?php }
}
}
