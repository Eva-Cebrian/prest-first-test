<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:sttagsviewstemplateshooksttagsitems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa651abb0_00366050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3fa21417fe7b2058b21eb1814f8b322dc8841d4' => 
    array (
      0 => 'module:sttagsviewstemplateshooksttagsitems.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa651abb0_00366050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->compiled->nocache_hash = '1014886788668adaa6518556_45906525';
?>

<?php if ((isset($_smarty_tpl->tpl_vars['tags']->value)) && is_array($_smarty_tpl->tpl_vars['tags']->value) && smarty_modifier_count($_smarty_tpl->tpl_vars['tags']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag', false, NULL, 'myLoop', array (
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
		<a 
		class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['class'], ENT_QUOTES, 'UTF-8');?>
 text_color tag_item"
		href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'search','params'=>array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['name'] )))),$_smarty_tpl ) );?>
" 
		title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8');?>
" 
		>
			<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8');?>

		</a>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No tags','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

<?php }
}
}
