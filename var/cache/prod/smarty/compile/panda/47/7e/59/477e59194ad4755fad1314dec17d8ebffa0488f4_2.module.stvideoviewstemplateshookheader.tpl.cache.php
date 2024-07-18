<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from 'module:stvideoviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa5c1c219_47971778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '477e59194ad4755fad1314dec17d8ebffa0488f4' => 
    array (
      0 => 'module:stvideoviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa5c1c219_47971778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '83990973668adaa5c1b860_19861565';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
