<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:31:30
  from 'module:stcompareviewstemplateshookfly.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4d284afe7_13152514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '647da1c560a322e2244aeded30518f70db135396' => 
    array (
      0 => 'module:stcompareviewstemplateshookfly.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab4d284afe7_13152514 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['id_product']->value)) && $_smarty_tpl->tpl_vars['id_product']->value) {?>
    <!-- MODULE st stcompare -->
<a class="stcompare_add btn-spin hover_fly_btn <?php if ((isset($_smarty_tpl->tpl_vars['classname']->value))) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['fromnocache']->value)) && $_smarty_tpl->tpl_vars['fromnocache']->value && (isset($_smarty_tpl->tpl_vars['is_compared']->value)) && $_smarty_tpl->tpl_vars['is_compared']->value) {?> st_added <?php }?> btn-spin pro_right_item stcompare_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!(isset($_smarty_tpl->tpl_vars['fromnocache']->value)) || !$_smarty_tpl->tpl_vars['fromnocache']->value) {?> stcompare_from_cache_block <?php }?>" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8');?>
" href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow"><div class="hover_fly_btn_inner"><?php if (!(isset($_smarty_tpl->tpl_vars['stcompare_product_style']->value)) || !$_smarty_tpl->tpl_vars['stcompare_product_style']->value || $_smarty_tpl->tpl_vars['stcompare_product_style']->value == 2) {?><i class="fto-ajust icon_btn"></i><?php }
if (!(isset($_smarty_tpl->tpl_vars['stcompare_product_style']->value)) || !$_smarty_tpl->tpl_vars['stcompare_product_style']->value || $_smarty_tpl->tpl_vars['stcompare_product_style']->value == 1) {?><span class="btn_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><?php }
if ((isset($_smarty_tpl->tpl_vars['stcompare_with_number']->value)) && $_smarty_tpl->tpl_vars['stcompare_with_number']->value) {?><span class="stcompare_quantity amount_inline mar_l4"><?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['stcompare_total']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div></a>
    <!-- /MODULE st stcompare -->
<?php }
}
}
