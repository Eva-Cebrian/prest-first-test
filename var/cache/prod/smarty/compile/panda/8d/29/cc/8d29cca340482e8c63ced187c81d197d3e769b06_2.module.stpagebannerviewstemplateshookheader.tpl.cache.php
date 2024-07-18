<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from 'module:stpagebannerviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa5b6b595_41548106',
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
function content_668adaa5b6b595_41548106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1060009714668adaa5b6aa84_81149278';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
