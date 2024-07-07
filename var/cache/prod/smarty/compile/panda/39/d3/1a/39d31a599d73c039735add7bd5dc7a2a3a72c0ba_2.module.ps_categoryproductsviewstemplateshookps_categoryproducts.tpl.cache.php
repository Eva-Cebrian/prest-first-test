<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:31:30
  from 'module:ps_categoryproductsviewstemplateshookps_categoryproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4d2a6dc47_93252439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:ps_categoryproductsviewstemplateshookps_categoryproducts.tpl',
      1 => 1720204187,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/slider/product-slider.tpl' => 1,
    'file:catalog/slider/script.tpl' => 1,
  ),
),false)) {
function content_668ab4d2a6dc47_93252439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->compiled->nocache_hash = '988897981668ab4d2a684c6_33930519';
if ((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value) {?>
<div id="category_products_container" class="category_products_container block products_container">
<section class="products_section" >
    <div class="products_slider">
    <div class="title_block flex_container title_align_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['pc_title'], ENT_QUOTES, 'UTF-8');?>
 title_style_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['heading_style'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="flex_child title_flex_left"></div>
        <div class="title_block_inner">
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value) == 1) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other product in the same category:','sprintf'=>array(smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Modules.Categoryproducts.Shop'),$_smarty_tpl ) );?>

            <?php } else { ?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other products in the same category:','sprintf'=>array(smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Modules.Categoryproducts.Shop'),$_smarty_tpl ) );?>

            <?php }?>
        </div>
        <div class="flex_child title_flex_right"></div>
        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pc_direction_nav'] == 1 && (isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value) {?>
            <div class="swiper-button-tr<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pc_hide_direction_nav_on_mob']) {?> hidden-md-down <?php }?>"><div class="swiper-button swiper-button-outer swiper-button-prev"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div><div class="swiper-button swiper-button-outer swiper-button-next"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div></div>        
        <?php }?>
    </div>

    <div class="block_content <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pc_lazy'] && !$_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider']) {?> lazy_swiper <?php }?>">
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/slider/product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('lazy_load'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_lazy'],'direction_nav'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_direction_nav'],'control_nav'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_control_nav'],'from_product_page'=>'isSimilarTo','st_display_price'=>Configuration::get('CATEGORYPRODUCTS_DISPLAY_PRICE'),'hide_direction_nav_on_mob'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_hide_direction_nav_on_mob'],'hide_control_nav_on_mob'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_hide_control_nav_on_mob'],'image_type'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_image_type'],'scrollbar_nav'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_scrollbar_nav']), 0, false);
?>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:catalog/slider/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('block_name'=>"#category_products_container",'slider_s_speed'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_s_speed'],'slider_slideshow'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_slideshow'],'slider_a_speed'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_a_speed'],'slider_pause_on_hover'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_pause_on_hover'],'rewind_nav'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_loop'],'lazy_load'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_lazy'],'direction_nav'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_direction_nav'],'control_nav'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_control_nav'],'slider_move'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_move'],'spacing_between'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_spacing_between'],'pro_per_fw'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_per_fw'],'pro_per_xxl'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_per_xxl'],'pro_per_xl'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_per_xl'],'pro_per_lg'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_per_lg'],'pro_per_md'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_per_md'],'pro_per_sm'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_per_sm'],'pro_per_xs'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_per_xs'],'scrollbar_nav'=>$_smarty_tpl->tpl_vars['sttheme']->value['pc_scrollbar_nav']), 0, false);
?>
    </div>
</section>
</div>
<?php }
}
}
