<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:stcurrencyselectorviewstemplateshookstcurrencyselectormobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa65f5271_32157406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46bcde2533b03efbcd8eba725820f4febe5b22ec' => 
    array (
      0 => 'module:stcurrencyselectorviewstemplateshookstcurrencyselectormobile.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa65f5271_32157406 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stcurrencyselector -->
<!-- Block currencies module -->
<ul id="currencies_block_mobile_menu" class="mo_mu_level_0 mobile_menu_ul">
	<li class="mo_ml_level_0 mo_ml_column">
		<div class="menu_a_wrap">
		<a href="javascript:;" rel="nofollow" class="mo_ma_level_0 ma_span"><?php if ($_smarty_tpl->tpl_vars['display_sign']->value != 1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['display_sign']->value != 2) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');
}?></a>
		<?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?><span class="opener dlm"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></span><?php }?>
		</div>
		<?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
        <ul class="mo_mu_level_1 mo_sub_ul">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'f_currency', false, 'k');
$_smarty_tpl->tpl_vars['f_currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->do_else = false;
?>
	            <?php if (!$_smarty_tpl->tpl_vars['f_currency']->value['current']) {?>
					<li class="mo_ml_level_1 mo_sub_li">
						<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="mo_ma_level_1 mo_sub_a" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
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
<!-- /Block currencies module -->
<!-- /MODULE st stcurrencyselector --><?php }
}
