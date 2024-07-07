<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stcompareviewstemplateshooklink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0859e84_17816399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd93d172fabf3dee3ccbf12ddeecbf391b5241f93' => 
    array (
      0 => 'module:stcompareviewstemplateshooklink.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f0859e84_17816399 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stcompare -->
<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stcompare']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product comparison','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" class="stcompare_link top_bar_item header_icon_btn_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stcompare_header_style']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><span class="header_item"><?php if ($_smarty_tpl->tpl_vars['stcompare_header_style']->value != 1) {?><span class="header_icon_btn_icon header_v_align_m <?php if ($_smarty_tpl->tpl_vars['stcompare_header_style']->value == 0 || $_smarty_tpl->tpl_vars['stcompare_header_style']->value == 5) {?> mar_r4 <?php }?>"><?php if ($_smarty_tpl->tpl_vars['stcompare_header_style']->value == 3 || $_smarty_tpl->tpl_vars['stcompare_header_style']->value == 4 || $_smarty_tpl->tpl_vars['stcompare_header_style']->value == 5) {?><span class="stcompare_quantity amount_circle"><?php if ((isset($_smarty_tpl->tpl_vars['stcompare_total']->value)) && $_smarty_tpl->tpl_vars['stcompare_total']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stcompare_total']->value, ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?></span><?php }?><i class="header_icon_btn_icon fto-ajust icon_btn <?php if ($_smarty_tpl->tpl_vars['stcompare_header_style']->value == 0) {?>fs_lg<?php } else { ?>fs_big<?php }?>"></i></span><?php }
if ($_smarty_tpl->tpl_vars['stcompare_header_style']->value != 2 && $_smarty_tpl->tpl_vars['stcompare_header_style']->value != 4) {?><span class="header_v_align_m header_icon_btn_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><?php }
if ($_smarty_tpl->tpl_vars['stcompare_header_style']->value != 3 && $_smarty_tpl->tpl_vars['stcompare_header_style']->value != 4 && $_smarty_tpl->tpl_vars['stcompare_header_style']->value != 5) {?><span class="stcompare_quantity amount_inline mar_l4"><?php if ((isset($_smarty_tpl->tpl_vars['stcompare_total']->value)) && $_smarty_tpl->tpl_vars['stcompare_total']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stcompare_total']->value, ENT_QUOTES, 'UTF-8');
}?></span><?php }?></span></a>
<!-- /MODULE st stcompare --><?php }
}
