<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from 'module:stmegamenuviewstemplateshookstmobilemenuul.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b11c4e7_00482981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bdbca3b76b7b1d56e7be7bd7575b69b6b0031d5' => 
    array (
      0 => 'module:stmegamenuviewstemplateshookstmobilemenuul.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stmegamenu/views/templates/hook/stmegamenu-category.tpl' => 2,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'module:stmegamenu/views/templates/hook/stmegamenu-link.tpl' => 1,
  ),
),false)) {
function content_668ab42b11c4e7_00482981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->compiled->nocache_hash = '1870045111668ab42b0fc450_14996021';
if (!(isset($_smarty_tpl->tpl_vars['is_mega_menu_column']->value))) {?>
	<?php $_smarty_tpl->_assignInScope('is_mega_menu_column', 0);
}
if ((isset($_smarty_tpl->tpl_vars['stmenu']->value))) {?>
	<!-- MODULE st megamenu -->
<ul id="st_mobile_menu_ul" class="mo_mu_level_0">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stmenu']->value, 'mm');
$_smarty_tpl->tpl_vars['mm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mm']->value) {
$_smarty_tpl->tpl_vars['mm']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['mm']->value['hide_on_mobile'] == 1 && !$_smarty_tpl->tpl_vars['is_mega_menu_column']->value) {
continue 1;
}?>
		<?php if ($_smarty_tpl->tpl_vars['mm']->value['m_name']) {?>
		<li id="st_mo_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="mo_ml_level_0 mo_ml_column">
			<?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['mm']->value['column'])) && count($_smarty_tpl->tpl_vars['mm']->value['column'])));?>
			<div class="menu_a_wrap">
			<a id="st_mo_ma_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" href="<?php if ($_smarty_tpl->tpl_vars['mm']->value['m_link']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['m_link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:;<?php }?>" class="mo_ma_level_0"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['m_title'], ENT_QUOTES, 'UTF-8');?>
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
			<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></span><?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mm']->value['column'], 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile'] == 1 && !$_smarty_tpl->tpl_vars['is_mega_menu_column']->value) {
continue 1;
}?>
					<?php if ((isset($_smarty_tpl->tpl_vars['column']->value['children'])) && count($_smarty_tpl->tpl_vars['column']->value['children'])) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['children'], 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['block']->value['hide_on_mobile'] == 1 && !$_smarty_tpl->tpl_vars['is_mega_menu_column']->value) {
continue 1;
}?>
							<?php if ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 1) {?>
								<?php if ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 2 && (isset($_smarty_tpl->tpl_vars['block']->value['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
									<ul id="st_mo_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="mo_mu_level_1 mo_sub_ul">
										<?php if ($_smarty_tpl->tpl_vars['mm']->value['is_mega']) {?>
										<li class="mo_ml_level_1 mo_sub_li">
											<?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']['children']) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])));?>
											<div class="menu_a_wrap">
											<a id="st_mo_ma_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_ma_level_1 mo_sub_a"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
												<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
												<span class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></span>
												<?php }?>
											</div>
											<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
												<ul class="mo_mu_level_2 mo_sub_ul">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
												<li class="mo_ml_level_2 mo_sub_li"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_ma_level_2 mo_sub_a"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</ul>	
											<?php }?>
										</li>
										<?php } else { ?>
											<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']['children']) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
												<li class="mo_ml_level_1 mo_sub_li">
													<div class="menu_a_wrap">
													<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_ma_level_1 mo_sub_a"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
													</div>
												</li>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php }?>
										<?php }?>
									</ul>	
								<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 0 && (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
										<ul class="mo_mu_level_1 mo_sub_ul">
											<li class="mo_ml_level_1 mo_sub_li">
												<?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['menu']->value['children'])) && is_array($_smarty_tpl->tpl_vars['menu']->value['children']) && count($_smarty_tpl->tpl_vars['menu']->value['children'])));?>
												<div class="menu_a_wrap">
												<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_ma_level_1 mo_sub_a"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
												<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></span><?php }?>
												</div>
												<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
													<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'m_level'=>2,'ismobilemenu'=>true), 0, true);
?>
												<?php }?>
											</li>
										</ul>	
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 1 || $_smarty_tpl->tpl_vars['block']->value['subtype'] == 3) {?>
									<ul id="st_mo_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="mo_mu_level_1 mo_sub_ul">
										<li class="mo_ml_level_1 mo_sub_li">
											<?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])));?>
											<div class="menu_a_wrap">
											<a  id="st_mo_ma_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_ma_level_1 mo_sub_a"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
											<?php if ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 1 && $_smarty_tpl->tpl_vars['has_children']->value) {?><span class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></span><?php }?>
											</div>
    										<?php if ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 1 && $_smarty_tpl->tpl_vars['has_children']->value) {?>
												<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['block']->value['children']['children'],'m_level'=>2,'ismobilemenu'=>true), 0, true);
