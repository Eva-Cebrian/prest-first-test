<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stbannerviewstemplateshookstbannerblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42ae95f06_21671009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '429e965019f7b59f5ace9206073291e503982492' => 
    array (
      0 => 'module:stbannerviewstemplateshookstbannerblock.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42ae95f06_21671009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->compiled->nocache_hash = '1366030752668ab42ae89767_40234532';
if ($_smarty_tpl->tpl_vars['banner_data']->value['url'] && !$_smarty_tpl->tpl_vars['banner_data']->value['description_has_links']) {?>
    <a id="st_banner_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['id_st_banner'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_data']->value['url'],'html' )), ENT_QUOTES, 'UTF-8');?>
" class="st_banner_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['id_st_banner'], ENT_QUOTES, 'UTF-8');?>
 st_banner_block" target="<?php if ($_smarty_tpl->tpl_vars['banner_data']->value['new_window']) {?>_blank<?php } else { ?>_self<?php }?>" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_data']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style="<?php if (!$_smarty_tpl->tpl_vars['banner_style']->value) {?>height:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_height']->value, ENT_QUOTES, 'UTF-8');?>
px;<?php }?>">
<?php } else { ?>
    <div id="st_banner_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['id_st_banner'], ENT_QUOTES, 'UTF-8');?>
" class="st_banner_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['id_st_banner'], ENT_QUOTES, 'UTF-8');?>
 st_banner_block" style="<?php if (!$_smarty_tpl->tpl_vars['banner_style']->value) {?>height:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_height']->value, ENT_QUOTES, 'UTF-8');?>
px;<?php }?>">
<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['banner_style']->value) {?>
        <picture>
        <!--[if IE 9]><video style="display: none;"><![endif]-->
            <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_xs'])) && $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_xs']) {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['stwebp_type']->value)) && $_smarty_tpl->tpl_vars['stwebp_type']->value) {?><source <?php if ($_smarty_tpl->tpl_vars['banner_lazy_loading']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_xs'],'/\.(jpg|jpeg|png|gif)$/','.webp'), ENT_QUOTES, 'UTF-8');?>
" media="(max-width: 480px)" type="image/webp"><?php }?>
            <source <?php if ($_smarty_tpl->tpl_vars['banner_lazy_loading']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_xs'], ENT_QUOTES, 'UTF-8');?>
" media="(max-width: 480px)">
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_sm'])) && $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_sm']) {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['stwebp_type']->value)) && $_smarty_tpl->tpl_vars['stwebp_type']->value) {?><source <?php if ($_smarty_tpl->tpl_vars['banner_lazy_loading']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_sm'],'/\.(jpg|jpeg|png|gif)$/','.webp'), ENT_QUOTES, 'UTF-8');?>
" media="(max-width: 768px)" type="image/webp"><?php }?>
            <source <?php if ($_smarty_tpl->tpl_vars['banner_lazy_loading']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang_sm'], ENT_QUOTES, 'UTF-8');?>
" media="(max-width: 768px)">
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['stwebp_type']->value)) && $_smarty_tpl->tpl_vars['stwebp_type']->value && strtolower(substr($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'],-3)) != 'gif') {?><source <?php if ($_smarty_tpl->tpl_vars['banner_lazy_loading']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'],'/\.(jpg|jpeg|png|gif)$/','.webp'), ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
        <!--[if IE 9]></video><![endif]-->
        <img class="adveditor_image <?php if ($_smarty_tpl->tpl_vars['banner_lazy_loading']->value) {?> st_banner_lazy_image<?php }?>" <?php if ($_smarty_tpl->tpl_vars['banner_lazy_loading']->value) {?>data-<?php }?>src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_data']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value['width'])) && $_smarty_tpl->tpl_vars['banner_data']->value['width']) {?> width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value['height'])) && $_smarty_tpl->tpl_vars['banner_data']->value['height']) {?> height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
        </picture>
    <?php } else { ?>
        <div class="st_banner_image" <?php if ($_smarty_tpl->tpl_vars['banner_lazy_loading']->value && (isset($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'])) && $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang']) {?> data-background="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> style="<?php if (!$_smarty_tpl->tpl_vars['banner_lazy_loading']->value && (isset($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'])) && $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang']) {?>background-image:url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'], ENT_QUOTES, 'UTF-8');?>
);<?php }
if ((isset($_smarty_tpl->tpl_vars['banner_data']->value['bg_color'])) && $_smarty_tpl->tpl_vars['banner_data']->value['bg_color']) {?>background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['bg_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"></div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['description']) {?>
        <div class="st_image_layered_description <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['hide_text_on_mobile']) {?> hidden-sm-down <?php }?> <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['text_align'] == 1) {?> text-1 <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_align'] == 3) {?> text-3 <?php } else { ?> text-2 <?php }?> <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 1) {?> flex_start flex_left <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 2) {?> flex_start flex_center <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 3) {?> flex_start flex_right <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 4) {?> flex_middle flex_left <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 6) {?> flex_middle flex_right <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 7) {?> flex_end flex_left <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 8) {?> flex_end flex_center <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_position'] == 9) {?> flex_end flex_right <?php } else { ?> flex_middle flex_center <?php }?>">
        	<div class="st_image_layered_description_inner <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['text_width']) {?> width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_data']->value['text_width'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> style_content">
        	<?php echo $_smarty_tpl->tpl_vars['banner_data']->value['description'];?>

        	</div>
        </div>
    <?php }
if ($_smarty_tpl->tpl_vars['banner_data']->value['url'] && !$_smarty_tpl->tpl_vars['banner_data']->value['description_has_links']) {?>
    </a>
<?php } else { ?>
    </div>
<?php }
}
}
