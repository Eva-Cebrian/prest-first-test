<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from 'module:steasycontentviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa59bb4a2_78160010',
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
function content_668adaa59bb4a2_78160010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1335094068668adaa59ba793_49806009';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
