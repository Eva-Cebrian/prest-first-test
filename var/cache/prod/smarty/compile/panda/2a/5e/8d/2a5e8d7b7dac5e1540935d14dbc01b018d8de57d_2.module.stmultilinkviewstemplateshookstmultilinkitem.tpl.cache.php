<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:stmultilinkviewstemplateshookstmultilinkitem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa64fbc89_36489508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a5e8d7b7dac5e1540935d14dbc01b018d8de57d' => 
    array (
      0 => 'module:stmultilinkviewstemplateshookstmultilinkitem.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa64fbc89_36489508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '513466450668adaa64f8fe5_61016078';
?>

<a href="<?php if ($_smarty_tpl->tpl_vars['link']->value['url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:;<?php }?>" class="dropdown_list_item <?php if ((isset($_smarty_tpl->tpl_vars['link_extra_classes']->value))) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_extra_classes']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?> stmultilink_item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['id_st_multi_link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) strip_tags((string) $_smarty_tpl->tpl_vars['link']->value['title']), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['link']->value['nofollow'])) && $_smarty_tpl->tpl_vars['link']->value['nofollow']) {?> rel="nofollow" <?php }?> <?php if ($_smarty_tpl->tpl_vars['link']->value['new_window']) {?> target="_blank" <?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['link']->value['icon_class']) {?><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['link']->value['label']) {?> list_arrow <?php }?> st_custom_link_icon"></i><?php }
echo $_smarty_tpl->tpl_vars['link']->value['label'];?>

</a>
    <?php }
}
