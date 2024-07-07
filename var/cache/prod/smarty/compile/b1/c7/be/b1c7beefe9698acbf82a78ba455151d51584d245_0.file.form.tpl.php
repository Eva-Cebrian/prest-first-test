<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:33:27
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stmegamenu/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab547432203_67109706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1c7beefe9698acbf82a78ba455151d51584d245' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stmegamenu/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab547432203_67109706 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1161770389668ab547423e07_59223129', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_1161770389668ab547423e07_59223129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_1161770389668ab547423e07_59223129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'dropdownlistgroup') {?>
		<div class="col-lg-<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['col']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['col'] ));
} else { ?>9<?php }?> <?php if (!(isset($_smarty_tpl->tpl_vars['input']->value['label']))) {?>col-lg-offset-3<?php }?> fontello_wrap">
			<div class="row">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['medias'], 'media');
$_smarty_tpl->tpl_vars['media']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->do_else = false;
?>
					<div class="col-xs-4 col-sm-3">
						<label data-html="true" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php if ($_smarty_tpl->tpl_vars['media']->value == 'fw') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If this is set and this module is hooked to the displayFullWidthXXX hooks, then this module will be displayed in full screen.','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'xxl') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Desktops (>1400px)','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'xl') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Desktops (>1200px)','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'lg') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Desktops (>992px)','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'md') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tablets (>768px)','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'sm') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phones (>480px)','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'xs') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phones (<480px)','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
}?>"><?php if ($_smarty_tpl->tpl_vars['media']->value == 'fw') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Full screen','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'xxl') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra large devices','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'xl') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Large devices','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'lg') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Medium devices','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'md') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Small devices','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'sm') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra small devices','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['media']->value == 'xs') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extremely small devices','d'=>'Admin.Theme.Panda'),$_smarty_tpl ) );
}?></label>
						<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" class="fixed-width-md">
            			<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['input']->value['values']['maximum']+1 - (1) : 1-($_smarty_tpl->tpl_vars['input']->value['values']['maximum'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
	                        <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[(($_smarty_tpl->tpl_vars['input']->value['name']).("_")).($_smarty_tpl->tpl_vars['media']->value)] == $_smarty_tpl->tpl_vars['foo']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
	                    <?php }
}
?>
            			</select>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['desc'])) && !empty($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
				<p class="help-block">
					<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['desc'], 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
							<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
								<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

					<?php }?>
				</p>
			<?php }?>
		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'fontello') {?>
		<div class="fontello_wrap">
			<a id="btn_<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="btn btn-default" data-toggle="modal" href="#" data-target="#modal_<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
				<i class="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

			</a>
			<div class="modal fade" id="modal_<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Icon"),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<ul class="fontello_list clearfix">
							<li>
								<label>
									<input type="radio"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value=""<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == '') {?> checked="checked"<?php }?>/>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"None"),$_smarty_tpl ) );?>

								</label>
							</li>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['classes'], 'class');
$_smarty_tpl->tpl_vars['class']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->do_else = false;
?>
								<li>
								<label>
								<input type="radio"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['class']->value) {?> checked="checked"<?php }?>/>
									<i class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"></i>
								</label>
								</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"OK"),$_smarty_tpl ) );?>
</button>
					</div>
					</div>
				</div>
			</div>
			<?php echo '<script'; ?>
 type="text/javascript">
				jQuery(function($){
					$("input[name=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
]").change(function() { 
						$("#btn_<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
 i").removeClass().addClass($("input[name=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
]:checked").val());
					});
				});
			<?php echo '</script'; ?>
>
			<style type="text/css">
				@font-face {
				  font-family: 'fontello';
				  src: url('<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['module_name'];?>
../../themes/<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['theme_name'];?>
/font-fontello/font/fontello.eot');
				  src: url('<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['module_name'];?>
../../themes/<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['theme_name'];?>
/font-fontello/font/fontello.eot#iefix') format('embedded-opentype'),
				       url('<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['module_name'];?>
../../themes/<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['theme_name'];?>
/font-fontello/font/fontello.woff2') format('woff2'),
				       url('<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['module_name'];?>
../../themes/<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['theme_name'];?>
/font-fontello/font/fontello.woff') format('woff'),
				       url('<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['module_name'];?>
../../themes/<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['theme_name'];?>
/font-fontello/font/fontello.ttf') format('truetype'),
				       url('<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['module_name'];?>
../../themes/<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['theme_name'];?>
/font-fontello/font/fontello.svg#fontello') format('svg');
				  font-weight: normal;
				  font-style: normal;
				}
				<?php echo $_smarty_tpl->tpl_vars['input']->value['values']['css'];?>

			</style>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "field"} */
}
