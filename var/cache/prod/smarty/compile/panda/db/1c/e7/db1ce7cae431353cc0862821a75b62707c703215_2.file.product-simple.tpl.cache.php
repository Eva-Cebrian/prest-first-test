<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/product-simple.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42ae06da1_49987322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db1ce7cae431353cc0862821a75b62707c703215' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/product-simple.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/btn-add-to-cart.tpl' => 1,
    'file:catalog/_partials/miniatures/btn-view-more.tpl' => 1,
    'file:catalog/_partials/miniatures/btn-quick-view.tpl' => 1,
  ),
),false)) {
function content_668ab42ae06da1_49987322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '58387335668ab42adf6cb7_99641687';
$_smarty_tpl->_assignInScope('has_add_to_cart', 0);
if ($_smarty_tpl->tpl_vars['sttheme']->value['display_add_to_cart'] != 3 && !$_smarty_tpl->tpl_vars['sttheme']->value['is_catalog'] && $_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'] && ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0 || $_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {
$_smarty_tpl->_assignInScope('has_add_to_cart', 1);
}
if ($_smarty_tpl->tpl_vars['has_add_to_cart']->value && $_smarty_tpl->tpl_vars['sttheme']->value['show_hide_add_to_cart'] != 1 && (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && count($_smarty_tpl->tpl_vars['product']->value['attributes'])) {
$_smarty_tpl->_assignInScope('has_add_to_cart', 0);
}?>
<div class="pro_simple_box clearfix ajax_block_product">
            <div class="itemlist_left">
                <a class="product_image" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                  <picture>
                  <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value['small_default'])) && $_smarty_tpl->tpl_vars['stwebp']->value['small_default'] && (isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url']) {?>
                  <!--[if IE 9]><video style="display: none;"><![endif]-->
                    <source <?php if ((isset($_smarty_tpl->tpl_vars['product_lazy']->value)) && !$_smarty_tpl->tpl_vars['product_lazy']->value) {?>srcset<?php } else { ?>data-srcset<?php }?>="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>

                      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default_2x']['url']))) {?>,<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default_2x']['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
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
                  <img <?php if ((isset($_smarty_tpl->tpl_vars['product_lazy']->value)) && !$_smarty_tpl->tpl_vars['product_lazy']->value) {?>src<?php } else { ?>data-src<?php }?>="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['img_prod_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['lang_iso_code'], ENT_QUOTES, 'UTF-8');?>
-default-small_default.jpg<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default_2x']['url']))) {?> data-srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default_2x']['url'], ENT_QUOTES, 'UTF-8');?>
 2x" <?php }?> width="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['width']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['width'], ENT_QUOTES, 'UTF-8');
}?>" height="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['height']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['height'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) && !empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" class="cate_pro_lazy" />
                </picture>
                </a>
            </div>
            <div class="itemlist_right">
                <h3 class="s_title_block <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name']))) {
if ($_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name'] == 3) {?> two_rows <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['length_of_product_name'] == 2) {?> nohidden <?php }
}?>"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_838883477668ab42ae01af0_02628939', 'product_price_and_shipping');
?>

        <div class="flex_container flex_left">
        <?php if ($_smarty_tpl->tpl_vars['has_add_to_cart']->value && ($_smarty_tpl->tpl_vars['sttheme']->value['pro_quantity_input'] == 1 || $_smarty_tpl->tpl_vars['sttheme']->value['pro_quantity_input'] == 3)) {?>
        <div class="s_quantity_wanted qty_wrap">
            <input
                class="pro_quantity"
                type="text"
                value="<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>"
                name="pro_quantity"
                data-minimal-quantity="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
              />
        </div>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('add_to_cart_class', "btn btn-default");?>
        <?php if ($_smarty_tpl->tpl_vars['has_add_to_cart']->value) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('classname'=>$_smarty_tpl->tpl_vars['add_to_cart_class']->value), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['show_hide_add_to_cart'] == 2) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-view-more.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('classname'=>$_smarty_tpl->tpl_vars['add_to_cart_class']->value), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['show_hide_add_to_cart'] == 3) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/btn-quick-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('classname'=>$_smarty_tpl->tpl_vars['add_to_cart_class']->value), 0, false);
?>
        <?php }?>
        </div>
            </div>
 </div><?php }
/* {block 'product_price_and_shipping'} */
class Block_838883477668ab42ae01af0_02628939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_838883477668ab42ae01af0_02628939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                    <div class="product-price-and-shipping pad_b6">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


                      <span class="price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
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
