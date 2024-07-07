<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stcurrencyselectorviewstemplateshookstcurrencyselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a859a98_76947263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe9e5cc6bce6cc7ffc8930c9d961e050dcdd55fc' => 
    array (
      0 => 'module:stcurrencyselectorviewstemplateshookstcurrencyselector.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42a859a98_76947263 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stcurrencyselector -->
<!-- Block currencies module -->
<?php if (!(isset($_smarty_tpl->tpl_vars['currencies_style']->value)) || !$_smarty_tpl->tpl_vars['currencies_style']->value) {?>
	<div id="currencies_block_top_mod" class="dropdown_wrap top_bar_item"><div class="dropdown_tri <?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?> dropdown_tri_in <?php }?> header_item" aria-haspopup="true" aria-expanded="false"><?php if ($_smarty_tpl->tpl_vars['display_sign']->value != 1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['display_sign']->value != 2) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');
}?><i class="fto-angle-down arrow_down arrow"></i><i class="fto-angle-up arrow_up arrow"></i></div>
	    <?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
		<div class="dropdown_list" aria-labelledby="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency selector','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
">
	        <ul class="dropdown_list_ul dropdown_box">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'f_currency', false, 'k');
$_smarty_tpl->tpl_vars['f_currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->do_else = false;
?>
	            	<?php if (!$_smarty_tpl->tpl_vars['f_currency']->value['current']) {?>
					<li>
						<a class="dropdown_list_item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['display_sign']->value != 1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['display_sign']->value != 2) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');
}?></a>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'f_currency', false, 'k');
$_smarty_tpl->tpl_vars['f_currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->do_else = false;
?>
	    <?php if ($_smarty_tpl->tpl_vars['f_currency']->value['current']) {?>
			<span class="top_bar_item currency_selector"><span class="header_item"><?php if ($_smarty_tpl->tpl_vars['display_sign']->value != 1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['display_sign']->value != 2) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');
}?></span></span>
		<?php } else { ?>
			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="top_bar_item currency_selector"><span class="header_item"><?php if ($_smarty_tpl->tpl_vars['display_sign']->value != 1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['display_sign']->value != 2) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');
}?></span></a>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
<!-- /Block currencies module -->
<!-- /MODULE st stcurrencyselector --><?php }
}
