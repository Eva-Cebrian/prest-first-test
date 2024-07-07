<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stblogfeaturedarticlesviewstemplateshookhome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42ae3f2e9_59649277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef954375db94f0c315dd2d0b09caf2efd23aae4a' => 
    array (
      0 => 'module:stblogfeaturedarticlesviewstemplateshookhome.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stblog/views/templates/slider/slider.tpl' => 1,
    'file:catalog/slider/script.tpl' => 1,
    'module:stblog/views/templates/slider/list-item.tpl' => 1,
  ),
),false)) {
function content_668ab42ae3f2e9_59649277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '287484637668ab42ae26986_81715053';
$_smarty_tpl->_assignInScope('column_fix', '');
if ((isset($_smarty_tpl->tpl_vars['column_slider']->value)) && $_smarty_tpl->tpl_vars['column_slider']->value) {
$_smarty_tpl->_assignInScope('column_fix', "_column");
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['blog_categories']->value)) && count($_smarty_tpl->tpl_vars['blog_categories']->value)) {?>
    <!-- MODULE st stblogfeaturedarticles -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_categories']->value, 'p_c');
$_smarty_tpl->tpl_vars['p_c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p_c']->value) {
$_smarty_tpl->tpl_vars['p_c']->do_else = false;
?>
        <?php if (((isset($_smarty_tpl->tpl_vars['p_c']->value['blogs'])) && is_array($_smarty_tpl->tpl_vars['p_c']->value['blogs'])) || (!$_smarty_tpl->tpl_vars['column_fix']->value && $_smarty_tpl->tpl_vars['p_c']->value['aw_display']) || ($_smarty_tpl->tpl_vars['column_fix']->value && $_smarty_tpl->tpl_vars['p_c']->value['aw_display_col'])) {?>
        <div id="category_blogs_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['id_st_blog_slider'], ENT_QUOTES, 'UTF-8');?>
" class="category_blogs_container <?php if ($_smarty_tpl->tpl_vars['p_c']->value['hide_mob'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['p_c']->value['hide_mob'] == 2) {?> hidden-lg-up <?php }?> block <?php if ($_smarty_tpl->tpl_vars['p_c']->value['countdown_on']) {?> s_countdown_block<?php }?> products_container<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column_fix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['column_slider']->value && !(isset($_smarty_tpl->tpl_vars['is_quarter']->value))) {?> column_block <?php }?> <?php if ($_smarty_tpl->tpl_vars['p_c']->value['video_mpfour']) {?> video_bg_block <?php }?>" 
        <?php if ($_smarty_tpl->tpl_vars['p_c']->value['bg_img'] && $_smarty_tpl->tpl_vars['p_c']->value['speed'] != 1) {?> data-stellar-background-ratio="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-stellar-vertical-offset="-<?php echo htmlspecialchars((string) 2*(int)$_smarty_tpl->tpl_vars['p_c']->value['bg_img_v_offset'], ENT_QUOTES, 'UTF-8');?>
" <?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['p_c']->value['video_mpfour']) {?> data-vide-bg="mp4: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['video_mpfour'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['p_c']->value['video_webm']) {?>, webm: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['video_webm'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['p_c']->value['video_ogg']) {?>, ogv: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['video_ogg'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['p_c']->value['video_poster']) {?>, poster: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['video_poster'], ENT_QUOTES, 'UTF-8');
}?>" data-vide-options="loop: <?php if ($_smarty_tpl->tpl_vars['p_c']->value['video_loop']) {?>true<?php } else { ?>false<?php }?>, muted: <?php if ($_smarty_tpl->tpl_vars['p_c']->value['video_muted']) {?>true<?php } else { ?>false<?php }?>, position: 50% <?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['p_c']->value['video_v_offset'], ENT_QUOTES, 'UTF-8');?>
%" <?php }?>>
        <?php if ((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value && !$_smarty_tpl->tpl_vars['p_c']->value['pro_per_fw']) {
$_smarty_tpl->_assignInScope('bu_full_width', true);
} else {
$_smarty_tpl->_assignInScope('bu_full_width', false);
}?>
        <?php if ($_smarty_tpl->tpl_vars['bu_full_width']->value) {?><div class="wide_container"><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value) {?><div class="container<?php if (!$_smarty_tpl->tpl_vars['bu_full_width']->value) {?>-fluid<?php }?>"><?php }?>
        <section class="products_section" >
            <div class="products_slider <?php if ($_smarty_tpl->tpl_vars['p_c']->value['grid'] == 1) {?> display_as_grid <?php } elseif ($_smarty_tpl->tpl_vars['p_c']->value['grid'] == 2) {?> display_as_simple <?php }?>">

                <?php if ($_smarty_tpl->tpl_vars['p_c']->value['title_align'] != 3) {?>
                <div class="title_block flex_container title_align_<?php if ($_smarty_tpl->tpl_vars['column_slider']->value) {?>0<?php } else {
echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['p_c']->value['title_align'], ENT_QUOTES, 'UTF-8');
}?> title_style_<?php if ((isset($_smarty_tpl->tpl_vars['is_blog']->value)) && $_smarty_tpl->tpl_vars['is_blog']->value) {
echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['heading_style'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['heading_style'], ENT_QUOTES, 'UTF-8');
}?> <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['sub_title'])) && $_smarty_tpl->tpl_vars['p_c']->value['sub_title']) {?> st_has_sub_title <?php }?>">
                    <div class="flex_child title_flex_left"></div>
                    <?php if ($_smarty_tpl->tpl_vars['p_c']->value['link']) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="title_block_inner"><?php } else { ?><div class="title_block_inner"><?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['slider_title'])) && $_smarty_tpl->tpl_vars['p_c']->value['slider_title']) {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['slider_title'], ENT_QUOTES, 'UTF-8');?>

                    <?php } else { ?>
                       <?php if ($_smarty_tpl->tpl_vars['blog_slider_type']->value == 2) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recent articles','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['is_root_category'])) && $_smarty_tpl->tpl_vars['p_c']->value['is_root_category']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured articles','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
} else { ?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['name'], ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['p_c']->value['link']) {?></a><?php } else { ?></div><?php }?>
                    <div class="flex_child title_flex_right"></div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['view_more'])) && $_smarty_tpl->tpl_vars['p_c']->value['view_more'] == 2 && $_smarty_tpl->tpl_vars['p_c']->value['link']) {?><div class="flex_box"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="go view_more_at_tr" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View More','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a></div><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['p_c']->value['direction_nav'] && ((!$_smarty_tpl->tpl_vars['p_c']->value['grid'] && $_smarty_tpl->tpl_vars['p_c']->value['direction_nav'] == 1) || $_smarty_tpl->tpl_vars['column_slider']->value) && (isset($_smarty_tpl->tpl_vars['p_c']->value['blogs'])) && $_smarty_tpl->tpl_vars['p_c']->value['blogs']) {?>
                        <div class="swiper-button-tr <?php if ($_smarty_tpl->tpl_vars['p_c']->value['hide_direction_nav_on_mob']) {?> hidden-md-down <?php }?>"><div class="swiper-button swiper-button-outer swiper-button-prev"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div><div class="swiper-button swiper-button-outer swiper-button-next"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div></div>        
                    <?php }?>
                </div>
                <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['sub_title'])) && $_smarty_tpl->tpl_vars['p_c']->value['sub_title']) {?><div class="slider_sub_title"><?php echo $_smarty_tpl->tpl_vars['p_c']->value['sub_title'];?>
</div><?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['p_c']->value['direction_nav'] == 1) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['p_c']) ? $_smarty_tpl->tpl_vars['p_c']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['direction_nav'] = 5;
$_smarty_tpl->_assignInScope('p_c', $_tmp_array);?>
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['blogs'])) && $_smarty_tpl->tpl_vars['p_c']->value['blogs']) {?>
                    <?php if (!$_smarty_tpl->tpl_vars['p_c']->value['grid'] || $_smarty_tpl->tpl_vars['column_slider']->value) {?>
                    <div class="block_content  <?php if ($_smarty_tpl->tpl_vars['p_c']->value['lazy']) {?> lazy_swiper <?php }?>">
                        <?php $_smarty_tpl->_subTemplateRender("module:stblog/views/templates/slider/slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('blogs'=>$_smarty_tpl->tpl_vars['p_c']->value['blogs'],'lazy_load'=>$_smarty_tpl->tpl_vars['p_c']->value['lazy'],'direction_nav'=>$_smarty_tpl->tpl_vars['p_c']->value['direction_nav'],'control_nav'=>$_smarty_tpl->tpl_vars['p_c']->value['control_nav'],'display_sd'=>$_smarty_tpl->tpl_vars['p_c']->value['display_sd'],'display_as_grid'=>$_smarty_tpl->tpl_vars['p_c']->value['grid'],'pro_per_lg'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_lg'],'display_pro_col'=>$_smarty_tpl->tpl_vars['p_c']->value['display_pro_col'],'slider_items'=>$_smarty_tpl->tpl_vars['p_c']->value['items_col'],'blog_image_type'=>$_smarty_tpl->tpl_vars['p_c']->value['image_type'],'hide_direction_nav_on_mob'=>$_smarty_tpl->tpl_vars['p_c']->value['hide_direction_nav_on_mob'],'hide_control_nav_on_mob'=>$_smarty_tpl->tpl_vars['p_c']->value['hide_control_nav_on_mob']), 0, true);
?>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('reverse_direction', false);?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['reverse_direction']))) {?>
                        <?php $_smarty_tpl->_assignInScope('reverse_direction', $_smarty_tpl->tpl_vars['p_c']->value['reverse_direction']);?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('pause_on_enter', false);?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['pause_on_enter']))) {?>
                        <?php $_smarty_tpl->_assignInScope('pause_on_enter', $_smarty_tpl->tpl_vars['p_c']->value['pause_on_enter']);?>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:catalog/slider/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('is_product_slider'=>0,'block_name'=>"#category_blogs_container_".((string)$_smarty_tpl->tpl_vars['p_c']->value['id_st_blog_slider']),'slider_s_speed'=>$_smarty_tpl->tpl_vars['p_c']->value['s_speed'],'slider_slideshow'=>$_smarty_tpl->tpl_vars['p_c']->value['slideshow'],'slider_a_speed'=>$_smarty_tpl->tpl_vars['p_c']->value['a_speed'],'slider_pause_on_hover'=>$_smarty_tpl->tpl_vars['p_c']->value['pause_on_hover'],'slider_reverse_direction'=>$_smarty_tpl->tpl_vars['reverse_direction']->value,'slider_pause_on_enter'=>$_smarty_tpl->tpl_vars['pause_on_enter']->value,'rewind_nav'=>$_smarty_tpl->tpl_vars['p_c']->value['rewind_nav'],'lazy_load'=>$_smarty_tpl->tpl_vars['p_c']->value['lazy'],'direction_nav'=>$_smarty_tpl->tpl_vars['p_c']->value['direction_nav'],'control_nav'=>$_smarty_tpl->tpl_vars['p_c']->value['control_nav'],'slider_move'=>$_smarty_tpl->tpl_vars['p_c']->value['move'],'spacing_between'=>$_smarty_tpl->tpl_vars['p_c']->value['spacing_between'],'pro_per_fw'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_fw'],'pro_per_xxl'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_xxl'],'pro_per_xl'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_xl'],'pro_per_lg'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_lg'],'pro_per_md'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_md'],'pro_per_sm'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_sm'],'pro_per_xs'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_xs']), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("module:stblog/views/templates/slider/list-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('blogs'=>$_smarty_tpl->tpl_vars['p_c']->value['blogs'],'for_f'=>'blog_cate','blog_image_type'=>$_smarty_tpl->tpl_vars['p_c']->value['image_type'],'display_as_grid'=>$_smarty_tpl->tpl_vars['p_c']->value['grid'],'display_sd'=>$_smarty_tpl->tpl_vars['p_c']->value['display_sd'],'pro_per_fw'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_fw'],'pro_per_xxl'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_xxl'],'pro_per_xl'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_xl'],'pro_per_lg'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_lg'],'pro_per_md'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_md'],'pro_per_sm'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_sm'],'pro_per_xs'=>$_smarty_tpl->tpl_vars['p_c']->value['pro_per_xs']), 0, true);
?>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['view_more'])) && $_smarty_tpl->tpl_vars['p_c']->value['view_more'] == 1 && $_smarty_tpl->tpl_vars['p_c']->value['link']) {?><div class="product_view_more_box text-center p-t-1"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default btn-more-padding btn-large" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a></div><?php }?>
                <?php } else { ?>
                    <p class="warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No posts','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</p>
                <?php }?>
            </div>
        </section>
        <?php if ((isset($_smarty_tpl->tpl_vars['homeverybottom']->value)) && $_smarty_tpl->tpl_vars['homeverybottom']->value) {?></div><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['bu_full_width']->value) {?></div><?php }?>
        </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <!-- /MODULE st stblogfeaturedarticles -->
<?php }
}
}
