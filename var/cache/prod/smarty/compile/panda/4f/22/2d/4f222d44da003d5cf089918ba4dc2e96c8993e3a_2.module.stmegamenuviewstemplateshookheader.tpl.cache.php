<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stmegamenuviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f043db84_77976045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f222d44da003d5cf089918ba4dc2e96c8993e3a' => 
    array (
      0 => 'module:stmegamenuviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f043db84_77976045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '873298009668a67f043cec6_14768136';
if ((isset($_smarty_tpl->tpl_vars['megamenu_custom_css']->value)) && $_smarty_tpl->tpl_vars['megamenu_custom_css']->value) {?>
<style>
<?php echo $_smarty_tpl->tpl_vars['megamenu_custom_css']->value;?>

</style>
<?php }
}
}
