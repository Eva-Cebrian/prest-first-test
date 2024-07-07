<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab441ab6066_11366495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '825f21ebc1907735ba2bde9daf5556bad5c937e4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/tm-slider.tpl' => 2,
    'file:catalog/_partials/miniatures/sticker.tpl' => 4,
    'module:stwishlist/views/templates/hook/icon.tpl' => 1,
    'module:stlovedproduct/views/templates/hook/icon.tpl' => 1,
    'file:catalog/_partials/miniatures/hover_fly.tpl' => 2,
    'file:catalog/_partials/miniatures/countdown.tpl' => 2,
    'file:catalog/_partials/miniatures/rating-box.tpl' => 2,
    'module:stlovedproduct/views/templates/hook/fly.tpl' => 2,
    'file:catalog/_partials/miniatures/product-price.tpl' => 2,
    'file:catalog/_partials/variant-links.tpl' => 1,
    'file:catalog/_partials/miniatures/btn-add-to-cart.tpl' => 1,
    'file:catalog/_partials/miniatures/btn-view-more.tpl' => 4,
    'file:catalog/_partials/miniatures/btn-quick-view.tpl' => 2,
    'module:stwishlist/views/templates/hook/fly.tpl' => 1,
    'module:stcompare/views/templates/hook/fly.tpl' => 1,
    'module:stsocial/views/templates/hook/stsocial-drop.tpl' => 1,
  ),
),false)) {
function content_668ab441ab6066_11366495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_347348375668ab441a6a5e7_40890611', 'product_miniature_item');
}
/* {block 'product_flags'} */
class Block_1812614417668ab441a75ed8_26085429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/sticker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stickers'=>$_smarty_tpl->tpl_vars['ststickers_temp']->value,'sticker_position'=>array(0,1,2,3,4,5,6,7,8,9,12),'sticker_quantity'=>$_smarty_tpl->tpl_vars['product']->value['quantity'],'sticker_allow_oosp'=>$_smarty_tpl->tpl_vars['product']->value['allow_oosp'],'sticker_quantity_all_versions'=>$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'],'sticker_stock_text'=>$_smarty_tpl->tpl_vars['product']->value['availability_message']), 0, false);
?>
            <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_flags'} */
class Block_2069844333668ab441a8d7a2_41699652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/sticker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stickers'=>$_smarty_tpl->tpl_vars['ststickers_temp']->value,'sticker_position'=>array(0,1,2,3,4,5,6,7,8,9,12),'sticker_quantity'=>$_smarty_tpl->tpl_vars['product']->value['quantity'],'sticker_allow_oosp'=>$_smarty_tpl->tpl_vars['product']->value['allow_oosp'],'sticker_quantity_all_versions'=>$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'],'sticker_stock_text'=>$_smarty_tpl->tpl_vars['product']->value['availability_message']), 0, true);
?>
            <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_thumbnail'} */
class Block_822396027668ab441a73dc4_08389910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['for_w']->value)) && !$_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider'] && (isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value) {?><i class="swiper-lazy-preloader fto-spin5 animate-spin"></i><?php }?>
        <?php if ((((!(isset($_smarty_tpl->tpl_vars['for_w']->value)) || ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value != 'category')) && $_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider']) || ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category' && $_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider_cate'])) && (isset($_smarty_tpl->tpl_vars['product']->value['stthemeeditor']['images']))) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/tm-slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tm_thumbs'=>0,'tm_lazyload'=>$_smarty_tpl->tpl_vars['is_lazy']->value,'tm_cover'=>$_smarty_tpl->tpl_vars['product']->value['cover']['id_image'],'is_grid_view'=>$_smarty_tpl->tpl_vars['is_grid_view']->value), 0, false);
