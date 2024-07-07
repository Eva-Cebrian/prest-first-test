<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stmegamenuviewstemplateshookstmegamenuul.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f08db9b3_86814359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0401fb676b5c003c5eca5ac1082086cd66765d4' => 
    array (
      0 => 'module:stmegamenuviewstemplateshookstmegamenuul.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stmegamenu/views/templates/hook/stmegamenu-sub.tpl' => 2,
  ),
),false)) {
function content_668a67f08db9b3_86814359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '893181657668a67f08d06d2_91329305';
?>
<ul class="st_mega_menu clearfix mu_level_0">
	<?php if ((isset($_smarty_tpl->tpl_vars['stvertical']->value)) && count($_smarty_tpl->tpl_vars['stvertical']->value) && (isset($_smarty_tpl->tpl_vars['is_mega_menu_main']->value)) && $_smarty_tpl->tpl_vars['is_mega_menu_main']->value) {?>
		<?php $_smarty_tpl->_assignInScope('responsive_max', Configuration::get('STSN_RESPONSIVE_MAX'));?>
		<li id="st_menu_0" class="ml_level_0 <?php if (Configuration::get('STSN_MENU_VER_OPEN')) {?>menu_ver_open_<?php if ($_smarty_tpl->tpl_vars['responsive_max']->value == 1) {?>lg<?php } elseif ($_smarty_tpl->tpl_vars['responsive_max']->value == 2) {?>xl<?php } elseif ($_smarty_tpl->tpl_vars['responsive_max']->value == 3) {?>xxl<?php } else { ?>md<?php }
}?>">
			<a id="st_ma_0" href="javascript:;" class="ma_level_0" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow"><i class="fto-menu"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a>
			<ul class="stmenu_sub stmenu_vertical col-md-3 <?php if (Configuration::get('STSN_MENU_VER_SUB_STYLE')) {?> stmenu_vertical_box <?php }?>">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stvertical']->value, 'mm');
$_smarty_tpl->tpl_vars['mm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mm']->value) {
$_smarty_tpl->tpl_vars['mm']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['mm']->value['m_name']) {?>
					<li id="st_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="mv_level_1"><a id="st_ma_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" href="<?php if ($_smarty_tpl->tpl_vars['mm']->value['m_link']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['m_link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:;<?php }?>" class="mv_item<?php if ((isset($_smarty_tpl->tpl_vars['mm']->value['column'])) && count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?> is_parent<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['mm']->value['m_title']), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['mm']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['mm']->value['new_window']) {?> target="_blank"<?php }?>><?php if ($_smarty_tpl->tpl_vars['mm']->value['icon_class']) {?><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo $_smarty_tpl->tpl_vars['mm']->value['m_name'];
if ($_smarty_tpl->tpl_vars['mm']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
						<?php if ((isset($_smarty_tpl->tpl_vars['mm']->value['column'])) && count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?>
							<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-sub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('is_mega_menu_vertical'=>1), 0, true);
?>
						<?php }?>
					</li>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</li>
	<?php }?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stmenu']->value, 'mm');
$_smarty_tpl->tpl_vars['mm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mm']->value) {
$_smarty_tpl->tpl_vars['mm']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['mm']->value['hide_on_mobile'] == 2) {
continue 1;
}?>
		<?php if ($_smarty_tpl->tpl_vars['mm']->value['m_name'] || $_smarty_tpl->tpl_vars['mm']->value['m_icon']) {?>
		<li id="st_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="ml_level_0 m_alignment_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['alignment'], ENT_QUOTES, 'UTF-8');?>
">
			<a id="st_ma_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" href="<?php if ($_smarty_tpl->tpl_vars['mm']->value['m_link']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['m_link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:;<?php }?>" class="ma_level_0<?php if ((isset($_smarty_tpl->tpl_vars['mm']->value['column'])) && count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?> is_parent<?php }
if ($_smarty_tpl->tpl_vars['mm']->value['m_icon']) {?> ma_icon<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['mm']->value['m_title']), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['mm']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['mm']->value['new_window']) {?> target="_blank"<?php }?>><?php if ($_smarty_tpl->tpl_vars['mm']->value['m_icon']) {
echo $_smarty_tpl->tpl_vars['mm']->value['m_icon'];
} else {
if ($_smarty_tpl->tpl_vars['mm']->value['icon_class']) {?><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo $_smarty_tpl->tpl_vars['mm']->value['m_name'];
}
if ($_smarty_tpl->tpl_vars['mm']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
			<?php if ((isset($_smarty_tpl->tpl_vars['mm']->value['column'])) && count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?>
				<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-sub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php }?>
		</li>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
