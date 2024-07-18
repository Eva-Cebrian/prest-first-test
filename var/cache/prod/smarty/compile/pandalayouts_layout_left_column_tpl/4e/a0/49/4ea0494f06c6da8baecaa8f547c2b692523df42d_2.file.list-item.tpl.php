<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/list-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa62b1879_68459737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ea0494f06c6da8baecaa8f547c2b692523df42d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/list-item.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_668adaa62b1879_68459737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <?php $_smarty_tpl->_assignInScope('for_w', 'category');?>
  <?php if ((isset($_smarty_tpl->tpl_vars['for_f']->value)) && $_smarty_tpl->tpl_vars['for_f']->value) {?>
    <?php $_smarty_tpl->_assignInScope('for_w', $_smarty_tpl->tpl_vars['for_f']->value);?>
  <?php }?>
  
  <?php if (!(isset($_smarty_tpl->tpl_vars['pro_per_fw']->value))) {
$_smarty_tpl->_assignInScope('pro_per_fw', $_smarty_tpl->tpl_vars['sttheme']->value[((string)$_smarty_tpl->tpl_vars['for_w']->value)."_per_fw"]);
}?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['pro_per_xxl']->value))) {
$_smarty_tpl->_assignInScope('pro_per_xxl', $_smarty_tpl->tpl_vars['sttheme']->value[((string)$_smarty_tpl->tpl_vars['for_w']->value)."_per_xxl"]);
}?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['pro_per_xl']->value))) {
$_smarty_tpl->_assignInScope('pro_per_xl', $_smarty_tpl->tpl_vars['sttheme']->value[((string)$_smarty_tpl->tpl_vars['for_w']->value)."_per_xl"]);
}?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['pro_per_lg']->value))) {
$_smarty_tpl->_assignInScope('pro_per_lg', $_smarty_tpl->tpl_vars['sttheme']->value[((string)$_smarty_tpl->tpl_vars['for_w']->value)."_per_lg"]);
}?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['pro_per_md']->value))) {
$_smarty_tpl->_assignInScope('pro_per_md', $_smarty_tpl->tpl_vars['sttheme']->value[((string)$_smarty_tpl->tpl_vars['for_w']->value)."_per_md"]);
}?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['pro_per_sm']->value))) {
$_smarty_tpl->_assignInScope('pro_per_sm', $_smarty_tpl->tpl_vars['sttheme']->value[((string)$_smarty_tpl->tpl_vars['for_w']->value)."_per_sm"]);
}?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['pro_per_xs']->value))) {
$_smarty_tpl->_assignInScope('pro_per_xs', $_smarty_tpl->tpl_vars['sttheme']->value[((string)$_smarty_tpl->tpl_vars['for_w']->value)."_per_xs"]);
}?>

  <?php if (!$_smarty_tpl->tpl_vars['pro_per_fw']->value) {
$_smarty_tpl->_assignInScope('pro_per_fw', 1);
}?>
  <?php if (!$_smarty_tpl->tpl_vars['pro_per_xxl']->value) {
$_smarty_tpl->_assignInScope('pro_per_xxl', 1);
}?>
  <?php if (!$_smarty_tpl->tpl_vars['pro_per_xl']->value) {
$_smarty_tpl->_assignInScope('pro_per_xl', 1);
}?>
  <?php if (!$_smarty_tpl->tpl_vars['pro_per_lg']->value) {
$_smarty_tpl->_assignInScope('pro_per_lg', 1);
}?>
  <?php if (!$_smarty_tpl->tpl_vars['pro_per_md']->value) {
$_smarty_tpl->_assignInScope('pro_per_md', 1);
}?>
  <?php if (!$_smarty_tpl->tpl_vars['pro_per_sm']->value) {
$_smarty_tpl->_assignInScope('pro_per_sm', 1);
}?>
  <?php if (!$_smarty_tpl->tpl_vars['pro_per_xs']->value) {
$_smarty_tpl->_assignInScope('pro_per_xs', 1);
}?>

  
  <?php $_smarty_tpl->_assignInScope('nbLi', smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value));?>
  <?php $_smarty_tpl->_assignInScope('nbLiNext', ($_smarty_tpl->tpl_vars['nbLi']->value+1));?>
  <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineScreen",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineScreen'=>$_smarty_tpl->tpl_vars['pro_per_fw']->value,'assign'=>'nbLinesScreen'),$_smarty_tpl);?>

  <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineLarge",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineLarge'=>$_smarty_tpl->tpl_vars['pro_per_xxl']->value,'assign'=>'nbLinesLarge'),$_smarty_tpl);?>

  <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineDesktop",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineDesktop'=>$_smarty_tpl->tpl_vars['pro_per_xl']->value,'assign'=>'nbLinesDesktop'),$_smarty_tpl);?>

  <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['pro_per_lg']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

  <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['pro_per_md']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

  <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineMobile",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineMobile'=>$_smarty_tpl->tpl_vars['pro_per_sm']->value,'assign'=>'nbLinesMobile'),$_smarty_tpl);?>

  <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLinePortrait",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLinePortrait'=>$_smarty_tpl->tpl_vars['pro_per_xs']->value,'assign'=>'nbLinesPortrait'),$_smarty_tpl);?>

  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_gide_class", null, null);?> col-fw-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_fw']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-xxl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xxl']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xl']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_lg']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_md']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_sm']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xs']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <div class="products product_list <?php if ((isset($_smarty_tpl->tpl_vars['cssClass']->value))) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cssClass']->value, ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['infinite_scroll'] == 1) {?> waypoint <?php }
