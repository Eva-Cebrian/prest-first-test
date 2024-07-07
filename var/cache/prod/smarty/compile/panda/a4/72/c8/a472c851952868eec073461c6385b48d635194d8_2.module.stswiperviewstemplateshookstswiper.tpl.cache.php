<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stswiperviewstemplateshookstswiper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42aa035d5_39917017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a472c851952868eec073461c6385b48d635194d8' => 
    array (
      0 => 'module:stswiperviewstemplateshookstswiper.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stswiper/views/templates/hook/stswiper-".((string)$_smarty_tpl->tpl_vars[\'group\']->value[\'templates\']).".tpl' => 1,
  ),
),false)) {
function content_668ab42aa035d5_39917017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1485718749668ab42a9fe9f1_41042614';
if ((isset($_smarty_tpl->tpl_vars['slide_group']->value))) {?>
    <!-- MODULE st swiper -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slide_group']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['group']->value['slide'])) && count($_smarty_tpl->tpl_vars['group']->value['slide'])) {?>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?><div id="swiper_container_out_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_swiper_group'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['st_time']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_time']->value, ENT_QUOTES, 'UTF-8');
}?>" class="swiper_container_out_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_swiper_group'], ENT_QUOTES, 'UTF-8');?>
 swiper_wraper_out full_container <?php if ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?> block"><?php }?>
            <div id="swiper_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_swiper_group'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['st_time']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_time']->value, ENT_QUOTES, 'UTF-8');
}?>" class="swiper_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_swiper_group'], ENT_QUOTES, 'UTF-8');?>
 swiper_wraper st_swiper_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['templates'], ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?> block <?php }?> swiper_images_slider <?php if ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?> <?php if ($_smarty_tpl->tpl_vars['group']->value['lazy_load']) {?> lazy_swiper <?php }?>">
                <?php $_smarty_tpl->_subTemplateRender("module:stswiper/views/templates/hook/stswiper-".((string)$_smarty_tpl->tpl_vars['group']->value['templates']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('slides'=>$_smarty_tpl->tpl_vars['group']->value), 0, true);
?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?></div><?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <!--/ MODULE st swiper -->
<?php }
}
}
