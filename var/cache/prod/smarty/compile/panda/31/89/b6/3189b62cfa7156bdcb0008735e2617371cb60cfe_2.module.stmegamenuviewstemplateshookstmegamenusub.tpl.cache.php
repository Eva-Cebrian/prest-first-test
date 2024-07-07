<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stmegamenuviewstemplateshookstmegamenusub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a9dd1f4_11662642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3189b62cfa7156bdcb0008735e2617371cb60cfe' => 
    array (
      0 => 'module:stmegamenuviewstemplateshookstmegamenusub.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stmegamenu/views/templates/hook/stmegamenu-cate-img.tpl' => 3,
    'module:stmegamenu/views/templates/hook/stmegamenu-category.tpl' => 4,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'module:stmegamenu/views/templates/hook/stmegamenu-link.tpl' => 2,
  ),
),false)) {
function content_668ab42a9dd1f4_11662642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->compiled->nocache_hash = '90780891668ab42a9ac574_24843161';
if ($_smarty_tpl->tpl_vars['mm']->value['is_mega']) {?>
	<div class="<?php if (!(isset($_smarty_tpl->tpl_vars['is_mega_menu_vertical']->value))) {?>stmenu_sub<?php } else { ?>stmenu_vs<?php }?> style_wide col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace(($_smarty_tpl->tpl_vars['mm']->value['width']*10/10),'.','-'), ENT_QUOTES, 'UTF-8');?>
">
		<div class="row m_column_row">
		<?php $_smarty_tpl->_assignInScope('t_width_tpl', 0);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mm']->value['column'], 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
			<?php if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile'] == 2) {
continue 1;
}?>
			<?php if ((isset($_smarty_tpl->tpl_vars['column']->value['children'])) && count($_smarty_tpl->tpl_vars['column']->value['children'])) {?>
			<?php $_smarty_tpl->_assignInScope('t_width_tpl', $_smarty_tpl->tpl_vars['t_width_tpl']->value+$_smarty_tpl->tpl_vars['column']->value['width']);?>
			<?php if ($_smarty_tpl->tpl_vars['t_width_tpl']->value > $_smarty_tpl->tpl_vars['mm']->value['t_width']) {?>
				<?php $_smarty_tpl->_assignInScope('t_width_tpl', $_smarty_tpl->tpl_vars['column']->value['width']);?>
				</div><div class="row m_column_row">
			<?php }?>
			<div id="st_menu_column_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column']->value['id_st_mega_column'], ENT_QUOTES, 'UTF-8');?>
" class="col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace(($_smarty_tpl->tpl_vars['column']->value['width']*10/10),'.','-'), ENT_QUOTES, 'UTF-8');?>
">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['children'], 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['block']->value['hide_on_mobile'] == 2) {
continue 1;
}?>
					<?php if ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 1) {?>
						<?php if ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 2 && (isset($_smarty_tpl->tpl_vars['block']->value['children']))) {?>
							<div id="st_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
								<?php if ($_smarty_tpl->tpl_vars['block']->value['show_cate_img']) {?>
				                    <?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-cate-img.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('menu_cate'=>$_smarty_tpl->tpl_vars['block']->value['children'],'nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window']), 0, true);
?>
								<?php }?>
								<ul class="mu_level_1">
									<li class="ml_level_1">
										<a id="st_ma_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="ma_level_1 ma_item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
										<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']['children']) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
											<ul class="mu_level_2">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
											<li class="ml_level_2"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="ma_level_2 ma_item"><i class="fto-angle-right list_arrow"></i><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></li>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</ul>	
										<?php }?>
									</li>
								</ul>	
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 0 && (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
							<div id="st_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
							<div class="row">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'menu', true);
$_smarty_tpl->tpl_vars['menu']->iteration = 0;
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
$_smarty_tpl->tpl_vars['menu']->iteration++;
$_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
$__foreach_menu_31_saved = $_smarty_tpl->tpl_vars['menu'];
?>
								<div class="col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-'), ENT_QUOTES, 'UTF-8');?>
">
									<?php if ($_smarty_tpl->tpl_vars['block']->value['show_cate_img']) {?>
					                    <?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-cate-img.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('menu_cate'=>$_smarty_tpl->tpl_vars['menu']->value,'nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window']), 0, true);
