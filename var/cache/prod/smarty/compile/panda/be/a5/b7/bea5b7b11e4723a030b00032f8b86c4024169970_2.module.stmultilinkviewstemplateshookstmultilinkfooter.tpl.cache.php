<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from 'module:stmultilinkviewstemplateshookstmultilinkfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b06cd57_52418083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bea5b7b11e4723a030b00032f8b86c4024169970' => 
    array (
      0 => 'module:stmultilinkviewstemplateshookstmultilinkfooter.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stmultilink/views/templates/hook/stmultilink-item.tpl' => 1,
  ),
),false)) {
function content_668ab42b06cd57_52418083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '324021472668ab42b067a97_88066001';
if (!empty($_smarty_tpl->tpl_vars['link_groups']->value)) {?>
<!-- MODULE st stmultilink -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['link_groups']->value, 'link_group');
$_smarty_tpl->tpl_vars['link_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link_group']->value) {
$_smarty_tpl->tpl_vars['link_group']->do_else = false;
?>
<section id="multilink_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_group']->value['id_st_multi_link_group'], ENT_QUOTES, 'UTF-8');?>
" class="stlinkgroups_links_footer <?php if (!$_smarty_tpl->tpl_vars['link_group']->value['is_stacked_footer']) {?>col-lg-<?php if ($_smarty_tpl->tpl_vars['link_group']->value['span']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_group']->value['span'], ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }
}?> footer_block block <?php if ($_smarty_tpl->tpl_vars['link_group']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['link_group']->value['hide_on_mobile'] == 2 || !$_smarty_tpl->tpl_vars['link_group']->value['name']) {?> st_open<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['link_group']->value['name']) {?>
    <div class="title_block <?php if ($_smarty_tpl->tpl_vars['link_group']->value['link_align']) {?> text-center <?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['link_group']->value['url']) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_group']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="title_block_inner" title="<?php echo htmlspecialchars((string) strip_tags((string) $_smarty_tpl->tpl_vars['link_group']->value['name']), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['link_group']->value['nofollow'])) && $_smarty_tpl->tpl_vars['link_group']->value['nofollow']) {?> rel="nofollow" <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['link_group']->value['new_window'])) && $_smarty_tpl->tpl_vars['link_group']->value['new_window']) {?> target="_blank" <?php }?>><?php } else { ?><div class="title_block_inner"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['link_group']->value['icon_class']) {?><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_group']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
 st_custom_link_icon icon-mar-r4"></i><?php }
echo $_smarty_tpl->tpl_vars['link_group']->value['name'];?>

        <?php if ($_smarty_tpl->tpl_vars['link_group']->value['url']) {?></a><?php } else { ?></div><?php }?>
        <div class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></div>
    </div>
    <?php }?>
    <ul class="footer_block_content bullet custom_links_list <?php if ($_smarty_tpl->tpl_vars['link_group']->value['link_align']) {?> text-center <?php }
if (!$_smarty_tpl->tpl_vars['link_group']->value['name']) {?> keep_open<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['link_group']->value['links']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['link_group']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
    	<li>
    		<?php $_smarty_tpl->_subTemplateRender("module:stmultilink/views/templates/hook/stmultilink-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    	</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    </ul>
</section>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /MODULE st stmultilink -->
<?php }
}
}
