<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:29
  from 'module:stlovedproductviewstemplateshookgo_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f116cfc2_16324388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a7184a9f596993b0508b6aab25af499d52a44f7' => 
    array (
      0 => 'module:stlovedproductviewstemplateshookgo_login.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f116cfc2_16324388 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stlovedproduct -->
<div id="loved_go_login" class="inline_popup_content small_popup mfp-with-anim mfp-hide text-center">
  <p class="fs_md"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a free account to save loved items.','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</p>
  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
" class="go" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a> 
</div>
<!-- /MODULE st stlovedproduct --><?php }
}
