<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:31:30
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4d275ae14_07040963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bb58be5fe77a06a37df94aa2f30d705eaf93b8a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-popup-item.tpl' => 2,
    'file:catalog/_partials/product-cover-scrolling.tpl' => 2,
    'file:catalog/_partials/miniatures/sticker.tpl' => 1,
    'module:stvideo/views/templates/hook/stvideo.tpl' => 1,
    'file:catalog/_partials/product-cover-item.tpl' => 2,
    'file:catalog/_partials/product-thumbnails-item.tpl' => 2,
  ),
),false)) {
function content_668ab4d275ae14_07040963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('image_count', count($_smarty_tpl->tpl_vars['product']->value['images']));
if ($_smarty_tpl->tpl_vars['sttheme']->value['product_gallerys'] == 2) {
$_smarty_tpl->_assignInScope('image_count', count($_smarty_tpl->tpl_vars['sttheme']->value['pro_images']));
}
if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 6) {
if ($_smarty_tpl->tpl_vars['image_count']->value > 1 || ((isset($_smarty_tpl->tpl_vars['st_pro_video']->value)) && (isset($_smarty_tpl->tpl_vars['st_pro_video']->value['videos'])))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails'] = 0;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
} elseif ($_smarty_tpl->tpl_vars['image_count']->value < 2) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails'] = 5;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
}
}
if ($_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device']) {?>
    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails_mobile'] == 5 && $_smarty_tpl->tpl_vars['image_count']->value < 2) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails_mobile'] = 3;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
} elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails_mobile'] == 5 && $_smarty_tpl->tpl_vars['image_count']->value > 1) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails_mobile'] = 4;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
}?>
    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails_mobile'] == 1) {?>
      <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails'] = 3;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails_mobile'] == 2) {?>
      <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails'] = 4;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails_mobile'] == 3) {?>
      <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails'] = 5;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails_mobile'] == 4) {?>
      <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails'] = 0;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails_mobile'] == 0) {?>
      <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails'] = 0;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);?>
      <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 8) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails'] = 5;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);?>
      <?php }?>
    <?php }
}
$_smarty_tpl->_assignInScope('do_from_quickview', false);
if ((isset($_smarty_tpl->tpl_vars['from_quickview']->value)) && $_smarty_tpl->tpl_vars['from_quickview']->value) {
$_smarty_tpl->_assignInScope('do_from_quickview', true);
}
if ($_smarty_tpl->tpl_vars['do_from_quickview']->value && ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 8)) {?>
  <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails'] = 0;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 8) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['product_thumbnails'] = 5;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);?>
  <?php }
}
if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_fw'] > $_smarty_tpl->tpl_vars['image_count']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['pro_thumnbs_per_fw'] = $_smarty_tpl->tpl_vars['image_count']->value;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_xxl'] > $_smarty_tpl->tpl_vars['image_count']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['pro_thumnbs_per_xxl'] = $_smarty_tpl->tpl_vars['image_count']->value;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_xl'] > $_smarty_tpl->tpl_vars['image_count']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['pro_thumnbs_per_xl'] = $_smarty_tpl->tpl_vars['image_count']->value;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_lg'] > $_smarty_tpl->tpl_vars['image_count']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['pro_thumnbs_per_lg'] = $_smarty_tpl->tpl_vars['image_count']->value;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_md'] > $_smarty_tpl->tpl_vars['image_count']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['pro_thumnbs_per_md'] = $_smarty_tpl->tpl_vars['image_count']->value;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_sm'] > $_smarty_tpl->tpl_vars['image_count']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['pro_thumnbs_per_sm'] = $_smarty_tpl->tpl_vars['image_count']->value;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_xs'] > $_smarty_tpl->tpl_vars['image_count']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sttheme']) ? $_smarty_tpl->tpl_vars['sttheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['pro_thumnbs_per_xs'] = $_smarty_tpl->tpl_vars['image_count']->value;
$_smarty_tpl->_assignInScope('sttheme', $_tmp_array);
}?>

