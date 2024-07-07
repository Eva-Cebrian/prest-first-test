<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stwishlistviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a76bda8_69004173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49d9f99cfd8792241f73f25a2e21636130fd59fe' => 
    array (
      0 => 'module:stwishlistviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42a76bda8_69004173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '217186855668ab42a76b418_67277382';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
