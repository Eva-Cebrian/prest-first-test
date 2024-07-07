<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:54
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/ststickers/views/templates/admin/ststickers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab436324048_03429561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb1834d5210a46768fd7ab291db0a6ef49fe0baa' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/ststickers/views/templates/admin/ststickers.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab436324048_03429561 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/css/admin.css" rel="stylesheet" type="text/css"/>
<div class="alert alert-info" role="alert">
    <i class="material-icons">help</i>
    <p class="alert-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click a sticker to add it on on the product, click it once more to remove it from the product .','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );?>
</p>
</div>
<div id="product-images-container-ststickers" class="m-b-2">
    <div id="product-images-dropzone-ststickers" class="panel dropzone ui-sortable col-md-12 dz-started" data-max-size="8">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stickers']->value, 'sticker');
$_smarty_tpl->tpl_vars['sticker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sticker']->value) {
$_smarty_tpl->tpl_vars['sticker']->do_else = false;
?>
        <div class="dz-preview dz-image-preview" data-id_st_sticker="<?php echo $_smarty_tpl->tpl_vars['sticker']->value['id_st_sticker'];?>
" data-id_st_sticker_map="<?php echo $_smarty_tpl->tpl_vars['sticker']->value['id_st_sticker_map'];?>
" >
            <div class="dz-details">
                <?php if ($_smarty_tpl->tpl_vars['sticker']->value['name']) {?>
                    <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name:','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['sticker']->value['name'];?>
</div>
                <?php } else { ?>
                    <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Id:','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['sticker']->value['id_st_sticker'];?>
</div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sticker']->value['text']) {?><div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text:','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['sticker']->value['text'];?>
</div><?php }?>
            </div>
            <div class="dz-image bg" style="<?php if ($_smarty_tpl->tpl_vars['sticker']->value['image_multi_lang']) {?>background-image: url('<?php echo $_smarty_tpl->tpl_vars['sticker']->value['image_multi_lang'];?>
');<?php }?>"></div>
            <div class="ishover <?php if (!$_smarty_tpl->tpl_vars['sticker']->value['id_st_sticker_map']) {?> hide<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );?>
</div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
jQuery(function($){
    var module_url = '<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
';
    var id_product = '<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
'
    
    $('#product-images-dropzone-ststickers .dz-preview').click(function(){
        var _this = $(this);
        $.getJSON(module_url+'&ajax=1&act=changeProductSticker&id_st_sticker_map='+_this.data('id_st_sticker_map')+'&id_st_sticker='+_this.data('id_st_sticker')+'&id_product='+id_product, function(json){
            if (json.r && json.d) {
                _this.find('.ishover').show();
                _this.data('id_st_sticker_map', json.d);
            } else {
                _this.find('.ishover').hide();
                _this.data('id_st_sticker_map', 0);
            }
        });
    });
    
});
<?php echo '</script'; ?>
><?php }
}
