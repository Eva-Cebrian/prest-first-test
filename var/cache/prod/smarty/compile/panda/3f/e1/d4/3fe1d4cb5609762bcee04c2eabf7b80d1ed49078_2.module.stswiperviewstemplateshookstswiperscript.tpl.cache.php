<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stswiperviewstemplateshookstswiperscript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42aa312a6_91339382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fe1d4cb5609762bcee04c2eabf7b80d1ed49078' => 
    array (
      0 => 'module:stswiperviewstemplateshookstswiperscript.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42aa312a6_91339382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '36746636668ab42aa213d3_12033786';
echo '<script'; ?>
 type="text/javascript">
//<![CDATA[
        
        if(typeof(swiper_options) ==='undefined')
        var swiper_options = [];
        swiper_options.push({
            
            <?php if ($_smarty_tpl->tpl_vars['slides']->value['auto_advance']) {?>
            
            autoplay:{
                
                delay: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['slides']->value['time'] ?? null)===null||$tmp==='' ? 5000 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                <?php if ($_smarty_tpl->tpl_vars['slides']->value['auto_advance'] == 2) {?>stopOnLastSlide:true,<?php }?>
                disableOnInteraction: <?php if ($_smarty_tpl->tpl_vars['slides']->value['pause']) {?>true<?php } else { ?>false<?php }?>
                
            },
            
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['slides']->value['direction']) {?>direction: 'vertical',<?php }?>
            speed: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['slides']->value['trans_period'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            loop: <?php if ($_smarty_tpl->tpl_vars['slides']->value['rewind_nav'] && $_smarty_tpl->tpl_vars['one_item_only']->value > 1) {?>true<?php } else { ?>false<?php }?>,
            <?php if ($_smarty_tpl->tpl_vars['slides']->value['lazy_load']) {?>
            
            lazy:{
              loadPrevNext: true,
              loadPrevNextAmount: 1,
              loadOnTransitionStart: true
            },
            
            <?php }?>
            grabCursor: <?php if ($_smarty_tpl->tpl_vars['slides']->value['mouse_drag']) {?>true<?php } else { ?>false<?php }?>,
            autoHeight : <?php if ($_smarty_tpl->tpl_vars['slides']->value['auto_height']) {?>true<?php } else { ?>false<?php }?>,
            <?php if ($_smarty_tpl->tpl_vars['slides']->value['prev_next']) {?>
                
                navigation:{
                
                  nextEl: '#st_swiper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['id_st_swiper_group'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['st_time']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_time']->value, ENT_QUOTES, 'UTF-8');
}?> .swiper-button-next',
                  prevEl: '#st_swiper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['id_st_swiper_group'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['st_time']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_time']->value, ENT_QUOTES, 'UTF-8');
}?> .swiper-button-prev'
                
                },
                
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['slides']->value['pag_nav']) {?>
            
            pagination: {
            
              el: '.swiper-pagination',
              clickable: true,
              <?php if ($_smarty_tpl->tpl_vars['slides']->value['pag_nav'] == 2) {?>
                
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                },
                
                <?php } elseif ($_smarty_tpl->tpl_vars['slides']->value['pag_nav'] == 4) {?>
                
                renderBullet: function (index, className) {
                    return '<span class="' + className + '"><span></span></span>';
                },
                
                <?php }?>
              type: <?php if ($_smarty_tpl->tpl_vars['slides']->value['pag_nav'] == 2 || $_smarty_tpl->tpl_vars['slides']->value['pag_nav'] == 4) {?>'bullets'<?php } elseif ($_smarty_tpl->tpl_vars['slides']->value['pag_nav'] == 3) {?>'progress'<?php } else { ?>'bullets'<?php }?> //A bug of swiper, this should be 'custom' when nav==2
            
            },
            
            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['column_slider']->value)) && $_smarty_tpl->tpl_vars['column_slider']->value) {?>
                observer : true,
                observeParents : true,
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['slides']->value['templates'] == 3) {?>

            centeredSlides: <?php if ($_smarty_tpl->tpl_vars['slides']->value['centered_slides']) {?>true<?php } else { ?>false<?php }?>, //to make sure the center slide showing text out
            freeMode: <?php if ($_smarty_tpl->tpl_vars['slides']->value['move'] == 2) {?>true<?php } else { ?>false<?php }?>,
            spaceBetween: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['slides']->value['spacing_between'] ?? null)===null||$tmp==='' ? 10 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
