<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:54
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/sthoverimage/views/templates/admin/sthoverimage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab43631bfc9_61421889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c42ee17d7dcbdafdde77463338be4ae38217ef92' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/sthoverimage/views/templates/admin/sthoverimage.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab43631bfc9_61421889 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/css/admin.css" rel="stylesheet" type="text/css"/>
<div class="alert alert-info" role="alert">
    <i class="material-icons">help</i>
    <p class="alert-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click on one image below to set it as the hover image. The cover image is not showing on the list.','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );?>
</p>
</div>
<div id="product-images-container-sthoverimage" class="m-b-2">
    <div id="product-images-dropzone-sthoverimage" class="panel dropzone ui-sortable col-md-12 dz-started" data-max-size="8">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
        <div class="dz-preview dz-image-preview">
            <div class="dz-image bg" data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['image']->value['base_image_url'];?>
-home_default.<?php echo $_smarty_tpl->tpl_vars['image']->value['format'];?>
');"></div>
            <div class="ishover<?php if (!$_smarty_tpl->tpl_vars['image']->value['hover']) {?> hide<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hover','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );?>
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
    
    $('#product-images-dropzone-sthoverimage .dz-image').click(function(){
        var _this = $(this);
        $.getJSON(module_url+'&ajax=1&action=update_hover&id_image='+_this.data('id'), function(json){
            if (json.r) {
                $('#product-images-dropzone-sthoverimage').find('.ishover').hide();
                
                if (_this.parent().find('.ishover').hasClass('hide')) {
                    _this.parent().find('.ishover').removeClass('hide').show(); 
                } else {
                    _this.parent().find('.ishover').addClass('hide').hide();    
                }
                
            }
        });
    });
    
});
<?php echo '</script'; ?>
><?php }
}
