<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/sort-orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab441a337c2_26420578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '279a4623aece5b64941f67212d148deaf0fcd43f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/sort-orders.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab441a337c2_26420578 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="products-sort-order dropdown_wrap mar_r1">
    <a href="javascript:" class="dropdown_tri dropdown_tri_in" rel="nofollow" aria-haspopup="true" aria-expanded="false">
      <?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['sort_selected'])) && $_smarty_tpl->tpl_vars['listing']->value['sort_selected']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['listing']->value['sort_selected'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>
      <i class="fto-angle-down arrow_down arrow"></i>
      <i class="fto-angle-up arrow_up arrow"></i>
    </a>
    <div class="dropdown_list">
      <ul class="dropdown_list_ul dropdown_box">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['sort_orders'], 'sort_order');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?>
        <li>
        <a
          rel="nofollow"
          title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
          href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
          class="dropdown_list_item <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
 btn-spin js-btn-active"
        >
          <i class="fto-angle-right mar_r4"></i><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>

        </a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