<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] == 3 && $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_fw']) {?>
    <?php $_smarty_tpl->_assignInScope('slidesPerView', $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_fw']);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] == 2) {?>
        <?php $_smarty_tpl->_assignInScope('slidesPerView', $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_xxl']);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] >= 1) {?>
        <?php $_smarty_tpl->_assignInScope('slidesPerView', $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_xl']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('slidesPerView', $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_lg']);?>
    <?php }
}?>
<div class="images-container 
 pro_number_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slidesPerView']->value, ENT_QUOTES, 'UTF-8');?>

 pro_number_xxl_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_xxl'], ENT_QUOTES, 'UTF-8');?>

 pro_number_xl_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_xl'], ENT_QUOTES, 'UTF-8');?>

 pro_number_lg_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_lg'], ENT_QUOTES, 'UTF-8');?>

 pro_number_md_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_md'], ENT_QUOTES, 'UTF-8');?>

 pro_number_sm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_sm'], ENT_QUOTES, 'UTF-8');?>

 pro_number_xs_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_xs'], ENT_QUOTES, 'UTF-8');?>

">
  <?php if (!$_smarty_tpl->tpl_vars['do_from_quickview']->value && ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 2 || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 3 && $_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device']))) {?>
  <div class="kk_container">
    <a class="kk_close" href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">&times;</a>
    <div class="swiper-container pro_gallery_kk swiper-button-lr swiper-navigation-circle" <?php if ($_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?> dir="rtl" <?php }?>>
        <div class="swiper-wrapper">
              <?php $_smarty_tpl->_assignInScope('curr_combination_thumbs', array());?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, 'index');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['curr_combination_thumbs']) ? $_smarty_tpl->tpl_vars['curr_combination_thumbs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['image']->value['id_image'];
$_smarty_tpl->_assignInScope('curr_combination_thumbs', $_tmp_array);?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-popup-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_gallerys'] == 2) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sttheme']->value['pro_images'], 'image', false, 'index');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                  <?php if (!in_array($_smarty_tpl->tpl_vars['image']->value['id_image'],$_smarty_tpl->tpl_vars['curr_combination_thumbs']->value)) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-popup-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>
        </div>
        <div class="swiper-button swiper-button-next"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
        <div class="swiper-button swiper-button-prev"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
        <div class="swiper-pagination"></div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
    //<![CDATA[
        
        if(typeof(swiper_options) ==='undefined')
        var swiper_options = [];
        
        
        swiper_options.push({
            
            id_st: '.pro_gallery_kk',
            spaceBetween: <?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['gallery_spacing'], ENT_QUOTES, 'UTF-8');?>
,
            
            navigation:{
              nextEl: '.pro_gallery_kk .swiper-button-next',
              prevEl: '.pro_gallery_kk .swiper-button-prev'
            },
            pagination: {
              el: '.pro_gallery_kk .swiper-pagination',
              type: 'custom',
              clickable: true,
              renderCustom: function (swiper, current, total) {
                return '<span>' + current + ' / ' + total + '</span>';
              }
            },
            
            loop: <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['pro_main_image_loop'])) && $_smarty_tpl->tpl_vars['sttheme']->value['pro_main_image_loop']) {?>true<?php } else { ?>false<?php }?>,
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            slidesPerView: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_xs'] < $_smarty_tpl->tpl_vars['image_count']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_xs'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_count']->value, ENT_QUOTES, 'UTF-8');
}?>,
            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_main_image_trans']) {?>
              
              fadeEffect: {
                crossFade: true
              },
              
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive']) {?>
            
            breakpoints: {
                
                1600: {slidesPerView: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_fw'] < $_smarty_tpl->tpl_vars['image_count']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_fw'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_count']->value, ENT_QUOTES, 'UTF-8');
}?> },
                1440: {slidesPerView: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_xxl'] < $_smarty_tpl->tpl_vars['image_count']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_xxl'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_count']->value, ENT_QUOTES, 'UTF-8');
}?> },
                1200: {slidesPerView: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_xl'] < $_smarty_tpl->tpl_vars['image_count']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_xl'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_count']->value, ENT_QUOTES, 'UTF-8');
}?> },
                992: {slidesPerView: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_lg'] < $_smarty_tpl->tpl_vars['image_count']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_lg'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_count']->value, ENT_QUOTES, 'UTF-8');
}?> },
                768: {slidesPerView: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_md'] < $_smarty_tpl->tpl_vars['image_count']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_md'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_count']->value, ENT_QUOTES, 'UTF-8');
}?> },
                480: {slidesPerView: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_sm'] < $_smarty_tpl->tpl_vars['image_count']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_per_sm'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_count']->value, ENT_QUOTES, 'UTF-8');
}?> }
            },
            
            <?php }?>
            
            lazy:{
              loadPrevNext: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery']) {?>false<?php } else { ?>true<?php }?>,
              loadPrevNextAmount: 1
            },
            zoom: {
              maxRatio: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_maxratio']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_kk_maxratio'], ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>,
            },
            mousewheel: true,
            roundLengths: true,
            centeredSlides: true,
            observer: true,
            observeParents: true
        });
         
    //]]>
    <?php echo '</script'; ?>
