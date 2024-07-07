<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:stnotificationviewstemplateshookstnotification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a845b55_65419207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98c532fbb5b531c99ef6fcea92cc1db4e960d931' => 
    array (
      0 => 'module:stnotificationviewstemplateshookstnotification.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stnotification/views/templates/hook/stnotification-buttons.tpl' => 3,
  ),
),false)) {
function content_668ab42a845b55_65419207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
if ((isset($_smarty_tpl->tpl_vars['notification_array']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['notification_array']->value) > 0) {?>
	<!-- MODULE st stnotification -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notification_array']->value, 'ec');
$_smarty_tpl->tpl_vars['ec']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ec']->value) {
$_smarty_tpl->tpl_vars['ec']->do_else = false;
?>
    		<div id="st_notification_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_notification'], ENT_QUOTES, 'UTF-8');?>
" class="st_notification_wrap <?php if ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?> noti_location_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['location'], ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['ec']->value['width']) {?> noti_full <?php } else { ?> noti_width <?php }?>  notification_tempalte_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['template'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ec']->value['location'] == 9) {?> st_notification_static <?php }?>" data-id_st="<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['ec']->value['id_st_notification'], ENT_QUOTES, 'UTF-8');?>
" data-delay="<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['ec']->value['delay'], ENT_QUOTES, 'UTF-8');?>
" data-show_box="<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['ec']->value['show_box'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-labelledby="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Notification','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" aria-hidden="false">
	        	<div class="flex_container">
	        	<div class="style_content flex_child">
		        	<div class="notification_inner <?php if (!$_smarty_tpl->tpl_vars['ec']->value['template']) {?> flex_container flex_column_sm <?php }?>">
		            <?php if ($_smarty_tpl->tpl_vars['ec']->value['template'] == 1) {?>
		            	<div class="flex_container">
		            		<div class="notification_content m-r-1">
			            	<?php echo $_smarty_tpl->tpl_vars['ec']->value['content'];?>

			            	</div>
			            	<div class="notification_buttons">
			            	<?php $_smarty_tpl->_subTemplateRender("module:stnotification/views/templates/hook/stnotification-buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			            	</div>
		            	</div>
		            <?php } elseif ($_smarty_tpl->tpl_vars['ec']->value['template'] == 2) {?>
		            	<?php if ($_smarty_tpl->tpl_vars['ec']->value['content']) {?><div class="notification_content text-center"><?php echo $_smarty_tpl->tpl_vars['ec']->value['content'];?>
</div><?php }?>
		            	<?php if ($_smarty_tpl->tpl_vars['ec']->value['accept_button'] || ($_smarty_tpl->tpl_vars['ec']->value['more_info'] && ($_smarty_tpl->tpl_vars['ec']->value['more_info_link'] || $_smarty_tpl->tpl_vars['ec']->value['more_info_link_custom']))) {?><div class="notification_buttons text-center">
		            		<?php $_smarty_tpl->_subTemplateRender("module:stnotification/views/templates/hook/stnotification-buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		            	</div><?php }?>
		            <?php } else { ?>
		            	<?php if ($_smarty_tpl->tpl_vars['ec']->value['content']) {?><div class="flex_child notification_content"><?php echo $_smarty_tpl->tpl_vars['ec']->value['content'];?>
</div><?php }?>
		            	<?php if ($_smarty_tpl->tpl_vars['ec']->value['accept_button'] || ($_smarty_tpl->tpl_vars['ec']->value['more_info'] && ($_smarty_tpl->tpl_vars['ec']->value['more_info_link'] || $_smarty_tpl->tpl_vars['ec']->value['more_info_link_custom']))) {?><div class="notification_buttons">
		            		<?php $_smarty_tpl->_subTemplateRender("module:stnotification/views/templates/hook/stnotification-buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		            	</div><?php }?>
		            <?php }?>
	            	</div>
            	</div>
            	<?php if ($_smarty_tpl->tpl_vars['ec']->value['x_button']) {?><a href="javascript:;" class="st_notification_close <?php if ($_smarty_tpl->tpl_vars['ec']->value['template'] == 2) {?> st_modal_close st_modal_close_inner <?php } else { ?> st_notification_close_inline <?php }?>" data-dismiss="st_notification_wrap" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
">&times;</a><?php }?>
            	</div>
	        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<!-- /MODULE st stnotification -->
<?php }
}
}
