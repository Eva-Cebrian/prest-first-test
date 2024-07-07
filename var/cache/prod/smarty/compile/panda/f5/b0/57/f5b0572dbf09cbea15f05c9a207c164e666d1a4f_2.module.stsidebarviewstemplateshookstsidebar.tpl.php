<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from 'module:stsidebarviewstemplateshookstsidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b155235_64904033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b0572dbf09cbea15f05c9a207c164e666d1a4f' => 
    array (
      0 => 'module:stsidebarviewstemplateshookstsidebar.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42b155235_64904033 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stsidebar -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar_items']->value, 'sidebar_item');
$_smarty_tpl->tpl_vars['sidebar_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sidebar_item']->value) {
$_smarty_tpl->tpl_vars['sidebar_item']->do_else = false;
if (!$_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules']) {?>
<div class="st-menu custom_sidebar" id="side_custom_sidebar_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['id_st_sidebar'], ENT_QUOTES, 'UTF-8');?>
">
	<div class="st-menu-header flex_container">
		<h3 class="st-menu-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
    	<a href="javascript:;" class="close_right_side" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-cancel-2"></i></a>
	</div>
	<div class="custom_sidebar_box pad_10">
		<?php echo $_smarty_tpl->tpl_vars['sidebar_item']->value['content'];?>

	</div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_item']->value['native_modules'] == 7) {?>
    <div class="st-menu" id="side_mobile_nav">
        <div class="st-menu-header flex_container">
            <h3 class="st-menu-title"><?php if ($_smarty_tpl->tpl_vars['sidebar_item']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_item']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></h3>
            <a href="javascript:;" class="close_right_side" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-cancel-2"></i></a>
        </div>
      <div class="mobile_nav_box">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayMobileNav"),$_smarty_tpl ) );?>

      </div>
    </div>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /MODULE st stsidebar -->

<?php }
}
