<?php
/* Smarty version 4.3.4, created on 2024-07-18 19:54:29
  from 'module:stbrandssliderviewstemplateshookstbrandsslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_669956d5940eb3_82308623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a24650901aa0924ada3c9121dd8773cce8e51a54' => 
    array (
      0 => 'module:stbrandssliderviewstemplateshookstbrandsslider.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
    '03e157c8ae187ba19a3d26dd020540d217cf936f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/slider/script.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_669956d5940eb3_82308623 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stbrandsslider -->
<div id="brands_slider_container_d40e96ddab" class="brands_slider_container  block products_container " 
>
<section id="brands_slider_d40e96ddab" class="brands_slider">

    <div class="row flex_lg_container flex_stretch ">
                        <div class="col-lg-12 products_slider"> <!-- to do what if the sum of left and right contents larger than 12 -->
        

            <div class="title_block flex_container title_align_0 title_style_0 ">
            <div class="flex_child title_flex_left"></div>
            <a href="http://localhost:8000/index.php?controller=manufacturer" class="title_block_inner" title="Marcas de productos">Marcas de productos</a>
            <div class="flex_child title_flex_right"></div>
                    </div>
        
    
        <div class="block_content  lazy_swiper">
                <div class="swiper-container products_sldier_swiper  swiper-button-lr  swiper-small-button   swiper-navigation-rectangle  " >
            <div class="swiper-wrapper">
            	                <div class="brands_slider_wrap swiper-slide">
                    <div class="pro_outer_box">
                	<a href="http://localhost:8000/index.php?id_manufacturer=2&amp;controller=manufacturer" title="Graphic Corner" class="brands_slider_item product_img_link  is_lazy ">
                        <picture>
                                                <img 
                        data-src="http://localhost:8000/img/m/2-brand_default.jpg"
                                                  data-srcset="http://localhost:8000/img/m/2-brand_default_2x.jpg 2x"
                                                 alt="Graphic Corner" width="154" height="95" class=" swiper-lazy  front-image" />
                        </picture>
                    </a>
                                        </div>
                </div>
                                <div class="brands_slider_wrap swiper-slide">
                    <div class="pro_outer_box">
                	<a href="http://localhost:8000/index.php?id_manufacturer=1&amp;controller=manufacturer" title="Studio Design" class="brands_slider_item product_img_link  is_lazy ">
                        <picture>
                                                <img 
                        data-src="http://localhost:8000/img/m/1-brand_default.jpg"
                                                  data-srcset="http://localhost:8000/img/m/1-brand_default_2x.jpg 2x"
                                                 alt="Studio Design" width="154" height="95" class=" swiper-lazy  front-image" />
                        </picture>
                    </a>
                                        </div>
                </div>
                            </div>

                            <div class="swiper-button swiper-button-outer swiper-button-next  hidden-md-down "><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
                <div class="swiper-button swiper-button-outer swiper-button-prev  hidden-md-down "><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
                                </div>
            </div>
                <script>
    //<![CDATA[
        
        if(typeof(swiper_options) ==='undefined')
        var swiper_options = [];
        swiper_options.push({
            
                        speed: 400,
            loop: false,
                            
                lazy:{
                
                  loadPrevNext: true,
                  loadPrevNextAmount: 1,
                  loadOnTransitionStart: true
                
                },
                
                                        
                navigation:{
                
                  nextEl: '#brands_slider_container_d40e96ddab .swiper-button-outer.swiper-button-next',
                  prevEl: '#brands_slider_container_d40e96ddab .swiper-button-outer.swiper-button-prev'
                
                },
                
            
                        
            
                freeMode: false,
                spaceBetween: 13,
                slidesPerView: 1,
                slidesPerGroup: 1,                
                breakpoints: {
                    
                                        1440: {slidesPerView: 5, slidesPerGroup: 5 },                    1200: {slidesPerView: 4, slidesPerGroup: 4 },                    992: {slidesPerView: 4, slidesPerGroup: 4 },
                    768: {slidesPerView: 3, slidesPerGroup: 3 },
                    480: {slidesPerView: 2, slidesPerGroup: 2 }
                },
                

                                    watchSlidesProgress: true,
            watchSlidesVisibility: true,
            
            on: {
              init: function (swiper) {
                $(swiper.container).removeClass('swiper_loading').addClass('swiper_loaded');
                
                                
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
              lazyImageReady: function (swiper, slide, image) {
                if($(image).hasClass('front-image'))
                        $(image).closest('.is_lazy').removeClass('is_lazy');//also in pro-lazy.js
              }
            },
            
            //temp fix, loop breaks when roundlenghts and autoplay
            roundLengths: true,                        inviewwatcher:true,
            id_st: '#brands_slider_container_d40e96ddab .products_sldier_swiper'

        
        });
         

    //]]>
    </script>                    
            
                    </div>
                </div>
</section>

</div>
<!-- /MODULE st stbrandsslider --><?php }
}
