<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from 'module:ps_facetedsearchviewstemplatesfrontcatalogfacets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa5e54e28_57400249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41d65d76b9471b5d365fe06cf1737c89a53af9f' => 
    array (
      0 => 'module:ps_facetedsearchviewstemplatesfrontcatalogfacets.tpl',
      1 => 1720204187,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/facets-range-slider.tpl' => 2,
    'file:catalog/_partials/facets-input.tpl' => 2,
    'file:catalog/_partials/facets-slider.tpl' => 2,
    'file:catalog/_partials/facets-select.tpl' => 2,
  ),
),false)) {
function content_668adaa5e54e28_57400249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (is_array($_smarty_tpl->tpl_vars['displayedFacets']->value) && count($_smarty_tpl->tpl_vars['displayedFacets']->value)) {
$_smarty_tpl->_assignInScope('has_facets', false ,true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet');
$_smarty_tpl->tpl_vars['facet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
$_smarty_tpl->tpl_vars['facet']->do_else = false;
if ($_smarty_tpl->tpl_vars['facet']->value['displayed']) {
$_smarty_tpl->_assignInScope('has_facets', true ,true);
break 1;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['has_facets']->value) {
$_smarty_tpl->_assignInScope('filter_position', Configuration::get('STSN_FILTER_POSITION') ,true);?><div id="search_filters"><span class="sticky_facet_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet');
$_smarty_tpl->tpl_vars['facet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
$_smarty_tpl->tpl_vars['facet']->do_else = false;
if ($_smarty_tpl->tpl_vars['facet']->value['displayed']) {?><section class="facet clearfix"><?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )) ,true);
$_smarty_tpl->_assignInScope('_collapse', true ,true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false ,true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['filter_position']->value == 2 || $_smarty_tpl->tpl_vars['filter_position']->value == 3) {?><div class="dropdown_wrap facet_dropdown_item"><div class="dropdown_tri dropdown_tri_in flex_container flex_space_between link_color" aria-haspopup="true" aria-expanded="false"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span><i class="fto-angle-down arrow_down arrow"></i><i class="fto-angle-up arrow_up arrow"></i></div><div class="dropdown_list" aria-labelledby="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"><div class="facet-title-mobile toggle_btn <?php if ($_smarty_tpl->tpl_vars['_collapse']->value) {?> collapsed <?php }?>" data-target="#facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse" aria-expanded="<?php if ($_smarty_tpl->tpl_vars['_collapse']->value) {?>false<?php } else { ?>true<?php }?>"><div class="flex_container flex_space_between"><span class="facet-title-mobile-inner"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span><i class="fto-angle-down arrow_down arrow"></i><i class="fto-angle-up arrow_up arrow"></i></div></div><?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('radio','checkbox','rangeslider'))) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1886592188668adaa5e49aa3_80648450', 'dropdown_facet_item_other');
} elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'slider') {?><div id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="facet_filter_box collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?> facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/facets-slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php } else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_482125879668adaa5e4dd32_90959501', 'dropdown_facet_item_dropdown');
}?></div></div><?php } else { ?><div class="facet-title hidden-md-down"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</div><div class="facet-title-mobile toggle_btn hidden-lg-up <?php if ($_smarty_tpl->tpl_vars['_collapse']->value) {?> collapsed <?php }?>" data-target="#facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse" aria-expanded="<?php if ($_smarty_tpl->tpl_vars['_collapse']->value) {?>false<?php } else { ?>true<?php }?>"><div class="flex_container flex_space_between"><span class="facet-title-mobile-inner"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span><i class="fto-angle-down arrow_down arrow"></i><i class="fto-angle-up arrow_up arrow"></i></div></div><?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('radio','checkbox','rangeslider'))) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_920429926668adaa5e4ff70_85604800', 'facet_item_other');
} elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'slider') {?><div id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="facet_filter_box collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?> facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/facets-slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php } else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200858234668adaa5e53627_13832280', 'facet_item_dropdown');
}
}?></section><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
}
/* {block 'dropdown_facet_item_other'} */
class Block_1886592188668adaa5e49aa3_80648450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'dropdown_facet_item_other' => 
  array (
    0 => 'Block_1886592188668adaa5e49aa3_80648450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((((isset($_smarty_tpl->tpl_vars['price_range_slider']->value)) && $_smarty_tpl->tpl_vars['price_range_slider']->value && $_smarty_tpl->tpl_vars['facet']->value['type'] == 'price') || ((isset($_smarty_tpl->tpl_vars['weight_range_slider']->value)) && $_smarty_tpl->tpl_vars['weight_range_slider']->value && $_smarty_tpl->tpl_vars['facet']->value['type'] == 'weight') || $_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'rangeslider') && count($_smarty_tpl->tpl_vars['facet']->value['filters'])) {?><div class="st-range-box collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?> st-noUi-style-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['range_style']->value, ENT_QUOTES, 'UTF-8');?>
 facet_filter_box" id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/facets-range-slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php } else { ?><ul id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="facet_filter_box collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?> facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/facets-input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></ul><?php }
}
}
/* {/block 'dropdown_facet_item_other'} */
/* {block 'dropdown_facet_item_dropdown'} */
class Block_482125879668adaa5e4dd32_90959501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'dropdown_facet_item_dropdown' => 
  array (
    0 => 'Block_482125879668adaa5e4dd32_90959501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="facet_filter_box collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?> facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/facets-select.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php
}
}
/* {/block 'dropdown_facet_item_dropdown'} */
/* {block 'facet_item_other'} */
class Block_920429926668adaa5e4ff70_85604800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_920429926668adaa5e4ff70_85604800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((((isset($_smarty_tpl->tpl_vars['price_range_slider']->value)) && $_smarty_tpl->tpl_vars['price_range_slider']->value && $_smarty_tpl->tpl_vars['facet']->value['type'] == 'price') || ((isset($_smarty_tpl->tpl_vars['weight_range_slider']->value)) && $_smarty_tpl->tpl_vars['weight_range_slider']->value && $_smarty_tpl->tpl_vars['facet']->value['type'] == 'weight') || $_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'rangeslider') && count($_smarty_tpl->tpl_vars['facet']->value['filters'])) {?><div class="st-range-box collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?> st-noUi-style-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['range_style']->value, ENT_QUOTES, 'UTF-8');?>
 facet_filter_box" id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/facets-range-slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php } else { ?><ul id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="facet_filter_box collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?> facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/facets-input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></ul><?php }
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_200858234668adaa5e53627_13832280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_200858234668adaa5e53627_13832280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="facet_filter_box collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?> facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/facets-select.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php
}
}
/* {/block 'facet_item_dropdown'} */
}
