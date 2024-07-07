<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:31:30
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/product/product-first.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4d2711608_70800053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c08e8eee687aed612f6e19e858c2e488a3de9850' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/product/product-first.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-name.tpl' => 2,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/miniatures/sticker.tpl' => 2,
    'module:stvideo/views/templates/hook/stvideo.tpl' => 1,
    'module:stvideo/views/templates/hook/stvideo_link.tpl' => 4,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-buy.tpl' => 2,
    'file:catalog/_partials/miniatures/product-brand.tpl' => 2,
    'file:catalog/_partials/product-tags.tpl' => 1,
    'file:catalog/_partials/product-tabs.tpl' => 1,
  ),
),false)) {
function content_668ab4d2711608_70800053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?><meta itemprop="url" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_name_at_top'] == 1 || ($_smarty_tpl->tpl_vars['sttheme']->value['product_name_at_top'] == 2 && $_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-name.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    <div class="row product_page_container product_page_layout_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['product_page_layout'], ENT_QUOTES, 'UTF-8');?>
">
      <div class="product_left_column col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_image_column_md'], ENT_QUOTES, 'UTF-8');?>
 mb-2">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2083553261668ab4d26f8380_91901317', 'page_content_container');
?>

        </div>
        <div class="product_middle_column col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_primary_column_md'], ENT_QUOTES, 'UTF-8');?>
 mb-3">
          <div class="product_middle_column_inner">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_608072897668ab4d26fec19_29169117', 'page_header_container');
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_360549734668ab4d26ffb12_17915294', 'product_flags_under');
?>


          <div class="product-information">
          <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_summary_location'] == 0 || ($_smarty_tpl->tpl_vars['sttheme']->value['product_summary_location'] == 2 && !$_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_281375267668ab4d2701b81_35219476', 'product_description_short');
?>

            <?php }?>

            <div class="mar_b1 pro_price_block flex_container flex_start">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_371238639668ab4d27033b7_19922239', 'product_prices');
?>


              <div class="pro_price_right ">
                <div class="flex_box">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceRight'),$_smarty_tpl ) );?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stvideo') {?>
                      <?php $_smarty_tpl->_subTemplateRender("module:stvideo/views/templates/hook/stvideo_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stvideos'=>$_smarty_tpl->tpl_vars['extra']->value['content'],'video_position'=>array(11)), 0, true);
?>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
              </div>
            </div>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2078624360668ab4d27045d7_98765829', 'product_customization');
?>


            <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['product_buy']) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-buy.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_summary_location'] == 1 || ($_smarty_tpl->tpl_vars['sttheme']->value['product_summary_location'] == 2 && $_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1929697737668ab4d27057d1_11932697', 'product_description_short');
?>

              <?php }?>
            
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2125269629668ab4d2707082_72145916', 'product_condition');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_402110564668ab4d27084c3_21984092', 'product_reference');
?>

            
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1985951383668ab4d270b059_37122705', 'product_info_tags');
?>


                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductCenterColumn'),$_smarty_tpl ) );?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
              <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stvideo') {?>
                  <?php $_smarty_tpl->_subTemplateRender("module:stvideo/views/templates/hook/stvideo_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stvideos'=>$_smarty_tpl->tpl_vars['extra']->value['content'],'video_position'=>array(14)), 0, true);
?>
              <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_692040745668ab4d270ccd7_43592635', 'product_center_tab');
?>

        </div>
        </div>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['pro_secondary_column_md']) {?>
      <div class="product_right_column col-lg-<?php if ((12-$_smarty_tpl->tpl_vars['sttheme']->value['pro_image_column_md']-$_smarty_tpl->tpl_vars['sttheme']->value['pro_primary_column_md']) >= $_smarty_tpl->tpl_vars['sttheme']->value['pro_secondary_column_md']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['pro_secondary_column_md'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) 12-$_smarty_tpl->tpl_vars['sttheme']->value['pro_image_column_md']-$_smarty_tpl->tpl_vars['sttheme']->value['pro_primary_column_md'], ENT_QUOTES, 'UTF-8');
}?>  mb-3">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1818358980668ab4d270f259_51953706', 'pro_secondary_column');
?>

      </div>
      <?php }?>

    </div><?php }
