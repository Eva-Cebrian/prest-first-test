<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/product-slider-item-compact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b1f3031_49662968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3925cfd5e999fb10dad878f1d6082f021d8b04e9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/product-slider-item-compact.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42b1f3031_49662968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('is_lazy', ((isset($_smarty_tpl->tpl_vars['lazy_load']->value)) && $_smarty_tpl->tpl_vars['lazy_load']->value) || !(isset($_smarty_tpl->tpl_vars['lazy_load']->value)));?>
<div class="pro_column_box clearfix line_item" <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?> <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value) {?> itemprop="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['from_product_page']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?> itemscope itemtype="https://schema.org/Product" <?php }?>>
  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="pro_column_left">
    <picture>
    <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value['cart_default'])) && $_smarty_tpl->tpl_vars['stwebp']->value['cart_default'] && (isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url']) {?>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
      <source <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>

        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default_2x']['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default_2x']['url']) {?>,<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default_2x']['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
 2x<?php }?>"
        title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
        type="image/webp"
        >
    <!--[if IE 9]></video><![endif]-->
    <?php }?>
    <img <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>src="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['img_prod_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['lang_iso_code'], ENT_QUOTES, 'UTF-8');?>
-default-cart_default.jpg<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default_2x']['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default_2x']['url']) {?> <?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {?>data-<?php }?>srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default_2x']['url'], ENT_QUOTES, 'UTF-8');?>
 2x" <?php }?> width="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['width']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['width'], ENT_QUOTES, 'UTF-8');
}?>" height="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['height']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['height'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" class="<?php if ($_smarty_tpl->tpl_vars['is_lazy']->value) {
if ((isset($_smarty_tpl->tpl_vars['from_slider']->value))) {?>swiper-lazy<?php } else { ?>cate_pro_lazy<?php }
}?>" />
    </picture>
    <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url']) {?><meta itemprop="image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
"><?php }
}?>
  </a>
  <div class="pro_column_right">
    <h3 <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?> itemprop="name"<?php }?> class="s_title_block nohidden"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?> itemprop="url"<?php }?>><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1228332454668ab42b1ee1f7_52605909', 'product_price_and_shipping');
?>

  </div>
</div>
<?php }
/* {block 'product_price_and_shipping'} */
class Block_1228332454668ab42b1ee1f7_52605909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_1228332454668ab42b1ee1f7_52605909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
        <div class="product-price-and-shipping" <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?> itemprop="offers" itemscope itemtype="https://schema.org/Offer"<?php }?>>
          <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?><meta itemprop="priceCurrency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
          
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


          <span <?php if ((isset($_smarty_tpl->tpl_vars['from_product_page']->value)) && $_smarty_tpl->tpl_vars['from_product_page']->value && (!(isset($_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) || !$_smarty_tpl->tpl_vars['no_google_rich_snippets']->value)) {?> itemprop="price" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
          <?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
            <span class="tax_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
          <?php }?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>

          
          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


            <span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['hide_discount']) {?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
              <span class="discount discount-percentage"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php } else { ?>
              <span class="discount discount-amount">-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            <?php }?>
          <?php }?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_price_and_shipping'} */
}
