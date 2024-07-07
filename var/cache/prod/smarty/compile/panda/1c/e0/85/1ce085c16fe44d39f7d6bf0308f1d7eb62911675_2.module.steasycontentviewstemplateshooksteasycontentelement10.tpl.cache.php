<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:steasycontentviewstemplateshooksteasycontentelement10.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42aa74e96_37155784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ce085c16fe44d39f7d6bf0308f1d7eb62911675' => 
    array (
      0 => 'module:steasycontentviewstemplateshooksteasycontentelement10.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42aa74e96_37155784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1396228372668ab42aa70ee1_72529946';
?>
<div class="stsocial_block <?php if ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_icon_align']))) {?> text-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_column']->value['st_icon_align'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_icon_mobile_align'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_icon_mobile_align']) {?> text-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_column']->value['st_icon_mobile_align'], ENT_QUOTES, 'UTF-8');?>
 <?php }?>">  
<ul class="clearfix stsocial_<?php if ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_el_social']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_column']->value['st_el_social'], ENT_QUOTES, 'UTF-8');
} else { ?>1_1<?php }?> stsocial_list">  
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_column']->value['elements'], 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
	<li class="<?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['st_el_hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?>">
		<a href="<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_url'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_url'], ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>" id="stsocial_item_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['id_st_easy_content_element'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" <?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_header']))) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_header'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['sub_column']->value['st_new_window'])) && $_smarty_tpl->tpl_vars['sub_column']->value['st_new_window']) {?> target="_blank" <?php }?> class="flex_box">
			<div class="social_wrap"><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_icon'], ENT_QUOTES, 'UTF-8');?>
"></i></div>
			<div class="social_header flex_child"><?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_header']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_header'], ENT_QUOTES, 'UTF-8');
}?></div>
		</a>
	</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div><?php }
}
