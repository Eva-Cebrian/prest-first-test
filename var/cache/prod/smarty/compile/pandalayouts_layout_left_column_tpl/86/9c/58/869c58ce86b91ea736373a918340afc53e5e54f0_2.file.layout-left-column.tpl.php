<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa5ea0178_82188701',
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
function content_668adaa5ea0178_82188701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1537973295668adaa5e9f737_68504855', 'body_class');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_919071528668adaa5e9fa76_05216251', 'right_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_334639278668adaa5e9fcf8_22898499', 'right_left_bar_right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1541386759668adaa5e9ff47_81052474', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'body_class'} */
class Block_1537973295668adaa5e9f737_68504855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body_class' => 
  array (
    0 => 'Block_1537973295668adaa5e9f737_68504855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 show-left-column hide-right-column <?php
}
}
/* {/block 'body_class'} */
/* {block 'right_column'} */
class Block_919071528668adaa5e9fa76_05216251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_919071528668adaa5e9fa76_05216251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'right_left_bar_right_column'} */
class Block_334639278668adaa5e9fcf8_22898499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_left_bar_right_column' => 
  array (
    0 => 'Block_334639278668adaa5e9fcf8_22898499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_left_bar_right_column'} */
/* {block 'content'} */
class Block_1541386759668adaa5e9ff47_81052474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1541386759668adaa5e9ff47_81052474',
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
