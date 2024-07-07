<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stcustomersigninviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f03d64d9_98583802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e5825387b9569494a88254f1c12803faafe56fa' => 
    array (
      0 => 'module:stcustomersigninviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f03d64d9_98583802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1328883764668a67f03d5a69_00832192';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
