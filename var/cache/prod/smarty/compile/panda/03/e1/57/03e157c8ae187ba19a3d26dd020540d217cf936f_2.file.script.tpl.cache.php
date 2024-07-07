<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/slider/script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42ac83338_92080302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03e157c8ae187ba19a3d26dd020540d217cf936f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/slider/script.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42ac83338_92080302 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '208998353668ab42ac72288_54617072';
?>
    <?php echo '<script'; ?>
>
    //<![CDATA[
        
        if(typeof(swiper_options) ==='undefined')
        var swiper_options = [];
        swiper_options.push({
            
            <?php if ($_smarty_tpl->tpl_vars['slider_slideshow']->value) {?>
            
            autoplay:{
                
                delay: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['slider_s_speed']->value ?? null)===null||$tmp==='' ? 5000 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                <?php if ($_smarty_tpl->tpl_vars['slider_slideshow']->value == 2) {?>stopOnLastSlide:true,<?php }?>
                disableOnInteraction: <?php if ($_smarty_tpl->tpl_vars['slider_pause_on_hover']->value) {?>true<?php } else { ?>false<?php }?>,
                pauseOnMouseEnter: <?php if ((isset($_smarty_tpl->tpl_vars['slider_pause_on_enter']->value)) && $_smarty_tpl->tpl_vars['slider_pause_on_enter']->value) {?>true<?php } else { ?>false<?php }?>,
                reverseDirection: <?php if ((isset($_smarty_tpl->tpl_vars['slider_reverse_direction']->value)) && $_smarty_tpl->tpl_vars['slider_reverse_direction']->value) {?>true<?php } else { ?>false<?php }?>
                
            },
            
            <?php }?>
            speed: <?php if ($_smarty_tpl->tpl_vars['slider_a_speed']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slider_a_speed']->value, ENT_QUOTES, 'UTF-8');
} else { ?>400<?php }?>,
            loop: <?php if ($_smarty_tpl->tpl_vars['rewind_nav']->value && (!(isset($_smarty_tpl->tpl_vars['one_item_only']->value)) || ((isset($_smarty_tpl->tpl_vars['one_item_only']->value)) && $_smarty_tpl->tpl_vars['one_item_only']->value > 1))) {?>true<?php } else { ?>false<?php }?>,
            <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value && ((!(isset($_smarty_tpl->tpl_vars['eb_pro_tm_slider']->value)) && !$_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider']) || ((isset($_smarty_tpl->tpl_vars['eb_pro_tm_slider']->value)) && ($_smarty_tpl->tpl_vars['eb_pro_tm_slider']->value == 0 || ($_smarty_tpl->tpl_vars['eb_pro_tm_slider']->value == 3 && !$_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider']))) || ($_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider'] && (isset($_smarty_tpl->tpl_vars['column_slider']->value)) && $_smarty_tpl->tpl_vars['column_slider']->value && !$_smarty_tpl->tpl_vars['display_pro_col']->value) || ((isset($_smarty_tpl->tpl_vars['is_product_slider']->value)) && !$_smarty_tpl->tpl_vars['is_product_slider']->value))) {?>
                
                lazy:{
                
                  loadPrevNext: <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value == 2) {?>false<?php } else { ?>true<?php }?>,
                  loadPrevNextAmount: <?php if (((isset($_smarty_tpl->tpl_vars['column_slider']->value)) && $_smarty_tpl->tpl_vars['column_slider']->value) || $_smarty_tpl->tpl_vars['slider_move']->value != 1) {?>1<?php } else { ?>1<?php }?>,
                  loadOnTransitionStart: true
                
                },
                
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value) {?>
                
                navigation:{
                
                  nextEl: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_name']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button-outer.swiper-button-next',
                  prevEl: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_name']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button-outer.swiper-button-prev'
                
                },
                
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['control_nav']->value) {?>
            
            pagination: {
            
              el: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_name']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-pagination',
              clickable: true,
              <?php if ($_smarty_tpl->tpl_vars['control_nav']->value == 2) {?>
                
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                },
                
                <?php }?>
              type: <?php if ($_smarty_tpl->tpl_vars['control_nav']->value == 2) {?>'bullets'<?php } elseif ($_smarty_tpl->tpl_vars['control_nav']->value == 3) {?>'progress'<?php } else { ?>'bullets'<?php }?> //A bug of swiper, this should be 'custom' when nav==2
            
            },
            
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['scrollbar_nav']->value)) && $_smarty_tpl->tpl_vars['scrollbar_nav']->value) {?>
            
            scrollbar: {
            
                  el: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_name']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-scrollbar',
                  <?php if ($_smarty_tpl->tpl_vars['scrollbar_width']->value) {?>dragSize: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scrollbar_width']->value, ENT_QUOTES, 'UTF-8');?>
,<?php }?>
                  draggable: true
                
                },
                
            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['column_slider']->value)) && $_smarty_tpl->tpl_vars['column_slider']->value) {?>
                slidesPerView : 1,
                observer : true,
                observeParents : true,
            <?php } elseif ((isset($_smarty_tpl->tpl_vars['slides_per_view_auto']->value)) && $_smarty_tpl->tpl_vars['slides_per_view_auto']->value) {?>
                slidesPerView: 'auto',
                <?php if ($_smarty_tpl->tpl_vars['rewind_nav']->value && (isset($_smarty_tpl->tpl_vars['one_item_only']->value))) {?>
                    loopedSlides: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['one_item_only']->value, ENT_QUOTES, 'UTF-8');?>
,
                <?php }?>
                spaceBetween: <?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['spacing_between']->value, ENT_QUOTES, 'UTF-8');?>
