<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab441a2f024_82370224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7e232ec56bde67c1dee88658b8671ca72a3e208' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/products-top.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
    'file:catalog/_partials/number-per-page.tpl' => 1,
    'file:_partials/pagination-sample.tpl' => 1,
  ),
),false)) {
function content_668ab441a2f024_82370224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="products-selection flex_container general_top_border general_bottom_border">
    <?php $_smarty_tpl->_assignInScope('filter_position', Configuration::get('STSN_FILTER_POSITION'));?>
    <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets']) && !$_smarty_tpl->tpl_vars['filter_position']->value && $_smarty_tpl->tpl_vars['sttheme']->value['slide_lr_column']) {?>
      <div class="hidden-lg-up filter-button mar_r6">
      <a href="javascript:;" id="search_filter_toggler" data-name="left_column" data-direction="open_column" class="rightbar_tri btn btn-default" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a><!--to do how to know filters are in left column or right column-->
      </div>
    <?php }?>
  
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1332574212668ab441a2d620_91087180', 'sort_by');
?>

  
  <div class="list_grid_switcher <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['product_view_swither']) {?> display_none <?php }?>">
    <div class="grid <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['list_grid']) {?> selected <?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grid view','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-th-large-1"></i></div>
    <div class="list <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['list_grid']) {?> selected <?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List view','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-th-list-1"></i></div>
  </div>
  <div class="flex_child">
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/number-per-page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination-sample.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
</div><?php }
/* {block 'sort_by'} */
class Block_1332574212668ab441a2d620_91087180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_1332574212668ab441a2d620_91087180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
      <?php
}
}
/* {/block 'sort_by'} */
}
