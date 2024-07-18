<?php
/* Smarty version 4.3.4, created on 2024-07-18 19:54:29
  from 'module:steasycontentviewstemplateshooksteasycontent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_669956d581f9f5_25460395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7271fc8c79f41762e6c4293dbc38e02c02d2fc95' => 
    array (
      0 => 'module:steasycontentviewstemplateshooksteasycontent.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:steasycontent/views/templates/hook/steasycontent-columns.tpl' => 1,
  ),
),false)) {
function content_669956d581f9f5_25460395 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
if ((isset($_smarty_tpl->tpl_vars['easy_content']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['easy_content']->value) > 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['easy_content']->value, 'ec');
$_smarty_tpl->tpl_vars['ec']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ec']->value) {
$_smarty_tpl->tpl_vars['ec']->do_else = false;
?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "parallax_param", null, null);
if (($_smarty_tpl->tpl_vars['ec']->value['bg_img'] || $_smarty_tpl->tpl_vars['ec']->value['bg_pattern']) || $_smarty_tpl->tpl_vars['ec']->value['mpfour']) {?> data-jarallax data-speed="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['ec']->value['mpfour']) {?> data-video-src="mp4:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['mpfour'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['ec']->value['webm']) {?>,webm:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['webm'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['ec']->value['ogg']) {?>,ogv:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['ogg'], ENT_QUOTES, 'UTF-8');
}?>" <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "video_background", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ($_smarty_tpl->tpl_vars['ec']->value['is_full_width']) {?><div id="easycontent_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_easy_content'], ENT_QUOTES, 'UTF-8');?>
" class="easycontent_container full_container <?php if (($_smarty_tpl->tpl_vars['ec']->value['bg_img'] || $_smarty_tpl->tpl_vars['ec']->value['bg_pattern']) || $_smarty_tpl->tpl_vars['ec']->value['mpfour']) {?> jarallax <?php }?> <?php if ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 3) {?> hidden-sm-down <?php } elseif ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?> block" <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'parallax_param');?>
><div class="container<?php if ($_smarty_tpl->tpl_vars['ec']->value['full_screen']) {?>-fluid<?php }?>"><div class="row"><div class="col-12"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['ec']->value['is_header_item']) {?><div class="easycontent_header top_bar_item   flex_child"><div class="header_item"><?php }?>
            <aside id="easycontent_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_easy_content'], ENT_QUOTES, 'UTF-8');?>
" class="easycontent_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_easy_content'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 3) {?> hidden-sm-down <?php } elseif ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?> <?php if (!$_smarty_tpl->tpl_vars['ec']->value['is_full_width']) {?> block <?php if (($_smarty_tpl->tpl_vars['ec']->value['bg_img'] || $_smarty_tpl->tpl_vars['ec']->value['bg_pattern']) || $_smarty_tpl->tpl_vars['ec']->value['mpfour']) {?> jarallax <?php }
}?> easycontent <?php if ((isset($_smarty_tpl->tpl_vars['is_column']->value)) && $_smarty_tpl->tpl_vars['is_column']->value) {?> column_block <?php }?> <?php if ($_smarty_tpl->tpl_vars['ec']->value['type'] == 2 && $_smarty_tpl->tpl_vars['ec']->value['module_align'] > 2) {?> easy_stretch_child <?php if ($_smarty_tpl->tpl_vars['ec']->value['module_align'] > 10 && $_smarty_tpl->tpl_vars['ec']->value['module_align'] < 23) {?> col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['module_align']-10, ENT_QUOTES, 'UTF-8');?>
 st_parallax_left <?php }?> <?php if ($_smarty_tpl->tpl_vars['ec']->value['module_align'] > 30 && $_smarty_tpl->tpl_vars['ec']->value['module_align'] < 43) {?> col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['module_align']-30, ENT_QUOTES, 'UTF-8');?>
 st_parallax_right <?php }?> <?php }?>" <?php if (!$_smarty_tpl->tpl_vars['ec']->value['is_full_width']) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'parallax_param');
}?>>
                <?php if ($_smarty_tpl->tpl_vars['ec']->value['title'] && $_smarty_tpl->tpl_vars['ec']->value['title_align'] != 3 && (!(isset($_smarty_tpl->tpl_vars['is_product_tab']->value)) || !$_smarty_tpl->tpl_vars['is_product_tab']->value)) {?>
                <div class="title_block flex_container title_align_<?php if ($_smarty_tpl->tpl_vars['is_column']->value) {?>0<?php } else {
echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['ec']->value['title_align'], ENT_QUOTES, 'UTF-8');
}?> title_style_<?php if ($_smarty_tpl->tpl_vars['ec']->value['is_blog']) {
echo htmlspecialchars((string) (int)Configuration::get('ST_BLOG_HEADING_STYLE'), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (int)Configuration::get('STSN_HEADING_STYLE'), ENT_QUOTES, 'UTF-8');
}?>">
                    <div class="flex_child title_flex_left"></div>
                    <?php if ($_smarty_tpl->tpl_vars['ec']->value['url']) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['title'], ENT_QUOTES, 'UTF-8');?>
" class="title_block_inner"><?php } else { ?><div class="title_block_inner"><?php }?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['title'], ENT_QUOTES, 'UTF-8');?>

                    <?php if ($_smarty_tpl->tpl_vars['ec']->value['url']) {?></a><?php } else { ?></div><?php }?>
                    <div class="flex_child title_flex_right"></div>
                </div>
                <?php }?>
            	<div class="style_content <?php if ($_smarty_tpl->tpl_vars['ec']->value['width']) {?> width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> block_content <?php if ($_smarty_tpl->tpl_vars['ec']->value['id_cms']) {?> cms_content <?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['ec']->value['text']) {?><div class="easy_brother_block text-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['text_align'], ENT_QUOTES, 'UTF-8');?>
 text-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['mobile_text_align'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['ec']->value['text'];?>
</div><?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['columns'])) && count($_smarty_tpl->tpl_vars['ec']->value['columns'])) {
$_smarty_tpl->_subTemplateRender("module:steasycontent/views/templates/hook/steasycontent-columns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['ec']->value['columns']), 0, true);
}?>
            	</div>
            </aside>
        <?php if ($_smarty_tpl->tpl_vars['ec']->value['is_header_item']) {?></div></div><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['is_full_width'])) && $_smarty_tpl->tpl_vars['ec']->value['is_full_width']) {?></div></div></div></div><?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