?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1812614417668ab441a75ed8_26085429', 'product_flags', $this->tplIndex);
?>

        <?php } else { ?>
          <?php $_smarty_tpl->_assignInScope('tm_stop_lazy', false);?>
          <?php if ((((!(isset($_smarty_tpl->tpl_vars['for_w']->value)) || ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value != 'category')) && $_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider']) || ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category' && $_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider_cate'])) && !(isset($_smarty_tpl->tpl_vars['product']->value['stthemeeditor']['images']))) {?>
            <?php $_smarty_tpl->_assignInScope('tm_stop_lazy', true);?>
          <?php }?>
          <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="product_img_link <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value && !$_smarty_tpl->tpl_vars['tm_stop_lazy']->value) {?> is_lazy <?php }?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_img_hover_scale']) {?> pro_img_hover_scale <?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category' && $_smarty_tpl->tpl_vars['sttheme']->value['infinite_blank']) {?> target="_blank" <?php }?>>
            <picture class="front_image_pic">
            <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['pro_image_type']->value])) && $_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['pro_image_type']->value] && (isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url']) {?>
            <!--[if IE 9]><video style="display: none;"><![endif]-->
              <source
                <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value && !$_smarty_tpl->tpl_vars['tm_stop_lazy']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>

                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type_retina']->value]['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type_retina']->value]['url']) {?>,<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type_retina']->value]['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
 2x<?php }?>"
                title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
                type="image/webp"
                >
            <!--[if IE 9]></video><![endif]-->
            <?php }?>
            <img 
            <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value && !$_smarty_tpl->tpl_vars['tm_stop_lazy']->value) {?>data-src<?php } else { ?>src<?php }?>="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url'], ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['img_prod_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['lang_iso_code'], ENT_QUOTES, 'UTF-8');?>
-default-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pro_image_type']->value, ENT_QUOTES, 'UTF-8');?>
.jpg<?php }?>"
            <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type_retina']->value]['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type_retina']->value]['url']) {?>
              <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value && !$_smarty_tpl->tpl_vars['tm_stop_lazy']->value) {?>data-srcset<?php } else { ?>srcset<?php }?>="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type_retina']->value]['url'], ENT_QUOTES, 'UTF-8');?>
 2x"
            <?php }?>
            width="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['width']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['width'], ENT_QUOTES, 'UTF-8');
}?>" height="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['height']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['height'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" class="front-image <?php if (!(isset($_smarty_tpl->tpl_vars['for_w']->value)) && (isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value && !$_smarty_tpl->tpl_vars['tm_stop_lazy']->value) {?> swiper-lazy <?php }?> <?php if (((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category' && $_smarty_tpl->tpl_vars['sttheme']->value['cate_pro_lazy'] && !$_smarty_tpl->tpl_vars['tm_stop_lazy']->value) || ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value != 'category' && (isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value && !$_smarty_tpl->tpl_vars['tm_stop_lazy']->value)) {?> cate_pro_lazy <?php }?>" />
            </picture>
            <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url']) {?><meta itemprop="image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"><?php }
}?>
            <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['sthoverimage']['hover']))) {?>
                            <picture class="back_image_pic">
              <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['pro_image_type']->value])) && $_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['pro_image_type']->value]) {?>
              <!--[if IE 9]><video style="display: none;"><![endif]-->
                <source
                  <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['product']->value['sthoverimage']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>

                  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['sthoverimage']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type_retina']->value]['url']))) {?>,<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['product']->value['sthoverimage']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type_retina']->value]['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
 2x<?php }?>"
                  title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['sthoverimage']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['sthoverimage']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
                  type="image/webp"
                  >
              <!--[if IE 9]></video><![endif]-->
              <?php }?>
              <img 
                <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-src<?php } else { ?>src<?php }?>="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['sthoverimage']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['sthoverimage']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type_retina']->value]['url']))) {?>
                  <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-srcset<?php } else { ?>srcset<?php }?>="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['sthoverimage']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type_retina']->value]['url'], ENT_QUOTES, 'UTF-8');?>
 2x"
                <?php }?>
               alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['sthoverimage']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['sthoverimage']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['sthoverimage']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['sthoverimage']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['height'], ENT_QUOTES, 'UTF-8');?>