if ($_smarty_tpl->tpl_vars['for_w']->value == 'category' && $_smarty_tpl->tpl_vars['sttheme']->value['list_grid']) {?> list <?php } else { ?> row grid <?php }?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['clear_list_view']) {?> clear_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['clear_list_view'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> clear_list_align_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['list_view_align'], ENT_QUOTES, 'UTF-8');?>
 clear_list_proportion_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['list_view_proportion'], ENT_QUOTES, 'UTF-8');?>
" data-classnames="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_gide_class'), ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_assignInScope('index', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('curr_index', $_smarty_tpl->tpl_vars['index']->value);?>
    <?php $_smarty_tpl->_assignInScope('curr_iteration', $_smarty_tpl->tpl_vars['index']->value+1);?>
    <?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);?>
    <?php if ($_smarty_tpl->tpl_vars['for_w']->value == "category" && $_smarty_tpl->tpl_vars['sttheme']->value['infinite_scroll'] && $_smarty_tpl->tpl_vars['sttheme']->value['from_infi']) {?>
      <?php $_smarty_tpl->_assignInScope('curr_index', $_smarty_tpl->tpl_vars['curr_index']->value+$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from']-1);?>
      <?php $_smarty_tpl->_assignInScope('curr_iteration', $_smarty_tpl->tpl_vars['curr_iteration']->value+$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from']-1);?>
    <?php }?>
    <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->tpl_vars['nbLi']->value,'perLine'=>$_smarty_tpl->tpl_vars['pro_per_fw']->value,'assign'=>'totModuloScreen'),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->tpl_vars['nbLi']->value,'perLine'=>$_smarty_tpl->tpl_vars['pro_per_xxl']->value,'assign'=>'totModuloLarge'),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->tpl_vars['nbLi']->value,'perLine'=>$_smarty_tpl->tpl_vars['pro_per_xl']->value,'assign'=>'totModuloDesktop'),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->tpl_vars['nbLi']->value,'perLine'=>$_smarty_tpl->tpl_vars['pro_per_lg']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->tpl_vars['nbLi']->value,'perLine'=>$_smarty_tpl->tpl_vars['pro_per_md']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->tpl_vars['nbLi']->value,'perLine'=>$_smarty_tpl->tpl_vars['pro_per_sm']->value,'assign'=>'totModuloMobile'),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->tpl_vars['nbLi']->value,'perLine'=>$_smarty_tpl->tpl_vars['pro_per_xs']->value,'assign'=>'totModuloPortrait'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['totModuloScreen']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloScreen', $_smarty_tpl->tpl_vars['pro_per_fw']->value);
}?>
    <?php if ($_smarty_tpl->tpl_vars['totModuloLarge']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloLarge', $_smarty_tpl->tpl_vars['pro_per_xxl']->value);
}?>
    <?php if ($_smarty_tpl->tpl_vars['totModuloDesktop']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloDesktop', $_smarty_tpl->tpl_vars['pro_per_xl']->value);
}?>
    <?php if ($_smarty_tpl->tpl_vars['totModulo']->value == 0) {
$_smarty_tpl->_assignInScope('totModulo', $_smarty_tpl->tpl_vars['pro_per_lg']->value);
}?>
    <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloTablet', $_smarty_tpl->tpl_vars['pro_per_md']->value);
}?>
    <?php if ($_smarty_tpl->tpl_vars['totModuloMobile']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloMobile', $_smarty_tpl->tpl_vars['pro_per_sm']->value);
}?>
    <?php if ($_smarty_tpl->tpl_vars['totModuloPortrait']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloPortrait', $_smarty_tpl->tpl_vars['pro_per_xs']->value);
}?>
      <div class="product_list_item <?php if ($_smarty_tpl->tpl_vars['for_w']->value != 'category' || ($_smarty_tpl->tpl_vars['for_w']->value == 'category' && !$_smarty_tpl->tpl_vars['sttheme']->value['list_grid'])) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_gide_class'), ENT_QUOTES, 'UTF-8');?>
 <?php } else { ?> clearfix <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_fw']->value == 0) {?> last-item-of-screen-line<?php } elseif ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_fw']->value == 1) {?> first-item-of-screen-line<?php }