>
  </div>
  <?php }?>
<div class="images-container-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 2 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7) {?> flex_container flex_start <?php }?>">
<div class="pro_gallery_top_container <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 2 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7) {?> flex_child <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7) {?> flex_order_2 <?php }
}?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 1 && $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 2 && $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 7) {?> mb-3 <?php }?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_gallery_fullscreen_mobile']) {?> pro_gallery_fullscreen_mobile <?php }?>">
  <div class="pro_gallery_top_inner posi_rel">
  <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 8) {?>
    <div class="st_image_scrolling_wrap">
      <div class="row">
        <?php $_smarty_tpl->_assignInScope('curr_combination_thumbs', array());?>
        <?php $_smarty_tpl->_assignInScope('curr_index', 1);?>
        <?php $_smarty_tpl->_assignInScope('cover_id', $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']);?>
        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['default_image']))) {
$_smarty_tpl->_assignInScope('cover_id', $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']);
}?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, 'index');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['cover_id']->value) {
$_smarty_tpl->_assignInScope('pro_gallery_initial', $_smarty_tpl->tpl_vars['index']->value);
}?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['curr_combination_thumbs']) ? $_smarty_tpl->tpl_vars['curr_combination_thumbs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['image']->value['id_image'];
$_smarty_tpl->_assignInScope('curr_combination_thumbs', $_tmp_array);?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-scrolling.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php $_smarty_tpl->_assignInScope('curr_index', $_smarty_tpl->tpl_vars['curr_index']->value+1);?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_gallerys'] == 2) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sttheme']->value['pro_images'], 'image', false, 'index');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
              <?php if (!in_array($_smarty_tpl->tpl_vars['image']->value['id_image'],$_smarty_tpl->tpl_vars['curr_combination_thumbs']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-scrolling.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php $_smarty_tpl->_assignInScope('curr_index', $_smarty_tpl->tpl_vars['curr_index']->value+1);?>
              <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
      </div>
    </div>
  <?php } else { ?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1122136862668ab4d273e464_17805562', 'product_flags');
?>


  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_617956031668ab4d2740dd1_47378773', 'product_cover');
?>

  <?php }?>
  </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 4 && $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 5 && $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 8) {?>
<div class="pro_gallery_thumbs_container <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 2 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7) {?> pro_gallery_thumbs_vertical <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 3) {?> pro_gallery_thumbs_grid <?php } else { ?> pro_gallery_thumbs_horizontal <?php }?>">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21707633668ab4d2752b22_46256027', 'product_images');
?>

</div>
<?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_gallerys'] == 1 && count($_smarty_tpl->tpl_vars['curr_combination_thumbs']->value) < count($_smarty_tpl->tpl_vars['sttheme']->value['pro_images'])) {?>
  <a href="javascript:;" class="btn btn-link pro_gallery_show_all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all images','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a>
  <?php echo '<script'; ?>
 type="text/javascript">
  //<![CDATA[
  if(typeof(sttheme)!='undefined')
    sttheme.pro_images = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['sttheme']->value['pro_images'] ));?>
