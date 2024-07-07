<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0a31859_14334941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a603080992d076a87e10ea2c09874c6c57fe541d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:stvideo/views/templates/hook/stvideo_link.tpl' => 1,
  ),
),false)) {
function content_668a67f0a31859_14334941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<div class="product-add-to-cart  mb-3">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_819891823668a67f0a29a62_36979460', 'product_availability');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_917651466668a67f0a2b948_50203308', 'product_minimal_quantity');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_734631572668a67f0a2c4d3_59002877', 'product_availability_date');
?>


    <div class="pro_cart_block flex_container flex_column_sm">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_592997985668a67f0a2cea7_37272958', 'product_quantity');
?>


      <div class="pro_cart_right">
        <div class="flex_box">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductCartRight'),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['extraContent']))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stvideo') {?>
              <?php $_smarty_tpl->_subTemplateRender("module:stvideo/views/templates/hook/stvideo_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stvideos'=>$_smarty_tpl->tpl_vars['extra']->value['content'],'video_position'=>array(12)), 0, true);
?>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        </div>
      </div>
    </div>
  <?php }?>
</div>

<?php }
/* {block 'product_quantities'} */
class Block_1418936214668a67f0a2a932_35030708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
                  <span class="product-quantities" data-stock="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
" data-allow-oosp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['allow_oosp'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>
            <?php
}
}
/* {/block 'product_quantities'} */
/* {block 'product_availability'} */
class Block_819891823668a67f0a29a62_36979460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_819891823668a67f0a29a62_36979460',
  ),
  'product_quantities' => 
  array (
    0 => 'Block_1418936214668a67f0a2a932_35030708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="product-availability" class="js-product-availability <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?> product-available <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?> product-last-items <?php } else { ?> product-unavailable <?php }?> mar_b6 fs_md">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1418936214668a67f0a2a932_35030708', 'product_quantities', $this->tplIndex);
?>

        <?php }?>
        </div>
    <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_minimal_quantity'} */
class Block_917651466668a67f0a2b948_50203308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_917651466668a67f0a2b948_50203308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
      <div class="product-minimal-quantity mar_b6">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

      </div>
        <?php }?>
    <?php
}
}
/* {/block 'product_minimal_quantity'} */
/* {block 'product_availability_date'} */
class Block_734631572668a67f0a2c4d3_59002877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability_date' => 
  array (
    0 => 'Block_734631572668a67f0a2c4d3_59002877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['availability_date']) {?>
        <div class="product-availability-date mar_b6">
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </span> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability_date'], ENT_QUOTES, 'UTF-8');?>

        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_availability_date'} */
/* {block 'product_quantity'} */
class Block_592997985668a67f0a2cea7_37272958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_592997985668a67f0a2cea7_37272958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-quantity flex_child <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> hide_main_cart_button <?php }?>">
        <div class="qty qty_wrap qty_wrap_big mar_b6 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_buy_button']) {?> qty_full_width <?php }?>">
          <input
            type="number"
            name="qty"
            id="quantity_wanted"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
            class="input-group"
            min="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
            data-quantity="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            data-allow-oosp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['allow_oosp'], ENT_QUOTES, 'UTF-8');?>
"
          >
        </div>
        <div class="add mar_b6 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_buy_button']) {?> add_full_width <?php }?>">
          <button class="btn btn-default btn-large add-to-cart btn-full-width btn-spin" data-button-action="add-to-cart" type="submit" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled <?php }?>>
            <i class="fto-glyph icon_btn"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          </button>
        </div>
        <?php if (((isset($_smarty_tpl->tpl_vars['sttheme']->value['buy_now'])) && $_smarty_tpl->tpl_vars['sttheme']->value['buy_now']) || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?>
        <div class="add_buy_now mar_b6 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_buy_button']) {?> add_full_width <?php }?> <?php if (!(isset($_smarty_tpl->tpl_vars['sttheme']->value['buy_now'])) || !$_smarty_tpl->tpl_vars['sttheme']->value['buy_now']) {?> display_none <?php }?>">
          <button class="btn btn-default btn-large add-to-cart btn-full-width btn-spin benabled" data-button-action="add-to-cart" type="submit" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled <?php }?>>
            <i class="fto-glyph icon_btn"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buy now','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          </button>
        </div>
        <?php }?>
      </div>
    <?php
}
}
/* {/block 'product_quantity'} */
}
