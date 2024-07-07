<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:36:38
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stblog/views/templates/admin/st_blog_category/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab606a61992_48178255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5686f2fde782d8cd5c03d929a8584f21b97b06f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stblog/views/templates/admin/st_blog_category/content.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab606a61992_48178255 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['blog_breadcrumb']->value))) {?>
	<div class="cat_bar">
		<span style="color: #3C8534;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current category','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );?>
 :</span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['blog_breadcrumb']->value;?>

	</div>
<?php }
echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
