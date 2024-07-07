<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from 'module:stmegamenuviewstemplateshookstmobilemenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b0fa725_89500740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '466eb6537b160447eb6e577579598e43fdcb7631' => 
    array (
      0 => 'module:stmegamenuviewstemplateshookstmobilemenu.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stmegamenu/views/templates/hook/stmobilemenu-ul.tpl' => 1,
  ),
),false)) {
function content_668ab42b0fa725_89500740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '390837097668ab42b0f9d12_00753820';
?>
<!-- MODULE st stmegamenu -->
<div class="st-menu" id="side_stmobilemenu">
  <div class="st-menu-header flex_container">
	<h3 class="st-menu-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</h3>
	  <a href="javascript:;" class="close_right_side" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-cancel-2"></i></a>
  </div>
  <div id="st_mobile_menu" class="stmobilemenu_box">
	<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmobilemenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
</div>
<!-- /MODULE st stmegamenu --><?php }
}