"  class="back-image <?php if (!(isset($_smarty_tpl->tpl_vars['for_w']->value)) && (isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value) {?> swiper-lazy <?php }?> <?php if (((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category' && $_smarty_tpl->tpl_vars['sttheme']->value['cate_pro_lazy'] && !$_smarty_tpl->tpl_vars['tm_stop_lazy']->value) || ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value != 'category' && (isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value) && !$_smarty_tpl->tpl_vars['tm_stop_lazy']->value) {?> cate_pro_lazy <?php }?>" />
               </picture>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value && !$_smarty_tpl->tpl_vars['tm_stop_lazy']->value) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['img_prod_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['lang_iso_code'], ENT_QUOTES, 'UTF-8');?>
-default-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pro_image_type']->value, ENT_QUOTES, 'UTF-8');?>
.<?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value))) {?>webp<?php } else { ?>jpg<?php }?>" class="holder" width="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['width']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['width'], ENT_QUOTES, 'UTF-8');
}?>" height="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['height']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['pro_image_type']->value]['height'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" /><?php }?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2069844333668ab441a8d7a2_41699652', 'product_flags', $this->tplIndex);
?>

          </a>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['wishlist_position']->value)) && $_smarty_tpl->tpl_vars['wishlist_position']->value && $_smarty_tpl->tpl_vars['wishlist_position']->value != 10) {?>
            <?php $_smarty_tpl->_subTemplateRender('module:stwishlist/views/templates/hook/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_wished'=>((isset($_smarty_tpl->tpl_vars['product']->value['stwishlist']['wished'])) && $_smarty_tpl->tpl_vars['product']->value['stwishlist']['wished']),'fromnocache'=>((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category')), 0, false);
?>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['loved_position']->value)) && $_smarty_tpl->tpl_vars['loved_position']->value && $_smarty_tpl->tpl_vars['loved_position']->value != 10 && $_smarty_tpl->tpl_vars['loved_position']->value != 11) {?>
            <?php $_smarty_tpl->_subTemplateRender('module:stlovedproduct/views/templates/hook/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_source'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'is_loved'=>((isset($_smarty_tpl->tpl_vars['product']->value['stlovedproduct']['loved'])) && $_smarty_tpl->tpl_vars['product']->value['stlovedproduct']['loved']),'fromnocache'=>((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category')), 0, false);
?>
        <?php }?>
      <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags_under'} */
class Block_17252238668ab441a944e8_34813633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/sticker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stickers'=>$_smarty_tpl->tpl_vars['ststickers_temp']->value,'sticker_position'=>array(10),'sticker_quantity'=>$_smarty_tpl->tpl_vars['product']->value['quantity'],'sticker_allow_oosp'=>$_smarty_tpl->tpl_vars['product']->value['allow_oosp'],'sticker_quantity_all_versions'=>$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'],'sticker_stock_text'=>$_smarty_tpl->tpl_vars['product']->value['availability_message']), 0, true);
?>
      <?php
}
}
/* {/block 'product_flags_under'} */
/* {block 'product_name'} */
class Block_1414802741668ab441a981e1_62267425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name'])) && $_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name'] == 1) {?>
          <?php $_smarty_tpl->_assignInScope('length_of_product_name', 70);?>
      <?php }?>
      <div class="flex_box flex_start mini_name">
      <h3 <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?> itemprop="name" <?php }?> class="s_title_block flex_child <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name']))) {
