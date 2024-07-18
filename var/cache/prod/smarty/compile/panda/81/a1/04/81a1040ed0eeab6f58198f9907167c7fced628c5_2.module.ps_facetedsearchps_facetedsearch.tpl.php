<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:ps_facetedsearchps_facetedsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa61a57c7_21762759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:ps_facetedsearchps_facetedsearch.tpl',
      1 => 1720204187,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa61a57c7_21762759 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) && $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'] && !$_smarty_tpl->tpl_vars['sttheme']->value['filter_position']) {?>
<div id="search_filters_wrapper" class="column_filter block column_block">
    <div class="title_block flex_container title_align_0 title_style_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['heading_style'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="flex_child title_flex_left"></div>
        <span class="title_block_inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        <div class="flex_child title_flex_right"></div>
    </div>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

	</div>
</div>
<?php }
}
}