/* {block 'product_flags'} */
class Block_556592043668ab4d26f94f3_96919874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                          <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'ststickers') {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/sticker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stickers'=>$_smarty_tpl->tpl_vars['extra']->value['content'],'sticker_position'=>array(0,1,2,3,4,5,6,7,8,9,12),'is_from_product_page'=>1,'sticker_quantity'=>$_smarty_tpl->tpl_vars['product']->value['quantity'],'sticker_allow_oosp'=>$_smarty_tpl->tpl_vars['product']->value['allow_oosp'],'sticker_quantity_all_versions'=>$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'],'sticker_stock_text'=>$_smarty_tpl->tpl_vars['product']->value['availability_message']), 0, true);
?>
                          <?php } elseif ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stvideo') {?>
                              <?php $_smarty_tpl->_subTemplateRender("module:stvideo/views/templates/hook/stvideo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stvideos'=>$_smarty_tpl->tpl_vars['extra']->value['content']['videos'],'video_position'=>array(1,2,3,4,5,6,7,8,9)), 0, true);
?>
                          <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_thumbnails'} */
class Block_91968451668ab4d26f86b7_38107138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (($_smarty_tpl->tpl_vars['product']->value['images'] && count($_smarty_tpl->tpl_vars['product']->value['images'])) || ((isset($_smarty_tpl->tpl_vars['st_pro_video']->value)) && (isset($_smarty_tpl->tpl_vars['st_pro_video']->value['videos'])))) {?>
                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } else { ?>
                  <div class="posi_rel">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_556592043668ab4d26f94f3_96919874', 'product_flags', $this->tplIndex);
?>

                    <img
                      src="<?php if ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize'][$_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type']]['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['img_prod_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['lang_iso_code'], ENT_QUOTES, 'UTF-8');?>
-default-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['gallery_image_type'], ENT_QUOTES, 'UTF-8');?>
.jpg<?php }?>"
                      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="product_gallery_no_picture"
                    />
                  </div>
                <?php }?>
              <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_556832745668ab4d26f8532_78731028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91968451668ab4d26f86b7_38107138', 'product_cover_thumbnails', $this->tplIndex);
?>


            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2083553261668ab4d26f8380_91901317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2083553261668ab4d26f8380_91901317',
  ),
  'page_content' => 
  array (
    0 => 'Block_556832745668ab4d26f8532_78731028',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_91968451668ab4d26f86b7_38107138',
  ),
  'product_flags' => 
  array (
    0 => 'Block_556592043668ab4d26f94f3_96919874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <section class="product_left_content mb-2">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_556832745668ab4d26f8532_78731028', 'page_content', $this->tplIndex);
?>

          </section>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>
          <div class="product_left_column_hook"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductLeftColumn'),$_smarty_tpl ) );?>
