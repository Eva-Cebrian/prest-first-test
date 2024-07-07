<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stshoppingcartviewstemplateshookstshoppingcartlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a96c879_43206312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef8f3e058b820f96f60ee75ec0844032d89fc4c5' => 
    array (
      0 => 'module:stshoppingcartviewstemplateshookstshoppingcartlist.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stshoppingcart/views/templates/hook/stshoppingcart-product-line.tpl' => 1,
  ),
),false)) {
function content_668ab42a96c879_43206312 (Smarty_Internal_Template $_smarty_tpl) {
?>      <div class="shoppingcart-list">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']) {?>
          <ul class="small_cart_product_list base_list_line medium_list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
              <li class="line_item"><?php $_smarty_tpl->_subTemplateRender('module:stshoppingcart/views/templates/hook/stshoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added'], 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                  <li class="line_item">
                    <div class="flex_container flex_start">
                      <span class="mar_r4"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                      <span class="mar_r4"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>
</span>
                      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher" class="flex_child" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><i class="fto-cancel mar_l4"></i></a>
                    </div>
                  </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
          </ul>
          <div class="small_cart_sumary base_list_line">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
$_smarty_tpl->tpl_vars['subtotal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
$_smarty_tpl->tpl_vars['subtotal']->do_else = false;
?>
              <?php if ((isset($_smarty_tpl->tpl_vars['subtotal']->value['value'])) && (isset($_smarty_tpl->tpl_vars['subtotal']->value['type'])) && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?>
                <div class="line_item flex_container flex_space_between cart_summary_subtotal_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['subtotal']->value['value']) {?> display_none <?php }?>">
                  <span class="cart-summary-k">
                    <?php if ('products' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>

                    <?php } else { ?>
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>

                    <?php }?>
                  </span>
                  <div class="cart-summary-v price">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>

                    <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] === 'shipping') {?>
                        <div class="shipping_sub_total_details"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['subtotal']->value),$_smarty_tpl ) );?>
</div>
                    <?php }?>
                  </div>
                  
                </div>
              <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ((isset($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'])) && $_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'] !== null) {?>
            <?php if ($_smarty_tpl->tpl_vars['second_price_total']->value) {?>
            <div class="line_item flex_container flex_space_between">
              <span class="cart-summary-k"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total_excluding_tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span><span class="cart-summary-v price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total_excluding_tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
            <?php }?>
            <div class="line_item flex_container flex_space_between">
              <span class="cart-summary-k"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span><span class="cart-summary-v price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'])) && $_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'] !== null && $_smarty_tpl->tpl_vars['second_price_total']->value) {?>
            <div class="line_item last_one flex_container flex_space_between">
              <span class="cart-summary-k"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span><span class="cart-summary-v price font-weight-bold"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
            <?php } else { ?>
            <div class="line_item last_one flex_container flex_space_between">
              <span class="cart-summary-k"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span><span class="cart-summary-v price font-weight-bold"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
            <?php }?>
          </div>
          <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
            <div class="alert alert-warning" role="alert">
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

            </div>
          <?php }?>
          <?php $_smarty_tpl->_assignInScope('checkout_button', Configuration::get('ST_BLOCK_CART_CHECKOUT'));?>
          <?php if ($_smarty_tpl->tpl_vars['checkout_button']->value == 0 || $_smarty_tpl->tpl_vars['checkout_button']->value == 2 || $_smarty_tpl->tpl_vars['checkout_button']->value == 3) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="small_cart_btn btn btn-default btn_full_width <?php if ($_smarty_tpl->tpl_vars['checkout_button']->value == 3) {?> benabled <?php }?> " title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping cart','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping cart','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['checkout_button']->value == 1 || $_smarty_tpl->tpl_vars['checkout_button']->value == 2 || $_smarty_tpl->tpl_vars['checkout_button']->value == 4) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="small_cart_btn btn btn-default btn_full_width <?php if ($_smarty_tpl->tpl_vars['checkout_button']->value == 2 || $_smarty_tpl->tpl_vars['checkout_button']->value == 4) {?> benabled <?php }?> btn_to_checkout" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a><?php }?>
          <?php if (($_smarty_tpl->tpl_vars['checkout_button']->value == 3 || $_smarty_tpl->tpl_vars['checkout_button']->value == 4) && (!(isset($_smarty_tpl->tpl_vars['from']->value)) || $_smarty_tpl->tpl_vars['from']->value != 'dropdown')) {?><a href="javascript:;" rel="nofollow" class="small_cart_btn btn btn-default btn_full_width side_continue" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a><?php }?>
      <?php } else { ?>
        <div class="cart_empty"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</div>
      <?php }?>
      </div><?php }
}
