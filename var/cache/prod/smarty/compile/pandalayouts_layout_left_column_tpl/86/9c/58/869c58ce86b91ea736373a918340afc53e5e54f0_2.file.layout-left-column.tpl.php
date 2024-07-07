<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4418e1da0_35655829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '869c58ce86b91ea736373a918340afc53e5e54f0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/layouts/layout-left-column.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab4418e1da0_35655829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114191535668ab4418e12c5_25488066', 'body_class');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_795286817668ab4418e1648_54109918', 'right_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_543054256668ab4418e18e9_04730734', 'right_left_bar_right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_285728087668ab4418e1b54_37120673', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'body_class'} */
class Block_114191535668ab4418e12c5_25488066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body_class' => 
  array (
    0 => 'Block_114191535668ab4418e12c5_25488066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 show-left-column hide-right-column <?php
}
}
/* {/block 'body_class'} */
/* {block 'right_column'} */
class Block_795286817668ab4418e1648_54109918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_795286817668ab4418e1648_54109918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'right_left_bar_right_column'} */
class Block_543054256668ab4418e18e9_04730734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_left_bar_right_column' => 
  array (
    0 => 'Block_543054256668ab4418e18e9_04730734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_left_bar_right_column'} */
/* {block 'content'} */
class Block_285728087668ab4418e1b54_37120673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_285728087668ab4418e1b54_37120673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <p>Hello world! This is HTML5 Boilerplate.</p>
<?php
}
}
/* {/block 'content'} */
}
