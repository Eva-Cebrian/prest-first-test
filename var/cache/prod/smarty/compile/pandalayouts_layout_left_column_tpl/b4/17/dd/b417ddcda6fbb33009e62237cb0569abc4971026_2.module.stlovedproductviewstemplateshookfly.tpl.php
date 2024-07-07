<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from 'module:stlovedproductviewstemplateshookfly.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab441ae5339_61228308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b417ddcda6fbb33009e62237cb0569abc4971026' => 
    array (
      0 => 'module:stlovedproductviewstemplateshookfly.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab441ae5339_61228308 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['id_source']->value)) && $_smarty_tpl->tpl_vars['id_source']->value) {?>
<a class="add_to_love hover_fly_btn <?php if ((isset($_smarty_tpl->tpl_vars['classname']->value))) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?> btn-spin pro_right_item <?php if ((isset($_smarty_tpl->tpl_vars['fromnocache']->value)) && $_smarty_tpl->tpl_vars['fromnocache']->value && (isset($_smarty_tpl->tpl_vars['is_loved']->value)) && $_smarty_tpl->tpl_vars['is_loved']->value) {?> st_added <?php }?> love_<?php if ((isset($_smarty_tpl->tpl_vars['love_blog']->value)) && $_smarty_tpl->tpl_vars['love_blog']->value) {?>2<?php } else { ?>1<?php }?>_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_source']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!(isset($_smarty_tpl->tpl_vars['fromnocache']->value)) || !$_smarty_tpl->tpl_vars['fromnocache']->value) {?> love_from_cache_block <?php }?>" data-id-source="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_source']->value, ENT_QUOTES, 'UTF-8');?>
" data-type="<?php if ((isset($_smarty_tpl->tpl_vars['love_blog']->value)) && $_smarty_tpl->tpl_vars['love_blog']->value) {?>2<?php } else { ?>1<?php }?>" href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Love','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow"><div class="hover_fly_btn_inner"><i class="fto-heart-4 icon_btn"></i><span class="btn_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Love','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><?php if ((isset($_smarty_tpl->tpl_vars['loved_with_number']->value)) && ($_smarty_tpl->tpl_vars['loved_with_number']->value || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing']))) {?><span class="amount_inline <?php if (!$_smarty_tpl->tpl_vars['loved_with_number']->value) {?> display_none <?php }?>"><?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['loved_total']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div></a>
<?php }
}
}
