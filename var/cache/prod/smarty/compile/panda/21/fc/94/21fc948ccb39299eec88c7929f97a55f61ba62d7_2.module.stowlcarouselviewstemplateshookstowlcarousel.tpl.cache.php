<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:stowlcarouselviewstemplateshookstowlcarousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa624ba96_56514146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21fc948ccb39299eec88c7929f97a55f61ba62d7' => 
    array (
      0 => 'module:stowlcarouselviewstemplateshookstowlcarousel.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stowlcarousel/views/templates/hook/stowlcarousel-".((string)$_smarty_tpl->tpl_vars[\'group\']->value[\'templates\']).".tpl' => 1,
  ),
),false)) {
function content_668adaa624ba96_56514146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '911575227668adaa6247420_96689750';
if ((isset($_smarty_tpl->tpl_vars['slide_group']->value))) {?>
    <!-- MODULE st stowlcarousel -->
<!-- MODULE st owl carousel -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slide_group']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['group']->value['slide'])) && count($_smarty_tpl->tpl_vars['group']->value['slide'])) {?>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?><div id="owl_carousel_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_owl_carousel_group'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['st_time']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_time']->value, ENT_QUOTES, 'UTF-8');
}?>" class="owl_carousel_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_owl_carousel_group'], ENT_QUOTES, 'UTF-8');?>
 owl_carousel_container full_container <?php if ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?> block"><?php }?>
            <div id="st_owl_carousel_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_owl_carousel_group'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['st_time']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_time']->value, ENT_QUOTES, 'UTF-8');
}?>" class="st_owl_carousel_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_owl_carousel_group'], ENT_QUOTES, 'UTF-8');?>
 owl_carousel_wrap st_owl_carousel_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['templates'], ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?> block <?php }?> owl_images_slider <?php if ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?>">
                <?php $_smarty_tpl->_subTemplateRender("module:stowlcarousel/views/templates/hook/stowlcarousel-".((string)$_smarty_tpl->tpl_vars['group']->value['templates']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('slides'=>$_smarty_tpl->tpl_vars['group']->value), 0, true);
?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?></div><?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <!--/ MODULE st owl carousel -->
<!--/ MODULE st stowlcarousel -->
<?php }
}
}
