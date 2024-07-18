<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:13:04
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adab0a35c59_55198887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dba0fd0533d8634c5f96269b6bab2a701748ade' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/layouts/layout-full-width.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adab0a35c59_55198887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1236960632668adab0a344a3_65235169', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1540056624668adab0a34980_01244935', 'right_left_bar_left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_841229294668adab0a34d41_80998409', 'right_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_476357949668adab0a35095_96958955', 'right_left_bar_right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_341591433668adab0a353d2_75279837', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_1236960632668adab0a344a3_65235169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1236960632668adab0a344a3_65235169',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_left_bar_left_column'} */
class Block_1540056624668adab0a34980_01244935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_left_bar_left_column' => 
  array (
    0 => 'Block_1540056624668adab0a34980_01244935',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_left_bar_left_column'} */
/* {block 'right_column'} */
class Block_841229294668adab0a34d41_80998409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_841229294668adab0a34d41_80998409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'right_left_bar_right_column'} */
class Block_476357949668adab0a35095_96958955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_left_bar_right_column' => 
  array (
    0 => 'Block_476357949668adab0a35095_96958955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_left_bar_right_column'} */
/* {block 'content'} */
class Block_1173221192668adab0a35605_64878085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_341591433668adab0a353d2_75279837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_341591433668adab0a353d2_75279837',
  ),
  'content' => 
  array (
    0 => 'Block_1173221192668adab0a35605_64878085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="center_column" class="single_column col-sm-12">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1173221192668adab0a35605_64878085', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
