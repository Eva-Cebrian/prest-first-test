<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from 'module:stwishlistviewstemplateshooksidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b1fbbb1_20503814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb7432cd163378d1c155c62d5c4f3205c4d7f0f2' => 
    array (
      0 => 'module:stwishlistviewstemplateshooksidebar.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stwishlist/views/templates/hook/item.tpl' => 1,
  ),
),false)) {
function content_668ab42b1fbbb1_20503814 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="st-menu" id="side_wishlist">
    <div class="st-menu-header flex_container">
        <h3 class="st-menu-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</h3>
        <a href="javascript:;" class="close_right_side" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-cancel-2"></i></a>
    </div>
    <div id="side_wishlist_block" class="pad_10">
        <h3 class="page_heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save to wishlist','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</h3>
        <ul id="select_wishlist" class="base_list_line">
        <?php if ((isset($_smarty_tpl->tpl_vars['wishlists']->value)) && count($_smarty_tpl->tpl_vars['wishlists']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist');
$_smarty_tpl->tpl_vars['wishlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender('module:stwishlist/views/templates/hook/item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_st_wishlist'=>$_smarty_tpl->tpl_vars['wishlist']->value['id_st_wishlist'],'wishlist_name'=>$_smarty_tpl->tpl_vars['wishlist']->value['name'],'wishlist_total'=>$_smarty_tpl->tpl_vars['wishlist']->value['total']), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        </ul>
        <div class="form-group form-group-small m-t-1">
            <div class="input-group">
              <input
                      class="form-control"
                      name="name"
                      type="text"
                      placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a wishlist','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"
                      value="" />
              <span class="input-group-btn">
                <button
                  class="btn_send btn btn-default btn-spin"
                  type="submit"
                  id="side_wishlist_submit"
                >
                   <i class="fto-plus-2"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

                </button>
              </span>
            </div>
        </div>
    </div>
</nav><?php }
}
