<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stpagebannerviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a6d9682_03758802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d29cca340482e8c63ced187c81d197d3e769b06' => 
    array (
      0 => 'module:stpagebannerviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42a6d9682_03758802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1349776124668ab42a6d8b49_49840076';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
