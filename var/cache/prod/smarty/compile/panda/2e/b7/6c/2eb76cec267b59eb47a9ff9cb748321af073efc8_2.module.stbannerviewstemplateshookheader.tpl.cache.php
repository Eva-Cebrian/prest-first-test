<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stbannerviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f05bad51_50595994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eb76cec267b59eb47a9ff9cb748321af073efc8' => 
    array (
      0 => 'module:stbannerviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f05bad51_50595994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '410158664668a67f05ba249_03720642';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
