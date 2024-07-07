<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:29
  from 'module:stsidebarviewstemplateshookrightbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f10db573_42650417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3452b3e5a5b3245aa8d86170be572a719ed52382' => 
    array (
      0 => 'module:stsidebarviewstemplateshookrightbar.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stsidebar/views/templates/hook/rightbar-item.tpl' => 2,
  ),
),false)) {
function content_668a67f10db573_42650417 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stsidebar -->
<?php if (count($_smarty_tpl->tpl_vars['sidebar_items_left']->value)) {?>
<div id="leftbar" class="">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar_items_left']->value, 'sidebar_item');
$_smarty_tpl->tpl_vars['sidebar_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sidebar_item']->value) {
$_smarty_tpl->tpl_vars['sidebar_item']->do_else = false;
?>
    <?php $_smarty_tpl->_subTemplateRender('module:stsidebar/views/templates/hook/rightbar-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar_item'=>$_smarty_tpl->tpl_vars['sidebar_item']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
if (count($_smarty_tpl->tpl_vars['sidebar_items_right']->value)) {?>
<div id="rightbar" class="">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar_items_right']->value, 'sidebar_item');
$_smarty_tpl->tpl_vars['sidebar_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sidebar_item']->value) {
$_smarty_tpl->tpl_vars['sidebar_item']->do_else = false;
?>
    <?php $_smarty_tpl->_subTemplateRender('module:stsidebar/views/templates/hook/rightbar-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar_item'=>$_smarty_tpl->tpl_vars['sidebar_item']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>
<!-- /MODULE st stsidebar --><?php }
}