?>
									<?php }?>
									<ul class="mu_level_1">
										<li class="ml_level_1">
											<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="ma_level_1 ma_item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
											<?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['children'])) && is_array($_smarty_tpl->tpl_vars['menu']->value['children']) && count($_smarty_tpl->tpl_vars['menu']->value['children'])) {?>
												<?php $_smarty_tpl->_assignInScope('granditem', 0);?>
												<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['granditem'])) && $_smarty_tpl->tpl_vars['block']->value['granditem']) {
$_smarty_tpl->_assignInScope('granditem', 1);
}?>
												<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'granditem'=>$_smarty_tpl->tpl_vars['granditem']->value,'m_level'=>2), 0, true);
?>
											<?php }?>
										</li>
									</ul>	
								</div>
								<?php if ($_smarty_tpl->tpl_vars['menu']->iteration%$_smarty_tpl->tpl_vars['block']->value['items_md'] == 0 && !$_smarty_tpl->tpl_vars['menu']->last) {?>
								</div><div class="row">
								<?php }?>
							<?php
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_31_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 1 || $_smarty_tpl->tpl_vars['block']->value['subtype'] == 3) {?>
							<div id="st_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
								<?php if ($_smarty_tpl->tpl_vars['block']->value['show_cate_img']) {?>
				                    <?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-cate-img.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('menu_cate'=>$_smarty_tpl->tpl_vars['block']->value['children'],'nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window']), 0, true);
?>
								<?php }?>
								<ul class="mu_level_1">
									<li class="ml_level_1">
										<a id="st_ma_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="ma_level_1 ma_item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
										<?php if ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 1 && (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']['children']) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
											<?php $_smarty_tpl->_assignInScope('granditem', 0);?>
											<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['granditem'])) && $_smarty_tpl->tpl_vars['block']->value['granditem']) {
$_smarty_tpl->_assignInScope('granditem', 1);
}?>
											<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['block']->value['children']['children'],'granditem'=>$_smarty_tpl->tpl_vars['granditem']->value,'m_level'=>2), 0, true);
?>
										<?php }?>
									</li>
								</ul>	
							</div>
						<?php }?>
					<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 2 && (isset($_smarty_tpl->tpl_vars['block']->value['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
						<div id="st_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
						<div class="products_sldier_swiper row">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
							<div class="col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-'), ENT_QUOTES, 'UTF-8');?>
">
								<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('no_google_rich_snippets'=>true,'lazy_load'=>false), 0, true);
?>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 3 && (isset($_smarty_tpl->tpl_vars['block']->value['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
						<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['subtype'])) && $_smarty_tpl->tpl_vars['block']->value['subtype']) {?>
							<div id="st_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
							<div class="row">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'brand', true);
$_smarty_tpl->tpl_vars['brand']->iteration = 0;
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
$_smarty_tpl->tpl_vars['brand']->iteration++;
$_smarty_tpl->tpl_vars['brand']->last = $_smarty_tpl->tpl_vars['brand']->iteration === $_smarty_tpl->tpl_vars['brand']->total;
$__foreach_brand_33_saved = $_smarty_tpl->tpl_vars['brand'];
?>
								<div class="col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-'), ENT_QUOTES, 'UTF-8');?>
">
									<ul class="mu_level_1">
										<li class="ml_level_1">
											<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_1 advanced_ma_item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
										</li>
									</ul>	
								</div>
								<?php if ($_smarty_tpl->tpl_vars['brand']->iteration%$_smarty_tpl->tpl_vars['block']->value['items_md'] == 0 && !$_smarty_tpl->tpl_vars['brand']->last) {?>
								</div><div class="row">
								<?php }?>
							<?php
$_smarty_tpl->tpl_vars['brand'] = $__foreach_brand_33_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
							</div>
						<?php } else { ?>
							<div id="st_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="row">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'brand', true);
$_smarty_tpl->tpl_vars['brand']->iteration = 0;
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
$_smarty_tpl->tpl_vars['brand']->iteration++;
$_smarty_tpl->tpl_vars['brand']->last = $_smarty_tpl->tpl_vars['brand']->iteration === $_smarty_tpl->tpl_vars['brand']->total;
$__foreach_brand_34_saved = $_smarty_tpl->tpl_vars['brand'];
?>
								<div class="col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-'), ENT_QUOTES, 'UTF-8');?>
">
									<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="st_menu_brand">
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
$_smarty_tpl->tpl_vars['brand'] = $__foreach_brand_34_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php }?>
					<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 4) {?>
						<div id="st_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
							<ul class="mu_level_1">
								<li class="ml_level_1">
									<a id="st_ma_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" href="<?php if ($_smarty_tpl->tpl_vars['block']->value['m_link']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['m_link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:;<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['m_title'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="ma_level_1 ma_item <?php if (!$_smarty_tpl->tpl_vars['block']->value['m_link']) {?> ma_span<?php }?>"><?php if ($_smarty_tpl->tpl_vars['block']->value['icon_class']) {?><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['m_name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
									<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
										<ul class="mu_level_2">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'menu', true);
