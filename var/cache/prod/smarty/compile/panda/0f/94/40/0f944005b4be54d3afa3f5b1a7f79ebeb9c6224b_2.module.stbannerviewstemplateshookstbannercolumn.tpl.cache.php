<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stbannerviewstemplateshookstbannercolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42ae87437_45717783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f944005b4be54d3afa3f5b1a7f79ebeb9c6224b' => 
    array (
      0 => 'module:stbannerviewstemplateshookstbannercolumn.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stbanner/views/templates/hook/stbanner-block.tpl' => 1,
    'module:stbanner/views/templates/hook/stbanner-column.tpl' => 2,
  ),
),false)) {
function content_668ab42ae87437_45717783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1417541208668ab42ae81f92_13858962';
if ((isset($_smarty_tpl->tpl_vars['columns_data']->value))) {?>
    <!-- MODULE st banner column -->
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns_data']->value, 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
            <?php if (((isset($_smarty_tpl->tpl_vars['column']->value['columns'])) && count($_smarty_tpl->tpl_vars['column']->value['columns'])) || ((isset($_smarty_tpl->tpl_vars['column']->value['banners'])) && count($_smarty_tpl->tpl_vars['column']->value['banners']))) {?>
                <div id="banner_box_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column']->value['id_st_banner_group'], ENT_QUOTES, 'UTF-8');?>
" class="col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php if ((isset($_smarty_tpl->tpl_vars['column']->value['width_md']))) {?> col-sm-<?php if ($_smarty_tpl->tpl_vars['column']->value['width_md'] != 0) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column']->value['width_md'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column']->value['width'], ENT_QUOTES, 'UTF-8');
}?> col-<?php if ($_smarty_tpl->tpl_vars['column']->value['width_xs'] != 0) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column']->value['width_xs'], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['column']->value['width_md'] != 0) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column']->value['width_md'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column']->value['width'], ENT_QUOTES, 'UTF-8');
}
}?> banner_col <?php if ((isset($_smarty_tpl->tpl_vars['column']->value['banner_b'])) && $_smarty_tpl->tpl_vars['column']->value['banner_b']) {?> banner_b<?php }?> <?php if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile'] == 1) {?> hidden-sm-down <?php } elseif ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile'] == 2) {?> hidden-md-up <?php }?>" data-height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column']->value['height'], ENT_QUOTES, 'UTF-8');?>
" >
                    <?php if ((isset($_smarty_tpl->tpl_vars['column']->value['banners'])) && count($_smarty_tpl->tpl_vars['column']->value['banners'])) {?>
                        <?php $_smarty_tpl->_subTemplateRender("module:stbanner/views/templates/hook/stbanner-block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('banner_data'=>$_smarty_tpl->tpl_vars['column']->value['banners'][0],'banner_height'=>$_smarty_tpl->tpl_vars['column']->value['height_px'],'banner_style'=>$_smarty_tpl->tpl_vars['banner_style']->value,'banner_lazy_loading'=>$_smarty_tpl->tpl_vars['banner_lazy_loading']->value), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("module:stbanner/views/templates/hook/stbanner-column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('columns_data'=>$_smarty_tpl->tpl_vars['column']->value['columns'],'banner_style'=>$_smarty_tpl->tpl_vars['banner_style']->value,'banner_lazy_loading'=>$_smarty_tpl->tpl_vars['banner_lazy_loading']->value), 0, true);
?>
                    <?php }?>
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>        
    </div>
    <!--/ MODULE st banner column-->
<?php }
}
}
