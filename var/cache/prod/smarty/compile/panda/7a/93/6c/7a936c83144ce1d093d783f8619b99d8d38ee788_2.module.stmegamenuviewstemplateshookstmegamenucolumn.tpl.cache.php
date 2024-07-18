<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:stmegamenuviewstemplateshookstmegamenucolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa61a9590_83297684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a936c83144ce1d093d783f8619b99d8d38ee788' => 
    array (
      0 => 'module:stmegamenuviewstemplateshookstmegamenucolumn.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stmegamenu/views/templates/hook/stmegamenu-ul.tpl' => 1,
    'module:stmegamenu/views/templates/hook/stmobilemenu-ul.tpl' => 1,
  ),
),false)) {
function content_668adaa61a9590_83297684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '335788305668adaa61a80f6_92611595';
if ((isset($_smarty_tpl->tpl_vars['stmenu']->value)) && is_array($_smarty_tpl->tpl_vars['stmenu']->value) && count($_smarty_tpl->tpl_vars['stmenu']->value)) {?>
<!-- Menu -->
<div id="st_mega_menu_column" class="block column_block">
	<h3 class="title_block">
		<span class="title_block_inner">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

		</span>
	</h3>
	<div id="st_mega_menu_column_block" class="block_content">
    	<div id="st_mega_menu_column_desktop">
    		<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('is_mega_menu_main'=>0), 0, false);
?>
    	</div>
    	<div id="st_mega_menu_column_mobile">
	    	<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmobilemenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('is_mega_menu_column'=>1), 0, false);
?>
    	</div>
	</div>
</div>
<!--/ Menu -->
<?php }
}
}
