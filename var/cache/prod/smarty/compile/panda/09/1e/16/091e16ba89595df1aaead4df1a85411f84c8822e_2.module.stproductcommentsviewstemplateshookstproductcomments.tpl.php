<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:stproductcommentsviewstemplateshookstproductcomments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f02e8206_18825822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '091e16ba89595df1aaead4df1a85411f84c8822e' => 
    array (
      0 => 'module:stproductcommentsviewstemplateshookstproductcomments.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:stproductcomments/views/templates/hook/pcomments_header.tpl' => 1,
    'module:stproductcomments/views/templates/hook/pcomments_filters.tpl' => 1,
    'module:stproductcomments/views/templates/hook/pcomments_list.tpl' => 1,
    'module:stproductcomments/views/templates/hook/pcomments_write.tpl' => 1,
  ),
),false)) {
function content_668a67f02e8206_18825822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<!-- MODULE st stproductcomments -->
<section class="pccomment_block">
<?php echo '<script'; ?>
>var st_product_comment_tag_prefilled='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['st_product_comment_tag_prefilled']->value, ENT_QUOTES, 'UTF-8');?>
';<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['nbComments']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('module:stproductcomments/views/templates/hook/pcomments_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('module:stproductcomments/views/templates/hook/pcomments_filters.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender('module:stproductcomments/views/templates/hook/pcomments_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['can_comment']->value) {?><div class="mb-2"><?php $_smarty_tpl->_subTemplateRender('module:stproductcomments/views/templates/hook/pcomments_write.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classname'=>"go",'is_first_comment'=>1), 0, false);
?></div><?php }?>
  <div class="" role="alert" data-alert="warning">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No comments','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

  </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['allow_guest']->value)) && $_smarty_tpl->tpl_vars['allow_guest']->value && (!$_smarty_tpl->tpl_vars['logged']->value || $_smarty_tpl->tpl_vars['logged']->value && !$_smarty_tpl->tpl_vars['can_comment']->value)) {?>
<div class="st_product_comment_wrap">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave a review','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</h3>
	<form name="st_product_comment_form_guest" method="post" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getModuleLink('stproductcomments','default'), ENT_QUOTES, 'UTF-8');?>
">
		<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['criterions2']->value) > 0) {?>
		<ul class="criterions_list li_fl clearfix">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['criterions2']->value, 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
		 	<li class="flex_container flex_left mr-5">
			    <span class="criterion_name mr-2"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['criterion']->value['name'], ENT_QUOTES, 'UTF-8');?>
:</span>
			    <div class="star_content clearfix">
					<input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_st_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="1" />
					<input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_st_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="2" />
					<input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_st_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="3" />
					<input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_st_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="4" />
					<input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_st_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="5" checked="checked" />
				</div>
			</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<?php }?>
	    <div class="form-group row mb-3">
		    <label class="col-md-2 form-control-label required">
		        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Describe it:','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

		    </label>
		    <div class="col-md-8 tag-wrap">
		        <input type="text" name="tags" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use a comma to seperate words.','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" class="tm-input form-control"/>
		        <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Describe this product using simple and short words.','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</div>
		    </div>
	    </div>
	    <div class="form-group row">
		    <label class="col-md-2 form-control-label">
		        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom name(required):','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

		    </label>
		    <div class="col-md-8">
		    	<input type="text" name="customer_name" class="form-control" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer_name']->value, ENT_QUOTES, 'UTF-8');?>
" required />
		    </div>
	    </div>
	    <div class="form-group row">
		    <label class="col-md-2 form-control-label">
		        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review(required):','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

		    </label>
		    <div class="col-md-8">
		    	<textarea id="comment_content" name="content" rows="6" class="form-control st_comment_box" autocomplete="off"></textarea>
		    </div>
	    </div>
	    <div class="form-group row">
		    <div class="col-md-2"><?php if ((isset($_smarty_tpl->tpl_vars['upload_image']->value)) && $_smarty_tpl->tpl_vars['upload_image']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload images:','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></div>
		    <div class="col-md-8">
	        	<?php if ((isset($_smarty_tpl->tpl_vars['upload_image']->value)) && $_smarty_tpl->tpl_vars['upload_image']->value) {?>
		        <div class="st-dropzone" id="st_product_comment_uploader">
			        <div class="dz-message needsclick">
			            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop images here or click to upload.','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

			        </div>
		        </div>
		        <input name="image" type="hidden" value="" />
		        <?php }?>
		        <input name="id_product" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8');?>
" />
		        <input name="id_order_detail" type="hidden" value="0" />
		        <input name="id_order" type="hidden" value="0" />
		        <input name="id_parent" type="hidden" value="0" />
		        <input name="action" type="hidden" value="add_comment" />
		        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','mod'=>'psgdpr','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

		        <div>
		            <input type="submit" name="st_product_comment_submit" id="st_product_comment_submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Post comment','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" class="btn btn-default mar_r4" />
		        </div>
	      	</div>
	    </div>
	</form>
</div>
<?php }?>
</section>
<!-- /MODULE st stproductcomments --><?php }
}
