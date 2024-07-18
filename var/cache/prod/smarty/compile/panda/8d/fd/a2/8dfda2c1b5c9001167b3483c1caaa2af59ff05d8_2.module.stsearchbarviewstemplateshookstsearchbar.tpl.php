<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from 'module:stsearchbarviewstemplateshookstsearchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa5c60ce9_25463251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dfda2c1b5c9001167b3483c1caaa2af59ff05d8' => 
    array (
      0 => 'module:stsearchbarviewstemplateshookstsearchbar.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stsearchbar/views/templates/hook/stsearchbar-block.tpl' => 2,
  ),
),false)) {
function content_668adaa5c60ce9_25463251 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stsearchbar -->
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "quick_search_info", null, null);?>
	<?php if ($_smarty_tpl->tpl_vars['quick_search_header_style']->value != 1) {?><span class="header_icon_btn_icon header_v_align_m <?php if ($_smarty_tpl->tpl_vars['quick_search_header_style']->value == 0) {?> mar_r4 <?php }?>"><i class="fto-search-1 icon_btn <?php if ($_smarty_tpl->tpl_vars['quick_search_header_style']->value == 0) {?>fs_lg<?php } else { ?>fs_big<?php }?>"></i></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['quick_search_header_style']->value != 2) {?><span class="header_v_align_m header_icon_btn_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['quick_search_simple']->value == 1 || $_smarty_tpl->tpl_vars['quick_search_simple']->value == 2) {?>
<div class="search_widget_simple stsearchbar_link top_bar_item dropdown_wrap stsearchbar_builder header_icon_btn_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['quick_search_header_style']->value, ENT_QUOTES, 'UTF-8');?>
">
	<div class="dropdown_tri header_item link_color" aria-haspopup="true" aria-expanded="false">
		<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'quick_search_info');?>

	</div>
	<div class="dropdown_list" aria-labelledby="">
		<?php $_smarty_tpl->_subTemplateRender('module:stsearchbar/views/templates/hook/stsearchbar-block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['quick_search_simple']->value == 4 || $_smarty_tpl->tpl_vars['quick_search_simple']->value == 5) {?>
<div class="stsearchbar_link top_bar_item stsearchbar_builder header_icon_btn_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['quick_search_header_style']->value, ENT_QUOTES, 'UTF-8');?>
">
<a href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow" class="header_item rightbar_tri" data-name="side_search" data-direction="open_bar_<?php if ($_smarty_tpl->tpl_vars['quick_search_simple']->value == 5) {?>left<?php } else { ?>right<?php }?>"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'quick_search_info');?>
</a>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['quick_search_simple']->value == 6) {?>
<div class="stsearchbar_link top_bar_item stsearchbar_builder header_icon_btn_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['quick_search_header_style']->value, ENT_QUOTES, 'UTF-8');?>
">
<a href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow" class="header_item popsearch_tri"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'quick_search_info');?>
</a>
</div>
<?php } else {
$_smarty_tpl->_subTemplateRender('module:stsearchbar/views/templates/hook/stsearchbar-block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headerclass'=>"stsearchbar_builder top_bar_item"), 0, true);
}?>
<!-- /MODULE st stsearchbar -->
<?php }
}
