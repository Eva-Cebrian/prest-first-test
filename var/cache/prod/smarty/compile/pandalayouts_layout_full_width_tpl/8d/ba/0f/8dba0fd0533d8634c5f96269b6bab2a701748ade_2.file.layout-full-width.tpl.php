<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a7c44f9_38530557',
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
function content_668ab42a7c44f9_38530557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1713066539668ab42a7c3558_29185351', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1688256419668ab42a7c38c3_46894603', 'right_left_bar_left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_515059029668ab42a7c3b66_48798899', 'right_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1889595231668ab42a7c3dc5_51415557', 'right_left_bar_right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1676694316668ab42a7c4022_53305440', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_1713066539668ab42a7c3558_29185351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1713066539668ab42a7c3558_29185351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_left_bar_left_column'} */
class Block_1688256419668ab42a7c38c3_46894603 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_left_bar_left_column' => 
  array (
    0 => 'Block_1688256419668ab42a7c38c3_46894603',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_left_bar_left_column'} */
/* {block 'right_column'} */
class Block_515059029668ab42a7c3b66_48798899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_515059029668ab42a7c3b66_48798899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'right_left_bar_right_column'} */
class Block_1889595231668ab42a7c3dc5_51415557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_left_bar_right_column' => 
  array (
    0 => 'Block_1889595231668ab42a7c3dc5_51415557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_left_bar_right_column'} */
/* {block 'content'} */
class Block_1783745365668ab42a7c41a8_77149807 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_1676694316668ab42a7c4022_53305440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1676694316668ab42a7c4022_53305440',
  ),
  'content' => 
  array (
    0 => 'Block_1783745365668ab42a7c41a8_77149807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="center_column" class="single_column col-sm-12">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1783745365668ab42a7c41a8_77149807', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