;
  //]]>
  <?php echo '</script'; ?>
>
<?php }?>
</div>
<?php }
/* {block 'product_flags'} */
class Block_1122136862668ab4d273e464_17805562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_1122136862668ab4d273e464_17805562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'ststickers') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/sticker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stickers'=>$_smarty_tpl->tpl_vars['extra']->value['content'],'sticker_position'=>array(0,1,2,3,4,5,6,7,8,9,12),'is_from_product_page'=>1,'sticker_quantity'=>$_smarty_tpl->tpl_vars['product']->value['quantity'],'sticker_allow_oosp'=>$_smarty_tpl->tpl_vars['product']->value['allow_oosp'],'sticker_quantity_all_versions'=>$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'],'sticker_stock_text'=>$_smarty_tpl->tpl_vars['product']->value['availability_message']), 0, true);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stvideo') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:stvideo/views/templates/hook/stvideo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stvideos'=>$_smarty_tpl->tpl_vars['extra']->value['content']['videos'],'video_position'=>array(1,2,3,4,5,6,7,8,9)), 0, true);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_617956031668ab4d2740dd1_47378773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_617956031668ab4d2740dd1_47378773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

    <?php if (!$_smarty_tpl->tpl_vars['do_from_quickview']->value && ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 1 || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 3 && !$_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device']))) {?>
      <div class="pro_popup_trigger_box">
            <?php $_smarty_tpl->_assignInScope('curr_combination_thumbs', array());?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, 'index');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['curr_combination_thumbs']) ? $_smarty_tpl->tpl_vars['curr_combination_thumbs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['image']->value['id_image'];
$_smarty_tpl->_assignInScope('curr_combination_thumbs', $_tmp_array);?>
        <a href="<?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value['superlarge_default'])) && $_smarty_tpl->tpl_vars['stwebp']->value['superlarge_default']) {
echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['image']->value['bySize']['superlarge_default']['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['superlarge_default']['url'], ENT_QUOTES, 'UTF-8');
}?>" class="pro_popup_trigger <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 1 || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 3 && !$_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {?> st_popup_image st_pro_popup_image<?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 2 || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 3 && $_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {?>kk_triger<?php }?> replace-2x layer_icon_wrap" data-group="pro_gallery_popup_trigger" title="<?php if ($_smarty_tpl->tpl_vars['image']->value['legend']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"><i class="fto-resize-full"></i></a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_gallerys'] == 2) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sttheme']->value['pro_images'], 'image', false, 'index');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
          <?php if (!in_array($_smarty_tpl->tpl_vars['image']->value['id_image'],$_smarty_tpl->tpl_vars['curr_combination_thumbs']->value)) {?>
          <a href="<?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value['superlarge_default'])) && $_smarty_tpl->tpl_vars['stwebp']->value['superlarge_default']) {
echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['image']->value['bySize']['superlarge_default']['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['superlarge_default']['url'], ENT_QUOTES, 'UTF-8');
}?>" class="pro_popup_trigger <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 1 || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 3 && !$_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {?> st_popup_image st_pro_popup_image<?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 2 || ($_smarty_tpl->tpl_vars['sttheme']->value['enable_thickbox'] == 3 && $_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {?>kk_triger<?php }?> replace-2x layer_icon_wrap" data-group="pro_gallery_popup_trigger" title="<?php if ($_smarty_tpl->tpl_vars['image']->value['legend']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"><i class="fto-resize-full"></i></a>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
      </div>
    <?php }?>
    <div class="swiper-container pro_gallery_top swiper-button-lr <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['thumbs_direction_nav'] == 3) {?> swiper-navigation-rectangle <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['thumbs_direction_nav'] == 2) {?> swiper-navigation-arrow <?php } else { ?> swiper-navigation-circle <?php }?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_main_slider_arrow'] == 1 || ($_smarty_tpl->tpl_vars['sttheme']->value['pro_main_slider_arrow'] == 2 && $_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {?> swiper-navigation_visible <?php }?>" <?php if ($_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?> dir="rtl" <?php }?>>
        <div class="swiper-wrapper">
            <?php $_smarty_tpl->_assignInScope('pro_gallery_initial', 0);?>
            <?php $_smarty_tpl->_assignInScope('cover_id', $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']);?>
            <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['default_image']))) {
$_smarty_tpl->_assignInScope('cover_id', $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']);
}?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, 'index');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['cover_id']->value) {
$_smarty_tpl->_assignInScope('pro_gallery_initial', $_smarty_tpl->tpl_vars['index']->value);
}?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php $_smarty_tpl->_assignInScope('curr_combination_thumbs', array());?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, 'index');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['curr_combination_thumbs']) ? $_smarty_tpl->tpl_vars['curr_combination_thumbs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['image']->value['id_image'];
$_smarty_tpl->_assignInScope('curr_combination_thumbs', $_tmp_array);?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('disable_lazyloading'=>$_smarty_tpl->tpl_vars['pro_gallery_initial']->value), 0, true);
?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_gallerys'] == 2) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sttheme']->value['pro_images'], 'image', false, 'index');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                  <?php if (!in_array($_smarty_tpl->tpl_vars['image']->value['id_image'],$_smarty_tpl->tpl_vars['curr_combination_thumbs']->value)) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('disable_lazyloading'=>$_smarty_tpl->tpl_vars['pro_gallery_initial']->value), 0, true);
?>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>
        </div>
        <div class="swiper-button swiper-button-next"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
        <div class="swiper-button swiper-button-prev"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 4) {?><div class="swiper-pagination"></div><?php }?>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
    //<![CDATA[
        
        if(typeof(swiper_options) ==='undefined')
        var swiper_options = [];
        
        
        swiper_options.push({
            
            id_st: '.pro_gallery_top',
            speed: 0,
            spaceBetween: <?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['gallery_spacing'], ENT_QUOTES, 'UTF-8');?>
,
            
            navigation:{
              nextEl: '.pro_gallery_top .swiper-button-next',
              prevEl: '.pro_gallery_top .swiper-button-prev'
            },
            
            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 4) {?>
            
            pagination: {
              el: '.pro_gallery_top .swiper-pagination',
              clickable: true,
              type: 'bullets'
            },
            
            <?php }?>
            loop: <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['pro_main_image_loop'])) && $_smarty_tpl->tpl_vars['sttheme']->value['pro_main_image_loop']) {?>true<?php } else { ?>false<?php }?>,
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_xs'], ENT_QUOTES, 'UTF-8');?>
,
            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_main_image_trans']) {?>
              
              fadeEffect: {
                crossFade: true
              },
              
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive']) {?>
            
            breakpoints: {
                
                <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] == 3 && $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_fw']) {?>1600: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_fw'], ENT_QUOTES, 'UTF-8');?>
 },<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] == 2) {?>1440: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_xxl'], ENT_QUOTES, 'UTF-8');?>
 },<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] >= 1) {?>1200: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_xl'], ENT_QUOTES, 'UTF-8');?>
 },<?php }?>
                992: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_lg'], ENT_QUOTES, 'UTF-8');?>
 },
                768: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_md'], ENT_QUOTES, 'UTF-8');?>
 },
                480: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_thumnbs_per_sm'], ENT_QUOTES, 'UTF-8');?>
 }
            },
            
            <?php }?>
            
            on: {
              init: function (swiper) {
                  prestashop.easyzoom.init(swiper.$wrapperEl.find('.swiper-slide-visible .easyzoom'));
                  var _i = swiper.activeIndex;
                  
                  <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_main_image_loop']) {?>
                    _i = swiper.realIndex;
                  <?php }?>
                  
                  $('.pro_popup_trigger_box a').removeClass('st_active').eq(prestashop.language.is_rtl=='1'?$(swiper.slides).length-_i:_i).addClass('st_active');

                  if($(swiper.slides).length==$(swiper.slides).filter('.swiper-slide-visible').length)
                  {
                      $(swiper.params.navigation.nextEl).hide();
                      $(swiper.params.navigation.prevEl).hide();
                  }
                  else
                  {
                      $(swiper.params.navigation.nextEl).show();
                      $(swiper.params.navigation.prevEl).show();
                  }
              },
              slideChangeTransitionEnd: function (swiper) {
                prestashop.easyzoom.init(swiper.$wrapperEl.find('.swiper-slide-visible .easyzoom'));
              },
              activeIndexChange: function (swiper) {
                var _i = swiper.activeIndex;
                
                <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_main_image_loop']) {?>
                  _i = swiper.realIndex;
                <?php }?>
                
                if($('.pro_gallery_thumbs').length && typeof($('.pro_gallery_thumbs')[0].swiper)!=='undefined')
                {
                  $('.pro_gallery_thumbs')[0].swiper.slideTo(_i);
                  $($('.pro_gallery_thumbs')[0].swiper.slides).removeClass('clicked_thumb').eq(_i).addClass('clicked_thumb');
                }
                $('.pro_popup_trigger_box a').removeClass('st_active').eq(prestashop.language.is_rtl=='1'?$(swiper.slides).length-_i:_i).addClass('st_active');
              }
            },
            
            roundLengths: true,
            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery']) {?>
            lazy: false,
            <?php } else { ?>
            
            lazy:{
              loadPrevNext: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery']) {?>false<?php } else { ?>true<?php }?>,
              loadPrevNextAmount: 1
            },
            
            <?php }?>
            initialSlide: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pro_gallery_initial']->value, ENT_QUOTES, 'UTF-8');?>

        
        });
         
    //]]>
    <?php echo '</script'; ?>
