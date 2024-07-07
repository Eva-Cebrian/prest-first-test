<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stmegamenuviewstemplateshookstmegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a99a4f1_25286550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b04ed09eb08fa42cd276f3585f6627ed3224d484' => 
    array (
      0 => 'module:stmegamenuviewstemplateshookstmegamenu.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stmegamenu/views/templates/hook/stmegamenu-ul.tpl' => 1,
  ),
),false)) {
function content_668ab42a99a4f1_25286550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '167242731668ab42a998847_04707399';
if ((isset($_smarty_tpl->tpl_vars['stmenu']->value)) && is_array($_smarty_tpl->tpl_vars['stmenu']->value) && count($_smarty_tpl->tpl_vars['stmenu']->value) || (isset($_smarty_tpl->tpl_vars['stvertical']->value)) && count($_smarty_tpl->tpl_vars['stvertical']->value)) {?>
	<!-- MODULE st stmegamenu -->
<?php if ($_smarty_tpl->tpl_vars['header_bottom']->value) {?>
<div class="st_mega_menu_container animated fast">
	<div id="st_mega_menu_header_container">
<?php }?>
	<nav id="st_mega_menu_wrap" class="<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['megamenu_position'] == 3) {?> flex_child flex_full <?php }?>">
		<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('is_mega_menu_main'=>1), 0, false);
?>
	</nav>
<?php if ($_smarty_tpl->tpl_vars['header_bottom']->value) {?>
	</div>
</div>
<?php }?>
<!-- /MODULE st stmegamenu -->
<?php }
}
}
