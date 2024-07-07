<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:36:35
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stblog/views/templates/admin/st_blog/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab603423eb8_02823824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92ef12762c19dea7662911c7340e5ad49b13e594' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stblog/views/templates/admin/st_blog/helpers/list/list_header.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab603423eb8_02823824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1838772376668ab603423734_30534544', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_1838772376668ab603423734_30534544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_1838772376668ab603423734_30534544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['category_tree']->value))) {?>
		<div class="bloc-leadin">
            <div id="container_category_tree">
            <?php echo $_smarty_tpl->tpl_vars['category_tree']->value;?>

            </div>
		</div>
	<?php }
}
}
/* {/block 'override_header'} */
}
