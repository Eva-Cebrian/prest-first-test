<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:36:38
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stblog/views/templates/admin/st_blog_category/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab606a50778_81835537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3320ded4c448814f3b31efcb609429b8ad024f24' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stblog/views/templates/admin/st_blog_category/helpers/list/list_header.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab606a50778_81835537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1258796106668ab606a4d7e9_32826388', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_1258796106668ab606a4d7e9_32826388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_1258796106668ab606a4d7e9_32826388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<ul class="breadcrumb cat_bar2">
		<?php $_smarty_tpl->_assignInScope('i', 0);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_tree']->value, 'category', false, 'key');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
		<li>
			<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
                <i class="icon-home"></i>
				<?php $_smarty_tpl->_assignInScope('params_url', '');?>
			<?php } else { ?>
				<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_st_blog_category'] ));
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('params_url', "&id_st_blog_category=".$_prefixVariable1."&viewcategory");?>
			<?php }?>
            
			<?php if (!(isset($_GET['id_st_blog_category'])) || $_GET['id_st_blog_category'] == $_smarty_tpl->tpl_vars['category']->value['id_st_blog_category']) {?>
				<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>

			<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['currentIndex']->value;
echo $_smarty_tpl->tpl_vars['params_url']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
			<?php }?>
		</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php
}
}
/* {/block 'override_header'} */
}
