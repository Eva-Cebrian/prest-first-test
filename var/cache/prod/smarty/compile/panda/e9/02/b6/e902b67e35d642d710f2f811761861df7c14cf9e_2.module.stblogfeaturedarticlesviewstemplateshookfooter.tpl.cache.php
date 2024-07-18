<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:stblogfeaturedarticlesviewstemplateshookfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa64b8d55_58648588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e902b67e35d642d710f2f811761861df7c14cf9e' => 
    array (
      0 => 'module:stblogfeaturedarticlesviewstemplateshookfooter.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stblog/views/templates/slider/simple.tpl' => 1,
  ),
),false)) {
function content_668adaa64b8d55_58648588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->compiled->nocache_hash = '276200676668adaa64af164_44788925';
if ((isset($_smarty_tpl->tpl_vars['blog_categories']->value)) && count($_smarty_tpl->tpl_vars['blog_categories']->value)) {?>
    <!-- MODULE st stblogfeaturedarticles -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_categories']->value, 'p_c');
$_smarty_tpl->tpl_vars['p_c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p_c']->value) {
$_smarty_tpl->tpl_vars['p_c']->do_else = false;
?>
        <?php if (((isset($_smarty_tpl->tpl_vars['p_c']->value['blogs'])) && is_array($_smarty_tpl->tpl_vars['p_c']->value['blogs'])) || $_smarty_tpl->tpl_vars['p_c']->value['aw_display_fot']) {?>
        <section id="blog_categories_footer_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hook_hash']->value, ENT_QUOTES, 'UTF-8');?>
" class="blog_categories_footer footer_block block <?php if ($_smarty_tpl->tpl_vars['p_c']->value['hide_mob_fot'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['p_c']->value['hide_mob_fot'] == 2) {?> hidden-lg-up <?php }?> <?php if (!(isset($_smarty_tpl->tpl_vars['is_stacked_footer']->value)) || !$_smarty_tpl->tpl_vars['is_stacked_footer']->value) {?>col-lg-<?php if ($_smarty_tpl->tpl_vars['p_c']->value['footer_wide']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['footer_wide'], ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }
}
if ($_smarty_tpl->tpl_vars['p_c']->value['hide_mob_fot'] == 3) {?> st_open<?php }?>">
            <div class="title_block">
                <?php if ($_smarty_tpl->tpl_vars['p_c']->value['link']) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="title_block_inner"><?php } else { ?><div class="title_block_inner"><?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['slider_title'])) && $_smarty_tpl->tpl_vars['p_c']->value['slider_title']) {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['slider_title'], ENT_QUOTES, 'UTF-8');?>

                    <?php } else { ?>
                       <?php if ($_smarty_tpl->tpl_vars['blog_slider_type']->value == 2) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recent articles','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['is_root_category'])) && $_smarty_tpl->tpl_vars['p_c']->value['is_root_category']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured articles','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
} else { ?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_c']->value['name'], ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        <?php }?>
                    <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['p_c']->value['link']) {?></a><?php } else { ?></div><?php }?>
                <div class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></div>
            </div>
            <div class="footer_block_content">
            <?php if ((isset($_smarty_tpl->tpl_vars['p_c']->value['blogs'])) && is_array($_smarty_tpl->tpl_vars['p_c']->value['blogs']) && smarty_modifier_count($_smarty_tpl->tpl_vars['p_c']->value['blogs'])) {?>
                <div class="base_list_line line_free">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p_c']->value['blogs'], 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender("module:stblog/views/templates/slider/simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php } else { ?>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No posts','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</p>
            <?php }?>
            </div>
        </section>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <!-- /MODULE st stblogfeaturedarticles -->
<?php }
}
}
