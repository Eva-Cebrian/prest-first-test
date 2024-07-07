<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stthemeeditorviewstemplatessliderfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0d6e842_18657728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856b12c2e37fd0939bc22915c3f82aa74a5b431f' => 
    array (
      0 => 'module:stthemeeditorviewstemplatessliderfooter.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-slider-item-compact.tpl' => 1,
  ),
),false)) {
function content_668a67f0d6e842_18657728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->compiled->nocache_hash = '2005457228668a67f0d69ac5_98605774';
if ((isset($_smarty_tpl->tpl_vars['module']->value))) {?>
<!-- MODULE st <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module']->value, ENT_QUOTES, 'UTF-8');?>
 -->
<?php }
if ($_smarty_tpl->tpl_vars['aw_display']->value || ((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value)) {?>
<section id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module']->value, ENT_QUOTES, 'UTF-8');?>
_footer_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hook_hash']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module']->value, ENT_QUOTES, 'UTF-8');?>
_footer footer_block block <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['hide_mob']->value == 2) {?> hidden-lg-up <?php }
if (!(isset($_smarty_tpl->tpl_vars['is_stacked_footer']->value)) || !$_smarty_tpl->tpl_vars['is_stacked_footer']->value) {?> col-lg-<?php if ($_smarty_tpl->tpl_vars['footer_wide']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['footer_wide']->value, ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }
}?> <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value == 3) {?> st_open<?php }?>">
    <div class="title_block">
        <?php if (((isset($_smarty_tpl->tpl_vars['title_link']->value)) && $_smarty_tpl->tpl_vars['title_link']->value) || ((isset($_smarty_tpl->tpl_vars['url_entity']->value)) && $_smarty_tpl->tpl_vars['url_entity']->value)) {?>
        <a href="<?php if ((isset($_smarty_tpl->tpl_vars['title_link']->value)) && $_smarty_tpl->tpl_vars['title_link']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_link']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>$_smarty_tpl->tpl_vars['url_entity']->value),$_smarty_tpl ) );
}?>" class="title_block_inner" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        <?php } else { ?>
        <div class="title_block_inner"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</div>
        <?php }?>
        <div class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></div>
    </div>
    <div class="footer_block_content base_list_line line_free">
    <?php if (is_array($_smarty_tpl->tpl_vars['products']->value) && smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-slider-item-compact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('no_google_rich_snippets'=>true), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <p class="warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</p>
    <?php }?>
    </div>
</section>
<?php }
if ((isset($_smarty_tpl->tpl_vars['module']->value))) {?>
<!-- MODULE st <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module']->value, ENT_QUOTES, 'UTF-8');?>
 -->
<?php }
}
}
