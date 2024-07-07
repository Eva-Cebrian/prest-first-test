<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:54
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stvideo/views/templates/admin/stvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab43632d057_12947337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2580e755fbdb7e460101d75a17f6381ed9374084' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stvideo/views/templates/admin/stvideo.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab43632d057_12947337 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-info" role="alert">
    <i class="material-icons">help</i>
    <p class="alert-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter youtube or vimeo urls here. Examples https://www.youtube.com/watch?v=kVlkhVyCrSY and https://vimeo.com/113707290','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );?>
</p>
</div>
<div class="m-b-2">
    <div class="row">
        <div class="col-xl-12 col-lg-12">
          <fieldset class="form-group">
                <input type="text" id="video_url" name="video_url" class="tokenfield form-control" value="<?php if ($_smarty_tpl->tpl_vars['video']->value) {
echo $_smarty_tpl->tpl_vars['video']->value['url'];
}?>" />
          </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-9 col-lg-8">
          <fieldset class="form-group">
                <select name="video_position" id="video_position" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['video_position']->value, 'vp');
$_smarty_tpl->tpl_vars['vp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vp']->value) {
$_smarty_tpl->tpl_vars['vp']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['vp']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['video']->value && $_smarty_tpl->tpl_vars['vp']->value['id'] == $_smarty_tpl->tpl_vars['video']->value['video_position']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['vp']->value['name'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
          </fieldset>
        </div>
        <div class="col-xl-3 col-lg-4">
          <button type="button" class="btn btn-primary-outline" id="save_video"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Theme.Transformer'),$_smarty_tpl ) );?>
</button>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
jQuery(function($){
    var module_url = '<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
';
    var id_product = '<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
';
    var saving = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saving...','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );?>
";
    var save = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );?>
";
    
    $('#save_video').click(function(){
        var _this = $(this);
        _this.text(saving);
        $.getJSON(module_url+'&ajax=1&act=changeProductVideo&id_product='+id_product+'&url='+$('#video_url').val()+'&video_position='+$('#video_position').val(), function(json){
            _this.text(save);
        });
    });
    
});
<?php echo '</script'; ?>
><?php }
}
