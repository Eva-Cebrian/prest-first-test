<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:31:30
  from 'module:stproductcommentsviewstemplateshookstproductcomments_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4d27b3d45_05457061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f79716c06aeb460e2e2ace10970134453cf01e8' => 
    array (
      0 => 'module:stproductcommentsviewstemplateshookstproductcomments_reviews.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stproductcomments/views/templates/hook/rating_box.tpl' => 1,
    'module:stproductcomments/views/templates/hook/pcomments_write.tpl' => 1,
  ),
),false)) {
function content_668ab4d27b3d45_05457061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10109469668ab4d27b2143_25753137';
?>
 <!-- MODULE st stproductcomments -->
<?php if ($_smarty_tpl->tpl_vars['commentNbr']->value || $_smarty_tpl->tpl_vars['can_comment']->value) {?>
<div class="mb-2">
<?php if ($_smarty_tpl->tpl_vars['commentNbr']->value) {?>
<a href="javascript:;" class="flex_box flex_left view_all_reviews mr-2" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all reviews','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow">
<?php $_smarty_tpl->_subTemplateRender('module:stproductcomments/views/templates/hook/rating_box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('averageTotal'=>$_smarty_tpl->tpl_vars['average']->value['grade'],'g_rich_snippets'=>false), 0, false);
?>
<span class="comment_nbr ml-1"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['commentNbr']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['commentNbr']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></span>
</a>
<?php }
if ($_smarty_tpl->tpl_vars['can_comment']->value) {
$_smarty_tpl->_subTemplateRender('module:stproductcomments/views/templates/hook/pcomments_write.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('classname'=>"ml-2"), 0, false);
}?>
</div>
<?php }?>
<!-- /MODULE st stproductcomments --><?php }
}
