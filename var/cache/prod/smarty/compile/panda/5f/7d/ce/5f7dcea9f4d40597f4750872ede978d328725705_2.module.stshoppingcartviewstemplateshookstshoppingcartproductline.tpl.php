<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stshoppingcartviewstemplateshookstshoppingcartproductline.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a97ca69_57556384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f7dcea9f4d40597f4750872ede978d328725705' => 
    array (
      0 => 'module:stshoppingcartviewstemplateshookstshoppingcartproductline.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42a97ca69_57556384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="flex_container flex_start">
    <?php if (((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url']) || (isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']))) {?>
    <picture>
    <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value['cart_default'])) && $_smarty_tpl->tpl_vars['stwebp']->value['cart_default'] && (isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url']) {?>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
      <source srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
        type="image/webp"
        >
    <!--[if IE 9]></video><![endif]-->
    <?php }?>
    <img class="small_cart_product_image" src="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'])) && $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');
}?>" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['height'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
    </picture>
    <?php }?>
    <div class="small_cart_info flex_child">
        <div class="flex_container flex_start mar_b4">
            <span class="product-quantity mar_r4"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
x</span>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="product-name mar_r4 flex_child"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a>
            <div class="price mar_r4"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])) && $_smarty_tpl->tpl_vars['product']->value['is_gift']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');
}?></div>
            <?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])) || !$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
            <a  class="ajax_remove_button"
                rel="nofollow"
                href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
                data-link-action="remove-from-cart"
                title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Remove",'d'=>"Shop.Theme.Actions"),$_smarty_tpl ) );?>
"
            >
                <i class="fto-trash"></i>
            </a>
            <?php }?>
        </div>
        <div class="flex_container flex_start">
        <?php $_smarty_tpl->_assignInScope('pro_quantity_input', Configuration::get('STSN_PRO_QUANTITY_INPUT'));?>
        <?php if (($_smarty_tpl->tpl_vars['pro_quantity_input']->value == 2 || $_smarty_tpl->tpl_vars['pro_quantity_input']->value == 3 || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && (!(isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])) || !$_smarty_tpl->tpl_vars['product']->value['is_gift'])) {?>
        <div class="qty_wrap mar_r4 <?php if ($_smarty_tpl->tpl_vars['pro_quantity_input']->value != 2 && $_smarty_tpl->tpl_vars['pro_quantity_input']->value != 3) {?> display_none <?php }?>">
            <input
                class="cart_quantity cart_quantity_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] >= $_smarty_tpl->tpl_vars['product']->value['stock_quantity']) {?> hits_the_max_limit<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= $_smarty_tpl->tpl_vars['product']->value['minimal_quantity']) {?> hits_the_min_limit<?php }?>"
                type="text"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
                name="cart_quantity"
              data-down-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
              data-up-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
              data-update-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
              data-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
                data-minimal-quantity="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                data-quantity="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['stock_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
                data-id-customization="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"
                data-allow-oosp="<?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?>1<?php } else { ?>0<?php }?>"
              />
        </div>
        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['product']->value['attributes'])) {?>
        <div class="flex_child">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'property_value', false, 'property');
$_smarty_tpl->tpl_vars['property_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['property']->value => $_smarty_tpl->tpl_vars['property_value']->value) {
$_smarty_tpl->tpl_vars['property_value']->do_else = false;
?>
          <div class="small_cart_attr_attr">
              <span class="small_cart_attr_k"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['property']->value, ENT_QUOTES, 'UTF-8');?>
:</span><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['property_value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php }?>
        </div>
    </div>
</div>
<?php if (is_array($_smarty_tpl->tpl_vars['product']->value['customizations']) && smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
    <div class="customizations">
        <ul class="base_list_line">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
                <li class="line_item">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                            <li>
                                <span class="mar_r6 font-weight-bold"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                    <span><?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
" />
                                <?php }?>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }
}
}
