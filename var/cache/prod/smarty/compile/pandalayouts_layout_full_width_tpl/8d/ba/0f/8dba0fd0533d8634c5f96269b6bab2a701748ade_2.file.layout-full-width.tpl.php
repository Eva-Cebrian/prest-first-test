<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0790bf3_29105559',
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
function content_668a67f0790bf3_29105559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1737410885668a67f078fd83_25360644', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1701509546668a67f0790046_85702735', 'right_left_bar_left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_738609531668a67f07902b6_48550302', 'right_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_946428164668a67f07904f9_58311566', 'right_left_bar_right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1246660771668a67f0790737_74513892', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_1737410885668a67f078fd83_25360644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1737410885668a67f078fd83_25360644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_left_bar_left_column'} */
class Block_1701509546668a67f0790046_85702735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_left_bar_left_column' => 
  array (
    0 => 'Block_1701509546668a67f0790046_85702735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_left_bar_left_column'} */
/* {block 'right_column'} */
class Block_738609531668a67f07902b6_48550302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_738609531668a67f07902b6_48550302',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'right_left_bar_right_column'} */
class Block_946428164668a67f07904f9_58311566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_left_bar_right_column' => 
  array (
    0 => 'Block_946428164668a67f07904f9_58311566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_left_bar_right_column'} */
/* {block 'content'} */
class Block_1469507446668a67f07908b8_54550784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_1246660771668a67f0790737_74513892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1246660771668a67f0790737_74513892',
  ),
  'content' => 
  array (
    0 => 'Block_1469507446668a67f07908b8_54550784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="center_column" class="single_column col-sm-12">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1469507446668a67f07908b8_54550784', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
