<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:13:04
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-name.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adab0b3c6c7_90716728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2032f27717f2713ad93a8c0b9449c883f69c7456' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-name.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-brand.tpl' => 1,
    'module:stvideo/views/templates/hook/stvideo_link.tpl' => 1,
  ),
),false)) {
function content_668adab0b3c6c7_90716728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product_name_wrap flex_container flex_start">
    <div class="flex_child">
    <h1 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?> itemprop="name" <?php }?> class="product_name <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_name_at_top'] == 1 || ($_smarty_tpl->tpl_vars['sttheme']->value['product_name_at_top'] == 2 && $_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {?> text-center <?php }?>"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1013291326668adab0b379b3_32029316', 'page_title');
?>
</h1>

    <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['show_brand_logo'] == 4 || $_smarty_tpl->tpl_vars['sttheme']->value['show_brand_logo'] == 5) && (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) && $_smarty_tpl->tpl_vars['product_manufacturer']->value->active) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-brand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    </div>

    <section class="pro_name_right">
    <div class="flex_box">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stproductlinknav' && ($_smarty_tpl->tpl_vars['extra']->value['content']['prev'] || $_smarty_tpl->tpl_vars['extra']->value['content']['next'])) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['content'], 'nav_product', false, 'nav');
$_smarty_tpl->tpl_vars['nav_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value => $_smarty_tpl->tpl_vars['nav_product']->value) {
$_smarty_tpl->tpl_vars['nav_product']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['nav_product']->value) {?>
              <div class="product_link_nav with_preview"> 
                  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nav_product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nav_product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><i class="fto-<?php if ($_smarty_tpl->tpl_vars['nav']->value == 'prev') {?>left<?php }
if ($_smarty_tpl->tpl_vars['nav']->value == 'next') {?>right<?php }?>-open-3"></i>
                      <div class="product_link_nav_preview">
                          <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nav_product']->value['cover'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nav_product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nav_product']->value['small_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nav_product']->value['small_default']['height'], ENT_QUOTES, 'UTF-8');?>
"/>
                      </div>
                  </a>
              </div>
          <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stvideo') {?>
          <?php $_smarty_tpl->_subTemplateRender("module:stvideo/views/templates/hook/stvideo_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stvideos'=>$_smarty_tpl->tpl_vars['extra']->value['content'],'video_position'=>array(10)), 0, true);
?>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductNameRight'),$_smarty_tpl ) );?>

    </div>
    </section>
</div><?php }
/* {block 'page_title'} */
class Block_1013291326668adab0b379b3_32029316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_1013291326668adab0b379b3_32029316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
}