if ($_smarty_tpl->tpl_vars['curr_iteration']->value > ($_smarty_tpl->tpl_vars['nbLi']->value-$_smarty_tpl->tpl_vars['totModuloScreen']->value)) {?> last-screen-line<?php }
if ($_smarty_tpl->tpl_vars['curr_index']->value < $_smarty_tpl->tpl_vars['pro_per_fw']->value) {?> first-screen-line<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_xxl']->value == 0) {?> last-item-of-large-line<?php } elseif ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_xxl']->value == 1) {?> first-item-of-large-line<?php }
if ($_smarty_tpl->tpl_vars['curr_iteration']->value > ($_smarty_tpl->tpl_vars['nbLi']->value-$_smarty_tpl->tpl_vars['totModuloLarge']->value)) {?> last-large-line<?php }
if ($_smarty_tpl->tpl_vars['curr_index']->value < $_smarty_tpl->tpl_vars['pro_per_xxl']->value) {?> first-large-line<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_xl']->value == 0) {?> last-item-of-desktop-line<?php } elseif ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_xl']->value == 1) {?> first-item-of-desktop-line<?php }
if ($_smarty_tpl->tpl_vars['curr_iteration']->value > ($_smarty_tpl->tpl_vars['nbLi']->value-$_smarty_tpl->tpl_vars['totModuloDesktop']->value)) {?> last-desktop-line<?php }
if ($_smarty_tpl->tpl_vars['curr_index']->value < $_smarty_tpl->tpl_vars['pro_per_xl']->value) {?> first-desktop-line<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_lg']->value == 0) {?> last-in-line<?php } elseif ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_lg']->value == 1) {?> first-in-line<?php }
if ($_smarty_tpl->tpl_vars['curr_iteration']->value > ($_smarty_tpl->tpl_vars['nbLi']->value-$_smarty_tpl->tpl_vars['totModulo']->value)) {?> last-line<?php }
if ($_smarty_tpl->tpl_vars['curr_index']->value < $_smarty_tpl->tpl_vars['pro_per_lg']->value) {?> first-line<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_md']->value == 0) {?> last-item-of-tablet-line<?php } elseif ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_md']->value == 1) {?> first-item-of-tablet-line<?php }
if ($_smarty_tpl->tpl_vars['curr_iteration']->value > ($_smarty_tpl->tpl_vars['nbLi']->value-$_smarty_tpl->tpl_vars['totModuloTablet']->value)) {?> last-tablet-line<?php }
if ($_smarty_tpl->tpl_vars['curr_index']->value < $_smarty_tpl->tpl_vars['pro_per_md']->value) {?> first-tablet-line<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_sm']->value == 0) {?> last-item-of-mobile-line<?php } elseif ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_sm']->value == 1) {?> first-item-of-mobile-line<?php }
if ($_smarty_tpl->tpl_vars['curr_iteration']->value > ($_smarty_tpl->tpl_vars['nbLi']->value-$_smarty_tpl->tpl_vars['totModuloMobile']->value)) {?> last-mobile-line<?php }
if ($_smarty_tpl->tpl_vars['curr_index']->value < $_smarty_tpl->tpl_vars['pro_per_sm']->value) {?> first-mobile-line<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_xs']->value == 0) {?> last-item-of-portrait-line<?php } elseif ($_smarty_tpl->tpl_vars['curr_iteration']->value%$_smarty_tpl->tpl_vars['pro_per_xs']->value == 1) {?> first-item-of-portrait-line<?php }
if ($_smarty_tpl->tpl_vars['curr_iteration']->value > ($_smarty_tpl->tpl_vars['nbLi']->value-$_smarty_tpl->tpl_vars['totModuloPortrait']->value)) {?> last-portrait-line<?php }
if ($_smarty_tpl->tpl_vars['curr_index']->value < $_smarty_tpl->tpl_vars['pro_per_xs']->value) {?> first-portrait-line<?php }?>">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1917631997668adaa62b05a9_27305613', 'product_miniature');
?>

      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  </div>
  <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['infinite_scroll']) {?><div class="hidden text-center infinite-spin"><i class="fto-spin5 animate-spin fs-xl"></i></div><?php }
}
/* {block 'product_miniature'} */
class Block_1917631997668adaa62b05a9_27305613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_1917631997668adaa62b05a9_27305613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
      <?php
}
}
/* {/block 'product_miniature'} */
}
