<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stthemeeditorviewstemplatessliderhomepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42ab94460_19179648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62fe622fb664cb083ba527b113932b4e6f5be2c1' => 
    array (
      0 => 'module:stthemeeditorviewstemplatessliderhomepage.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stthemeeditor/views/templates/slider/heading.tpl' => 2,
    'file:catalog/slider/product-slider.tpl' => 1,
    'file:catalog/slider/script.tpl' => 2,
    'file:catalog/listing/product-list-simple.tpl' => 1,
    'file:catalog/_partials/miniatures/list-item.tpl' => 1,
    'module:stblog/views/templates/slider/slider.tpl' => 1,
    'module:stblog/views/templates/slider/list-item.tpl' => 1,
  ),
),false)) {
function content_668ab42ab94460_19179648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '647488203668ab42ab82821_88140360';
?>

<?php if ((isset($_smarty_tpl->tpl_vars['module']->value))) {?>
<!-- MODULE st <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module']->value, ENT_QUOTES, 'UTF-8');?>
 -->
<?php }
$_smarty_tpl->_assignInScope('pro_or_blog_slider', 0);
if ((isset($_smarty_tpl->tpl_vars['products']->value)) && is_array($_smarty_tpl->tpl_vars['products']->value) && count($_smarty_tpl->tpl_vars['products']->value)) {
$_smarty_tpl->_assignInScope('pro_or_blog_slider', 1);
}
if ((isset($_smarty_tpl->tpl_vars['blogs']->value)) && is_array($_smarty_tpl->tpl_vars['blogs']->value) && count($_smarty_tpl->tpl_vars['blogs']->value) && (isset($_smarty_tpl->tpl_vars['use_blog']->value)) && $_smarty_tpl->tpl_vars['use_blog']->value) {
$_smarty_tpl->_assignInScope('pro_or_blog_slider', 2);
}
if ((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value && !$_smarty_tpl->tpl_vars['pro_per_fw']->value) {
$_smarty_tpl->_assignInScope('bu_full_width', true);
} else {
$_smarty_tpl->_assignInScope('bu_full_width', false);
}
$_smarty_tpl->_assignInScope('column_fix', '');
if ((isset($_smarty_tpl->tpl_vars['column_slider']->value)) && $_smarty_tpl->tpl_vars['column_slider']->value) {
$_smarty_tpl->_assignInScope('column_fix', "_column");
}
if ($_smarty_tpl->tpl_vars['title_position']->value == 3 && $_smarty_tpl->tpl_vars['direction_nav']->value == 1) {
$_smarty_tpl->_assignInScope('direction_nav', 5);
}
if ($_smarty_tpl->tpl_vars['pro_or_blog_slider']->value || ((isset($_smarty_tpl->tpl_vars['aw_display']->value)) && $_smarty_tpl->tpl_vars['aw_display']->value)) {?>
<div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module']->value, ENT_QUOTES, 'UTF-8');?>
_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hook_hash']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module']->value, ENT_QUOTES, 'UTF-8');?>
_container <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['hide_mob']->value == 2) {?> hidden-lg-up <?php }?> block <?php if ($_smarty_tpl->tpl_vars['pro_or_blog_slider']->value == 1 && $_smarty_tpl->tpl_vars['countdown_on']->value) {?> s_countdown_block <?php }?> <?php if (!$_smarty_tpl->tpl_vars['column_fix']->value && ($_smarty_tpl->tpl_vars['has_background_img']->value || $_smarty_tpl->tpl_vars['video_mpfour']->value)) {?> jarallax <?php }?> products_container<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column_fix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['column_slider']->value && !(isset($_smarty_tpl->tpl_vars['is_quarter']->value))) {?> column_block <?php }?>" 
<?php if (!$_smarty_tpl->tpl_vars['column_fix']->value && ($_smarty_tpl->tpl_vars['has_background_img']->value || $_smarty_tpl->tpl_vars['video_mpfour']->value)) {?> data-jarallax data-speed="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['speed']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['video_mpfour']->value) {?> data-video-src="mp4:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_mpfour']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['video_webm']->value) {?>,webm:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_webm']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['video_ogg']->value) {?>,ogv:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video_ogg']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php }?> <?php }?>
>
<?php if ($_smarty_tpl->tpl_vars['bu_full_width']->value) {?><div class="wide_container"><?php }
if ((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value) {?><div class="<?php if ($_smarty_tpl->tpl_vars['bu_full_width']->value) {?>container<?php } else { ?>container-fluid<?php }?>"><?php }?>
<section class="products_section " >

    <?php if ((isset($_smarty_tpl->tpl_vars['title_io']->value)) && $_smarty_tpl->tpl_vars['title_io']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['title_position']->value != 3) {
$_smarty_tpl->_subTemplateRender("module:stthemeeditor/views/templates/slider/heading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
        <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value) {
echo $_smarty_tpl->tpl_vars['custom_content']->value[1]['content'];
}?>
    <?php }?>
    <div class="row flex_lg_container flex_stretch">
        <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value && $_smarty_tpl->tpl_vars['custom_content']->value[10]['width']) {?>
            <?php echo $_smarty_tpl->tpl_vars['custom_content']->value[10]['content'];?>

        <?php }?>
        <div class="col-lg-<?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value) {
echo htmlspecialchars((string) 12-$_smarty_tpl->tpl_vars['custom_content']->value[10]['width']-$_smarty_tpl->tpl_vars['custom_content']->value[30]['width'], ENT_QUOTES, 'UTF-8');
} else { ?>12<?php }?> <?php if ($_smarty_tpl->tpl_vars['display_as_grid']->value == 1) {?> display_as_grid <?php } elseif ($_smarty_tpl->tpl_vars['display_as_grid']->value == 2) {?> display_as_simple <?php }?> products_slider"> <!-- to do what if the sum of left and right contents larger than 12 -->
    
    <?php if (!(isset($_smarty_tpl->tpl_vars['title_io']->value)) || !$_smarty_tpl->tpl_vars['title_io']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['title_position']->value != 3) {
$_smarty_tpl->_subTemplateRender("module:stthemeeditor/views/templates/slider/heading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
        <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value) {
echo $_smarty_tpl->tpl_vars['custom_content']->value[1]['content'];
}?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['pro_or_blog_slider']->value == 1) {?>
            <?php if (!$_smarty_tpl->tpl_vars['display_as_grid']->value || $_smarty_tpl->tpl_vars['column_slider']->value) {?>
            <div class="block_content <?php if ((isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value && !$_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider']) {?> lazy_swiper <?php }?>">
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/slider/product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <?php ob_start();
echo htmlspecialchars((string) count($_smarty_tpl->tpl_vars['products']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:catalog/slider/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('block_name'=>"#".((string)$_smarty_tpl->tpl_vars['module']->value)."_container_".((string)$_smarty_tpl->tpl_vars['hook_hash']->value),'one_item_only'=>$_prefixVariable2), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['display_as_grid']->value == 2) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/listing/product-list-simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('for_f'=>((string)$_smarty_tpl->tpl_vars['module']->value)), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/list-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('class'=>((string)$_smarty_tpl->tpl_vars['module']->value)."_grid",'for_f'=>((string)$_smarty_tpl->tpl_vars['module']->value)), 0, false);
?>
            <?php }?>
    	<?php } elseif ($_smarty_tpl->tpl_vars['pro_or_blog_slider']->value == 2) {?>
            <?php if (!$_smarty_tpl->tpl_vars['display_as_grid']->value || $_smarty_tpl->tpl_vars['column_slider']->value) {?>
            <div class="block_content <?php if ((isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value && !$_smarty_tpl->tpl_vars['sttheme']->value['pro_tm_slider']) {?> lazy_swiper <?php }?>">
                <?php $_smarty_tpl->_subTemplateRender("module:stblog/views/templates/slider/slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <?php ob_start();
echo htmlspecialchars((string) count($_smarty_tpl->tpl_vars['blogs']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:catalog/slider/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('block_name'=>"#".((string)$_smarty_tpl->tpl_vars['module']->value)."_container_".((string)$_smarty_tpl->tpl_vars['hook_hash']->value),'is_product_slider'=>0,'one_item_only'=>$_prefixVariable3), 0, true);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("module:stblog/views/templates/slider/list-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('for_f'=>((string)$_smarty_tpl->tpl_vars['module']->value)), 0, false);
?>
            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pro_or_blog_slider']->value) {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['view_more']->value)) && $_smarty_tpl->tpl_vars['view_more']->value == 1 && (((isset($_smarty_tpl->tpl_vars['title_link']->value)) && $_smarty_tpl->tpl_vars['title_link']->value) || ((isset($_smarty_tpl->tpl_vars['url_entity']->value)) && $_smarty_tpl->tpl_vars['url_entity']->value))) {?><div class="product_view_more_box text-center"><a href="<?php if ((isset($_smarty_tpl->tpl_vars['title_link']->value)) && $_smarty_tpl->tpl_vars['title_link']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_link']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>$_smarty_tpl->tpl_vars['url_entity']->value),$_smarty_tpl ) );
}?>" class="btn btn-default btn-more-padding btn-large st_slider_view_more" title="<?php if ((isset($_smarty_tpl->tpl_vars['view_more_text']->value)) && $_smarty_tpl->tpl_vars['view_more_text']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_more_text']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>"><?php if ((isset($_smarty_tpl->tpl_vars['view_more_text']->value)) && $_smarty_tpl->tpl_vars['view_more_text']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_more_text']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></a></div><?php }?>
        <?php } else { ?>
            <div class="block_content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No items','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</div>
    	<?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value) {
echo $_smarty_tpl->tpl_vars['custom_content']->value[2]['content'];
}?>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value && $_smarty_tpl->tpl_vars['custom_content']->value[30]['width']) {?>
            <?php echo $_smarty_tpl->tpl_vars['custom_content']->value[30]['content'];?>

        <?php }?>
    </div>
</section>
<?php if ((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value) {?></div><?php }
if ($_smarty_tpl->tpl_vars['bu_full_width']->value) {?></div><?php }?>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['module']->value))) {?>
<!-- /MODULE st <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module']->value, ENT_QUOTES, 'UTF-8');?>
 -->
<?php }
}
}
