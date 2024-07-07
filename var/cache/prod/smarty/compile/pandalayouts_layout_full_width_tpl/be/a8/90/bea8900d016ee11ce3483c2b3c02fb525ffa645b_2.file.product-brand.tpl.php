<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:31:30
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/product-brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4d2833010_22855105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bea8900d016ee11ce3483c2b3c02fb525ffa645b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/product-brand.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab4d2833010_22855105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>
      <div class="product-manufacturer pro_extra_info flex_container">
          <span class="pro_extra_info_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
:</span>
          <div class="pro_extra_info_content flex_child">
            <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) && $_smarty_tpl->tpl_vars['product_manufacturer']->value->active) {?>
              <a <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?> itemprop="brand" itemscope="" itemtype="https://schema.org/Brand" <?php }?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to see all products of this brand','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" target="_top" class="pro_extra_info_brand">
                  <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?><meta itemprop="name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                  <?php if (in_array($_smarty_tpl->tpl_vars['sttheme']->value['show_brand_logo'],array(2,4))) {?>
                      <div><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</div>
                  <?php }?>
                  <?php if (in_array($_smarty_tpl->tpl_vars['sttheme']->value['show_brand_logo'],array(1,3,5))) {?>
                      <img <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['google_rich_snippets']) {?> itemprop="image" <?php }?> alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['manufacturer_image_url']->value,'/\.jpg$/','-brand_default.jpg'), ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['brand_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['brand_default']['height'], ENT_QUOTES, 'UTF-8');?>
" class="general_border" /> <!-- class="replace-2x" to do how pre get brand image is suck-->
                  <?php }?>
              </a>
              <?php }?>
          </div>
      </div><?php }
}
