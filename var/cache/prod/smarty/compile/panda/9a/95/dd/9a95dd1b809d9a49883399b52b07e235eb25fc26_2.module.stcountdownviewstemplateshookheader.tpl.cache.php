<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from 'module:stcountdownviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa5a9f0b3_63084609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a95dd1b809d9a49883399b52b07e235eb25fc26' => 
    array (
      0 => 'module:stcountdownviewstemplateshookheader.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa5a9f0b3_63084609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1583637981668adaa5a9cbe7_59399609';
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
if ((isset($_smarty_tpl->tpl_vars['countdown_active']->value)) && $_smarty_tpl->tpl_vars['countdown_active']->value) {
echo '<script'; ?>
>
//<![CDATA[

var s_countdown_all = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_countdown_all']->value, ENT_QUOTES, 'UTF-8');?>
;
var s_countdown_id_products = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_countdown_id_products']->value, ENT_QUOTES, 'UTF-8');?>
; 
var s_countdown_style = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['s_countdown_style']->value, ENT_QUOTES, 'UTF-8');?>
; 
var s_countdown_lang = new Array();
s_countdown_lang['day'] = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'day','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
s_countdown_lang['days'] = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
s_countdown_lang['hrs'] = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hrs','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
s_countdown_lang['min'] = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'min','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";
s_countdown_lang['sec'] = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'sec','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
";

//]]>
<?php echo '</script'; ?>
>
<?php }
}
}
