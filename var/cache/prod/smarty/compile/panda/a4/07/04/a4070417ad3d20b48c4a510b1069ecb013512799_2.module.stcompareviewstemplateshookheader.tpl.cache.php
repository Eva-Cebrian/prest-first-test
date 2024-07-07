<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stcompareviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f06b0006_51524080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4070417ad3d20b48c4a510b1069ecb013512799' => 
    array (
      0 => 'module:stcompareviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f06b0006_51524080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '105149243668a67f06af440_92392465';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
