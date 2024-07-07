<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stthemeeditorviewstemplatessliderheading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0abd498_22794033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd7e88d71425090d01fd3c6795130cdf7acf2d05' => 
    array (
      0 => 'module:stthemeeditorviewstemplatessliderheading.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f0abd498_22794033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1821298346668a67f0ab6f14_26212990';
if ($_smarty_tpl->tpl_vars['title']->value) {?>
<div class="title_block flex_container title_align_<?php if ($_smarty_tpl->tpl_vars['column_slider']->value) {?>0<?php } else {
echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['title_position']->value, ENT_QUOTES, 'UTF-8');
}?> title_style_<?php if (0 && (isset($_smarty_tpl->tpl_vars['is_blog']->value)) && $_smarty_tpl->tpl_vars['is_blog']->value) {
echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['stblog']->value['heading_style'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['heading_style'], ENT_QUOTES, 'UTF-8');
}?> <?php if ((isset($_smarty_tpl->tpl_vars['sub_title']->value)) && $_smarty_tpl->tpl_vars['sub_title']->value) {?> st_has_sub_title <?php }?>">
    <div class="flex_child title_flex_left"></div>
    <?php if (((isset($_smarty_tpl->tpl_vars['title_link']->value)) && $_smarty_tpl->tpl_vars['title_link']->value) || ((isset($_smarty_tpl->tpl_vars['url_entity']->value)) && $_smarty_tpl->tpl_vars['url_entity']->value)) {?>
    <a href="<?php if ((isset($_smarty_tpl->tpl_vars['title_link']->value)) && $_smarty_tpl->tpl_vars['title_link']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_link']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>$_smarty_tpl->tpl_vars['url_entity']->value),$_smarty_tpl ) );
}?>" class="title_block_inner" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</a>
    <?php } else { ?>
    <div class="title_block_inner"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }?>
    <div class="flex_child title_flex_right"></div>
    <?php if ($_smarty_tpl->tpl_vars['pro_or_blog_slider']->value) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['view_more']->value)) && $_smarty_tpl->tpl_vars['view_more']->value == 2 && (((isset($_smarty_tpl->tpl_vars['title_link']->value)) && $_smarty_tpl->tpl_vars['title_link']->value) || ((isset($_smarty_tpl->tpl_vars['url_entity']->value)) && $_smarty_tpl->tpl_vars['url_entity']->value))) {?><div class="flex_box"><a href="<?php if ((isset($_smarty_tpl->tpl_vars['title_link']->value)) && $_smarty_tpl->tpl_vars['title_link']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_link']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>$_smarty_tpl->tpl_vars['url_entity']->value),$_smarty_tpl ) );
}?>" class="view_more_at_tr st_slider_view_more inline_block" title="<?php if ((isset($_smarty_tpl->tpl_vars['view_more_text']->value)) && $_smarty_tpl->tpl_vars['view_more_text']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_more_text']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>"><?php if ((isset($_smarty_tpl->tpl_vars['view_more_text']->value)) && $_smarty_tpl->tpl_vars['view_more_text']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_more_text']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></a></div><?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['direction_nav']->value && ((!$_smarty_tpl->tpl_vars['display_as_grid']->value && $_smarty_tpl->tpl_vars['direction_nav']->value == 1) || $_smarty_tpl->tpl_vars['column_slider']->value) && (((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value) || ((isset($_smarty_tpl->tpl_vars['blogs']->value)) && $_smarty_tpl->tpl_vars['blogs']->value))) {?>
        <div class="swiper-button-tr <?php if ($_smarty_tpl->tpl_vars['hide_direction_nav_on_mob']->value) {?> hidden-md-down <?php }?>"><div class="swiper-button swiper-button-outer swiper-button-prev"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div><div class="swiper-button swiper-button-outer swiper-button-next"><i class="fto-left-open-3 slider_arrow_left"></i><i class="fto-right-open-3 slider_arrow_right"></i></div></div>        
    <?php }?>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['sub_title']->value)) && $_smarty_tpl->tpl_vars['sub_title']->value) {?><div class="slider_sub_title"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</div><?php }
}
}
}
