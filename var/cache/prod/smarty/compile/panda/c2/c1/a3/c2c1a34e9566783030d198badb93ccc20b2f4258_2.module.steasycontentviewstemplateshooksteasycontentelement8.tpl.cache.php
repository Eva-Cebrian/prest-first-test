<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:steasycontentviewstemplateshooksteasycontentelement8.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42acb2594_87550988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c1a34e9566783030d198badb93ccc20b2f4258' => 
    array (
      0 => 'module:steasycontentviewstemplateshooksteasycontentelement8.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:steasycontent/views/templates/hook/textboxes/".((string)$_smarty_tpl->tpl_vars[\'pre_template\']->value[0]).".tpl' => 2,
    'file:catalog/slider/script.tpl' => 1,
  ),
),false)) {
function content_668ab42acb2594_87550988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->compiled->nocache_hash = '192407714668ab42ac9cea0_95732691';
$_smarty_tpl->_assignInScope('pro_per_fw', ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_per_fw'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_per_fw'] ? $_smarty_tpl->tpl_vars['sub_column']->value['st_per_fw'] : 4));
$_smarty_tpl->_assignInScope('pro_per_xxl', ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_per_xxl'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_per_xxl'] ? $_smarty_tpl->tpl_vars['sub_column']->value['st_per_xxl'] : 4));
$_smarty_tpl->_assignInScope('pro_per_xl', ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_per_xl'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_per_xl'] ? $_smarty_tpl->tpl_vars['sub_column']->value['st_per_xl'] : 3));
$_smarty_tpl->_assignInScope('pro_per_lg', ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_per_lg'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_per_lg'] ? $_smarty_tpl->tpl_vars['sub_column']->value['st_per_lg'] : 3));
$_smarty_tpl->_assignInScope('pro_per_md', ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_per_md'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_per_md'] ? $_smarty_tpl->tpl_vars['sub_column']->value['st_per_md'] : 2));
$_smarty_tpl->_assignInScope('pro_per_sm', ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_per_sm'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_per_sm'] ? $_smarty_tpl->tpl_vars['sub_column']->value['st_per_sm'] : 2));
$_smarty_tpl->_assignInScope('pro_per_xs', ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_per_xs'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_per_xs'] ? $_smarty_tpl->tpl_vars['sub_column']->value['st_per_xs'] : 1));?>


<?php if (!(isset($_smarty_tpl->tpl_vars['sub_column']->value['st_s_speed'])) || !$_smarty_tpl->tpl_vars['sub_column']->value['st_s_speed']) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sub_column']) ? $_smarty_tpl->tpl_vars['sub_column']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['st_s_speed'] = 7000;
$_smarty_tpl->_assignInScope('sub_column', $_tmp_array);
}
if (!(isset($_smarty_tpl->tpl_vars['sub_column']->value['st_a_speed'])) || !$_smarty_tpl->tpl_vars['sub_column']->value['st_a_speed']) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sub_column']) ? $_smarty_tpl->tpl_vars['sub_column']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['st_a_speed'] = 400;
$_smarty_tpl->_assignInScope('sub_column', $_tmp_array);
}
if (!(isset($_smarty_tpl->tpl_vars['sub_column']->value['st_slideshow']))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sub_column']) ? $_smarty_tpl->tpl_vars['sub_column']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['st_slideshow'] = 0;
$_smarty_tpl->_assignInScope('sub_column', $_tmp_array);
}
if (!(isset($_smarty_tpl->tpl_vars['sub_column']->value['st_pause']))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sub_column']) ? $_smarty_tpl->tpl_vars['sub_column']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['st_pause'] = 0;
$_smarty_tpl->_assignInScope('sub_column', $_tmp_array);
}
if (!(isset($_smarty_tpl->tpl_vars['sub_column']->value['st_rewind_nav']))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sub_column']) ? $_smarty_tpl->tpl_vars['sub_column']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['st_rewind_nav'] = 0;
$_smarty_tpl->_assignInScope('sub_column', $_tmp_array);
}
if (!(isset($_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav']))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sub_column']) ? $_smarty_tpl->tpl_vars['sub_column']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['st_direction_nav'] = 0;
$_smarty_tpl->_assignInScope('sub_column', $_tmp_array);
}
if (!(isset($_smarty_tpl->tpl_vars['sub_column']->value['st_control_nav']))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sub_column']) ? $_smarty_tpl->tpl_vars['sub_column']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['st_control_nav'] = 0;
$_smarty_tpl->_assignInScope('sub_column', $_tmp_array);
}
if (!(isset($_smarty_tpl->tpl_vars['sub_column']->value['st_move']))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sub_column']) ? $_smarty_tpl->tpl_vars['sub_column']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['st_move'] = 0;
$_smarty_tpl->_assignInScope('sub_column', $_tmp_array);
}
if (!(isset($_smarty_tpl->tpl_vars['sub_column']->value['st_spacing_between']))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sub_column']) ? $_smarty_tpl->tpl_vars['sub_column']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['st_spacing_between'] = 0;
$_smarty_tpl->_assignInScope('sub_column', $_tmp_array);
}
if (!(isset($_smarty_tpl->tpl_vars['sub_column']->value['st_auto_height']))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['sub_column']) ? $_smarty_tpl->tpl_vars['sub_column']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['st_auto_height'] = false;
$_smarty_tpl->_assignInScope('sub_column', $_tmp_array);
}?>

