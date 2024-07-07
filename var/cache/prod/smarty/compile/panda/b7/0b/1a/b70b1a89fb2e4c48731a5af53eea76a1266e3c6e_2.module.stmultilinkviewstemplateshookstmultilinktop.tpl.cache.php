<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stmultilinkviewstemplateshookstmultilinktop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f084eea8_66310035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b70b1a89fb2e4c48731a5af53eea76a1266e3c6e' => 
    array (
      0 => 'module:stmultilinkviewstemplateshookstmultilinktop.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f084eea8_66310035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1374136827668a67f08478f3_60751689';
if (!empty($_smarty_tpl->tpl_vars['link_groups']->value)) {?>
<!-- MODULE st stmultilink -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['link_groups']->value, 'link_group');
$_smarty_tpl->tpl_vars['link_group']->index = -1;
$_smarty_tpl->tpl_vars['link_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link_group']->value) {
$_smarty_tpl->tpl_vars['link_group']->do_else = false;
$_smarty_tpl->tpl_vars['link_group']->index++;
$_smarty_tpl->tpl_vars['link_group']->first = !$_smarty_tpl->tpl_vars['link_group']->index;
$__foreach_link_group_17_saved = $_smarty_tpl->tpl_vars['link_group'];
?>
    <div id="multilink_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_group']->value['id_st_multi_link_group'], ENT_QUOTES, 'UTF-8');?>
" class="stlinkgroups_top dropdown_wrap <?php if ($_smarty_tpl->tpl_vars['link_group']->first) {?>first-item<?php }?> top_bar_item"><?php if ($_smarty_tpl->tpl_vars['link_group']->value['url']) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_group']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) strip_tags((string) $_smarty_tpl->tpl_vars['link_group']->value['name']), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['link_group']->value['nofollow'])) && $_smarty_tpl->tpl_vars['link_group']->value['nofollow']) {?> rel="nofollow" <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['link_group']->value['new_window'])) && $_smarty_tpl->tpl_vars['link_group']->value['new_window']) {?> target="_blank" <?php }
} else { ?><div<?php }?> class="dropdown_tri <?php if (is_array($_smarty_tpl->tpl_vars['link_group']->value['links']) && count($_smarty_tpl->tpl_vars['link_group']->value['links'])) {?> dropdown_tri_in <?php }?> header_item" aria-haspopup="true" aria-expanded="false"><?php if ($_smarty_tpl->tpl_vars['link_group']->value['icon_class']) {?><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_group']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
 st_custom_link_icon <?php if (is_array($_smarty_tpl->tpl_vars['link_group']->value['links']) && count($_smarty_tpl->tpl_vars['link_group']->value['links'])) {?> mar_r4 <?php }?>"></i><?php }?><span id="multilink_lable_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_group']->value['id_st_multi_link_group'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['link_group']->value['name'];?>
</span><i class="fto-angle-down arrow_down arrow"></i><i class="fto-angle-up arrow_up arrow"></i><?php if ($_smarty_tpl->tpl_vars['link_group']->value['url']) {?></a><?php } else { ?></div><?php }?>
        <?php if (is_array($_smarty_tpl->tpl_vars['link_group']->value['links']) && count($_smarty_tpl->tpl_vars['link_group']->value['links'])) {?>
        <div class="dropdown_list" aria-labelledby="multilink_lable_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_group']->value['id_st_multi_link_group'], ENT_QUOTES, 'UTF-8');?>
">
            <ul class="dropdown_list_ul dropdown_box custom_links_list <?php if ((isset($_smarty_tpl->tpl_vars['link_group']->value['link_align'])) && $_smarty_tpl->tpl_vars['link_group']->value['link_align']) {?> text-center <?php }?>">
    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['link_group']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
    			<li>
            		<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown_list_item" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['link']->value['nofollow'])) && $_smarty_tpl->tpl_vars['link']->value['nofollow']) {?> rel="nofollow" <?php }?> <?php if ($_smarty_tpl->tpl_vars['link']->value['new_window']) {?> target="_blank" <?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['link']->value['icon_class']) {?><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
 mar_r4"></i><?php }
echo $_smarty_tpl->tpl_vars['link']->value['label'];?>

            		</a>
    			</li>
    		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    		</ul>
        </div>
        <?php }?>
    </div>
<?php
$_smarty_tpl->tpl_vars['link_group'] = $__foreach_link_group_17_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /MODULE st stmultilink -->
<?php }
}
}
