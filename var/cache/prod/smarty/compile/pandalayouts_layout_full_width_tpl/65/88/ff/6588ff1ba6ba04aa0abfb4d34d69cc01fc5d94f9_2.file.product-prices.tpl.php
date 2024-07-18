<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:13:04
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adab0bf3a59_75073826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6588ff1ba6ba04aa0abfb4d34d69cc01fc5d94f9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-prices.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/sticker.tpl' => 1,
  ),
),false)) {
function content_668adab0bf3a59_75073826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product-prices">    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_339805236668adab0be0899_40615081', 'product_countdown');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_864357289668adab0be4953_95246280', 'product_price');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103085735668adab0bee766_09475339', 'product_without_taxes');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_668197889668adab0bef306_06387264', 'product_pack_price');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1183409996668adab0befc60_14698410', 'product_ecotax');
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>


    <div class="tax-shipping-delivery-label">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>

      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times']))) {?>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 1) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?>
          <span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_information'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 2) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
          <span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0 && $_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
          <span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_out_stock'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      <?php }?>
      <?php }?>
    </div>
  </div>
<?php }
}
/* {block 'product_countdown'} */
class Block_339805236668adab0be0899_40615081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_countdown' => 
  array (
    0 => 'Block_339805236668adab0be0899_40615081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['countdown_active']->value)) && $_smarty_tpl->tpl_vars['countdown_active']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price'] && !$_smarty_tpl->tpl_vars['sttheme']->value['is_catalog'] && $_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
          <?php if ((smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S') >= $_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'] && smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S') < $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'])) {?>
          <div class="countdown_outer_box">
            <div class="countdown_heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Limited time offer','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
:</div>
            <div class="countdown_box">
              <i class="fto-clock"></i><span class="countdown_pro c_countdown_timer" data-countdown="<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],'%Y/%m/%d %H:%M:%S'), ENT_QUOTES, 'UTF-8');?>
" data-gmdate="<?php echo htmlspecialchars((string) gmdate('Y/m/d H:i:s',strtotime($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'])), ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id'] )), ENT_QUOTES, 'UTF-8');?>
"></span>
            </div>
          </div>
          <?php } elseif (($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] == '0000-00-00 00:00:00') && ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'] == '0000-00-00 00:00:00') && $_smarty_tpl->tpl_vars['countdown_title_aw_display']->value) {?>
            <div class="countdown_outer_box countdown_pro_perm" data-id-product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id'] )), ENT_QUOTES, 'UTF-8');?>
">
              <div class="countdown_box">
                <i class="fto-clock"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Limited special offer','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span>
              </div>
            </div>
          <?php }?>
        <?php }?>
      <?php }?>
    <?php
}
}
/* {/block 'product_countdown'} */
/* {block 'product_discount'} */
class Block_1436779234668adab0bea063_85006224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                <span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
          <?php
}
}
/* {/block 'product_discount'} */
/* {block 'product_unit_price'} */
class Block_703504936668adab0bed694_01895121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
            <div class="product-unit-price sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl ) );?>
</div>
          <?php }?>
        <?php
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_price'} */
class Block_864357289668adab0be4953_95246280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_864357289668adab0be4953_95246280',
  ),
  'product_discount' => 
  array (
    0 => 'Block_1436779234668adab0bea063_85006224',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_703504936668adab0bed694_01895121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

      <div
        class="product-price"
        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?>
        itemprop="offers"
        itemscope
        itemtype="https://schema.org/Offer"
        <?php }?>
      >
        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?><link itemprop="availability" href="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['seo_availability']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['seo_availability'], ENT_QUOTES, 'UTF-8');
} else { ?>https://schema.org/<?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'unavailable') {?>OutOfStock<?php } else { ?>InStock<?php }
}?>" content="<?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'unavailable') {?>OutOfStock<?php } else { ?>InStock<?php }?>" /><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_pro_condition'] && $_smarty_tpl->tpl_vars['product']->value['condition'] && $_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?><link itemprop="itemCondition" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['condition']['schema_url'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?>
        <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
        <meta itemprop="url" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount'] && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] != '0000-00-00 00:00:00') {?><meta itemprop="priceValidUntil" content="<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],'%Y-%m-%d'), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

        <div class="current-price">
          <span class="price" <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?> itemprop="price" content="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['rounded_display_price']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['rounded_display_price'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');
}?>" <?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
          <?php if ((isset($_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled'])) && !$_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
            <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No tax','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
          <?php } elseif ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
            <span class="tax_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
          <?php }?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1436779234668adab0bea063_85006224', 'product_discount', $this->tplIndex);
?>


          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
          <?php if (0 && !$_smarty_tpl->tpl_vars['sttheme']->value['hide_discount']) {?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
              <span class="discount discount-percentage"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php } else { ?>
              <span class="discount discount-amount">-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
          <?php }?>
          <?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['extraContent']))) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'ststickers') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/sticker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_sticker'=>1,'stickers'=>$_smarty_tpl->tpl_vars['extra']->value['content'],'sticker_position'=>array(13),'is_from_product_page'=>1,'sticker_quantity'=>$_smarty_tpl->tpl_vars['product']->value['quantity'],'sticker_allow_oosp'=>$_smarty_tpl->tpl_vars['product']->value['allow_oosp'],'sticker_quantity_all_versions'=>$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'],'sticker_stock_text'=>$_smarty_tpl->tpl_vars['product']->value['availability_message']), 0, true);
?>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_703504936668adab0bed694_01895121', 'product_unit_price', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
class Block_103085735668adab0bee766_09475339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
    0 => 'Block_103085735668adab0bee766_09475339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
        <div class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</div>
      <?php }?>
    <?php
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
class Block_668197889668adab0bef306_06387264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
    0 => 'Block_668197889668adab0bef306_06387264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
        <div class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></div>
      <?php }?>
    <?php
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_1183409996668adab0befc60_14698410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
    0 => 'Block_1183409996668adab0befc60_14698410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?>
        <div class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          <?php }?>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_ecotax'} */
}
