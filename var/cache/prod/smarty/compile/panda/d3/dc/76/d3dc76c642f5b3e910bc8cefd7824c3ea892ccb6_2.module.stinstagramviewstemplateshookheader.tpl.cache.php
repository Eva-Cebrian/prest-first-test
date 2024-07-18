<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from 'module:stinstagramviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa5b0f354_95713546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3dc76c642f5b3e910bc8cefd7824c3ea892ccb6' => 
    array (
      0 => 'module:stinstagramviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa5b0f354_95713546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->compiled->nocache_hash = '1488961407668adaa5ae8477_20511991';
?>

<?php if ($_smarty_tpl->tpl_vars['stins_for_css']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['stins_for_css']->value)) {?>
	<style>
	<?php if ($_smarty_tpl->tpl_vars['stins_for_css']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['stins_for_css']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stins_for_css']->value, 'in');
$_smarty_tpl->tpl_vars['in']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['in']->value) {
$_smarty_tpl->tpl_vars['in']->do_else = false;
$_smarty_tpl->_assignInScope('group_css', '');?>
		<?php $_smarty_tpl->_assignInScope('prefix', "#instagram_block_container_".((string)$_smarty_tpl->tpl_vars['in']->value['id_st_instagram']));?>
		<?php if ($_smarty_tpl->tpl_vars['in']->value['caption_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_imagetype,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_view_larger{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['caption_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['bg_hover_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info:hover{background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_hover_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info{background:rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_hover_color_arr'][0], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_hover_color_arr'][1], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_hover_color_arr'][2], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_opacity_nohover'], ENT_QUOTES, 'UTF-8');?>
);} <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info:hover{background:rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_hover_color_arr'][0], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_hover_color_arr'][1], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_hover_color_arr'][2], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_opacity'], ENT_QUOTES, 'UTF-8');?>
);} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['media_info_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info_block, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info_block a, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info_block a:hover, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info_block .ins_image_info_username{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['media_info_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['media_info_a_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info_block a, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info_block a:hover, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info_block .ins_image_info_username{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['media_info_a_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['media_info_a_color_hover']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info_block a:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['media_info_a_color_hover'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['media_info_bg']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info_block{background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['media_info_bg'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['follow_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_follow_btn, #footer <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_follow_btn, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_profile_img_right a.ins_follow_btn{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['follow_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['follow_bg']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_follow_btn, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_profile_img_right a.ins_follow_btn:hover{background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['follow_bg'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['popup_text_color']) {?> .ins_fancy_box.ins_fancy_box_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['id_st_instagram'], ENT_QUOTES, 'UTF-8');?>
, .ins_fancy_box.ins_fancy_box_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['id_st_instagram'], ENT_QUOTES, 'UTF-8');?>
 a,.ins_fancy_box.ins_fancy_box_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['id_st_instagram'], ENT_QUOTES, 'UTF-8');?>
 a:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['popup_text_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['popup_a_color']) {?> .ins_fancy_box.ins_fancy_box_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['id_st_instagram'], ENT_QUOTES, 'UTF-8');?>
 a,.ins_fancy_box.ins_fancy_box_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['id_st_instagram'], ENT_QUOTES, 'UTF-8');?>
 a:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['popup_a_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['popup_a_color_hover']) {?> .ins_fancy_box.ins_fancy_box_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['id_st_instagram'], ENT_QUOTES, 'UTF-8');?>
 a:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['popup_a_color_hover'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['cc_text_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_custom_content, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_custom_content a, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_custom_content a:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['cc_text_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['cc_a_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_custom_content a, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_custom_content a:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['cc_a_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['cc_a_color_hover']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_custom_content a:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['cc_a_color_hover'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['cc_bg']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_custom_content{background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['cc_bg'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['profile_text']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_profile_img_right, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_profile_img_right a, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_profile_img_right a:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['profile_text'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['profile_a_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_profile_img_right a, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_profile_img_right a:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['profile_a_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['profile_a_color_hover']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_profile_img_right a:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['profile_a_color_hover'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['profile_bg']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .instagram_profile{background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['profile_bg'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['account_stats_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_pro_c, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_pro_c_v{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['account_stats_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['account_stats_bg']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_profile_counts{background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['account_stats_bg'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['load_more_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_load_more, #footer <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_load_more{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['load_more_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['load_more_bg']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_load_more{background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['load_more_bg'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['load_more_bg_hover']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_load_more:hover,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_load_more.ins_loading{background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['load_more_bg_hover'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .instagram_list li, #footer <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .instagram_list li{padding:<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['in']->value['padding'], ENT_QUOTES, 'UTF-8');?>
px;}<?php if ($_smarty_tpl->tpl_vars['in']->value['font_size']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_wrap{font-size:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['font_size'], ENT_QUOTES, 'UTF-8');?>
px;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['image_border']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_link{border: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['image_border'], ENT_QUOTES, 'UTF-8');?>
px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['image_border_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['image_border_radius']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_link, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_image_info{border-radius: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['image_border_radius'], ENT_QUOTES, 'UTF-8');?>
px;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['picture_size_col']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .instagram_list img{width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['picture_size_col'], ENT_QUOTES, 'UTF-8');?>
px;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['bg_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
.ins_apply_bg, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_apply_bg {background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['bg_img']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
.ins_apply_bg, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_apply_bg {background-image:url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_img'], ENT_QUOTES, 'UTF-8');?>
);} <?php } elseif ($_smarty_tpl->tpl_vars['in']->value['bg_pattern']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
.ins_apply_bg, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .ins_apply_bg {background-image:url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bg_pattern'], ENT_QUOTES, 'UTF-8');?>
);} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['top_padding']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
{padding-top:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['top_padding'], ENT_QUOTES, 'UTF-8');?>
px;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['bottom_padding']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
{padding-bottom:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bottom_padding'], ENT_QUOTES, 'UTF-8');?>
px;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['top_margin'] !== null && $_smarty_tpl->tpl_vars['in']->value['top_margin'] !== '') {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
{margin-top:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['top_margin'], ENT_QUOTES, 'UTF-8');?>
px;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['bottom_margin'] !== null && $_smarty_tpl->tpl_vars['in']->value['bottom_margin'] !== '') {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
{margin-bottom:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['bottom_margin'], ENT_QUOTES, 'UTF-8');?>
px;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['title_font_size']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .title_block_inner{font-size:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['title_font_size'], ENT_QUOTES, 'UTF-8');?>
px;line-height:150%;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['title_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .title_block_inner{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['title_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['title_bg']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .title_block{background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['title_bg'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .title_block, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .title_block_inner{border-bottom-width: <?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['in']->value['title_border_height'], ENT_QUOTES, 'UTF-8');?>
px;}<?php if ($_smarty_tpl->tpl_vars['in']->value['title_border_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .title_block{border-bottom-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['title_border_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['title_border_color_h']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .title_block_inner{border-bottom-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['title_border_color_h'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['direction_color']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['direction_color'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['direction_color_hover']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button:hover, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['direction_color_hover'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['direction_color_disabled']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button.disabled, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button.disabled:hover, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button.disabled, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button.disabled:hover{color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['direction_color_disabled'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['direction_bg']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button{background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['direction_bg'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['direction_hover_bg']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button:hover, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button:hover, instagram_block_center_container .swiper-button:hover{background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['direction_hover_bg'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['direction_disabled_bg']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button.disabled,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button.disabled:hover, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button.disabled, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button.disabled,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button.disabled:hover, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-button.disabled:hover{background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['direction_disabled_bg'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['pag_nav_bg']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-pagination span{background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['pag_nav_bg'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['pag_nav_bg_hover']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
  .swiper-pagination.active span, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-pagination:hover span{background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['pag_nav_bg_hover'], ENT_QUOTES, 'UTF-8');?>
;} <?php }
if ($_smarty_tpl->tpl_vars['in']->value['shadow_effect']) {?> <?php $_smarty_tpl->_assignInScope('apply_to', "#instagram_block_container_".((string)$_smarty_tpl->tpl_vars['in']->value['id_st_instagram'])." .ins_image_link");
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
 .swiper-container{margin: -<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['shadow_blur'], ENT_QUOTES, 'UTF-8');?>
px; padding: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['in']->value['shadow_blur'], ENT_QUOTES, 'UTF-8');?>
px;}<?php if ($_smarty_tpl->tpl_vars['in']->value['show_caption'] == 3 || $_smarty_tpl->tpl_vars['in']->value['show_likes'] == 3 || $_smarty_tpl->tpl_vars['in']->value['show_comments'] == 3 || $_smarty_tpl->tpl_vars['in']->value['show_username'] == 3 || $_smarty_tpl->tpl_vars['in']->value['show_timestamp'] == 3) {?> <?php $_smarty_tpl->_assignInScope('apply_to', "#instagram_block_container_".((string)$_smarty_tpl->tpl_vars['in']->value['id_st_instagram'])." .ins_image_wrap_inner ");?> <?php }?> <?php $_smarty_tpl->_assignInScope('pro_shadow_css', ((string)$_smarty_tpl->tpl_vars['in']->value['h_shadow'])."px ".((string)$_smarty_tpl->tpl_vars['in']->value['v_shadow'])."px ".((string)$_smarty_tpl->tpl_vars['in']->value['shadow_blur'])."px rgba(".((string)$_smarty_tpl->tpl_vars['in']->value['shadow_color_arr'][0]).",".((string)$_smarty_tpl->tpl_vars['in']->value['shadow_color_arr'][1]).",".((string)$_smarty_tpl->tpl_vars['in']->value['shadow_color_arr'][2]).",".((string)$_smarty_tpl->tpl_vars['in']->value['shadow_opacity']).")");?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['apply_to']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['in']->value['shadow_effect'] == 2) {?>:hover<?php }?>{-webkit-box-shadow: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pro_shadow_css']->value, ENT_QUOTES, 'UTF-8');?>
; -moz-box-shadow: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pro_shadow_css']->value, ENT_QUOTES, 'UTF-8');?>
; box-shadow: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pro_shadow_css']->value, ENT_QUOTES, 'UTF-8');?>
;} <?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
	</style>
	<?php }
echo '<script'; ?>
>
//<![CDATA[
var ins_follow = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var ins_posts = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posts','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var ins_followers = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Followers','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var ins_following = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Following','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var stinstagram_view_in_ins = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View in Instagram','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var stinstagram_view_larger = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to view larger','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_suffixAgo= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ago','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_suffixFromNow= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'from now','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_inPast= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'any moment now','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_seconds= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'less than a minute','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_minute= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'about a minute','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_minutes= "#d <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'minutes','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_hour= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'about an hour','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_hours= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'about #d hours','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_day= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'a day','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_days= "#d <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_month= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'about a month','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_months= "#d <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'months','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_year= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'about a year','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_years= "#d <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'years','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var st_timeago_years= "#d <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'years','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var ins_previous= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
var ins_next= "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";

var instagram_block_array={'profile':[],'feed':[]};

//]]>
<?php echo '</script'; ?>
><?php }
}