,
            <?php } else { ?>

                freeMode: <?php if ($_smarty_tpl->tpl_vars['slider_move']->value == 2) {?>true<?php } else { ?>false<?php }?>,
                spaceBetween: <?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['spacing_between']->value, ENT_QUOTES, 'UTF-8');?>
,
                slidesPerView: <?php if ($_smarty_tpl->tpl_vars['pro_per_xs']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pro_per_xs']->value, ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>,
                <?php if ($_smarty_tpl->tpl_vars['slider_move']->value == 1) {?>slidesPerGroup: <?php if ($_smarty_tpl->tpl_vars['pro_per_xs']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pro_per_xs']->value, ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>,<?php }?>
                
                breakpoints: {
                    
                    <?php if ((((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value) || $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] == 3) && $_smarty_tpl->tpl_vars['pro_per_fw']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] == 3) {?>1600<?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] == 1) {?>1440<?php } else { ?>1200<?php }?>: {slidesPerView: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_fw']->value ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slider_move']->value == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_fw']->value ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ((isset($_smarty_tpl->tpl_vars['spacing_between_fw']->value)) && $_smarty_tpl->tpl_vars['spacing_between_fw']->value != '') {?>, spaceBetween: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['spacing_between_fw']->value, ENT_QUOTES, 'UTF-8');
}?> },
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] >= 2 && $_smarty_tpl->tpl_vars['pro_per_xxl']->value) {?>1440: {slidesPerView: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_xxl']->value ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slider_move']->value == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_xxl']->value ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ((isset($_smarty_tpl->tpl_vars['spacing_between_xxl']->value)) && $_smarty_tpl->tpl_vars['spacing_between_xxl']->value != '') {?>, spaceBetween: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['spacing_between_xxl']->value, ENT_QUOTES, 'UTF-8');
}?> },<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] >= 1 && $_smarty_tpl->tpl_vars['pro_per_xl']->value) {?>1200: {slidesPerView: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_xl']->value ?? null)===null||$tmp==='' ? 2 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slider_move']->value == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_xl']->value ?? null)===null||$tmp==='' ? 2 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ((isset($_smarty_tpl->tpl_vars['spacing_between_xl']->value)) && $_smarty_tpl->tpl_vars['spacing_between_xl']->value != '') {?>, spaceBetween: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['spacing_between_xl']->value, ENT_QUOTES, 'UTF-8');
}?> },<?php }?>
                    992: {slidesPerView: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_lg']->value ?? null)===null||$tmp==='' ? 4 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slider_move']->value == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_lg']->value ?? null)===null||$tmp==='' ? 4 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ((isset($_smarty_tpl->tpl_vars['spacing_between_lg']->value)) && $_smarty_tpl->tpl_vars['spacing_between_lg']->value != '') {?>, spaceBetween: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['spacing_between_lg']->value, ENT_QUOTES, 'UTF-8');
}?> },
                    768: {slidesPerView: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_md']->value ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slider_move']->value == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_md']->value ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ((isset($_smarty_tpl->tpl_vars['spacing_between_md']->value)) && $_smarty_tpl->tpl_vars['spacing_between_md']->value != '') {?>, spaceBetween: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['spacing_between_md']->value, ENT_QUOTES, 'UTF-8');
}?> },
                    480: {slidesPerView: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_sm']->value ?? null)===null||$tmp==='' ? 2 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slider_move']->value == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['pro_per_sm']->value ?? null)===null||$tmp==='' ? 2 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ((isset($_smarty_tpl->tpl_vars['spacing_between_sm']->value)) && $_smarty_tpl->tpl_vars['spacing_between_sm']->value != '') {?>, spaceBetween: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['spacing_between_sm']->value, ENT_QUOTES, 'UTF-8');
}?> }
                },
                

            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['autoHeight']->value)) && $_smarty_tpl->tpl_vars['autoHeight']->value) {?>autoHeight:true,<?php }?>
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            
            on: {
              init: function (swiper) {
                $(swiper.container).removeClass('swiper_loading').addClass('swiper_loaded');
                
                <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value) {?>
                
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
                
                <?php }?>
                
              },
              lazyImageReady: function (swiper, slide, image) {
                if($(image).hasClass('front-image'))
                        $(image).closest('.is_lazy').removeClass('is_lazy');//also in pro-lazy.js
              }
            },
            
            //temp fix, loop breaks when roundlenghts and autoplay
            <?php if (!$_smarty_tpl->tpl_vars['slider_slideshow']->value) {?>roundLengths: true,<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['autoplay_stop']->value)) && $_smarty_tpl->tpl_vars['autoplay_stop']->value) {?>autoplayStop:true,<?php }?>
            inviewwatcher:true,
            id_st: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_name']->value, ENT_QUOTES, 'UTF-8');?>
 .products_sldier_swiper'

        
        });
         

    //]]>
    <?php echo '</script'; ?>
><?php }
}
