<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/hover_fly.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0c8cfb9_98701116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87ade8f4a660c729126f781aded035d052d0e7fd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/hover_fly.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/btn-add-to-cart.tpl' => 1,
    'file:catalog/_partials/miniatures/btn-view-more.tpl' => 2,
    'file:catalog/_partials/miniatures/btn-quick-view.tpl' => 2,
    'module:stwishlist/views/templates/hook/fly.tpl' => 1,
    'module:stlovedproduct/views/templates/hook/fly.tpl' => 1,
    'module:stcompare/views/templates/hook/fly.tpl' => 1,
    'module:stsocial/views/templates/hook/stsocial-hover-fly.tpl' => 1,
  ),
),false)) {
function content_668a67f0c8cfb9_98701116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1114468318668a67f0c83273_39105171';
?>
<div class="hover_fly hover_fly_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['flyout_buttons_style'], ENT_QUOTES, 'UTF-8');?>
 flex_container <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['flyout_buttons_on_mobile'] == 1) {?> mobile_hover_fly_show <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['flyout_buttons_on_mobile'] == 2) {?> mobile_hover_fly_cart <?php } else { ?> mobile_hover_fly_hide <?php }?>">
          <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] && $_smarty_tpl->tpl_vars['sttheme']->value['pro_quantity_input'] != 1 && $_smarty_tpl->tpl_vars['sttheme']->value['pro_quantity_input'] != 3) {?>
            <?php if ($_smarty_tpl->tpl_vars['has_add_to_cart']->value) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['show_hide_add_to_cart'] == 2) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-view-more.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['show_hide_add_to_cart'] == 3) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-quick-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php }?>
          <?php }?>
          <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['flyout_quickview'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && (!(isset($_smarty_tpl->tpl_vars['from_product_page']->value)) || !$_smarty_tpl->tpl_vars['from_product_page']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('classname_flyout_quickview', '');?>
            <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['flyout_quickview'] && (isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing']) {
$_smarty_tpl->_assignInScope('classname_flyout_quickview', 'display_none');
}?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-quick-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('classname'=>$_smarty_tpl->tpl_vars['classname_flyout_quickview']->value), 0, true);
?>
          <?php }?>
          <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['use_view_more_instead'] && ((!$_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] && $_smarty_tpl->tpl_vars['has_add_to_cart']->value) || $_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'])) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-view-more.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
          <?php if ((isset($_smarty_tpl->tpl_vars['wishlist_position']->value)) && !$_smarty_tpl->tpl_vars['wishlist_position']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('module:stwishlist/views/templates/hook/fly.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('is_wished'=>((isset($_smarty_tpl->tpl_vars['product']->value['stwishlist']['wished'])) && $_smarty_tpl->tpl_vars['product']->value['stwishlist']['wished']),'fromnocache'=>((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category')), 0, false);
?>
          <?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['loved_position']->value)) && !$_smarty_tpl->tpl_vars['loved_position']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('module:stlovedproduct/views/templates/hook/fly.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('id_source'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'is_loved'=>((isset($_smarty_tpl->tpl_vars['product']->value['stlovedproduct']['loved'])) && $_smarty_tpl->tpl_vars['product']->value['stlovedproduct']['loved']),'fromnocache'=>((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category')), 0, false);
?>
          <?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['stcompare']->value)) && ($_smarty_tpl->tpl_vars['stcompare']->value['fly_out'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing']))) {?>
            <?php $_smarty_tpl->_assignInScope('classname_flyout_stcompare', '');?>
            <?php if (!$_smarty_tpl->tpl_vars['stcompare']->value['fly_out'] && (isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing']) {
$_smarty_tpl->_assignInScope('classname_flyout_stcompare', 'display_none');
}?>
            <?php $_smarty_tpl->_subTemplateRender('module:stcompare/views/templates/hook/fly.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'is_compared'=>((isset($_smarty_tpl->tpl_vars['product']->value['stcompare']['compared'])) && $_smarty_tpl->tpl_vars['product']->value['stcompare']['compared']),'fromnocache'=>((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category'),'classname'=>$_smarty_tpl->tpl_vars['classname_flyout_stcompare']->value), 0, false);
?>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['flyout_share'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?>
            <?php $_smarty_tpl->_assignInScope('classname_flyout_share', '');?>
            <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['flyout_share'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {
$_smarty_tpl->_assignInScope('classname_flyout_share', 'display_none');
}?>
            <?php $_smarty_tpl->_subTemplateRender('module:stsocial/views/templates/hook/stsocial-hover-fly.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('classname'=>$_smarty_tpl->tpl_vars['classname_flyout_share']->value), 0, false);
?>
          <?php }?>
      </div><?php }
}
