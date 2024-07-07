<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from 'module:ps_facetedsearchviewstemplatesfrontcatalogactivefilters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4418b4110_22265276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e807335546cfa2360c36327ac89dd2fcb054379' => 
    array (
      0 => 'module:ps_facetedsearchviewstemplatesfrontcatalogactivefilters.tpl',
      1 => 1720204187,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab4418b4110_22265276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('filter_position', Configuration::get('STSN_FILTER_POSITION'));?>
<div id="js-active-search-filters" class="active_filters_box flex_container flex_start <?php if (!$_smarty_tpl->tpl_vars['filter_position']->value && !smarty_modifier_count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?> hidden-xs-up <?php }?>">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_605919505668ab4418b15d0_02543881', 'active_filters_title');
?>

    <div class="flex_child">
      <div class="active_filters">
		<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
	      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1908898600668ab4418b20d3_31228192', 'active_filters_item');
?>

	      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	      	<a href="javascript:;" data-search-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="js-search-filters-clear-all active_filter_item" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
		        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

		        <i class="fto-cancel-2"></i>
	      	</a>
		<?php }?>
		</div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['filter_position']->value > 0) {?>
    <a class="toggle_btn active_filter_item <?php if ($_smarty_tpl->tpl_vars['filter_position']->value > 1) {?> st_show_on_mobile collapsed <?php }?>" data-toggle="collapse" href="#horizontal_filters" aria-expanded="<?php if ($_smarty_tpl->tpl_vars['filter_position']->value > 1) {?>false<?php } else { ?>true<?php }?>" aria-controls="horizontal_filters" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle filters','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle filters','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

      <i class="fto-angle-down"></i>
    </a>
    <?php }?>
  </div>
<?php }
/* {block 'active_filters_title'} */
class Block_605919505668ab4418b15d0_02543881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
    0 => 'Block_605919505668ab4418b15d0_02543881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="active_filter_title font-weight-bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
class Block_1908898600668ab4418b20d3_31228192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_1908898600668ab4418b20d3_31228192',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	        <a class="js-search-link active_filter_item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
<i class="fto-cancel-2"></i></a>
          <?php
}
}
/* {/block 'active_filters_item'} */
}
