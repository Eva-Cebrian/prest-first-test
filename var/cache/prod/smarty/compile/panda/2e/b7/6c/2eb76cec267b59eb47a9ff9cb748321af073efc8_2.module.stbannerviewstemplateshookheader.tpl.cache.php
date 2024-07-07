<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stbannerviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a5bc393_83156170',
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
function content_668ab42a5bc393_83156170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1877272145668ab42a5bb678_58009856';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
