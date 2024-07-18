<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:13:04
  from 'module:stvideoviewstemplateshookstvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adab0bb34a2_87409158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78606e7de160fb34c3b7441db7d78b804cb8e201' => 
    array (
      0 => 'module:stvideoviewstemplateshookstvideo.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adab0bb34a2_87409158 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stvideo -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stvideos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
if ($_smarty_tpl->tpl_vars['video']->value['url'] && in_array($_smarty_tpl->tpl_vars['video']->value['video_position'],$_smarty_tpl->tpl_vars['video_position']->value)) {?>
<div class="st_popup_video_wrap st_popup_video_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['id_st_video'], ENT_QUOTES, 'UTF-8');?>
">
<a class="st_popup_video layer_icon_wrap <?php if ($_smarty_tpl->tpl_vars['video']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['video']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?>" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open video','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow"><i class="fto-play"></i></a>
</div>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /MODULE st stvideo --><?php }
}
