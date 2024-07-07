<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/listing/product-list-simple.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42adf4de3_74544170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee79f2d7542d37a6e3ac92ac39fed9e1e2aa2b37' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/listing/product-list-simple.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-simple.tpl' => 1,
  ),
),false)) {
function content_668ab42adf4de3_74544170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->compiled->nocache_hash = '1228278017668ab42adec693_90471381';
if ((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value) {?>
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

    <ul class="pro_itemlist row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$__foreach_product_66_saved = $_smarty_tpl->tpl_vars['product'];
?>
        <li class="ajax_block_product <?php if ($_smarty_tpl->tpl_vars['pro_per_fw']->value) {?>col-fw-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_fw']->value),'.','-'), ENT_QUOTES, 'UTF-8');
}?>  <?php if ($_smarty_tpl->tpl_vars['pro_per_xxl']->value) {?>col-xxl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xxl']->value),'.','-'), ENT_QUOTES, 'UTF-8');
}?>  <?php if ($_smarty_tpl->tpl_vars['pro_per_xl']->value) {?>col-xl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xl']->value),'.','-'), ENT_QUOTES, 'UTF-8');
}?> col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_lg']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_md']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_sm']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xs']->value),'.','-'), ENT_QUOTES, 'UTF-8');?>
  <?php if ($_smarty_tpl->tpl_vars['pro_per_fw']->value && $_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_fw']->value == 1) {?> first-item-of-screen-line<?php }?> <?php if ($_smarty_tpl->tpl_vars['pro_per_xxl']->value && $_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_xxl']->value == 1) {?> first-item-of-large-line<?php }?> <?php if ($_smarty_tpl->tpl_vars['pro_per_xl']->value && $_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_xl']->value == 1) {?> first-item-of-desktop-line<?php }
if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_lg']->value == 1) {?> first-item-of-line<?php }
if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_md']->value == 1) {?> first-item-of-tablet-line<?php }
if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_sm']->value == 1) {?> first-item-of-mobile-line<?php }
if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_xs']->value == 1) {?> first-item-of-portrait-line<?php }?>">
          <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </li>
    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_66_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    <p class="warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</p>
<?php }
}
}
