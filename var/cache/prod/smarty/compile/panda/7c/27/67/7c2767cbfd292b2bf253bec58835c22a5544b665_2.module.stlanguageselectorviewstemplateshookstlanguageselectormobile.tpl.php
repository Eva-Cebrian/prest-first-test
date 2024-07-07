<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from 'module:stlanguageselectorviewstemplateshookstlanguageselectormobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b16bbc3_72048774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c2767cbfd292b2bf253bec58835c22a5544b665' => 
    array (
      0 => 'module:stlanguageselectorviewstemplateshookstlanguageselectormobile.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42b16bbc3_72048774 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stlanguageselector -->
<!-- Block languages module -->
<ul id="languages-block_mobile_menu" class="mo_mu_level_0 mobile_menu_ul">
	<li class="mo_ml_level_0 mo_ml_column">
		<div class="menu_a_wrap">
		<a href="javascript:;" rel="alternate" hreflang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" class="mo_ma_level_0 ma_span"><?php if ($_smarty_tpl->tpl_vars['display_flags']->value != 1) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_lang_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" class="mar_r4" /><?php }
if ($_smarty_tpl->tpl_vars['display_flags']->value != 2) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');
}?></a>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><span class="opener dlm"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></span><?php }?>
		</div>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
		<ul class="mo_mu_level_1 mo_sub_ul">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
    		<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?>
			<li class="mo_ml_level_1 mo_sub_li">
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
" rel="alternate" hreflang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" class="mo_ma_level_1 mo_sub_a">
				    <?php if ($_smarty_tpl->tpl_vars['display_flags']->value != 1) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_lang_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" class="mar_r4" /><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>

				</a>
			</li>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<?php }?>
	</li>
</ul>
<!-- /Block languages module -->
<!-- /MODULE st stlanguageselector --><?php }
}
