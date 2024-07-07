<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:steasycontentviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0542f81_86325751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '462fe99c1207c91ced74ba42955ecdb7135f4468' => 
    array (
      0 => 'module:steasycontentviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f0542f81_86325751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1744176704668a67f0542086_31725224';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
