<?php
/* Smarty version 4.3.4, created on 2024-07-18 19:54:29
  from 'module:stfeaturedcategoriesviewstemplateshookstfeaturedcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_669956d5792f27_30794313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f307e101c41721c025b9668c5027a758e672500b' => 
    array (
      0 => 'module:stfeaturedcategoriesviewstemplateshookstfeaturedcategories.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/slider/script.tpl' => 1,
  ),
),false)) {
function content_669956d5792f27_30794313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->compiled->nocache_hash = '1876595692669956d576db74_68668260';
?>
<!-- MODULE st stfeaturedcategories -->
<?php if ((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value && !$_smarty_tpl->tpl_vars['pro_per_fw']->value) {
$_smarty_tpl->_assignInScope('bu_full_width', true);
} else {
$_smarty_tpl->_assignInScope('bu_full_width', false);
}
if (!(isset($_smarty_tpl->tpl_vars['image_type']->value)) || !$_smarty_tpl->tpl_vars['image_type']->value) {
$_smarty_tpl->_assignInScope('image_type', 'home_default');
}?>

<?php if ($_smarty_tpl->tpl_vars['aw_display']->value || ((isset($_smarty_tpl->tpl_vars['featured_categories']->value)) && $_smarty_tpl->tpl_vars['featured_categories']->value)) {?>
<div id="featured_categories_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hook_hash']->value, ENT_QUOTES, 'UTF-8');?>
" class="featured_categories_container <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['hide_mob']->value == 2) {?> hidden-lg-up <?php }?> block <?php if ($_smarty_tpl->tpl_vars['has_background_img']->value || $_smarty_tpl->tpl_vars['video_mpfour']->value) {?> jarallax <?php }?> products_container" 
<?php if ($_smarty_tpl->tpl_vars['has_background_img']->value || $_smarty_tpl->tpl_vars['video_mpfour']->value) {?> data-jarallax data-speed="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['speed']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['video_mpfour']->value) {?> data-video-src="mp4:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_mpfour']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['video_webm']->value) {?>,webm:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_webm']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['video_ogg']->value) {?>,ogv:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_ogg']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php }?> <?php }?>
>
<?php if ($_smarty_tpl->tpl_vars['bu_full_width']->value) {?><div class="wide_container"><?php }
if ((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value) {?><div class="<?php if ($_smarty_tpl->tpl_vars['bu_full_width']->value) {?>container<?php } else { ?>container-fluid<?php }?>"><?php }?>
<section class="products_section">

    <div class="row flex_lg_container flex_stretch ">
        <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value && $_smarty_tpl->tpl_vars['custom_content']->value[10]['width']) {?>
            <?php echo $_smarty_tpl->tpl_vars['custom_content']->value[10]['content'];?>

        <?php }?>
        <div class="col-lg-<?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value) {
echo htmlspecialchars((string) 12-$_smarty_tpl->tpl_vars['custom_content']->value[10]['width']-$_smarty_tpl->tpl_vars['custom_content']->value[30]['width'], ENT_QUOTES, 'UTF-8');
} else { ?>12<?php }?> products_slider <?php if ($_smarty_tpl->tpl_vars['display_as_grid']->value) {?> display_as_grid <?php }?>"> <!-- to do what if the sum of left and right contents larger than 12 -->

    <?php if ($_smarty_tpl->tpl_vars['title_position']->value != 3) {?>
    <div class="title_block flex_container title_align_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['title_position']->value, ENT_QUOTES, 'UTF-8');?>
 title_style_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['heading_style'], ENT_QUOTES, 'UTF-8');?>
 <?php if ((isset($_smarty_tpl->tpl_vars['sub_title']->value)) && $_smarty_tpl->tpl_vars['sub_title']->value) {?> st_has_sub_title <?php }?>">
        <div class="flex_child title_flex_left"></div>
    <div class="title_block_inner"><?php if ((isset($_smarty_tpl->tpl_vars['title']->value)) && $_smarty_tpl->tpl_vars['title']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured categories','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></div>
        <div class="flex_child title_flex_right"></div>
        <?php if (!$_smarty_tpl->tpl_vars['display_as_grid']->value && $_smarty_tpl->tpl_vars['direction_nav']->value == 1 && (isset($_smarty_tpl->tpl_vars['featured_categories']->value)) && $_smarty_tpl->tpl_vars['featured_categories']->value) {?>
            <div class="swiper-button-tr <?php if ($_smarty_tpl->tpl_vars['hide_direction_nav_on_mob']->value) {?> hidden-md-down <?php }?>"><div class="swiper-button swiper-button-outer swiper-button-prev"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div><div class="swiper-button swiper-button-outer swiper-button-next"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div></div>        
        <?php }?>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['sub_title']->value)) && $_smarty_tpl->tpl_vars['sub_title']->value) {?><div class="slider_sub_title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 1) {?>
        <?php $_smarty_tpl->_assignInScope('direction_nav', 5);?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value) {
echo $_smarty_tpl->tpl_vars['custom_content']->value[1]['content'];
}?>

    <?php if ((isset($_smarty_tpl->tpl_vars['featured_categories']->value)) && is_array($_smarty_tpl->tpl_vars['featured_categories']->value) && count($_smarty_tpl->tpl_vars['featured_categories']->value)) {?>
        <?php if (!$_smarty_tpl->tpl_vars['display_as_grid']->value) {?>
        <?php $_smarty_tpl->_assignInScope('is_lazy', ((isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value));?>
        <div class="block_content <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?> lazy_swiper <?php }?>">
            <div class="swiper-container products_sldier_swiper <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value > 1) {?> swiper-button-lr <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value == 6 || $_smarty_tpl->tpl_vars['direction_nav']->value == 7) {?> swiper-navigation-circle <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 4 || $_smarty_tpl->tpl_vars['direction_nav']->value == 5) {?> swiper-navigation-rectangle  <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 8 || $_smarty_tpl->tpl_vars['direction_nav']->value == 9) {?> swiper-navigation-arrow <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 2 || $_smarty_tpl->tpl_vars['direction_nav']->value == 3) {?> swiper-navigation-full <?php }?> <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value == 2 || $_smarty_tpl->tpl_vars['direction_nav']->value == 4 || $_smarty_tpl->tpl_vars['direction_nav']->value == 6 || $_smarty_tpl->tpl_vars['direction_nav']->value == 8) {?> swiper-navigation_visible <?php }
}?>" <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['is_rtl']) {?> dir="rtl" <?php }?>>
                <div class="swiper-wrapper">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->iteration = 0;
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
$_smarty_tpl->tpl_vars['category']->iteration++;
$__foreach_category_3_saved = $_smarty_tpl->tpl_vars['category'];
?>                
                <div class="featured_categories_item swiper-slide">
                    <div class="pro_outer_box <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_type']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?><i class="swiper-lazy-preloader fto-spin5 animate-spin"></i><?php }?>
                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="fc_cat_image product_img_link <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?> is_lazy <?php }?>">
                        <picture>
                        <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['image_type']->value])) && $_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['image_type']->value] && (isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['url'])) && $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['url']) {?>
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                          <source
                            <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php if ((isset($_smarty_tpl->tpl_vars['image_options']->value)) && $_smarty_tpl->tpl_vars['image_options']->value == 1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image_thumb'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['retina'] && (isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][($_smarty_tpl->tpl_vars['image_type']->value).('_2x')]['url']))) {?>,<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][($_smarty_tpl->tpl_vars['image_type']->value).('_2x')]['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
 2x<?php }
}?>"
                            title="$category.name"
                            type="image/webp"
                            >
                        <!--[if IE 9]></video><![endif]-->
                        <?php }?>
                        <img 
                        <?php if ((isset($_smarty_tpl->tpl_vars['image_options']->value)) && $_smarty_tpl->tpl_vars['image_options']->value == 1) {?> 
                            <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-src<?php } else { ?>src<?php }?>="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image_thumb'], ENT_QUOTES, 'UTF-8');?>
" 
                        <?php } else { ?> 
                            <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-src<?php } else { ?>src<?php }?>="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['retina'] && (isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][($_smarty_tpl->tpl_vars['image_type']->value).('_2x')]['url']))) {?>
                              <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-srcset<?php } else { ?>srcset<?php }?>="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][($_smarty_tpl->tpl_vars['image_type']->value).('_2x')]['url'], ENT_QUOTES, 'UTF-8');?>
 2x"
                            <?php }?>
                        <?php }?>
                         alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?> swiper-lazy <?php }?> front-image" />
                        </picture>
                        <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_cat_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
-default-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_type']->value, ENT_QUOTES, 'UTF-8');?>
.jpg" class="holder" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                    </a>
                    <div class="pro_second_box"><h3 class="s_title_block"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],35,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3></div>
                    </div>
                </div>
                <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value > 1) {?>
                    <div class="swiper-button swiper-button-outer swiper-button-next<?php if ($_smarty_tpl->tpl_vars['hide_direction_nav_on_mob']->value) {?> hidden-md-down <?php }?>"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
                    <div class="swiper-button swiper-button-outer swiper-button-prev<?php if ($_smarty_tpl->tpl_vars['hide_direction_nav_on_mob']->value) {?> hidden-md-down <?php }?>"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['control_nav']->value) {?>
                <div class="swiper-pagination <?php if ($_smarty_tpl->tpl_vars['control_nav']->value == 2) {?> swiper-pagination-st-custom <?php } elseif ($_smarty_tpl->tpl_vars['control_nav']->value == 4) {?> swiper-pagination-st-round <?php }
if ($_smarty_tpl->tpl_vars['hide_control_nav_on_mob']->value) {?> hidden-md-down <?php }?>"></div>
                <?php }?>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/slider/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('block_name'=>"#featured_categories_container_".((string)$_smarty_tpl->tpl_vars['hook_hash']->value),'is_product_slider'=>0), 0, false);
?>
        <?php } else { ?>
            <div class="featured_categories_list row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured_categories']->value, 'category', false, 'index');
$_smarty_tpl->tpl_vars['category']->iteration = 0;
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
$_smarty_tpl->tpl_vars['category']->iteration++;
$__foreach_category_4_saved = $_smarty_tpl->tpl_vars['category'];
?>
                <?php $_smarty_tpl->_assignInScope('curr_index', $_smarty_tpl->tpl_vars['index']->value);?>
                <?php $_smarty_tpl->_assignInScope('curr_iteration', $_smarty_tpl->tpl_vars['index']->value+1);?>
                <div class="<?php if ($_smarty_tpl->tpl_vars['pro_per_fw']->value) {?>col-fw-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_fw']->value),'.','-'), ENT_QUOTES, 'UTF-8');
}?>  <?php if ($_smarty_tpl->tpl_vars['pro_per_xxl']->value) {?>col-xxl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xxl']->value),'.','-'), ENT_QUOTES, 'UTF-8');
}?>  <?php if ($_smarty_tpl->tpl_vars['pro_per_xl']->value) {?>col-xl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xl']->value),'.','-'), ENT_QUOTES, 'UTF-8');
}?> col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_lg']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_md']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_sm']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xs']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
  <?php if ($_smarty_tpl->tpl_vars['pro_per_fw']->value && $_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_fw']->value == 1) {?> first-item-of-screen-line<?php }?> <?php if ($_smarty_tpl->tpl_vars['pro_per_xxl']->value && $_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_xxl']->value == 1) {?> first-item-of-large-line<?php }?> <?php if ($_smarty_tpl->tpl_vars['pro_per_xl']->value && $_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_xl']->value == 1) {?> first-item-of-desktop-line<?php }
if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_lg']->value == 1) {?> first-item-of-line<?php }
if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_md']->value == 1) {?> first-item-of-tablet-line<?php }
if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_sm']->value == 1) {?> first-item-of-mobile-line<?php }
if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_xs']->value == 1) {?> first-item-of-portrait-line<?php }?> featured_categories_item">
                    <div class="cate_outer_box">
                        <div class="cate_first_box">
                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="fc_cat_image">
                            <picture>
                            <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['image_type']->value])) && $_smarty_tpl->tpl_vars['stwebp']->value[$_smarty_tpl->tpl_vars['image_type']->value] && (isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['url'])) && $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['url']) {?>
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                              <source
                                <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php if ((isset($_smarty_tpl->tpl_vars['image_options']->value)) && $_smarty_tpl->tpl_vars['image_options']->value == 1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image_thumb'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>

                                <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['retina'] && (isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][($_smarty_tpl->tpl_vars['image_type']->value).('_2x')]['url']))) {?>,<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][($_smarty_tpl->tpl_vars['image_type']->value).('_2x')]['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
 2x<?php }
}?>"
                                title="$category.name"
                                type="image/webp"
                                >
                            <!--[if IE 9]></video><![endif]-->
                            <?php }?>
                            <img 
                            <?php if ((isset($_smarty_tpl->tpl_vars['image_options']->value)) && $_smarty_tpl->tpl_vars['image_options']->value == 1) {?> 
                                src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image_thumb'], ENT_QUOTES, 'UTF-8');?>
" 
                            <?php } elseif ((isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['url']))) {?>
                                    src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" 
                                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['retina'] && (isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][($_smarty_tpl->tpl_vars['image_type']->value).('_2x')]['url']))) {?>
                                      srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][($_smarty_tpl->tpl_vars['image_type']->value).('_2x')]['url'], ENT_QUOTES, 'UTF-8');?>
 2x"
                                    <?php }?>
                                <?php }?>
                            alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="<?php if ((isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['width']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['width'], ENT_QUOTES, 'UTF-8');
}?>" height="<?php if ((isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['height']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['image_type']->value]['height'], ENT_QUOTES, 'UTF-8');
}?>" />
                            </picture>
                        </a>
                    </div>
                    <div class="pro_second_box">
                    <h3 class="s_title_block <?php if (!$_smarty_tpl->tpl_vars['sub_nbr']->value) {?> text-2 <?php }?>"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
                    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['children'])) && count($_smarty_tpl->tpl_vars['category']->value['children'])) {?>
                        <ul class="mb-0">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['children'], 'sub');
$_smarty_tpl->tpl_vars['sub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->do_else = false;
?>
                            <li><i class="fto-angle-right list_arrow"></i><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="display_block" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>
                    </div>
                    </div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    <?php } else { ?>
        <p class="warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No featured categories','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</p>
    <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value) {
echo $_smarty_tpl->tpl_vars['custom_content']->value[2]['content'];
}?>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value && $_smarty_tpl->tpl_vars['custom_content']->value[30]['width']) {?>
            <?php echo $_smarty_tpl->tpl_vars['custom_content']->value[30]['content'];?>

        <?php }?>
    </div>
</section>
<?php if ((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value) {?></div><?php }
if ($_smarty_tpl->tpl_vars['bu_full_width']->value) {?></div><?php }?>
</div>
<?php }?>
<!-- /MODULE st stfeaturedcategories --><?php }
}
