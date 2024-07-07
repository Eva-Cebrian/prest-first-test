<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:steasycontentviewstemplateshooksteasycontentfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42aef69e4_85594246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc8dbf7ccd8a60c251466f7dbe9bc59a6a7c8ba5' => 
    array (
      0 => 'module:steasycontentviewstemplateshooksteasycontentfooter.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:steasycontent/views/templates/hook/steasycontent-columns.tpl' => 1,
  ),
),false)) {
function content_668ab42aef69e4_85594246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->compiled->nocache_hash = '113403469668ab42aef1b88_12559901';
if (smarty_modifier_count($_smarty_tpl->tpl_vars['easy_content']->value) > 0) {?>
    <!-- MODULE st steasycontent -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['easy_content']->value, 'ec');
$_smarty_tpl->tpl_vars['ec']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ec']->value) {
$_smarty_tpl->tpl_vars['ec']->do_else = false;
?>
    <section id="easycontent_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_easy_content'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?> easycontent <?php if (!$_smarty_tpl->tpl_vars['ec']->value['is_stacked_footer']) {?>col-lg-<?php if ($_smarty_tpl->tpl_vars['ec']->value['span']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['span'], ENT_QUOTES, 'UTF-8');
}
}?> footer_block block <?php if ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 4) {?> st_open<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['ec']->value['title']) {?>
        <div class="title_block">
            <?php if ($_smarty_tpl->tpl_vars['ec']->value['url']) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="title_block_inner" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><div class="title_block_inner"><?php }?>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['title'], ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->tpl_vars['ec']->value['url']) {?></a><?php } else { ?></div><?php }?>
            <div class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></div>
        </div>
        <?php }?>
    	<div class="style_content footer_block_content <?php if (!$_smarty_tpl->tpl_vars['ec']->value['title']) {?> keep_open<?php }?>  <?php if ($_smarty_tpl->tpl_vars['ec']->value['width']) {?> width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['ec']->value['text']) {?><div class="easy_brother_block text-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['text_align'], ENT_QUOTES, 'UTF-8');?>
 text-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['mobile_text_align'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['ec']->value['text'];?>
</div><?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['columns'])) && count($_smarty_tpl->tpl_vars['ec']->value['columns'])) {
$_smarty_tpl->_subTemplateRender("module:steasycontent/views/templates/hook/steasycontent-columns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['ec']->value['columns']), 0, true);
}?>
    	</div>
    </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <!-- /MODULE st steasycontent -->
<?php }
}
}