>
  <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_21707633668ab4d2752b22_46256027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_21707633668ab4d2752b22_46256027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="swiper-container pro_gallery_thumbs swiper-button-lr <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['thumbs_direction_nav'] == 3) {?> swiper-navigation-rectangle <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['thumbs_direction_nav'] == 2) {?> swiper-navigation-arrow <?php } else { ?> swiper-navigation-circle <?php }?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 0) {?> swiper-small-button <?php }?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_gallerys']) {?> hightlight_curr_thumbs <?php }?>" <?php if ($_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?> dir="rtl" <?php }?>>
        <div class="swiper-wrapper">
            <?php $_smarty_tpl->_assignInScope('curr_combination_thumbs', array());?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, 'index');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
              <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['curr_combination_thumbs']) ? $_smarty_tpl->tpl_vars['curr_combination_thumbs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['image']->value['id_image'];
$_smarty_tpl->_assignInScope('curr_combination_thumbs', $_tmp_array);?>
              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-thumbnails-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('curr_combination_thumb'=>true,'disable_lazyloading'=>$_smarty_tpl->tpl_vars['pro_gallery_initial']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_gallerys'] == 2) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sttheme']->value['pro_images'], 'image', false, 'index');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                <?php if (!in_array($_smarty_tpl->tpl_vars['image']->value['id_image'],$_smarty_tpl->tpl_vars['curr_combination_thumbs']->value)) {?>
                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-thumbnails-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('disable_lazyloading'=>$_smarty_tpl->tpl_vars['pro_gallery_initial']->value), 0, true);
