<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from 'module:stowlcarouselviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa592c978_37343107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddc177acf98793e4fc3e03bb64def21a7e1a0138' => 
    array (
      0 => 'module:stowlcarouselviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa592c978_37343107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '876469420668adaa592bdb5_80246011';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
