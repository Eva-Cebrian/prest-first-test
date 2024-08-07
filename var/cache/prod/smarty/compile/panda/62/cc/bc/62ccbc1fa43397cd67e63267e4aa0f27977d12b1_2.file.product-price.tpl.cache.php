<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:13:04
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/product-price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adab0e17577_58096423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62ccbc1fa43397cd67e63267e4aa0f27977d12b1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/product-price.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/sticker.tpl' => 1,
  ),
),false)) {
function content_668adab0e17577_58096423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1979944074668adab0e11808_18717425';
if ((!(isset($_smarty_tpl->tpl_vars['st_display_price']->value)) || $_smarty_tpl->tpl_vars['st_display_price']->value) && $_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product-price-and-shipping pad_b6" <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?> itemprop="offers" itemscope itemtype="https://schema.org/Offer" <?php }?>>
    <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?><meta itemprop="priceCurrency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['currency_iso_code'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


    <span <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?> itemprop="price" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
" <?php }?> class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?> st_discounted_price <?php }?>" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
    <?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
        <span class="tax_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


      <span class="regular-price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
    <?php }?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_598509234668adab0e16119_77703092', 'product_flags_price');
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

  </div>
<?php }
}
/* {block 'product_flags_price'} */
class Block_598509234668adab0e16119_77703092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags_price' => 
  array (
    0 => 'Block_598509234668adab0e16119_77703092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/sticker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('stickers'=>$_smarty_tpl->tpl_vars['ststickers_temp']->value,'sticker_position'=>array(13),'sticker_quantity'=>$_smarty_tpl->tpl_vars['product']->value['quantity'],'sticker_allow_oosp'=>$_smarty_tpl->tpl_vars['product']->value['allow_oosp'],'sticker_quantity_all_versions'=>$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'],'sticker_stock_text'=>$_smarty_tpl->tpl_vars['product']->value['availability_message']), 0, false);
?>
    <?php
}
}
/* {/block 'product_flags_price'} */
}
