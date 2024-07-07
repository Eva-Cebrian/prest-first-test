<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stswiperviewstemplateshookstswiper0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42aa0c8a7_50937117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ad28a741794d34f1e05349a19acae3a4048f801' => 
    array (
      0 => 'module:stswiperviewstemplateshookstswiper0.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stswiper/views/templates/hook/stswiper-block.tpl' => 1,
    'module:stswiper/views/templates/hook/stswiper-script.tpl' => 1,
  ),
),false)) {
function content_668ab42aa0c8a7_50937117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1577828083668ab42aa06ab4_22246312';
if ((isset($_smarty_tpl->tpl_vars['slides']->value))) {?>
    <!-- MODULE stswiper -->
    <?php if ((isset($_smarty_tpl->tpl_vars['slides']->value['slide'])) && count($_smarty_tpl->tpl_vars['slides']->value['slide'])) {?>
        <div id="st_swiper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['id_st_swiper_group'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['st_time']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_time']->value, ENT_QUOTES, 'UTF-8');
}?>" class="st_swiper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['id_st_swiper_group'], ENT_QUOTES, 'UTF-8');?>
 swiper-container <?php if ($_smarty_tpl->tpl_vars['slides']->value['prev_next'] > 1) {?> swiper-button-lr <?php if ($_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 6 || $_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 7) {?> swiper-navigation-circle <?php } elseif ($_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 4 || $_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 5) {?> swiper-navigation-rectangle  <?php } elseif ($_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 8 || $_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 9) {?> swiper-navigation-arrow <?php } elseif ($_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 2 || $_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 3) {?> swiper-navigation-full <?php }?> <?php if ($_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 2 || $_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 4 || $_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 6 || $_smarty_tpl->tpl_vars['slides']->value['prev_next'] == 8) {?> swiper-navigation_visible <?php }
}?>">
            <div class="swiper-wrapper"> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value['slide'], 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("module:stswiper/views/templates/hook/stswiper-block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('banner_data'=>$_smarty_tpl->tpl_vars['banner']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['slides']->value['prev_next'] > 1) {?>
                <div class="swiper-button swiper-button-next"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
                <div class="swiper-button swiper-button-prev"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
		    <?php }?>
		    <?php if ($_smarty_tpl->tpl_vars['slides']->value['pag_nav']) {?>
            <div class="swiper-pagination <?php if ($_smarty_tpl->tpl_vars['slides']->value['pag_nav'] == 2) {?> swiper-pagination-st-custom <?php } elseif ($_smarty_tpl->tpl_vars['slides']->value['pag_nav'] == 4) {?> swiper-pagination-st-round <?php }?>"></div>
		    <?php }?>
		    <?php if ($_smarty_tpl->tpl_vars['slides']->value['progress_bar']) {?><div class="swiper_custom_progress swiper_custom_progress_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slides']->value['progress_bar'], ENT_QUOTES, 'UTF-8');?>
"><div class="swiper_custom_bar"></div></div><?php }?>
        </div>
        <?php ob_start();
echo htmlspecialchars((string) count($_smarty_tpl->tpl_vars['slides']->value['slide']), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("module:stswiper/views/templates/hook/stswiper-script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('one_item_only'=>$_prefixVariable1), 0, false);
?>
    <?php }?>
    <!--/ MODULE stswiper -->
<?php }
}
}
