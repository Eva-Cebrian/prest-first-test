<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stsocialviewstemplateshookstsocial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0a461b9_03192974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e13d9ef445354e589a46dda52c8a02b0caf0fc6c' => 
    array (
      0 => 'module:stsocialviewstemplateshookstsocial.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f0a461b9_03192974 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['stsocial']->value)) && $_smarty_tpl->tpl_vars['stsocial']->value) {?>
<!-- MODULE st stsocial -->
<?php if (!(isset($_smarty_tpl->tpl_vars['share_url']->value))) {
$_smarty_tpl->_assignInScope('share_url', $_smarty_tpl->tpl_vars['urls']->value['current_url']);
}
if (!(isset($_smarty_tpl->tpl_vars['share_name']->value))) {
$_smarty_tpl->_assignInScope('share_name', $_smarty_tpl->tpl_vars['page']->value['meta']['title']);
}?>
	<div class="social_share_block social_size_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['social_links_size']->value, ENT_QUOTES, 'UTF-8');?>
 flex_container flex_left">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stsocial']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['sidebar'] && $_smarty_tpl->tpl_vars['v']->value['url'] && $_smarty_tpl->tpl_vars['v']->value['url_key']) {?>
		    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['url'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['url_key'], ENT_QUOTES, 'UTF-8');?>
=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['share_url']->value )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['v']->value['name_key']) {?>&<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['name_key'], ENT_QUOTES, 'UTF-8');?>
=<?php if ((isset($_smarty_tpl->tpl_vars['v']->value['description'])) && $_smarty_tpl->tpl_vars['v']->value['description']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['description'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['share_name']->value, ENT_QUOTES, 'UTF-8');
}
}
if ((isset($_smarty_tpl->tpl_vars['v']->value['image_key'])) && $_smarty_tpl->tpl_vars['v']->value['image_key'] && (isset($_smarty_tpl->tpl_vars['product']->value))) {?>&<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['image_key'], ENT_QUOTES, 'UTF-8');?>
=<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'] )), ENT_QUOTES, 'UTF-8');
}
}?>" class="social_share_item social_share_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['id_st_social'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['v']->value['item']) {?> social_share_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['item'], ENT_QUOTES, 'UTF-8');?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['v']->value['new_window'])) && $_smarty_tpl->tpl_vars['v']->value['new_window']) {?>target="_blank"<?php }?> rel="nofollow"><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i></a>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<!-- /MODULE st stsocial -->
<?php }
}
}
