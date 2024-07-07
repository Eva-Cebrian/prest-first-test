<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/slider/product-slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42aba7513_89305943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '825c049f4130d14c14fa7f1f383e0feaeb188718' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/slider/product-slider.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-slider-item-compact.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_668ab42aba7513_89305943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1185362564668ab42aba02f0_50768591';
?>
<div class="swiper-container products_sldier_swiper <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value > 1 && $_smarty_tpl->tpl_vars['direction_nav']->value < 10) {?> swiper-button-lr <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value == 6 || $_smarty_tpl->tpl_vars['direction_nav']->value == 7) {?> swiper-navigation-circle <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 4 || $_smarty_tpl->tpl_vars['direction_nav']->value == 5) {?> swiper-navigation-rectangle <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 8 || $_smarty_tpl->tpl_vars['direction_nav']->value == 9) {?> swiper-navigation-arrow <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 2 || $_smarty_tpl->tpl_vars['direction_nav']->value == 3) {?> swiper-navigation-full <?php }?> <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value == 2 || $_smarty_tpl->tpl_vars['direction_nav']->value == 4 || $_smarty_tpl->tpl_vars['direction_nav']->value == 6 || $_smarty_tpl->tpl_vars['direction_nav']->value == 8) {?> swiper-navigation_visible <?php }
}?> <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value >= 10) {?> swiper-button-bottom <?php }?> swiper_loading" <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['is_rtl']) {?> dir="rtl" <?php }?>>
	<div class="swiper-wrapper">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1904043132668ab42aba2eb6_34658404', 'slider_content');
?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['direction_nav']->value > 1 && (!(isset($_smarty_tpl->tpl_vars['column_slider']->value)) || !$_smarty_tpl->tpl_vars['column_slider']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['direction_nav']->value >= 10) {?><div class="swiper-button-bottom-con flex_container <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value == 10) {?> flex_center <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 11) {?> flex_left <?php } elseif ($_smarty_tpl->tpl_vars['direction_nav']->value == 12) {?> flex_right <?php }?>"><?php }?>
        <div class="swiper-button swiper-button-outer swiper-button-prev<?php if ($_smarty_tpl->tpl_vars['hide_direction_nav_on_mob']->value) {?> hidden-md-down <?php }?>" ><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
	    <div class="swiper-button swiper-button-outer swiper-button-next<?php if ($_smarty_tpl->tpl_vars['hide_direction_nav_on_mob']->value) {?> hidden-md-down <?php }?>"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
        <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value >= 10) {?></div><?php }?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['scrollbar_nav']->value)) && $_smarty_tpl->tpl_vars['scrollbar_nav']->value) {?><div class="placeholder-swiper-scrollbar"></div><div class="swiper-scrollbar"></div><?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['control_nav']->value) {?>
<div class="swiper-pagination <?php if ($_smarty_tpl->tpl_vars['control_nav']->value == 2) {?> swiper-pagination-st-custom <?php } elseif ($_smarty_tpl->tpl_vars['control_nav']->value == 4) {?> swiper-pagination-st-round <?php }
if ($_smarty_tpl->tpl_vars['hide_control_nav_on_mob']->value) {?> hidden-md-down <?php }?>"></div>
<?php }
}
/* {block 'slider_content'} */
class Block_1904043132668ab42aba2eb6_34658404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'slider_content' => 
  array (
    0 => 'Block_1904043132668ab42aba2eb6_34658404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['column_slider']->value)) && $_smarty_tpl->tpl_vars['column_slider']->value && !$_smarty_tpl->tpl_vars['display_pro_col']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', true);
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->first = !$_smarty_tpl->tpl_vars['product']->index;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_51_saved = $_smarty_tpl->tpl_vars['product'];
?>
			<?php if ($_smarty_tpl->tpl_vars['product']->first || !($_smarty_tpl->tpl_vars['product']->index % $_smarty_tpl->tpl_vars['slider_items']->value)) {?>
		    <article class="swiper-slide base_list_line medium_list">
		    <?php }?>
			<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-slider-item-compact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('from_slider'=>true), 0, true);
?>
    		<?php if ($_smarty_tpl->tpl_vars['product']->last || !($_smarty_tpl->tpl_vars['product']->iteration % $_smarty_tpl->tpl_vars['slider_items']->value)) {?>
			</article>
			<?php }?>
		<?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_51_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } else { ?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', true);
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->first = !$_smarty_tpl->tpl_vars['product']->index;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_52_saved = $_smarty_tpl->tpl_vars['product'];
?>
		<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_52_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
	<?php
}
}
/* {/block 'slider_content'} */
}