?>
											<?php }?>
										</li>
									</ul>	
								<?php }?>
							<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 2 && (isset($_smarty_tpl->tpl_vars['block']->value['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
								<div id="st_mo_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="stmobilemenu_column">
								<div class="products_sldier_swiper">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
								<div class="m-b-1">
									<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('no_google_rich_snippets'=>true), 0, true);
?>
								</div>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 3 && (isset($_smarty_tpl->tpl_vars['block']->value['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
								<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['subtype'])) && $_smarty_tpl->tpl_vars['block']->value['subtype']) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
    									<ul class="mo_mu_level_1 mo_sub_ul">
											<li class="mo_ml_level_1 mo_sub_li">
												<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_ma_level_1 mo_sub_a"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
											</li>
										</ul>	
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } else { ?>
									<div id="st_mo_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="stmobilemenu_column">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
	    									<div class="mo_brand_div">
												<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="st_menu_brand">
								                    <picture>
												    <?php if ((isset($_smarty_tpl->tpl_vars['stwebp']->value)) && (isset($_smarty_tpl->tpl_vars['stwebp']->value['brand_default'])) && $_smarty_tpl->tpl_vars['stwebp']->value['brand_default']) {?>
												    <!--[if IE 9]><video style="display: none;"><![endif]-->
												      <source srcset="<?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['brand']->value['image'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['sttheme']->value)) && $_smarty_tpl->tpl_vars['sttheme']->value['retina'] && (isset($_smarty_tpl->tpl_vars['brand']->value['image_2x'])) && $_smarty_tpl->tpl_vars['brand']->value['image_2x']) {?>, <?php echo htmlspecialchars((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['brand']->value['image_2x'],'/\.jpg$/','.webp'), ENT_QUOTES, 'UTF-8');?>
 2x<?php }?>"
												        title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
												        type="image/webp"
												        >
												    <!--[if IE 9]></video><![endif]-->
												    <?php }?>
								                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value)) && $_smarty_tpl->tpl_vars['sttheme']->value['retina'] && (isset($_smarty_tpl->tpl_vars['brand']->value['image_2x'])) && $_smarty_tpl->tpl_vars['brand']->value['image_2x']) {?> srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image_2x'], ENT_QUOTES, 'UTF-8');?>
 2x"<?php }?> alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'], ENT_QUOTES, 'UTF-8');?>
" />
												    </picture>
								                </a>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
								<?php }?>
							<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 4) {?>
								<ul id="st_mo_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="mo_mu_level_1 mo_sub_ul">
									<li class="mo_ml_level_1 mo_sub_li">
										<?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['block']->value['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']) && count($_smarty_tpl->tpl_vars['block']->value['children'])));?>
										<div class="menu_a_wrap">
										<a  id="st_mo_ma_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" href="<?php if ($_smarty_tpl->tpl_vars['block']->value['m_link']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['m_link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:;<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['m_title'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_ma_level_1 mo_sub_a <?php if (!$_smarty_tpl->tpl_vars['block']->value['m_link']) {?> ma_span<?php }?>"><?php if ($_smarty_tpl->tpl_vars['block']->value['icon_class']) {?><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['m_name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
										<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
												<?php if ($_smarty_tpl->tpl_vars['menu']->value['hide_on_mobile'] == 1 && !$_smarty_tpl->tpl_vars['is_mega_menu_column']->value) {
continue 1;
}?>
												<span class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></span>
												<?php break 1;?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
										</div>
										<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
												<?php if ($_smarty_tpl->tpl_vars['menu']->value['hide_on_mobile'] == 1 && !$_smarty_tpl->tpl_vars['is_mega_menu_column']->value) {
continue 1;
}?>
												<ul class="mo_mu_level_2 mo_sub_ul">
												<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value,'m_level'=>2,'ismobilemenu'=>true), 0, true);
?>
												</ul>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									</li>
								</ul>	
							<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 5 && $_smarty_tpl->tpl_vars['block']->value['html']) {?>
								<div id="st_mo_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="stmobilemenu_column style_content">
									<?php echo $_smarty_tpl->tpl_vars['block']->value['html'];?>

								</div>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</li>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<!-- /MODULE st megamenu -->
<?php }
}
}
