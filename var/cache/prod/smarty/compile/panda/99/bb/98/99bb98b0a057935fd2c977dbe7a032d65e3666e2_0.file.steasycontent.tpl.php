<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:54
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/steasycontent/views/templates/admin/steasycontent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab436312672_79060796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99bb98b0a057935fd2c977dbe7a032d65e3666e2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/steasycontent/views/templates/admin/steasycontent.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab436312672_79060796 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav nav-tabs bordered">
<li id="tab_steasycontnet_tab" class="nav-item"><a href="#steasycontnet_tab" data-toggle="tab" class="nav-link description-tab active show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab title','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );?>
</a></li>
<li id="tab_steasycontnet_content" class="nav-item"><a href="#steasycontnet_content" data-toggle="tab" class="nav-link description-tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab content','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );?>
</a></li>
</ul>
<div class="tab-content bordered">
	<div class="tab-pane panel panel-default active show" id="steasycontnet_tab">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
		<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 row" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['default_lang']->value) {?>style="display:none;"<?php }?>>
			<div class="col-lg-9">
				<input type="text" id="ec_title_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" name="ec_title_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="form-control" value="<?php if ((isset($_smarty_tpl->tpl_vars['ec_tabs']->value['title'][$_smarty_tpl->tpl_vars['language']->value['id_lang']]))) {
echo $_smarty_tpl->tpl_vars['ec_tabs']->value['title'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];
}?>" />
			</div>
			<div class="col-lg-2">
				<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
<i class="icon-caret-down"></i></button>
				<ul class="dropdown-menu">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
					<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<div class="tab-pane panel panel-default" id="steasycontnet_content">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
		<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 row" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['default_lang']->value) {?>style="display:none;"<?php }?>>
			<div class="col-lg-9">
				<textarea name="ec_text_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="ec_text_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="rte autoload_rte"><?php if ((isset($_smarty_tpl->tpl_vars['ec_tabs']->value['text'][$_smarty_tpl->tpl_vars['language']->value['id_lang']]))) {
echo $_smarty_tpl->tpl_vars['ec_tabs']->value['text'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];
}?></textarea>
			</div>
			<div class="col-lg-2">
				<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
<i class="icon-caret-down"></i></button>
				<ul class="dropdown-menu">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
					<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<input type="hidden" name="id_st_easy_content" value="<?php echo $_smarty_tpl->tpl_vars['id_st_easy_content']->value;?>
">
<input type="hidden" name="ec_act" value="save_ec_tab"><?php }
}
