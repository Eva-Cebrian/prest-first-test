<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:37:43
  from 'module:stthemeeditorviewstemplatessliderhomepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab64702cae5_60035904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62fe622fb664cb083ba527b113932b4e6f5be2c1' => 
    array (
      0 => 'module:stthemeeditorviewstemplatessliderhomepage.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
    'fd7e88d71425090d01fd3c6795130cdf7acf2d05' => 
    array (
      0 => 'module:stthemeeditorviewstemplatessliderheading.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
    '825c049f4130d14c14fa7f1f383e0feaeb188718' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/slider/product-slider.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
    '3925cfd5e999fb10dad878f1d6082f021d8b04e9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/product-slider-item-compact.tpl',
      1 => 1720204187,
      2 => 'file',
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
function content_668ab64702cae5_60035904 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE st strelatedproducts -->
<div id="strelatedproducts_container_73d608e315" class="strelatedproducts_container  block  s_countdown_block   products_container_column  column_block " 
>
<section class="products_section " >

        <div class="row flex_lg_container flex_stretch">
                <div class="col-lg-12  products_slider"> <!-- to do what if the sum of left and right contents larger than 12 -->
    
            <div class="title_block flex_container title_align_0 title_style_0 ">
    <div class="flex_child title_flex_left"></div>
        <div class="title_block_inner">You may also like</div>
        <div class="flex_child title_flex_right"></div>
                            <div class="swiper-button-tr  hidden-md-down "><div class="swiper-button swiper-button-outer swiper-button-prev"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div><div class="swiper-button swiper-button-outer swiper-button-next"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div></div>        
    </div>
            
                                <div class="block_content  lazy_swiper ">
                <div class="swiper-container products_sldier_swiper  swiper-button-lr  swiper-navigation-rectangle    swiper_loading" >
	<div class="swiper-wrapper">
	
								    <article class="swiper-slide base_list_line medium_list">
		    			<div class="pro_column_box clearfix line_item" >
  <a href="http://localhost:8000/index.php?id_product=14&amp;rewrite=hummingbird-vector-graphics&amp;controller=product" title="Hummingbird - Vector graphics" class="pro_column_left">
    <picture>
        <img data-src="http://localhost:8000/img/p/1/7/17-cart_default.jpg"  data-srcset="http://localhost:8000/img/p/1/7/17-cart_default_2x.jpg 2x"  width="80" height="80" alt="Hummingbird - Vector graphics" class="swiper-lazy" />
    </picture>
      </a>
  <div class="pro_column_right">
    <h3  class="s_title_block nohidden"><a href="http://localhost:8000/index.php?id_product=14&amp;rewrite=hummingbird-vector-graphics&amp;controller=product" title="Hummingbird - Vector graphics" >Hummingbird - Vector graphics</a></h3>

    
              <div class="product-price-and-shipping" >
                    
          

          <span  class="price">10,89 €</span>
                      <span class="tax_label">(impuestos inc.)</span>
                    
          
          
          
          

          
        </div>
          
  </div>
</div>
    					</article>
							
	</div>
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
                
                  nextEl: '#strelatedproducts_container_73d608e315 .swiper-button-outer.swiper-button-next',
                  prevEl: '#strelatedproducts_container_73d608e315 .swiper-button-outer.swiper-button-prev'
                
                },
                
            
                        
                            slidesPerView : 1,
                observer : true,
                observeParents : true,
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
            id_st: '#strelatedproducts_container_73d608e315 .products_sldier_swiper'

        
        });
         

    //]]>
    </script>                	                            
                    </div>
            </div>
</section>
</div>
<!-- /MODULE st strelatedproducts -->
<?php }
}
