<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa5e9c4c2_40538958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6252751ce53ccaa244bec4631f28eff6428e610b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/listing/product-list.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
  ),
),false)) {
function content_668adaa5e9c4c2_40538958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214898456668adaa5e98341_32940688', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_header'} */
class Block_1105680041668adaa5e98515_30095972 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1 class="page_heading mb-3"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_active_filters'} */
class Block_1521105285668adaa5e98e88_26823522 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'above_product_list'} */
class Block_1310991310668adaa5e993f7_76803417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) && $_smarty_tpl->tpl_vars['sttheme']->value['filter_position']) {?>
          <div id="horizontal_filters_wrap">
            <div id="horizontal_filters" class="horizontal_filters<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['filter_position'] == 2 || $_smarty_tpl->tpl_vars['sttheme']->value['filter_position'] == 3) {?>_dropdown<?php }?> collapse <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['filter_position'] == 1) {?> show<?php }?>" aria-expanded="<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['filter_position'] > 1) {?>false<?php } else { ?>true<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

            </div>
          </div>
          <?php }?>
        <?php
}
}
/* {/block 'above_product_list'} */
/* {block 'product_list_top'} */
class Block_131008399668adaa5e9ae03_67048994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list'} */
class Block_1072709095668adaa5e9b376_52776668 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_917005296668adaa5e9b860_05818471 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_footer'} */
class Block_672244108668adaa5e9c0b7_24520636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php
}
}
/* {/block 'product_list_footer'} */
/* {block 'content'} */
class Block_214898456668adaa5e98341_32940688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_214898456668adaa5e98341_32940688',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_1105680041668adaa5e98515_30095972',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_1521105285668adaa5e98e88_26823522',
  ),
  'above_product_list' => 
  array (
    0 => 'Block_1310991310668adaa5e993f7_76803417',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_131008399668adaa5e9ae03_67048994',
  ),
  'product_list' => 
  array (
    0 => 'Block_1072709095668adaa5e9b376_52776668',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_917005296668adaa5e9b860_05818471',
  ),
  'product_list_footer' => 
  array (
    0 => 'Block_672244108668adaa5e9c0b7_24520636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1105680041668adaa5e98515_30095972', 'product_list_header', $this->tplIndex);
?>


    <section id="products">
      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1521105285668adaa5e98e88_26823522', 'product_list_active_filters', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1310991310668adaa5e993f7_76803417', 'above_product_list', $this->tplIndex);
?>


        <div id="product-list-top-wrap">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131008399668adaa5e9ae03_67048994', 'product_list_top', $this->tplIndex);
?>

        </div>


        <div id="product-list-wrap">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1072709095668adaa5e9b376_52776668', 'product_list', $this->tplIndex);
?>

        </div>

        <div id="js-product-list-bottom-wrap">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_917005296668adaa5e9b860_05818471', 'product_list_bottom', $this->tplIndex);
?>

        </div>

      <?php } else { ?>
        <div id="js-product-list-top"></div>

        <div id="js-product-list">
          <article class="alert alert-warning" role="alert" data-alert="warning">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products on the category.','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

          </article>
        </div>

        <div id="js-product-list-bottom"></div>
      <?php }?>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_672244108668adaa5e9c0b7_24520636', 'product_list_footer', $this->tplIndex);
?>


  </section>
<?php
}
}
/* {/block 'content'} */
}
