<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:ststickersviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a746376_44084993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a4164e268a1704043f69d8e34ed6785f4d0b2c2' => 
    array (
      0 => 'module:ststickersviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42a746376_44084993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '422934836668ab42a7457f4_37734492';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
