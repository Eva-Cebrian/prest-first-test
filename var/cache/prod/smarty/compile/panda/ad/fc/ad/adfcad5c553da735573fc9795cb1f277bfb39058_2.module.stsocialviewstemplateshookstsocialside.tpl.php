<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:stsocialviewstemplateshookstsocialside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa6602541_73800607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adfcad5c553da735573fc9795cb1f277bfb39058' => 
    array (
      0 => 'module:stsocialviewstemplateshookstsocialside.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa6602541_73800607 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="st-menu" id="side_share">
	<div class="st-menu-header flex_container">
		<h3 class="st-menu-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</h3>
    	<a href="javascript:;" class="close_right_side" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-cancel-2"></i></a>
	</div>
	<div id="share_side_box" class="pad_10">
		<?php if ((isset($_smarty_tpl->tpl_vars['stsocial']->value)) && $_smarty_tpl->tpl_vars['stsocial']->value) {?>
			<ul class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stsocial']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['v']->value['sidebar'] && $_smarty_tpl->tpl_vars['v']->value['url'] && $_smarty_tpl->tpl_vars['v']->value['url_key']) {?>
				    <li class="col-6 <?php if ($_smarty_tpl->tpl_vars['v']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?> text-center">
				    	<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['url'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['url_key'], ENT_QUOTES, 'UTF-8');?>
=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['current_url'] )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['v']->value['name_key']) {?>&<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['name_key'], ENT_QUOTES, 'UTF-8');?>
=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['meta']['title'] )), ENT_QUOTES, 'UTF-8');
}?>" class="social_share_item social_share_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['id_st_social'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['v']->value['item']) {?> social_share_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['item'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> " title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i></a>
				    	<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['url'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['url_key'], ENT_QUOTES, 'UTF-8');?>
=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['current_url'] )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['v']->value['name_key']) {?>&<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['name_key'], ENT_QUOTES, 'UTF-8');?>
=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['meta']['title'] )), ENT_QUOTES, 'UTF-8');
}?>" class="social_share_title" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
				    </li>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	</div>
</div>
<?php }
}
