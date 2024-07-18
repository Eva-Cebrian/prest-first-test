<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:13:04
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adab0a2ee21_57477104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed0d4340ae11d6cf78f9b1e1c732957ac4fadfe2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/product.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/product/product-first.tpl' => 2,
    'file:catalog/product/product-second.tpl' => 2,
    'file:catalog/product/product-third.tpl' => 2,
  ),
),false)) {
function content_668adab0a2ee21_57477104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2073714566668adab0a21f48_36037079', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_893212490668adab0a27dd4_84633070', 'page_wrapper_block');
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183805246668adab0a28846_58631355', 'full_width_top');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1011600378668adab0a2ad11_27818662', 'content_wrapper');
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1569605785668adab0a2dcc6_34675857', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_viewport'} */
class Block_2073714566668adab0a21f48_36037079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_2073714566668adab0a21f48_36037079',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ((isset($_smarty_tpl->tpl_vars['fb_app_id']->value)) && $_smarty_tpl->tpl_vars['fb_app_id']->value) {?>
  <meta property="fb:app_id" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fb_app_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
  <?php }?>
  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]['url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image:width" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]['width'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image:height" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]['height'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head_viewport'} */
/* {block 'page_wrapper_block'} */
class Block_893212490668adab0a27dd4_84633070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_wrapper_block' => 
  array (
    0 => 'Block_893212490668adab0a27dd4_84633070',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?> itemscope itemtype="https://schema.org/Product" <?php }
}
}
/* {/block 'page_wrapper_block'} */
/* {block 'full_width_top'} */
class Block_183805246668adab0a28846_58631355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'full_width_top' => 
  array (
    0 => 'Block_183805246668adab0a28846_58631355',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['layout']->value == 'layouts/layout-full-width.tpl') {?>
    <section id="main" class="product-container js-product-container">
      <div class="product_first_section">
      <div class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['pro_page_first_full_screen']) {?> container <?php } else { ?> container-fluid <?php }?>">
         <?php $_smarty_tpl->_subTemplateRender('file:catalog/product/product-first.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      </div>
      <div class="product_second_section">
      <div class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['pro_page_second_full_screen']) {?> container <?php } else { ?> container-fluid <?php }?>">
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/product/product-second.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      </div>
      <div class="product_third_section">
      <div class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['pro_page_third_full_screen']) {?> container <?php } else { ?> container-fluid <?php }?>">
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/product/product-third.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      </div>
    </section>
    <?php }?>
  <?php
}
}
/* {/block 'full_width_top'} */
/* {block 'content_wrapper'} */
class Block_1011600378668adab0a2ad11_27818662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1011600378668adab0a2ad11_27818662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['layout']->value != 'layouts/layout-full-width.tpl') {?>
      <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }?>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'content'} */
class Block_1569605785668adab0a2dcc6_34675857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1569605785668adab0a2dcc6_34675857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['layout']->value != 'layouts/layout-full-width.tpl') {?>
    <section id="main">
      <?php $_smarty_tpl->_subTemplateRender('file:catalog/product/product-first.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:catalog/product/product-second.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:catalog/product/product-third.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </section>
    <?php }?>
  <?php
}
}
/* {/block 'content'} */
}
