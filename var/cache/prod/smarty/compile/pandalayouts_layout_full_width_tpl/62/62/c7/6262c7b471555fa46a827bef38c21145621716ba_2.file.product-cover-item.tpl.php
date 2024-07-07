<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:31:30
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-cover-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4d2793a82_70660824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6262c7b471555fa46a827bef38c21145621716ba' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-cover-item.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab4d2793a82_70660824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
              <div class="swiper-slide <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['enable_zoom'] == 1 || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_zoom'] == 2 && !$_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {?> swiper-no-swiping <?php }?>">
                <div class="easyzoom--overlay <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['enable_zoom']) {?> easyzoom <?php }?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['enable_zoom'] == 2) {?> disable_easyzoom_on_mobile <?php }?>">
                    <a href="<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['enable_zoom'] == 1 || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_zoom'] == 2 && !$_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device']) || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] && !$_smarty_tpl->tpl_vars['do_from_quickview']->value)) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['superlarge_default']['url'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:;<?php }?>" class="<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] && !$_smarty_tpl->tpl_vars['do_from_quickview']->value) {
if (($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 1 || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 3 && !$_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) && (!$_smarty_tpl->tpl_vars['sttheme']->value['enable_zoom'] || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_zoom'] == 2 && $_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device']))) {?> st_popup_image st_pro_popup_image <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 2 || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 3 && $_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {?> kk_triger <?php }?> <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['image']->value['bySize']['superlarge_default_2x']['url']))) {?> replace-2x <?php }?>" <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 1 || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 3 && !$_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) && (!$_smarty_tpl->tpl_vars['sttheme']->value['enable_zoom'] || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_zoom'] == 2 && $_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device']))) {?> data-group="pro_gallery_popup" <?php }?> title="<?php if ($_smarty_tpl->tpl_vars['image']->value['legend']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>">
                      <picture>
                        <img
                          class="pro_gallery_item <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery'] && (!(isset($_smarty_tpl->tpl_vars['disable_lazyloading']->value)) || !$_smarty_tpl->tpl_vars['disable_lazyloading']->value)) {
if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 8) {?> cate_pro_lazy <?php } else { ?> swiper-lazy <?php }
}?>"
                          <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery'] && (!(isset($_smarty_tpl->tpl_vars['disable_lazyloading']->value)) || !$_smarty_tpl->tpl_vars['disable_lazyloading']->value) && ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 8)) {?> src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['img_prod_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['lang_iso_code'], ENT_QUOTES, 'UTF-8');?>
-default-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type'], ENT_QUOTES, 'UTF-8');?>
.<?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']])) && $_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]) {?>webp<?php } else { ?>jpg<?php }?>" <?php }?>
                          <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery'] && (!(isset($_smarty_tpl->tpl_vars['disable_lazyloading']->value)) || !$_smarty_tpl->tpl_vars['disable_lazyloading']->value)) {?> data-<?php }?>src="<?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']])) && $_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]) {
echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]['url'],'.jpg','.webp'), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]['url'], ENT_QUOTES, 'UTF-8');
}?>"
                          <?php if ((isset($_smarty_tpl->tpl_vars['image']->value['bySize'][($_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']).('_2x')]['url']))) {?> <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery'] && (!(isset($_smarty_tpl->tpl_vars['disable_lazyloading']->value)) || !$_smarty_tpl->tpl_vars['disable_lazyloading']->value)) {?>data-<?php }?>srcset="<?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']])) && $_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]) {
echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['image']->value['bySize'][($_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']).('_2x')]['url'],'.jpg','.webp'), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize'][($_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']).('_2x')]['url'], ENT_QUOTES, 'UTF-8');
}?> 2x" <?php }?>
                          alt="<?php if ($_smarty_tpl->tpl_vars['image']->value['legend']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
                          width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]['width'], ENT_QUOTES, 'UTF-8');?>
"
                          height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]['height'], ENT_QUOTES, 'UTF-8');?>
"
                          data-id_image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['id_image'], ENT_QUOTES, 'UTF-8');?>
"
                          <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?> itemprop="image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]['url'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                        />
                      </picture>
                    </a>
                </div>
              </div><?php }
}