?>
                <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 2 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7) {?>
        <div class="swiper-button swiper-button-top"><i class="fto-up-open slider_arrow_top"></i><i class="fto-down-open slider_arrow_bottom"></i></div>
        <div class="swiper-button swiper-button-bottom"><i class="fto-up-open slider_arrow_top"></i><i class="fto-down-open slider_arrow_bottom"></i></div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 0) {?>
        <div class="swiper-button swiper-button-next"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
        <div class="swiper-button swiper-button-prev"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
        <?php }?>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
    //<![CDATA[
    sttheme.product_thumbnails = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'], ENT_QUOTES, 'UTF-8');?>
;
    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] != 3) {?>
        
        if(typeof(swiper_options) ==='undefined')
        var swiper_options = [];
        
        
        swiper_options.push({
            
            id_st: '.pro_gallery_thumbs',
            speed: 0,
            spaceBetween: 10,
            slidesPerView: 'auto',
            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 2 || $_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7) {?>
            direction: 'vertical',
            
            navigation:{
              nextEl: '.pro_gallery_thumbs .swiper-button-bottom',
              prevEl: '.pro_gallery_thumbs .swiper-button-top'
            },
            
            <?php } else { ?>
            
            navigation:{
              nextEl: '.pro_gallery_thumbs .swiper-button-next',
              prevEl: '.pro_gallery_thumbs .swiper-button-prev'
            },
            
            <?php }?>            
            loop: false,
            slideToClickedSlide: false,
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            
            on: {
              init: function (swiper) {
                if($(swiper.slides).length==$(swiper.slides).filter('.swiper-slide-visible').length)
                {
                    $(swiper.params.navigation.nextEl).hide();
                    $(swiper.params.navigation.prevEl).hide();
                }
                else
                {
                    $(swiper.params.navigation.nextEl).show();
                    $(swiper.params.navigation.prevEl).show();
                }
                prestashop.emit('thumbsContainerInit');
              },
              click: function (swiper) {
                // var _i = $(swiper.clickedSlide).data('swiper-slide-index');
                if(swiper.clickedIndex>=0){
                  if($('.pro_gallery_top').length && typeof($('.pro_gallery_top')[0].swiper)!=='undefined'){
                    
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_main_image_loop']) {?>
                      $('.pro_gallery_top')[0].swiper.slideToLoop(swiper.clickedIndex);
                    <?php } else { ?>
                      $('.pro_gallery_top')[0].swiper.slideTo(swiper.clickedIndex);
                    <?php }?>
                    
                  }else if($('.st_image_scrolling_wrap .st_image_scrolling_item').length){
                    var _to_top = $('.st_image_scrolling_wrap .st_image_scrolling_item').eq(swiper.clickedIndex).offset().top;
                    if(sttheme.is_mobile_device && sttheme.use_mobile_header==1)
                      _to_top -= $('#mobile_bar').outerHeight();
                    else if(sttheme.sticky_option)
                      _to_top -= $((sttheme.sticky_option==2 || sttheme.sticky_option==4) ? '#st_header' : '#top_extra .st_mega_menu_container').outerHeight();
                    $('body,html').animate({
                      scrollTop: _to_top
                    }, 'fast');
                  }
                  $(swiper.slides).removeClass('clicked_thumb').eq(swiper.clickedIndex).addClass('clicked_thumb');
                }
              }
            },
            
            roundLengths: true,
            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7 || $_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery'] || $_smarty_tpl->tpl_vars['pro_gallery_initial']->value) {?>
            lazy: false,
            <?php } else { ?>
            
            lazy:{
              loadPrevNext: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7 || $_smarty_tpl->tpl_vars['sttheme']->value['lazyload_main_gallery']) {?>false<?php } else { ?>true<?php }?>,
              loadPrevNextAmount: 1
            },
            
            <?php }?>
            initialSlide: <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_thumbnails'] == 7) {?>0<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pro_gallery_initial']->value, ENT_QUOTES, 'UTF-8');
}?>
        
        });
         
    <?php }?>
    //]]>
    <?php echo '</script'; ?>
>
  <?php
}
}
/* {/block 'product_images'} */
}