<section id="textboxes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_column']->value['id_st_easy_content_column'], ENT_QUOTES, 'UTF-8');?>
" class="textboxes_container static_bullets" >
    <?php if ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_grid'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_grid']) {?>
        <div class="row textboxes_grid">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_column']->value['elements'], 'element');
$_smarty_tpl->tpl_vars['element']->iteration = 0;
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
$_smarty_tpl->tpl_vars['element']->iteration++;
$__foreach_element_57_saved = $_smarty_tpl->tpl_vars['element'];
?>
            <div id="steasy_element_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['id_st_easy_content_element'], ENT_QUOTES, 'UTF-8');?>
" class="col-fw-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_fw']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-xxl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xxl']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xl']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_lg']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_md']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_sm']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xs']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
  <?php if ($_smarty_tpl->tpl_vars['element']->iteration%$_smarty_tpl->tpl_vars['pro_per_xxl']->value == 1) {?> first-item-of-large-line<?php }
if ($_smarty_tpl->tpl_vars['element']->iteration%$_smarty_tpl->tpl_vars['pro_per_xl']->value == 1) {?> first-item-of-desktop-line<?php }
if ($_smarty_tpl->tpl_vars['element']->iteration%$_smarty_tpl->tpl_vars['pro_per_lg']->value == 1) {?> first-item-of-line<?php }
if ($_smarty_tpl->tpl_vars['element']->iteration%$_smarty_tpl->tpl_vars['pro_per_md']->value == 1) {?> first-item-of-tablet-line<?php }
if ($_smarty_tpl->tpl_vars['element']->iteration%$_smarty_tpl->tpl_vars['pro_per_sm']->value == 1) {?> first-item-of-mobile-line<?php }
if ($_smarty_tpl->tpl_vars['element']->iteration%$_smarty_tpl->tpl_vars['pro_per_xs']->value == 1) {?> first-item-of-portrait-line<?php }?>">
                <div class="steasy_element_item text-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_text_align'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_content_width']) {?> width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_content_width'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> textboxes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_textboxes'], ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_assignInScope('pre_template', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'explode' ][ 0 ], array( "_",$_smarty_tpl->tpl_vars['element']->value['st_el_textboxes'] )));?>
                <?php $_smarty_tpl->_subTemplateRender("module:steasycontent/views/templates/hook/textboxes/".((string)$_smarty_tpl->tpl_vars['pre_template']->value[0]).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>
        <?php
$_smarty_tpl->tpl_vars['element'] = $__foreach_element_57_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
        </div>
    <?php } else { ?>
        <div class="block_content">
            <div class="swiper-container products_sldier_swiper <?php if ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav']))) {
if ($_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] > 1) {?> swiper-button-lr <?php if ($_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 6 || $_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 7) {?> swiper-navigation-circle <?php } elseif ($_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 4 || $_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 5) {?> swiper-navigation-rectangle  <?php } elseif ($_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 8 || $_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 9) {?> swiper-navigation-arrow <?php } elseif ($_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 2 || $_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 3) {?> swiper-navigation-full <?php }?> <?php if ($_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 2 || $_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 4 || $_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 6 || $_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] == 8) {?> swiper-navigation_visible <?php }
}
}?>" <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['is_rtl']) {?> dir="rtl" <?php }?>>
                <div class="swiper-wrapper">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_column']->value['elements'], 'element');