if ($_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name'] == 3) {?> two_rows <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name'] == 2) {?> nohidden <?php }
}?>"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?> itemprop="url" <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category' && $_smarty_tpl->tpl_vars['sttheme']->value['infinite_blank']) {?> target="_blank" <?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name'])) && $_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name'] == 1) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],$_smarty_tpl->tpl_vars['length_of_product_name']->value,'...' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?></a></h3>
      <?php if (((isset($_smarty_tpl->tpl_vars['loved_position']->value)) && $_smarty_tpl->tpl_vars['loved_position']->value && $_smarty_tpl->tpl_vars['loved_position']->value == 11) || $_smarty_tpl->tpl_vars['sttheme']->value['pro_block_align'] == 2) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['loved_position']->value)) && $_smarty_tpl->tpl_vars['loved_position']->value && $_smarty_tpl->tpl_vars['loved_position']->value == 11) {?>
        <?php $_smarty_tpl->_subTemplateRender('module:stlovedproduct/views/templates/hook/fly.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_source'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'classname'=>"btn_inline hide_btn_text",'is_loved'=>((isset($_smarty_tpl->tpl_vars['product']->value['stlovedproduct']['loved'])) && $_smarty_tpl->tpl_vars['product']->value['stlovedproduct']['loved']),'fromnocache'=>((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category')), 0, false);
?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_block_align'] == 2) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-price.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
      <?php }?>
      </div>
      <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_1550119374668ab441aa1261_42504554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_block_align'] != 2) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-price.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
      <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_variants'} */
class Block_552028589668ab441aa19c3_60637798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['display_color_list'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && $_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
        <?php }?>
      <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_reviews'} */
class Block_1929041194668ab441aa3870_93160252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_flags_bottom'} */
class Block_731236911668ab441ab4310_09286123 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/sticker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stickers'=>$_smarty_tpl->tpl_vars['ststickers_temp']->value,'sticker_position'=>array(11),'sticker_quantity'=>$_smarty_tpl->tpl_vars['product']->value['quantity'],'sticker_allow_oosp'=>$_smarty_tpl->tpl_vars['product']->value['allow_oosp'],'sticker_quantity_all_versions'=>$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'],'sticker_stock_text'=>$_smarty_tpl->tpl_vars['product']->value['availability_message']), 0, true);
?>
      <?php
}
}
/* {/block 'product_flags_bottom'} */
/* {block 'product_miniature_item'} */
class Block_347348375668ab441a6a5e7_40890611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_347348375668ab441a6a5e7_40890611',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_822396027668ab441a73dc4_08389910',
  ),
  'product_flags' => 
  array (
    0 => 'Block_1812614417668ab441a75ed8_26085429',
    1 => 'Block_2069844333668ab441a8d7a2_41699652',
  ),
  'product_flags_under' => 
  array (
    0 => 'Block_17252238668ab441a944e8_34813633',
  ),
  'product_name' => 
  array (
    0 => 'Block_1414802741668ab441a981e1_62267425',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_1550119374668ab441aa1261_42504554',
  ),
  'product_variants' => 
  array (
    0 => 'Block_552028589668ab441aa19c3_60637798',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_1929041194668ab441aa3870_93160252',
  ),
  'product_flags_bottom' => 
  array (
    0 => 'Block_731236911668ab441ab4310_09286123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('has_add_to_cart', 0);
if ($_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] != 3 && !$_smarty_tpl->tpl_vars['sttheme']->value['is_catalog'] && $_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'] && ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0 || $_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {
$_smarty_tpl->_assignInScope('has_add_to_cart', 1);
}
if ($_smarty_tpl->tpl_vars['has_add_to_cart']->value && $_smarty_tpl->tpl_vars['sttheme']->value['show_hide_add_to_cart'] != 1 && (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && count($_smarty_tpl->tpl_vars['product']->value['attributes'])) {
$_smarty_tpl->_assignInScope('has_add_to_cart', 0);
}?>

<?php $_smarty_tpl->_assignInScope('list_display_sd', 0);
if ((isset($_smarty_tpl->tpl_vars['display_sd']->value)) && $_smarty_tpl->tpl_vars['display_sd']->value) {
$_smarty_tpl->_assignInScope('list_display_sd', $_smarty_tpl->tpl_vars['display_sd']->value);
} elseif (!(isset($_smarty_tpl->tpl_vars['display_sd']->value)) && $_smarty_tpl->tpl_vars['sttheme']->value['show_short_desc_on_grid']) {
$_smarty_tpl->_assignInScope('list_display_sd', $_smarty_tpl->tpl_vars['sttheme']->value['show_short_desc_on_grid']);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category') {?>
  <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['cate_pro_image_type_name']) {?>
    <?php $_smarty_tpl->_assignInScope('pro_image_type', $_smarty_tpl->tpl_vars['sttheme']->value['cate_pro_image_type_name']);?>
  <?php }
} elseif ((isset($_smarty_tpl->tpl_vars['image_type']->value)) && $_smarty_tpl->tpl_vars['image_type']->value) {?>
  <?php $_smarty_tpl->_assignInScope('pro_image_type', $_smarty_tpl->tpl_vars['image_type']->value);
}
if (!(isset($_smarty_tpl->tpl_vars['pro_image_type']->value)) || !$_smarty_tpl->tpl_vars['pro_image_type']->value) {?>
  <?php $_smarty_tpl->_assignInScope('pro_image_type', 'home_default');
}
$_smarty_tpl->_assignInScope('pro_image_type_retina', ($_smarty_tpl->tpl_vars['pro_image_type']->value).("_2x"));
if ((isset($_smarty_tpl->tpl_vars['for_w']->value))) {
$_smarty_tpl->_assignInScope('is_grid_view', 1);
} else {
$_smarty_tpl->_assignInScope('is_grid_view', 0);
}
$_smarty_tpl->_assignInScope('is_lazy', (!(isset($_smarty_tpl->tpl_vars['for_w']->value)) && (isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value) || ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category' && $_smarty_tpl->tpl_vars['sttheme']->value['cate_pro_lazy']) || ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value != 'category' && (isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value));
$_smarty_tpl->_assignInScope('ststickers_temp', false);
if ((isset($_smarty_tpl->tpl_vars['product']->value['ststickers']))) {
$_smarty_tpl->_assignInScope('ststickers_temp', $_smarty_tpl->tpl_vars['product']->value['ststickers']);
}
if ((!(isset($_smarty_tpl->tpl_vars['for_w']->value)) || $_smarty_tpl->tpl_vars['for_w']->value == 'steb_pro') && (isset($_smarty_tpl->tpl_vars['eb_pro_tm_slider']->value)) && $_smarty_tpl->tpl_vars['eb_pro_tm_slider']->value != 3) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['pro_tm_slider'] = $_smarty_tpl->tpl_vars['eb_pro_tm_slider']->value;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
}?>
<article class="<?php if (!(isset($_smarty_tpl->tpl_vars['for_w']->value))) {?> swiper-slide <?php }?> ajax_block_product js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" data-minimal-quantity="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?> <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value) {?> itemprop="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['from_product_page']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?> itemscope itemtype="http://schema.org/Product" <?php }?>>
  <div class="pro_outer_box clearfix <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pro_image_type']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="pro_first_box <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['flyout_buttons'] == 1) {?>hover_fly_static<?php }
