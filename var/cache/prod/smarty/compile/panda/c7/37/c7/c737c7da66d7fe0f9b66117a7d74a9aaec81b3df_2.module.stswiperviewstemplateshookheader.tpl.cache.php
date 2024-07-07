<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stswiperviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f04675f0_20058327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c737c7da66d7fe0f9b66117a7d74a9aaec81b3df' => 
    array (
      0 => 'module:stswiperviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f04675f0_20058327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1646264792668a67f0466a90_71806011';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