$_smarty_tpl->tpl_vars['element']->iteration = 0;
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
$_smarty_tpl->tpl_vars['element']->iteration++;
$__foreach_element_58_saved = $_smarty_tpl->tpl_vars['element'];
?>
                    <div id="steasy_element_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['id_st_easy_content_element'], ENT_QUOTES, 'UTF-8');?>
" class="swiper-slide">
                        <div class="steasy_element_item text-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_text_align'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_content_width']) {?> width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_content_width'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> textboxes_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_textboxes'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_assignInScope('pre_template', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'explode' ][ 0 ], array( "_",$_smarty_tpl->tpl_vars['element']->value['st_el_textboxes'] )));?>
                        <?php $_smarty_tpl->_subTemplateRender("module:steasycontent/views/templates/hook/textboxes/".((string)$_smarty_tpl->tpl_vars['pre_template']->value[0]).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['element'] = $__foreach_element_58_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php if ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'] > 1) {?>
                    <div class="swiper-button swiper-button-outer swiper-button-next"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
                    <div class="swiper-button swiper-button-outer swiper-button-prev"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_control_nav'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_control_nav']) {?>
                <div class="swiper-pagination <?php if ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_control_nav']))) {
if ($_smarty_tpl->tpl_vars['sub_column']->value['st_control_nav'] == 2) {?> swiper-pagination-st-custom <?php } elseif ($_smarty_tpl->tpl_vars['sub_column']->value['st_control_nav'] == 4) {?> swiper-pagination-st-round <?php }
}?>"></div>
                <?php }?>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/slider/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('block_name'=>"#textboxes_".((string)$_smarty_tpl->tpl_vars['sub_column']->value['id_st_easy_content_column']),'is_product_slider'=>0,'slider_s_speed'=>$_smarty_tpl->tpl_vars['sub_column']->value['st_s_speed'],'slider_slideshow'=>$_smarty_tpl->tpl_vars['sub_column']->value['st_slideshow'],'slider_a_speed'=>$_smarty_tpl->tpl_vars['sub_column']->value['st_a_speed'],'slider_pause_on_hover'=>$_smarty_tpl->tpl_vars['sub_column']->value['st_pause'],'rewind_nav'=>$_smarty_tpl->tpl_vars['sub_column']->value['st_rewind_nav'],'lazy_load'=>false,'direction_nav'=>$_smarty_tpl->tpl_vars['sub_column']->value['st_direction_nav'],'control_nav'=>$_smarty_tpl->tpl_vars['sub_column']->value['st_control_nav'],'slider_move'=>$_smarty_tpl->tpl_vars['sub_column']->value['st_move'],'spacing_between'=>$_smarty_tpl->tpl_vars['sub_column']->value['st_spacing_between'],'autoHeight'=>$_smarty_tpl->tpl_vars['sub_column']->value['st_auto_height'],'pro_per_fw'=>$_smarty_tpl->tpl_vars['pro_per_fw']->value,'pro_per_xxl'=>$_smarty_tpl->tpl_vars['pro_per_xxl']->value,'pro_per_xl'=>$_smarty_tpl->tpl_vars['pro_per_xl']->value,'pro_per_lg'=>$_smarty_tpl->tpl_vars['pro_per_lg']->value,'pro_per_md'=>$_smarty_tpl->tpl_vars['pro_per_md']->value,'pro_per_sm'=>$_smarty_tpl->tpl_vars['pro_per_sm']->value,'pro_per_xs'=>$_smarty_tpl->tpl_vars['pro_per_xs']->value), 0, false);
?>
    <?php }?> 
</section><?php }
}