if ($_smarty_tpl->tpl_vars['sttheme']->value['flyout_buttons_on_mobile'] == 1) {?> moblie_flyout_buttons_show<?php }?>">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_822396027668ab441a73dc4_08389910', 'product_thumbnail', $this->tplIndex);
?>

      <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['flyout_buttons'] == 0 || $_smarty_tpl->tpl_vars['sttheme']->value['flyout_buttons'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/hover_fly.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>
      <?php if ((isset($_smarty_tpl->tpl_vars['countdown_v_alignment']->value)) && $_smarty_tpl->tpl_vars['countdown_v_alignment']->value != 2) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/countdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    </div>
    <div class="pro_second_box pro_block_align_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_block_align'], ENT_QUOTES, 'UTF-8');?>
">
        <?php if ((((!(isset($_smarty_tpl->tpl_vars['for_w']->value)) || ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value != 'category')) && $_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider'] == 2) || ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category' && $_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider_cate'] == 2)) && (isset($_smarty_tpl->tpl_vars['product']->value['stthemeeditor']['images']))) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/tm-slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tm_thumbs'=>1,'tm_lazyload'=>$_smarty_tpl->tpl_vars['is_lazy']->value,'tm_cover'=>$_smarty_tpl->tpl_vars['product']->value['cover']['id_image']), 0, true);
?>
        <?php }?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17252238668ab441a944e8_34813633', 'product_flags_under', $this->tplIndex);
?>


    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_category_default'])) && $_smarty_tpl->tpl_vars['product']->value['id_category_default'] > 0 && (isset($_smarty_tpl->tpl_vars['product']->value['category'])) && !empty($_smarty_tpl->tpl_vars['product']->value['category']) && ($_smarty_tpl->tpl_vars['sttheme']->value['pro_display_category_name'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing']))) {?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'category','id'=>$_smarty_tpl->tpl_vars['product']->value['id_category_default'],'params'=>array('alias'=>$_smarty_tpl->tpl_vars['product']->value['category'])),$_smarty_tpl ) );?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
" class="pro_mini_cate_name mar_b6 <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['pro_display_category_name']) {?> display_none <?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category' && $_smarty_tpl->tpl_vars['sttheme']->value['infinite_blank']) {?> target="_blank" <?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</a><?php }?>
      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['stproductcomments'])) && $_smarty_tpl->tpl_vars['product']->value['stproductcomments'] && $_smarty_tpl->tpl_vars['product']->value['stproductcomments']['pro_posi']) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/rating-box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1414802741668ab441a981e1_62267425', 'product_name', $this->tplIndex);
