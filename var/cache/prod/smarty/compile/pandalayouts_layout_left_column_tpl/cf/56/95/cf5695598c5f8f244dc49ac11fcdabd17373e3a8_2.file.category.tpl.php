<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa5e93dc2_75753076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf5695598c5f8f244dc49ac11fcdabd17373e3a8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/listing/category.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa5e93dc2_75753076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1989814148668adaa5e79556_66071118', 'full_width_top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2103500660668adaa5e79c63_43679000', 'product_list_header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1449849503668adaa5e90c53_55090321', 'product_list_footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1645071258668adaa5e93968_38284555', 'full_width_bottom');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'full_width_top'} */
class Block_1989814148668adaa5e79556_66071118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'full_width_top' => 
  array (
    0 => 'Block_1989814148668adaa5e79556_66071118',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFullWidthCategoryHeader'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'full_width_top'} */
/* {block 'product_list_header'} */
class Block_2103500660668adaa5e79c63_43679000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_2103500660668adaa5e79c63_43679000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_category_title'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?><h1 class="page_heading category_page_heading mb-3 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_category_title'] == 2) {?> text-2 <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['display_category_title'] == 3) {?> text-3 <?php } else { ?> text-1 <?php }?> <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['display_category_title']) {?> display_none <?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1><?php }?>
    <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['display_category_image'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && (isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'])) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && $_smarty_tpl->tpl_vars['category']->value['image'] && $_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url']) {?>
      <div class="category-cover mb-3 <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['display_category_image']) {?> display_none <?php }?>">
        <img class="cate_pro_lazy" data-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['retina'] && (isset($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default_2x']['url']))) {?> data-srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default_2x']['url'], ENT_QUOTES, 'UTF-8');?>
 2x" <?php }?> alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>">
      </div>
    <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['display_cate_desc_full'] == 1 || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && $_smarty_tpl->tpl_vars['category']->value['description']) {?>
    <div id="category-description" class="category-description style_content mb-3 truncate_block st_showless_block_<?php if (!empty($_smarty_tpl->tpl_vars['sttheme']->value['showless_cate_desc'])) {?>1<?php } else { ?>0<?php }?> truncate_cate_desc_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['truncate_cate_desc'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_cate_desc_full'] != 1) {?> display_none <?php }?>"><?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_cate_desc_full'] == 1 || (!$_smarty_tpl->tpl_vars['sttheme']->value['display_cate_desc_full'] && (isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?><div class="st_read_more_box"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div><?php }?><a href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" class="st_read_more" rel="nofollow"><span class="st_showmore_btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><span class="st_showless_btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show less','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span></a></div>
    <?php }?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryHeader'),$_smarty_tpl ) );?>

    <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['display_subcate'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && $_smarty_tpl->tpl_vars['subcategories']->value) {?>
    <div id="subcategories" class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['display_subcate']) {?> display_none <?php }?>">
        <h3 class="page_heading mb-3 hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subcategories','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</h3>
        <ul class="inline_list <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_subcate'] == 2) {?> subcate_list_view <?php } else { ?> subcate_grid_view row <?php }?>">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->iteration = 0;
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
$_smarty_tpl->tpl_vars['subcategory']->iteration++;
$__foreach_subcategory_7_saved = $_smarty_tpl->tpl_vars['subcategory'];
?>
            <li class="clearfix <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_subcate'] != 2) {?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['categories_per_fw']) {?> col-fw-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_fw']),'.','-'), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['categories_per_xxl']) {?> col-xxl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_xxl']),'.','-'), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['categories_per_xl']) {?> col-xl-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_xl']),'.','-'), ENT_QUOTES, 'UTF-8');
}?> col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_lg']),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_md']),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_sm']),'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-<?php echo htmlspecialchars((string) smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_xs']),'.','-'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['categories_per_fw'] && $_smarty_tpl->tpl_vars['subcategory']->iteration%$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_fw'] == 1) {?> first-item-of-screen-line<?php }
if ($_smarty_tpl->tpl_vars['sttheme']->value['categories_per_xxl'] && $_smarty_tpl->tpl_vars['subcategory']->iteration%$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_xxl'] == 1) {?> first-item-of-large-line<?php }
if ($_smarty_tpl->tpl_vars['sttheme']->value['categories_per_xl'] && $_smarty_tpl->tpl_vars['subcategory']->iteration%$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_xl'] == 1) {?> first-item-of-desktop-line<?php }
if ($_smarty_tpl->tpl_vars['subcategory']->iteration%$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_lg'] == 1) {?> first-item-of-line<?php }
if ($_smarty_tpl->tpl_vars['subcategory']->iteration%$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_md'] == 1) {?> first-item-of-tablet-line<?php }
if ($_smarty_tpl->tpl_vars['subcategory']->iteration%$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_sm'] == 1) {?> first-item-of-mobile-line<?php }
if ($_smarty_tpl->tpl_vars['subcategory']->iteration%$_smarty_tpl->tpl_vars['sttheme']->value['categories_per_xs'] == 1) {?> first-item-of-portrait-line<?php }?> <?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['subcategory']->value['image'] && $_smarty_tpl->tpl_vars['subcategory']->value['image']['bySize']['category_default']['url']) {?>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="img">
                    <picture>
                    <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value['category_default'])) && $_smarty_tpl->tpl_vars['stwebp']->value['category_default']) {?>
                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                      <source srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['subcategory']->value['image']['bySize']['category_default']['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['subcategory']->value['image']['bySize']['category_default_2x']['url']))) {?>,<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['subcategory']->value['image']['bySize']['category_default_2x']['url'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
 2x<?php }?>"
                        title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                        type="image/webp"
                        >
                    <!--[if IE 9]></video><![endif]-->
                    <?php }?>
                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['subcategory']->value['image']['bySize']['category_default_2x']['url']))) {?> srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['bySize']['category_default_2x']['url'], ENT_QUOTES, 'UTF-8');?>
 2x" <?php }?> alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['bySize']['category_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['bySize']['category_default']['height'], ENT_QUOTES, 'UTF-8');?>
