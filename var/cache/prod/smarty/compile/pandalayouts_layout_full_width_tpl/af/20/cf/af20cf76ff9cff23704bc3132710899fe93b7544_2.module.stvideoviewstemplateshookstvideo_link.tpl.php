<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stvideoviewstemplateshookstvideo_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f097b145_35010945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af20cf76ff9cff23704bc3132710899fe93b7544' => 
    array (
      0 => 'module:stvideoviewstemplateshookstvideo_link.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f097b145_35010945 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['stvideos']->value['size_charts']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stvideos']->value['size_charts'], 'size_chart');
$_smarty_tpl->tpl_vars['size_chart']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['size_chart']->value) {
$_smarty_tpl->tpl_vars['size_chart']->do_else = false;
?>
    <?php if (in_array($_smarty_tpl->tpl_vars['size_chart']->value['video_position'],$_smarty_tpl->tpl_vars['video_position']->value) && $_smarty_tpl->tpl_vars['size_chart']->value['title'] && $_smarty_tpl->tpl_vars['size_chart']->value['content']) {?>
    <div class="inline_popup_wrap pro_right_item">
    <a class="inline_popup_tri <?php if ($_smarty_tpl->tpl_vars['size_chart']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['size_chart']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?>" href="#inline_popup_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['size_chart']->value['id_st_video'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['size_chart']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['size_chart']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
    <div id="inline_popup_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['size_chart']->value['id_st_video'], ENT_QUOTES, 'UTF-8');?>
" class="inline_popup_content mfp-hide mfp-with-anim"><?php echo $_smarty_tpl->tpl_vars['size_chart']->value['content'];?>
</div>
    </div>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['stvideos']->value['videos']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stvideos']->value['videos'], 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
    <?php if (in_array($_smarty_tpl->tpl_vars['video']->value['video_position'],$_smarty_tpl->tpl_vars['video_position']->value) && $_smarty_tpl->tpl_vars['video']->value['url']) {?>
        <a class="st_popup_video <?php if ($_smarty_tpl->tpl_vars['video']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['video']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?> pro_right_item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View video','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow"><?php if (count(array_intersect(array(13,14,15),$_smarty_tpl->tpl_vars['video_position']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View video','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
} else { ?><i class="fto-play fs_lg"></i><?php }?></a>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