$_smarty_tpl->tpl_vars['menu']->iteration = 0;
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
$_smarty_tpl->tpl_vars['menu']->iteration++;
$_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
$__foreach_menu_35_saved = $_smarty_tpl->tpl_vars['menu'];
?>
											<?php if ($_smarty_tpl->tpl_vars['menu']->value['hide_on_mobile'] == 2) {
continue 1;
}?>
											<?php $_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value,'m_level'=>2), 0, true);
?>
										<?php
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_35_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
									<?php }?>
								</li>
							</ul>	
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 5 && $_smarty_tpl->tpl_vars['block']->value['html']) {?>
						<div id="st_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="style_content">
							<?php echo $_smarty_tpl->tpl_vars['block']->value['html'];?>

						</div>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
	<?php } else { ?>
		<ul id="st_menu_multi_level_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mm']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if (!(isset($_smarty_tpl->tpl_vars['is_mega_menu_vertical']->value))) {?>stmenu_sub<?php } else { ?>stmenu_vs<?php }?> stmenu_multi_level">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mm']->value['column'], 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile'] == 2) {
continue 1;
}
if ((isset($_smarty_tpl->tpl_vars['column']->value['children'])) && count($_smarty_tpl->tpl_vars['column']->value['children'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['children'], 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
if ($_smarty_tpl->tpl_vars['block']->value['hide_on_mobile'] == 2) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 1) {
if ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 2 && (isset($_smarty_tpl->tpl_vars['block']->value['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {
if ((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']['children']) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><li class="ml_level_1"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="ma_level_1 ma_item"><i class="fto-angle-right list_arrow"></i><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
} elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 0 && (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'menu', true);
$_smarty_tpl->tpl_vars['menu']->iteration = 0;
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
$_smarty_tpl->tpl_vars['menu']->iteration++;
$_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
$__foreach_menu_39_saved = $_smarty_tpl->tpl_vars['menu'];
?><li class="ml_level_1"><?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['menu']->value['children'])) && is_array($_smarty_tpl->tpl_vars['menu']->value['children']) && count($_smarty_tpl->tpl_vars['menu']->value['children'])));?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="ma_level_1 ma_item <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> has_children <?php }?>"><i class="fto-angle-right list_arrow"></i><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {
$_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'m_level'=>2), 0, true);
}?></li><?php
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_39_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 1 || $_smarty_tpl->tpl_vars['block']->value['subtype'] == 3) {?><li class="ml_level_1"><?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])));?><a id="st_ma_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="ma_level_1 ma_item <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> has_children <?php }?>"><i class="fto-angle-right list_arrow"></i><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span><?php }
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {
$_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['block']->value['children']['children'],'m_level'=>2), 0, true);
}?></li><?php }
} elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 4) {?><li class="ml_level_1"><?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['block']->value['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']) && count($_smarty_tpl->tpl_vars['block']->value['children'])));?><a id="st_ma_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" href="<?php if ($_smarty_tpl->tpl_vars['block']->value['m_link']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['m_link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:;<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['m_title'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="ma_level_1 ma_item <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> has_children <?php }
if (!$_smarty_tpl->tpl_vars['block']->value['m_link']) {?> ma_span<?php }?>"><i class="<?php if ($_smarty_tpl->tpl_vars['block']->value['icon_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['icon_class'], ENT_QUOTES, 'UTF-8');
} else { ?>fto-angle-right<?php }?> list_arrow"></i><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['m_name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span><?php }
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><ul class="mu_level_2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'menu', true);
$_smarty_tpl->tpl_vars['menu']->iteration = 0;
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
$_smarty_tpl->tpl_vars['menu']->iteration++;
$_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
$__foreach_menu_40_saved = $_smarty_tpl->tpl_vars['menu'];
if ($_smarty_tpl->tpl_vars['menu']->value['hide_on_mobile'] == 2) {
continue 1;
}
$_smarty_tpl->_subTemplateRender("module:stmegamenu/views/templates/hook/stmegamenu-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value,'m_level'=>2), 0, true);
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_40_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></li><?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 5 && $_smarty_tpl->tpl_vars['block']->value['html']) {?><li class="ml_level_1"><div id="st_menu_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_st_mega_menu'], ENT_QUOTES, 'UTF-8');?>
" class="style_content"><?php echo $_smarty_tpl->tpl_vars['block']->value['html'];?>
</div></li><?php } else {
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }
}
}