</div>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stvideo') {?>
                <?php $_smarty_tpl->_subTemplateRender("module:stvideo/views/templates/hook/stvideo_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stvideos'=>$_smarty_tpl->tpl_vars['extra']->value['content'],'video_position'=>array(13)), 0, true);
?>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_header'} */
class Block_952248303668ab4d26fedc5_35922663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['product_name_at_top'] || ($_smarty_tpl->tpl_vars['sttheme']->value['product_name_at_top'] == 2 && !$_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device'])) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-name.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_608072897668ab4d26fec19_29169117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_608072897668ab4d26fec19_29169117',
  ),
  'page_header' => 
  array (
    0 => 'Block_952248303668ab4d26fedc5_35922663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_952248303668ab4d26fedc5_35922663', 'page_header', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_flags_under'} */
class Block_360549734668ab4d26ffb12_17915294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags_under' => 
  array (
    0 => 'Block_360549734668ab4d26ffb12_17915294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'ststickers') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/sticker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_sticker'=>1,'stickers'=>$_smarty_tpl->tpl_vars['extra']->value['content'],'sticker_position'=>array(10,11),'is_from_product_page'=>1,'sticker_quantity'=>$_smarty_tpl->tpl_vars['product']->value['quantity'],'sticker_allow_oosp'=>$_smarty_tpl->tpl_vars['product']->value['allow_oosp'],'sticker_quantity_all_versions'=>$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'],'sticker_stock_text'=>$_smarty_tpl->tpl_vars['product']->value['availability_message']), 0, true);
?>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayUnderProductName'),$_smarty_tpl ) );?>
            
          <?php
}
}
/* {/block 'product_flags_under'} */
/* {block 'product_description_short'} */
class Block_281375267668ab4d2701b81_35219476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_281375267668ab4d2701b81_35219476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="product-description-short-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-description-short mb-3 truncate_block st_showless_block_<?php if (!empty($_smarty_tpl->tpl_vars['sttheme']->value['showless_short_desc'])) {?>1<?php } else { ?>0<?php }?> truncate_cate_desc_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['truncate_short_desc'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?> itemprop="description" <?php }?>><div class="st_read_more_box"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div><a href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" class="st_read_more" rel="nofollow"><span class="st_showmore_btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><span class="st_showless_btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show less','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span></a></div>
                <div class="steasy_divider between_short_and_price"><div class="steasy_divider_item"></div></div>
              <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_prices'} */
class Block_371238639668ab4d27033b7_19922239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_371238639668ab4d27033b7_19922239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_customization'} */
class Block_2078624360668ab4d27045d7_98765829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_2078624360668ab4d27045d7_98765829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
              <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_description_short'} */
class Block_1929697737668ab4d27057d1_11932697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_1929697737668ab4d27057d1_11932697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <div id="product-description-short-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-description-short mb-3 truncate_block st_showless_block_<?php if (!empty($_smarty_tpl->tpl_vars['sttheme']->value['showless_short_desc'])) {?>1<?php } else { ?>0<?php }?> truncate_cate_desc_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['truncate_short_desc'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?> itemprop="description" <?php }?>><div class="st_read_more_box"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div><a href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" class="st_read_more" rel="nofollow"><span class="st_showmore_btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><span class="st_showless_btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show less','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span></a></div>
                  <div class="steasy_divider between_short_and_price"><div class="steasy_divider_item"></div></div>
                <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_condition'} */
class Block_2125269629668ab4d2707082_72145916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_condition' => 
  array (
    0 => 'Block_2125269629668ab4d2707082_72145916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['display_pro_condition'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && $_smarty_tpl->tpl_vars['product']->value['condition']) {?>
                <div class="product-condition  pro_extra_info flex_container <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['display_pro_condition']) {?> display_none <?php }?>">
                  <span class="pro_extra_info_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Condition','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </span>
                  <div class="pro_extra_info_content flex_child">
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['condition']['label'], ENT_QUOTES, 'UTF-8');?>

                  </div>
                </div>
              <?php }?>
            <?php
}
}
/* {/block 'product_condition'} */
/* {block 'product_reference'} */
class Block_402110564668ab4d27084c3_21984092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reference' => 
  array (
    0 => 'Block_402110564668ab4d27084c3_21984092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['display_pro_reference'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && (isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display']))) {?>
              <div class="product-reference pro_extra_info flex_container <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['display_pro_reference']) {?> display_none <?php }?>">
                <span class="pro_extra_info_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
: </span>
                <div class="pro_extra_info_content flex_child" <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?> itemprop="sku" <?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</div>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['ean13'] && $_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?><meta itemprop="GTIN13" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['ean13'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
            <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['show_brand_logo'] == 2 || $_smarty_tpl->tpl_vars['sttheme']->value['show_brand_logo'] == 3) && (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) && $_smarty_tpl->tpl_vars['product_manufacturer']->value->active) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-brand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
            <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_info_tags'} */
class Block_1985951383668ab4d270b059_37122705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_tags' => 
  array (
    0 => 'Block_1985951383668ab4d270b059_37122705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_pro_tags'] == 2 && !empty($_smarty_tpl->tpl_vars['product']->value['tags'])) {?>
                <div class="product-info-tags pro_extra_info flex_container flex_start">
                  <span class="pro_extra_info_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
: </span>
                  <div class="pro_extra_info_content flex_child">
                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  </div>
                </div>
              <?php }?>
            <?php
}
}
/* {/block 'product_info_tags'} */
/* {block 'product_center_tab'} */
class Block_692040745668ab4d270ccd7_43592635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_center_tab' => 
  array (
    0 => 'Block_692040745668ab4d270ccd7_43592635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_tabs'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?><div class="right_more_info_block pro_more_info m-t-1 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_tabs_style'] == 1) {?> accordion_more_info <?php }
if (!$_smarty_tpl->tpl_vars['sttheme']->value['product_tabs']) {?> display_none <?php }?>"><?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_tabs']) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?></div><?php }?>
            <?php
}
}
/* {/block 'product_center_tab'} */
/* {block 'pro_secondary_column'} */
class Block_1818358980668ab4d270f259_51953706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pro_secondary_column' => 
  array (
    0 => 'Block_1818358980668ab4d270f259_51953706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_buy']) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-buy.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

        <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['show_brand_logo'] == 1 && (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) && $_smarty_tpl->tpl_vars['product_manufacturer']->value->active) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-brand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductRightColumn'),$_smarty_tpl ) );?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stvideo') {?>
              <?php $_smarty_tpl->_subTemplateRender("module:stvideo/views/templates/hook/stvideo_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stvideos'=>$_smarty_tpl->tpl_vars['extra']->value['content'],'video_position'=>array(15)), 0, true);
?>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'pro_secondary_column'} */
}
