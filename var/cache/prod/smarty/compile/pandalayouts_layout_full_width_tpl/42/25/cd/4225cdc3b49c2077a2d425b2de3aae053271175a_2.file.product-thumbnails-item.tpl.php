<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:31:30
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-thumbnails-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4d279f060_11692323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4225cdc3b49c2077a2d425b2de3aae053271175a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-thumbnails-item.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab4d279f060_11692323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_assignInScope('cover_id', $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']);
if ((isset($_smarty_tpl->tpl_vars['product']->value['default_image']))) {
$_smarty_tpl->_assignInScope('cover_id', $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']);
}?>
              <div class="swiper-slide <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['cover_id']->value) {?> clicked_thumb <?php }?>">
                <div class="pro_gallery_thumb_box general_border <?php if ((isset($_smarty_tpl->tpl_vars['curr_combination_thumb']->value)) && $_smarty_tpl->tpl_vars['curr_combination_thumb']->value) {?> curr_combination_thumb <?php }?>">
                  <picture>
                    <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['sttheme']->value['thumb_image_type']])) && $_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['sttheme']->value['thumb_image_type']]) {?>
                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                      <source
                        <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 3 && $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 7) && (!(isset($_smarty_tpl->tpl_vars['disable_lazyloading']->value)) || !$_smarty_tpl->tpl_vars['disable_lazyloading']->value) && !$_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery']) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['thumb_image_type']]['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['image']->value['bySize'][($_smarty_tpl->tpl_vars['sttheme']->value['thumb_image_type']).('_2x')]['url']))) {?>,<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['image']->value['bySize'][($_smarty_tpl->tpl_vars['sttheme']->value['thumb_image_type']).('_2x')]['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
 2x<?php }?>"
                        type="image/webp"
                        >
                    <!--[if IE 9]></video><![endif]-->
                    <?php }?>
                  <img
                      class="pro_gallery_thumb <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 3 && $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 7) && (!(isset($_smarty_tpl->tpl_vars['disable_lazyloading']->value)) || !$_smarty_tpl->tpl_vars['disable_lazyloading']->value) && !$_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery']) {?> swiper-lazy<?php }?>"
                      <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 3 && $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 7) && (!(isset($_smarty_tpl->tpl_vars['disable_lazyloading']->value)) || !$_smarty_tpl->tpl_vars['disable_lazyloading']->value) && !$_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery']) {?>data-<?php }?>src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['thumb_image_type']]['url'], ENT_QUOTES, 'UTF-8');?>
"
                      <?php if ((isset($_smarty_tpl->tpl_vars['image']->value['bySize'][($_smarty_tpl->tpl_vars['sttheme']->value['thumb_image_type']).('_2x')]['url']))) {?> <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 3 && $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 7) && (!(isset($_smarty_tpl->tpl_vars['disable_lazyloading']->value)) || !$_smarty_tpl->tpl_vars['disable_lazyloading']->value) && !$_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery']) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize'][($_smarty_tpl->tpl_vars['sttheme']->value['thumb_image_type']).('_2x')]['url'], ENT_QUOTES, 'UTF-8');?>
 2x" <?php }?>
                      alt="<?php if ($_smarty_tpl->tpl_vars['image']->value['legend']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
                      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['thumb_image_type']]['width'], ENT_QUOTES, 'UTF-8');?>
"
                      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['thumb_image_type']]['height'], ENT_QUOTES, 'UTF-8');?>
"
                                          /> 
                  </picture>
                </div>
              </div><?php }
}
