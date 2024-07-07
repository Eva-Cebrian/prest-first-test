<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stswiperviewstemplateshookstswiperblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42aa1e268_89437328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14a18245ef968023fa1313eebc01e17799be8b2a' => 
    array (
      0 => 'module:stswiperviewstemplateshookstswiperblock.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42aa1e268_89437328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->compiled->nocache_hash = '1304654934668ab42aa0f264_05789919';
?>
<div class="swiper-slide" <?php if ($_smarty_tpl->tpl_vars['slides']->value['templates'] == 3 && $_smarty_tpl->tpl_vars['slides']->value['slides_per_view'] && (isset($_smarty_tpl->tpl_vars['banner_data']->value['width'])) && $_smarty_tpl->tpl_vars['banner_data']->value['width']) {?>style="width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['banner_data']->value['url'] && !$_smarty_tpl->tpl_vars['banner_data']->value['description_has_links']) {?>
    <a id="st_swiper_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['id_st_swiper'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_data']->value['url'],'html' )), ENT_QUOTES, 'UTF-8');?>
" class="st_swiper_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['id_st_swiper'], ENT_QUOTES, 'UTF-8');?>
 st_swiper_block" target="<?php if ($_smarty_tpl->tpl_vars['banner_data']->value['new_window']) {?>_blank<?php } else { ?>_self<?php }?>" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_data']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((!(isset($_smarty_tpl->tpl_vars['isbanner']->value)) || !$_smarty_tpl->tpl_vars['isbanner']->value) && ($_smarty_tpl->tpl_vars['slides']->value['height'] || $_smarty_tpl->tpl_vars['slides']->value['full_screen'])) {?> style="background-image:url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'], ENT_QUOTES, 'UTF-8');?>
');" <?php }?>>
<?php } else { ?>
    <div id="st_swiper_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['id_st_swiper'], ENT_QUOTES, 'UTF-8');?>
" class="st_swiper_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['id_st_swiper'], ENT_QUOTES, 'UTF-8');?>
 st_swiper_block" <?php if ((!(isset($_smarty_tpl->tpl_vars['isbanner']->value)) || !$_smarty_tpl->tpl_vars['isbanner']->value) && ($_smarty_tpl->tpl_vars['slides']->value['height'] || $_smarty_tpl->tpl_vars['slides']->value['full_screen'])) {?> style="background-image:url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'], ENT_QUOTES, 'UTF-8');?>
');" <?php }?>>
<?php }
if (((isset($_smarty_tpl->tpl_vars['isbanner']->value)) && $_smarty_tpl->tpl_vars['isbanner']->value) || (!$_smarty_tpl->tpl_vars['slides']->value['height'] && !$_smarty_tpl->tpl_vars['slides']->value['full_screen'])) {
$_smarty_tpl->_assignInScope('is_lazy', ((!(isset($_smarty_tpl->tpl_vars['isbanner']->value)) || !$_smarty_tpl->tpl_vars['isbanner']->value) && $_smarty_tpl->tpl_vars['slides']->value['lazy_load']));?>
<picture>
<!--[if IE 9]><video style="display: none;"><![endif]-->
    <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_xs'])) && $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_xs']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['stwebp_type']->value)) && $_smarty_tpl->tpl_vars['stwebp_type']->value) {?><source <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_xs'],'/\.(jpg|jpeg|png|gif)$/','.webp'), ENT_QUOTES, 'UTF-8');?>
" media="(max-width: 480px)"  type="image/webp"><?php }?>
    <source <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_xs'], ENT_QUOTES, 'UTF-8');?>
" media="(max-width: 480px)">
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_sm'])) && $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_sm']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['stwebp_type']->value)) && $_smarty_tpl->tpl_vars['stwebp_type']->value) {?><source <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_sm'],'/\.(jpg|jpeg|png|gif)$/','.webp'), ENT_QUOTES, 'UTF-8');?>
" media="(max-width: 768px)" type="image/webp"><?php }?>
    <source <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_sm'], ENT_QUOTES, 'UTF-8');?>
" media="(max-width: 768px)">
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['stwebp_type']->value)) && $_smarty_tpl->tpl_vars['stwebp_type']->value && strtolower(substr($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'],-3)) != 'gif') {?><source <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'],'/\.(jpg|jpeg|png|gif)$/','.webp'), ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
<!--[if IE 9]></video><![endif]-->
<img class="st_swiper_image <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?> swiper-lazy <?php }?>" <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_data']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if (((isset($_smarty_tpl->tpl_vars['banner_data']->value['width'])) && $_smarty_tpl->tpl_vars['banner_data']->value['width'])) {?>width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if (((isset($_smarty_tpl->tpl_vars['banner_data']->value['height'])) && $_smarty_tpl->tpl_vars['banner_data']->value['height'])) {?>height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
</picture>
<?php }
if ($_smarty_tpl->tpl_vars['banner_data']->value['description']) {?>
    <div class="st_image_layered_description <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value['content_width'])) && $_smarty_tpl->tpl_vars['banner_data']->value['content_width']) {?> container <?php }?> <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['hide_text_on_mobile']) {?> hidden-sm-down <?php }?> <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['text_align'] == 1) {?> text-left <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_align'] == 3) {?> text-right <?php } else { ?> text-center <?php }?> <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 1) {?> flex_start flex_left <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 2) {?> flex_start flex_center <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 3) {?> flex_start flex_right <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 4) {?> flex_middle flex_left <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 6) {?> flex_middle flex_right <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 7) {?> flex_end flex_left <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 8) {?> flex_end flex_center <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 9) {?> flex_end flex_right <?php } else { ?> flex_middle flex_center <?php }?>">
        <div class="st_image_layered_description_inner <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['text_width']) {?> width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['text_width'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> style_content <?php if ($_smarty_tpl->tpl_vars['slides']->value['templates'] == 3) {?> curr_swiper <?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value['text_animation_name']))) {?> data-animate="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['text_animation_name'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['banner_data']->value['description'];?>

        </div>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['banner_data']->value['url'] && !$_smarty_tpl->tpl_vars['banner_data']->value['description_has_links']) {?>
    </a>
<?php } else { ?>
    </div>
<?php }?>
</div><?php }
}