?>


      <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['pro_list_display_brand_name'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && $_smarty_tpl->tpl_vars['product']->value['id_manufacturer']) {?>
        <div class="pro_list_manufacturer pad_b6 <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['pro_list_display_brand_name']) {?> display_none <?php }?>">
        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['manufacturer_name']))) {?>
        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'],60,'...' )), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( Manufacturer::getNameById($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']),60,'...' )), ENT_QUOTES, 'UTF-8');?>

        <?php }?>
        </div>
      <?php }?>

      <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['pro_list_display_reference'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && (isset($_smarty_tpl->tpl_vars['product']->value['reference'])) && $_smarty_tpl->tpl_vars['product']->value['reference']) {?>
        <div class="pro_list_reference pad_b6 <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['pro_list_display_reference']) {?> display_none <?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</div>
      <?php }?>

      <div class="pro_kuan_box <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_block_align'] == 1) {?> flex_box flex_space_between <?php }?>">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1550119374668ab441aa1261_42504554', 'product_price_and_shipping', $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_552028589668ab441aa19c3_60637798', 'product_variants', $this->tplIndex);
?>

      </div>
      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['stproductcomments'])) && $_smarty_tpl->tpl_vars['product']->value['stproductcomments'] && !$_smarty_tpl->tpl_vars['product']->value['stproductcomments']['pro_posi']) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/rating-box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php }?>
      <?php if ((isset($_smarty_tpl->tpl_vars['countdown_v_alignment']->value)) && $_smarty_tpl->tpl_vars['countdown_v_alignment']->value == 2) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/countdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1929041194668ab441aa3870_93160252', 'product_reviews', $this->tplIndex);
?>

      <div class="product-desc pad_b6 <?php if ($_smarty_tpl->tpl_vars['list_display_sd']->value) {?> display_sd <?php }?> " <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?> itemprop="description" <?php }?>><?php if ($_smarty_tpl->tpl_vars['list_display_sd']->value == 2 || $_smarty_tpl->tpl_vars['is_grid_view']->value == 0) {
echo $_smarty_tpl->tpl_vars['product']->value['description_short'];
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['product']->value['description_short']),220,'...' )), ENT_QUOTES, 'UTF-8');
}?></div>
      
      <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] != 3 || $_smarty_tpl->tpl_vars['sttheme']->value['use_view_more_instead'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['use_view_more_instead'] == 2) {?>
      <div class="act_box_cart <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] == 2 || $_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] == 7 || $_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] == 5 || $_smarty_tpl->tpl_vars['sttheme']->value['use_view_more_instead'] == 2) {?> display_normal <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] == 6 || $_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] == 4 || (!$_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] && ($_smarty_tpl->tpl_vars['sttheme']->value['pro_quantity_input'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['pro_quantity_input'] == 3)) || $_smarty_tpl->tpl_vars['sttheme']->value['use_view_more_instead'] == 1) {?> display_when_hover <?php }
if ($_smarty_tpl->tpl_vars['sttheme']->value['mobile_add_to_cart']) {?> add_show_on_mobile <?php } else { ?> add_hide_on_mobile <?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] != 3) {?>
        <?php if ($_smarty_tpl->tpl_vars['has_add_to_cart']->value && ($_smarty_tpl->tpl_vars['sttheme']->value['pro_quantity_input'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['pro_quantity_input'] == 3 || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing']))) {?>
        <div class="s_quantity_wanted qty_wrap <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_quantity_input'] != 1 && $_smarty_tpl->tpl_vars['sttheme']->value['pro_quantity_input'] != 3) {?> display_none <?php }?>">
            <input
                class="pro_quantity"
                type="text"
                value="<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>"
                name="pro_quantity"
                data-minimal-quantity="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                data-quantity="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
                data-allow-oosp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['allow_oosp'], ENT_QUOTES, 'UTF-8');?>
"
              />
        </div>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('add_to_cart_class', "btn btn-default");?>
        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] == 4 || $_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] == 5) {?>
          <?php $_smarty_tpl->_assignInScope('add_to_cart_class', "btn btn-link");?>
        <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] == 6 || $_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] == 7) {?>
          <?php $_smarty_tpl->_assignInScope('add_to_cart_class', "btn btn-default btn_full_width");?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['has_add_to_cart']->value) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classname'=>$_smarty_tpl->tpl_vars['add_to_cart_class']->value), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['show_hide_add_to_cart'] == 2) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-view-more.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classname'=>$_smarty_tpl->tpl_vars['add_to_cart_class']->value), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['show_hide_add_to_cart'] == 3) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-quick-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classname'=>$_smarty_tpl->tpl_vars['add_to_cart_class']->value), 0, false);