" />
                    </picture>
                </a>
                <?php }?>
                <h3 class="s_title_block <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_subcate'] == 3) {?> nohidden <?php }?>"><a class="subcategory-name" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
                <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_subcate'] == 2 && $_smarty_tpl->tpl_vars['subcategory']->value['description']) {?>
                    <div class="subcat_desc"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value['description'];?>
</div>
                <?php }?>
            </li>
        <?php
$_smarty_tpl->tpl_vars['subcategory'] = $__foreach_subcategory_7_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <?php }
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_footer'} */
class Block_1449849503668adaa5e90c53_55090321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_footer' => 
  array (
    0 => 'Block_1449849503668adaa5e90c53_55090321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (($_smarty_tpl->tpl_vars['sttheme']->value['display_cate_desc_full'] == 2 || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) && $_smarty_tpl->tpl_vars['category']->value['description']) {?>
  <div id="category-description-bottom" class="category-description style_content mb-3 truncate_block st_showless_block_<?php if (!empty($_smarty_tpl->tpl_vars['sttheme']->value['showless_cate_desc'])) {?>1<?php } else { ?>0<?php }?> truncate_cate_desc_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['truncate_cate_desc'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_cate_desc_full'] != 2) {?> display_none <?php }?>"><?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_cate_desc_full'] == 2) {?><div class="st_read_more_box"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div><?php }?><a href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" class="st_read_more" rel="nofollow"><span class="st_showmore_btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><span class="st_showless_btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show less','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span></a></div>
  <?php }?>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryFooter'),$_smarty_tpl ) );?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterCategory"),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'product_list_footer'} */
/* {block 'full_width_bottom'} */
class Block_1645071258668adaa5e93968_38284555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'full_width_bottom' => 
  array (
    0 => 'Block_1645071258668adaa5e93968_38284555',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFullWidthCategoryFooter'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'full_width_bottom'} */
}
