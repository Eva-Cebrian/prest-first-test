<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from 'module:stcustomersigninviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa5860973_37611971',
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
function content_668adaa5860973_37611971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1236384659668adaa585fdd5_47826625';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
