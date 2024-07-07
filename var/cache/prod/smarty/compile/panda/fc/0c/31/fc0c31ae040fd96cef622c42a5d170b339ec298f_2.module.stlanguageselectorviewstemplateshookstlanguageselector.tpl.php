<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stlanguageselectorviewstemplateshookstlanguageselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0817f23_55458255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc0c31ae040fd96cef622c42a5d170b339ec298f' => 
    array (
      0 => 'module:stlanguageselectorviewstemplateshookstlanguageselector.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f0817f23_55458255 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stlanguageselector -->
<?php if (!(isset($_smarty_tpl->tpl_vars['languages_style']->value)) || !$_smarty_tpl->tpl_vars['languages_style']->value) {?>
	<div id="languages-block-top-mod" class="languages-block top_bar_item dropdown_wrap"><div class="dropdown_tri <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?> dropdown_tri_in <?php }?> header_item" aria-haspopup="true" aria-expanded="false"><?php if ($_smarty_tpl->tpl_vars['display_flags']->value != 1) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_lang_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" class="mar_r4" /><?php }
if ($_smarty_tpl->tpl_vars['display_flags']->value != 2) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');
}?><i class="fto-angle-down arrow_down arrow"></i><i class="fto-angle-up arrow_up arrow"></i></div>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
		<div class="dropdown_list" aria-labelledby="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language selector','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
">
			<ul class="dropdown_box dropdown_list_ul">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
	        		<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?>
					<li>
						<a class="dropdown_list_item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
">
					    <?php if ($_smarty_tpl->tpl_vars['display_flags']->value != 1) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_lang_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" class="mar_r4" /><?php }
if ($_smarty_tpl->tpl_vars['display_flags']->value != 2) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');
}?>
						</a>
					</li>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
		<?php }?>
	</div>
<?php } else { ?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
" class="top_bar_item language_selector">
			    <span class="header_item"><?php if ($_smarty_tpl->tpl_vars['display_flags']->value != 1) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_lang_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" class="mar_r4" /><?php }
if ($_smarty_tpl->tpl_vars['display_flags']->value != 2) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');
}?></span>
			</a>
		<?php } else { ?>
			<span class="top_bar_item language_selector"><span class="header_item"><?php if ($_smarty_tpl->tpl_vars['display_flags']->value != 1) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_lang_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" class="mar_r4" /><?php }
if ($_smarty_tpl->tpl_vars['display_flags']->value != 2) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');
}?></span></span>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
<!-- /MODULE st stlanguageselector --><?php }
}
