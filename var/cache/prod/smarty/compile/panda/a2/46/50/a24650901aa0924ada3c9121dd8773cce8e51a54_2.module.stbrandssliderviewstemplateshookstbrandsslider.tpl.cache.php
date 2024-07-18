<?php
/* Smarty version 4.3.4, created on 2024-07-18 19:54:29
  from 'module:stbrandssliderviewstemplateshookstbrandsslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_669956d593d171_45401095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a24650901aa0924ada3c9121dd8773cce8e51a54' => 
    array (
      0 => 'module:stbrandssliderviewstemplateshookstbrandsslider.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/slider/script.tpl' => 1,
  ),
),false)) {
function content_669956d593d171_45401095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->compiled->nocache_hash = '370501181669956d591da68_52310967';
?>
<!-- MODULE st stbrandsslider -->
<div id="brands_slider_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hook_hash']->value, ENT_QUOTES, 'UTF-8');?>
" class="brands_slider_container <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['hide_mob']->value == 2) {?> hidden-lg-up <?php }?> block products_container <?php if ($_smarty_tpl->tpl_vars['has_background_img']->value || $_smarty_tpl->tpl_vars['video_mpfour']->value) {?> jarallax <?php }?>" 
<?php if ($_smarty_tpl->tpl_vars['has_background_img']->value || $_smarty_tpl->tpl_vars['video_mpfour']->value) {?> data-jarallax data-speed="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['speed']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['video_mpfour']->value) {?> data-video-src="mp4:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_mpfour']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['video_webm']->value) {?>,webm:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_webm']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['video_ogg']->value) {?>,ogv:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_ogg']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php }?> <?php }?>
>
<?php if ((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value) {?><div class="wide_container"><div class="container"><?php }?>
<section id="brands_slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hook_hash']->value, ENT_QUOTES, 'UTF-8');?>
" class="brands_slider">

    <div class="row flex_lg_container flex_stretch ">
        <?php if ((isset($_smarty_tpl->tpl_vars['brands']->value)) && count($_smarty_tpl->tpl_vars['brands']->value)) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value && $_smarty_tpl->tpl_vars['custom_content']->value[10]['width']) {?>
            <div class="col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_content']->value[10]['width'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['custom_content']->value[10]['content'];?>

            </div>
        <?php }?>
        <div class="col-lg-<?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value) {
echo htmlspecialchars((string) 12-$_smarty_tpl->tpl_vars['custom_content']->value[10]['width']-$_smarty_tpl->tpl_vars['custom_content']->value[30]['width'], ENT_QUOTES, 'UTF-8');
} else { ?>12<?php }?> products_slider"> <!-- to do what if the sum of left and right contents larger than 12 -->
        

    <?php if ($_smarty_tpl->tpl_vars['title_position']->value != 3 && $_smarty_tpl->tpl_vars['display_as_grid']->value != 1) {?>
        <div class="title_block flex_container title_align_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['title_position']->value, ENT_QUOTES, 'UTF-8');?>
 title_style_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['heading_style'], ENT_QUOTES, 'UTF-8');?>
 <?php if ((isset($_smarty_tpl->tpl_vars['sub_title']->value)) && $_smarty_tpl->tpl_vars['sub_title']->value) {?> st_has_sub_title <?php }?>">
            <div class="flex_child title_flex_left"></div>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8');?>
" class="title_block_inner" title="<?php if ((isset($_smarty_tpl->tpl_vars['title']->value)) && $_smarty_tpl->tpl_vars['title']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Brands','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>"><?php if ((isset($_smarty_tpl->tpl_vars['title']->value)) && $_smarty_tpl->tpl_vars['title']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Brands','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></a>
            <div class="flex_child title_flex_right"></div>
            <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value == 1 && (isset($_smarty_tpl->tpl_vars['brands']->value)) && $_smarty_tpl->tpl_vars['brands']->value) {?>
                <div class="swiper-button-tr <?php if ($_smarty_tpl->tpl_vars['hide_direction_nav_on_mob']->value) {?> hidden-md-down <?php }?>"><div class="swiper-button swiper-button-outer swiper-button-prev"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div><div class="swiper-button swiper-button-outer swiper-button-next"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div></div>        
            <?php }?>
        </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['sub_title']->value)) && $_smarty_tpl->tpl_vars['sub_title']->value) {?><div class="slider_sub_title"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</div><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 1) {?>
        <?php $_smarty_tpl->_assignInScope('direction_nav', 5);?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value) {
echo $_smarty_tpl->tpl_vars['custom_content']->value[1]['content'];
}?>

    <?php $_smarty_tpl->_assignInScope('is_lazy', ((isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value));?>
    <div class="block_content <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?> lazy_swiper<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['display_as_grid']->value == 1) {?>
            <div class="featured_categories_list row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand', false, 'key');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('curr_index', $_smarty_tpl->tpl_vars['key']->value);?>
                <?php $_smarty_tpl->_assignInScope('curr_iteration', $_smarty_tpl->tpl_vars['key']->value+1);?>
                <div class="<?php if ($_smarty_tpl->tpl_vars['pro_per_fw']->value) {?>col-fw-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_fw']->value),'.','-'), ENT_QUOTES, 'UTF-8');
}?>  <?php if ($_smarty_tpl->tpl_vars['pro_per_xxl']->value) {?>col-xxl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xxl']->value),'.','-'), ENT_QUOTES, 'UTF-8');
}?>  <?php if ($_smarty_tpl->tpl_vars['pro_per_xl']->value) {?>col-xl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xl']->value),'.','-'), ENT_QUOTES, 'UTF-8');
}?> col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_lg']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_md']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_sm']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xs']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
  featured_categories_item">
                    <div class="cate_outer_box">
                        <div class="cate_first_box">
                            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="fc_cat_image">
                                <picture>
                                <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value['brand_default'])) && $_smarty_tpl->tpl_vars['stwebp']->value['brand_default']) {?>
                                <!--[if IE 9]><video style="display: none;"><![endif]-->
                                <source <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['brand']->value['image'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['retina'] && $_smarty_tpl->tpl_vars['brand']->value['image_2x']) {?>,<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['brand']->value['image_2x'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
 2x<?php }?>"
                                    title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                                    type="image/webp"
                                    >
                                <!--[if IE 9]></video><![endif]-->
                                <?php }?>
                                <img 
                                <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-src<?php } else { ?>src<?php }?>="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
"
                                <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['retina'] && $_smarty_tpl->tpl_vars['brand']->value['image_2x']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-srcset<?php } else { ?>srcset<?php }?>="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image_2x'], ENT_QUOTES, 'UTF-8');?>
 2x"
                                <?php }?>
                                alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?> cate_pro_lazy <?php }?> front-image" />
                                </picture>
                            </a>
                        </div>
                        <div class="pro_second_box">
                            <?php if ($_smarty_tpl->tpl_vars['show_brand_name']->value) {?>
                            <h3 class="s_title_block "><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['show_brand_desc']->value == 1) {?>
                            <div class="product-desc display_sd"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['brand']->value['short_description']),100,'...' )), ENT_QUOTES, 'UTF-8');?>
</div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['show_brand_desc']->value == 2) {?>
                            <div class="product-desc display_sd"><?php echo $_smarty_tpl->tpl_vars['brand']->value['short_description'];?>
</div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php } else { ?>
        <div class="swiper-container products_sldier_swiper <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value > 1) {?> swiper-button-lr <?php if (!(isset($_smarty_tpl->tpl_vars['from_eb']->value)) || !$_smarty_tpl->tpl_vars['from_eb']->value) {?> swiper-small-button <?php }?> <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value == 6 || $_smarty_tpl->tpl_vars['direction_nav']->value == 7) {?> swiper-navigation-circle <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 4 || $_smarty_tpl->tpl_vars['direction_nav']->value == 5) {?> swiper-navigation-rectangle <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 8 || $_smarty_tpl->tpl_vars['direction_nav']->value == 9) {?> swiper-navigation-arrow <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 2 || $_smarty_tpl->tpl_vars['direction_nav']->value == 3) {?> swiper-navigation-full <?php }?> <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value == 2 || $_smarty_tpl->tpl_vars['direction_nav']->value == 4 || $_smarty_tpl->tpl_vars['direction_nav']->value == 6 || $_smarty_tpl->tpl_vars['direction_nav']->value == 8) {?> swiper-navigation_visible <?php }
}?>" <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['is_rtl']) {?> dir="rtl" <?php }?>>
            <div class="swiper-wrapper">
            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                <div class="brands_slider_wrap swiper-slide">
                    <div class="pro_outer_box">
                	<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="brands_slider_item product_img_link <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?> is_lazy <?php }?>">
                        <picture>
                        <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value['brand_default'])) && $_smarty_tpl->tpl_vars['stwebp']->value['brand_default']) {?>
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                          <source <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['brand']->value['image'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['retina'] && $_smarty_tpl->tpl_vars['brand']->value['image_2x']) {?>,<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['brand']->value['image_2x'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
 2x<?php }?>"
                            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                            type="image/webp"
                            >
                        <!--[if IE 9]></video><![endif]-->
                        <?php }?>
                        <img 
                        <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-src<?php } else { ?>src<?php }?>="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['retina'] && $_smarty_tpl->tpl_vars['brand']->value['image_2x']) {?>
                          <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-srcset<?php } else { ?>srcset<?php }?>="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image_2x'], ENT_QUOTES, 'UTF-8');?>
 2x"
                        <?php }?>
                         alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?> swiper-lazy <?php }?> front-image" />
                        </picture>
                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['show_brand_name']->value || $_smarty_tpl->tpl_vars['show_brand_desc']->value) {?>
                        <div class="pro_second_box">
                        <?php if ($_smarty_tpl->tpl_vars['show_brand_name']->value) {?>
                        <h3 class="s_title_block "><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['show_brand_desc']->value == 1) {?>
                        <div class="product-desc"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['brand']->value['short_description']),100,'...' )), ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['show_brand_desc']->value == 2) {?>
                        <div class="product-desc"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['short_description'], ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php }?>
                        </div>
                    <?php }?>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value > 1) {?>
                <div class="swiper-button swiper-button-outer swiper-button-next <?php if ($_smarty_tpl->tpl_vars['hide_direction_nav_on_mob']->value) {?> hidden-md-down <?php }?>"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
                <div class="swiper-button swiper-button-outer swiper-button-prev <?php if ($_smarty_tpl->tpl_vars['hide_direction_nav_on_mob']->value) {?> hidden-md-down <?php }?>"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['control_nav']->value) {?>
            <div class="swiper-pagination <?php if ($_smarty_tpl->tpl_vars['control_nav']->value == 2) {?> swiper-pagination-st-custom <?php } elseif ($_smarty_tpl->tpl_vars['control_nav']->value == 4) {?> swiper-pagination-st-round <?php }?> <?php if ($_smarty_tpl->tpl_vars['hide_control_nav_on_mob']->value) {?> hidden-md-down <?php }?>"></div>
            <?php }?>
        </div>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['display_as_grid']->value != 1) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/slider/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('block_name'=>"#brands_slider_container_".((string)$_smarty_tpl->tpl_vars['hook_hash']->value),'is_product_slider'=>0), 0, false);
?>
        <?php }?>
            
            <?php if ((isset($_smarty_tpl->tpl_vars['view_more']->value)) && $_smarty_tpl->tpl_vars['view_more']->value) {?><div class="product_view_more_box text-center"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default btn-more-padding btn-large" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a></div><?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value) {
echo $_smarty_tpl->tpl_vars['custom_content']->value[2]['content'];
}?>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value && $_smarty_tpl->tpl_vars['custom_content']->value[30]['width']) {?>
            <div class="col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_content']->value[30]['width'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['custom_content']->value[30]['content'];?>

            </div>
        <?php }?>
    <?php } else { ?>
        <div class="block_content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No items','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</div>
    <?php }?>
    </div>
</section>

<?php if ((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value) {?></div></div><?php }?>
</div>
<!-- /MODULE st stbrandsslider --><?php }
}
