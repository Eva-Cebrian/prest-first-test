<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:31:30
  from 'module:stsocialviewstemplateshookstsocialdrop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4d280b4c0_50046308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00e55177070fe5c7f54d99263115f894ebda2651' => 
    array (
      0 => 'module:stsocialviewstemplateshookstsocialdrop.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stsocial/views/templates/hook/stsocial.tpl' => 2,
  ),
),false)) {
function content_668ab4d280b4c0_50046308 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['stsocial']->value)) && $_smarty_tpl->tpl_vars['stsocial']->value) {?>
    <!-- MODULE st stsocial -->
<div class="top_bar_item dropdown_wrap pro_right_item">
    <div class="dropdown_tri dropdown_tri_in header_item <?php if ((isset($_smarty_tpl->tpl_vars['classname']->value))) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['social_label']->value == 0 || $_smarty_tpl->tpl_vars['social_label']->value == 2) {?><i class="fto-share-1<?php if ($_smarty_tpl->tpl_vars['social_label']->value == 0) {?> mar_r4 <?php }?>"></i><?php }
if ($_smarty_tpl->tpl_vars['social_label']->value == 0 || $_smarty_tpl->tpl_vars['social_label']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?><i class="fto-angle-down arrow_down arrow"></i><i class="fto-angle-up arrow_up arrow"></i>
    </div>
    <div class="dropdown_list">
        <div class="dropdown_box">
        <?php if ((isset($_smarty_tpl->tpl_vars['pro_share_drop']->value)) || $_GET['controller'] == 'product') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:stsocial/views/templates/hook/stsocial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('share_url'=>$_smarty_tpl->tpl_vars['product']->value['url'],'share_name'=>$_smarty_tpl->tpl_vars['product']->value['name']), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("module:stsocial/views/templates/hook/stsocial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('share_url'=>$_smarty_tpl->tpl_vars['urls']->value['current_url'],'share_name'=>$_smarty_tpl->tpl_vars['page']->value['meta']['title']), 0, true);
?>
        <?php }?>
        </div>
    </div>
</div>
<!-- /MODULE st stsocial -->
<?php }
}
}
