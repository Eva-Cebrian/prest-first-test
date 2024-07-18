<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:stbannerviewstemplateshookst_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa626ff33_42601531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa119dda568ffc1636a80337359b486ee735fd56' => 
    array (
      0 => 'module:stbannerviewstemplateshookst_banner.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stbanner/views/templates/hook/stbanner-block.tpl' => 1,
    'module:stbanner/views/templates/hook/stbanner-column.tpl' => 1,
  ),
),false)) {
function content_668adaa626ff33_42601531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1163555413668adaa6262993_11200120';
if ((isset($_smarty_tpl->tpl_vars['groups']->value))) {?>
    <!-- MODULE st banner -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('style', 0);?>
        <?php if ((isset($_smarty_tpl->tpl_vars['group']->value['style'])) && $_smarty_tpl->tpl_vars['group']->value['style']) {
$_smarty_tpl->_assignInScope('style', 1);
}?>
        <?php $_smarty_tpl->_assignInScope('lazy_loading', 0);?>
        <?php if ((isset($_smarty_tpl->tpl_vars['group']->value['lazy_loading'])) && $_smarty_tpl->tpl_vars['group']->value['lazy_loading']) {
$_smarty_tpl->_assignInScope('lazy_loading', 1);
}?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "parallax_param", null, null);
if ($_smarty_tpl->tpl_vars['group']->value['bg_img'] && $_smarty_tpl->tpl_vars['group']->value['speed'] != 1 && !$_smarty_tpl->tpl_vars['group']->value['mpfour']) {?> data-stellar-background-ratio="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-stellar-vertical-offset="<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['group']->value['bg_img_v_offset'], ENT_QUOTES, 'UTF-8');?>
" <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "video_background", null, null);
if ($_smarty_tpl->tpl_vars['group']->value['mpfour']) {?> data-vide-bg="mp4: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['mpfour'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['group']->value['webm']) {?>, webm: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['webm'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['group']->value['ogg']) {?>, ogv: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['ogg'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['group']->value['video_poster']) {?>, poster: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['video_poster'], ENT_QUOTES, 'UTF-8');
}?>" data-vide-options="loop: <?php if ($_smarty_tpl->tpl_vars['group']->value['loop']) {?>true<?php } else { ?>false<?php }?>, muted: <?php if ($_smarty_tpl->tpl_vars['group']->value['muted']) {?>true<?php } else { ?>false<?php }?>, position: 50% <?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['group']->value['video_v_offset'], ENT_QUOTES, 'UTF-8');?>
%" <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ($_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?><div id="banner_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_banner_group'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['st_time']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_time']->value, ENT_QUOTES, 'UTF-8');
}?>" class="banner_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_banner_group'], ENT_QUOTES, 'UTF-8');?>
 banner_container full_container <?php if ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?> block <?php if ($_smarty_tpl->tpl_vars['group']->value['mpfour']) {?> video_bg_block <?php }?>" <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'parallax_param');?>
 <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'video_background');?>
><?php if (!$_smarty_tpl->tpl_vars['group']->value['stretched']) {?><div class="container"><?php }
}?>
            <div id="st_banner_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_banner_group'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['st_time']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_time']->value, ENT_QUOTES, 'UTF-8');
}?>" class="st_banner_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_banner_group'], ENT_QUOTES, 'UTF-8');?>
 st_banner_row st_banner_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?> block <?php }?> <?php if ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }
if ($_smarty_tpl->tpl_vars['group']->value['hover_effect']) {?> hover_effect_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['hover_effect'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['group']->value['is_column'])) && $_smarty_tpl->tpl_vars['group']->value['is_column']) {?> column_block <?php }?> <?php if ($_smarty_tpl->tpl_vars['group']->value['mpfour']) {?> video_bg_block <?php }?> <?php if ($_smarty_tpl->tpl_vars['lazy_loading']->value) {?> banner_lazy_loading <?php }?>" <?php if (!$_smarty_tpl->tpl_vars['group']->value['is_full_width']) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'parallax_param');?>
 <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'video_background');
}?>>
                <?php if ((isset($_smarty_tpl->tpl_vars['group']->value['banners'])) && count($_smarty_tpl->tpl_vars['group']->value['banners'])) {?>
                    <div class="row block_content">
                        <div id="banner_box_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['id_st_banner_group'], ENT_QUOTES, 'UTF-8');?>
" class="col-lg-12 banner_col" data-height="100">
                            <?php $_smarty_tpl->_subTemplateRender("module:stbanner/views/templates/hook/stbanner-block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('banner_data'=>$_smarty_tpl->tpl_vars['group']->value['banners'][0],'banner_height'=>$_smarty_tpl->tpl_vars['group']->value['height'],'banner_style'=>$_smarty_tpl->tpl_vars['style']->value,'banner_lazy_loading'=>$_smarty_tpl->tpl_vars['lazy_loading']->value), 0, true);
?>
                        </div>
                    </div>
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['group']->value['columns']))) {?>
                    <?php $_smarty_tpl->_subTemplateRender("module:stbanner/views/templates/hook/stbanner-column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('columns_data'=>$_smarty_tpl->tpl_vars['group']->value['columns'],'banner_style'=>$_smarty_tpl->tpl_vars['style']->value,'banner_lazy_loading'=>$_smarty_tpl->tpl_vars['lazy_loading']->value), 0, true);
?>
                <?php }?>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?></div><?php if (!$_smarty_tpl->tpl_vars['group']->value['stretched']) {?></div><?php }
}?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <!--/ MODULE st banner -->
<?php }
}
}