?>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['use_view_more_instead'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['use_view_more_instead'] == 2) && $_smarty_tpl->tpl_vars['has_add_to_cart']->value) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-view-more.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classname'=>"btn btn-default"), 0, true);
}?>
        <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['use_view_more_instead'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['use_view_more_instead'] == 2) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-view-more.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classname'=>"btn btn-default"), 0, true);
?>
        <?php }?>
      </div>
      <?php }?>

      <div class="act_box_inner pad_b6 mar_t4 flex_box">
        <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['flyout_quickview'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && (!(isset($_smarty_tpl->tpl_vars['from_product_page']->value)) || !$_smarty_tpl->tpl_vars['from_product_page']->value)) {?>
          <?php $_smarty_tpl->_assignInScope('classname_act_quickview', 'btn_inline');?>
          <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['flyout_quickview'] && (isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing']) {
$_smarty_tpl->_assignInScope('classname_act_quickview', 'btn_inline display_none');
}?>
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-quick-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classname'=>$_smarty_tpl->tpl_vars['classname_act_quickview']->value), 0, true);
?>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['use_view_more_instead'] && !$_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] && $_smarty_tpl->tpl_vars['has_add_to_cart']->value) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-view-more.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classname'=>"btn_inline"), 0, true);
}?>
        <?php if ((isset($_smarty_tpl->tpl_vars['wishlist_position']->value)) && !$_smarty_tpl->tpl_vars['wishlist_position']->value) {?>
          <?php $_smarty_tpl->_subTemplateRender('module:stwishlist/views/templates/hook/fly.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classname'=>"btn_inline",'is_wished'=>((isset($_smarty_tpl->tpl_vars['product']->value['stwishlist']['wished'])) && $_smarty_tpl->tpl_vars['product']->value['stwishlist']['wished']),'fromnocache'=>((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category')), 0, false);
?>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['loved_position']->value)) && !$_smarty_tpl->tpl_vars['loved_position']->value) {?>
          <?php $_smarty_tpl->_subTemplateRender('module:stlovedproduct/views/templates/hook/fly.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_source'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'classname'=>"btn_inline",'is_loved'=>((isset($_smarty_tpl->tpl_vars['product']->value['stlovedproduct']['loved'])) && $_smarty_tpl->tpl_vars['product']->value['stlovedproduct']['loved']),'fromnocache'=>((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category')), 0, true);
?>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['stcompare']->value)) && ($_smarty_tpl->tpl_vars['stcompare']->value['fly_out'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing']))) {?>
          <?php $_smarty_tpl->_assignInScope('classname_act_stcompare', 'btn_inline');?>
          <?php if (!$_smarty_tpl->tpl_vars['stcompare']->value['fly_out'] && (isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing']) {
$_smarty_tpl->_assignInScope('classname_act_stcompare', 'btn_inline display_none');
}?>
          <?php $_smarty_tpl->_subTemplateRender('module:stcompare/views/templates/hook/fly.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'classname'=>$_smarty_tpl->tpl_vars['classname_act_stcompare']->value,'is_compared'=>((isset($_smarty_tpl->tpl_vars['product']->value['stcompare']['compared'])) && $_smarty_tpl->tpl_vars['product']->value['stcompare']['compared']),'fromnocache'=>((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category')), 0, false);
?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['flyout_share'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?>
          <?php $_smarty_tpl->_assignInScope('classname_act_share', 'btn_inline link_color');?>
          <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['flyout_share'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {
$_smarty_tpl->_assignInScope('classname_act_share', 'btn_inline link_color display_none');
}?>
          <?php $_smarty_tpl->_subTemplateRender('module:stsocial/views/templates/hook/stsocial-drop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pro_share_drop'=>true,'social_label'=>0,'classname'=>$_smarty_tpl->tpl_vars['classname_act_share']->value), 0, false);
?>
        <?php }?>
      </div>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_731236911668ab441ab4310_09286123', 'product_flags_bottom', $this->tplIndex);
?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['flyout_buttons'] == 2) {?>
      <div class="bottom_hover_fly">
      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/hover_fly.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </div>
    <?php }?>
  </div>
</article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