, //new

            <?php if ($_smarty_tpl->tpl_vars['slides']->value['slides_per_view']) {?>
                slidesPerView: 'auto',
                <?php if ($_smarty_tpl->tpl_vars['slides']->value['rewind_nav']) {?>loopedSlides: <?php echo htmlspecialchars((string) count($_smarty_tpl->tpl_vars['slides']->value['slide']), ENT_QUOTES, 'UTF-8');?>
,<?php }?>
            <?php } else { ?>
                slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_xs'], ENT_QUOTES, 'UTF-8');?>
,
                <?php if ($_smarty_tpl->tpl_vars['slides']->value['move'] == 1) {?>slidesPerGroup: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_xs'], ENT_QUOTES, 'UTF-8');?>
,<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive'] && !$_smarty_tpl->tpl_vars['sttheme']->value['version_switching']) {?>
                
                breakpoints: {
                    
                    <?php if ($_smarty_tpl->tpl_vars['slides']->value['is_full_width']) {?>
                    1900: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_huge'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slides']->value['move'] == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_huge'], ENT_QUOTES, 'UTF-8');
}?> },
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] == 2 || $_smarty_tpl->tpl_vars['slides']->value['is_full_width']) {?>1600: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_xxlg'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slides']->value['move'] == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_xxlg'], ENT_QUOTES, 'UTF-8');
}?> },<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] >= 1 || $_smarty_tpl->tpl_vars['slides']->value['is_full_width']) {?>1440: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_xlg'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slides']->value['move'] == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_xlg'], ENT_QUOTES, 'UTF-8');
}?> },<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] >= 1 || $_smarty_tpl->tpl_vars['slides']->value['is_full_width']) {?>1200: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_lg'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slides']->value['move'] == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_lg'], ENT_QUOTES, 'UTF-8');
}?> },<?php }?>
                    992: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_md'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slides']->value['move'] == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_md'], ENT_QUOTES, 'UTF-8');
}?> },
                    768: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_sm'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slides']->value['move'] == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_sm'], ENT_QUOTES, 'UTF-8');
}?> },
                    480: {slidesPerView: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_xs'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['slides']->value['move'] == 1) {?>, slidesPerGroup: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['items_xs'], ENT_QUOTES, 'UTF-8');
}?> }
                },

                
                <?php }?>
            <?php }?>//end slides_per_view

            <?php } else { ?>// else template 0,1,2

            <?php if ($_smarty_tpl->tpl_vars['slides']->value['progress_bar']) {?>
            custom_progress_bar: true,
            bar_time: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['slides']->value['time'] ?? null)===null||$tmp==='' ? 5000 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            <?php }?>
            slidesPerView : 1,
            <?php if ($_smarty_tpl->tpl_vars['slides']->value['transition_style'] == 1) {?>
              
              effect: 'fade',
              fadeEffect: {
                crossFade: true
              },
              
            <?php } elseif ($_smarty_tpl->tpl_vars['slides']->value['transition_style'] == 2) {?>
              
              effect: 'cube',
              cubeEffect: {
                shadow: false, slideShadows: false
              },
              
            <?php } elseif ($_smarty_tpl->tpl_vars['slides']->value['transition_style'] == 3) {?>
              
              effect: 'coverflow',
              coverflowEffect: {
                rotate: 50, stretch: 0, depth: 100, modifier: 1, slideShadows : false
              },
              
            <?php } elseif ($_smarty_tpl->tpl_vars['slides']->value['transition_style'] == 4) {?>
              
              effect: 'flip',
              flipEffect: {
                slideShadows : false, limitRotation: true
              },
              
            <?php }?>//end transition
            
            <?php }?>// end tempalte
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            
            on: {
            
            <?php if ($_smarty_tpl->tpl_vars['slides']->value['templates'] != 3) {?>
            
            slideChangeTransitionStart: function(swiper){
                if($(swiper.slides).filter('.swiper-slide-visible').length>0)
                {
                    $.each(swiper.slides, function(){
                        if(!$(this).hasClass('swiper-slide-visible'))
                        {
                            var style_content = $(this).find('.style_content').removeClass('curr_swiper');
                            style_content.removeClass('animated '+style_content.data('animate'));
                            style_content.find('.layered_content').removeClass('animated '+style_content.data('animate'));
                        }
                    });
                }
            },
            slideChangeTransitionEnd: function(swiper){
                var visible_slides = $(swiper.slides).filter('.swiper-slide-visible');
                $.each(visible_slides, function(){
                    var style_content = $(this).find('.style_content');
                    if(!style_content.hasClass('curr_swiper'))
                    {
                        style_content.addClass('curr_swiper');
                        if(style_content.data('animate')){
                            if(style_content.find('.layered_content').length)
                                style_content.find('.layered_content').addClass('animated '+style_content.data('animate'));
                            else
                                style_content.addClass('animated '+style_content.data('animate'));
                        }
                    }
                });
            },
            
            <?php }?>
            
              init: function (swiper) {
                
                <?php if ($_smarty_tpl->tpl_vars['slides']->value['prev_next']) {?>
                
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
                <?php if ($_smarty_tpl->tpl_vars['slides']->value['templates'] != 3) {?>
                
                //onSlideChanges run first
                if($(swiper.slides).length==$(swiper.slides).filter('.swiper-slide-visible').length)//do this only when the number of items is the same as visible items.
                {
                    var style_content = $(swiper.slides).find('.style_content').addClass('curr_swiper');

                    $.each(style_content, function(){
                        if($(this).data('animate')){
                            if($(this).find('.layered_content').length)
                                $(this).find('.layered_content').addClass('animated '+$(this).data('animate'));
                            else
                                $(this).addClass('animated '+$(this).data('animate'));
                        }
                    });
                }
                else if($(swiper.slides).filter('.swiper-slide-visible').length){
                    var visible_slides = $(swiper.slides).filter('.swiper-slide-visible');
                    $.each(visible_slides, function(){
                        var style_content = $(this).find('.style_content');
                        if(!style_content.hasClass('curr_swiper'))
                        {
                            style_content.addClass('curr_swiper');
                            if(style_content.data('animate')){
                                if(style_content.find('.layered_content').length)
                                    style_content.find('.layered_content').addClass('animated '+style_content.data('animate'));
                                else
                                    style_content.addClass('animated '+style_content.data('animate'));
                            }
                        }
                    });
                }
                
                <?php }?>
                
              }
            },
             
            st_height: <?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['slides']->value['height'], ENT_QUOTES, 'UTF-8');?>
,
            st_full_screen: <?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['slides']->value['full_screen'], ENT_QUOTES, 'UTF-8');?>
,
            inviewwatcher:true,
            id_st: '#st_swiper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['id_st_swiper_group'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['st_time']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_time']->value, ENT_QUOTES, 'UTF-8');
}?>'

        
        });
         
//]]>
<?php echo '</script'; ?>
><?php }
}
