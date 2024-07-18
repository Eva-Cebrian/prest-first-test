<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa6294b44_19889323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c52fb1ef38542a1537a5381d00d061a1414b04d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/products.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/list-item.tpl' => 1,
    'file:_partials/pagination-infinite.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_668adaa6294b44_19889323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/list-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['listing']->value['products']), 0, false);
?> 
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1235278941668adaa6293b99_01103958', 'pagination');
?>

  
</div><?php }
/* {block 'pagination'} */
class Block_1235278941668adaa6293b99_01103958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_1235278941668adaa6293b99_01103958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['infinite_scroll']) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination-infinite.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination'],'st_current_url'=>$_smarty_tpl->tpl_vars['listing']->value['current_url']), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
    <?php }?>
  <?php
}
}
/* {/block 'pagination'} */
}
