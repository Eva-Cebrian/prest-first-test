<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:stnewsletterviewstemplateshookstnewsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa65a46c2_52152655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db3bff7b16936ee1590a750fbe2aaf42ddf0ccd6' => 
    array (
      0 => 'module:stnewsletterviewstemplateshookstnewsletter.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa65a46c2_52152655 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['news_letter_array']->value)) && count($_smarty_tpl->tpl_vars['news_letter_array']->value)) {?>
	<!-- MODULE st stnewsletter -->
	<?php $_smarty_tpl->_assignInScope('has_news_letter_popup', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news_letter_array']->value, 'ec');
$_smarty_tpl->tpl_vars['ec']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ec']->value) {
$_smarty_tpl->tpl_vars['ec']->do_else = false;
?> 
        <?php if ($_smarty_tpl->tpl_vars['ec']->value['location'] == 4) {?>
        	<?php if (!$_smarty_tpl->tpl_vars['has_news_letter_popup']->value) {?>
        		<?php $_smarty_tpl->_assignInScope('has_news_letter_popup', 1);?>
        		<div class="modal fade st_news_letter_popup_wrap" id="st_news_letter_popup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_news_letter'], ENT_QUOTES, 'UTF-8');?>
" data-id_st="<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['ec']->value['id_st_news_letter'], ENT_QUOTES, 'UTF-8');?>
" data-delay_popup="<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['ec']->value['delay_popup'], ENT_QUOTES, 'UTF-8');?>
" data-hide_on_mobile="<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'], ENT_QUOTES, 'UTF-8');?>
" data-show_popup="<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['ec']->value['show_popup'], ENT_QUOTES, 'UTF-8');?>
" data-cookies_time="<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['ec']->value['cookies_time'], ENT_QUOTES, 'UTF-8');?>
" data-showonclick="<?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['showonclick'])) && $_smarty_tpl->tpl_vars['ec']->value['showonclick']) {?>1<?php } else { ?>0<?php }?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" aria-hidden="true">
	        		<div class="modal-dialog" role="document">
		      			<div class="modal-content">
				          <button type="button" class="close st_modal_close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
">
				            <span aria-hidden="true">&times;</span>
				          </button>
					        <div class="modal-body st_modal_body">
					        	<div id="st_news_letter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_news_letter'], ENT_QUOTES, 'UTF-8');?>
" class="st_news_letter st_news_letter_popup <?php if (!$_smarty_tpl->tpl_vars['ec']->value['template']) {?> text-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['text_align'], ENT_QUOTES, 'UTF-8');?>
 text-md-2 <?php }?>">
				         	      <div class="st_news_letter_box">
				                    <div class="alert alert-danger hidden"></div>
				                    <div class="alert alert-success hidden"></div> 
                                    <div class="news_letter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['template'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ec']->value['template']) {?> flex_container flex_column_md text-md-2 <?php }?>">    
					            	<?php if ($_smarty_tpl->tpl_vars['ec']->value['content']) {?><div class="st_news_letter_content style_content flex_child <?php if ($_smarty_tpl->tpl_vars['ec']->value['template']) {?> m-r-1 <?php }?>"><?php echo $_smarty_tpl->tpl_vars['ec']->value['content'];?>
</div><?php }?>
					            	<?php if ($_smarty_tpl->tpl_vars['ec']->value['show_newsletter']) {?>
					            	<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_url']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class="st_news_letter_form flex_child_md">
					            		<?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['show_gender'])) && $_smarty_tpl->tpl_vars['ec']->value['show_gender']) {?>
				                            <div class="st_news_letter_gender">
				                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Gender::getGenders(), 'gender', false, 'k');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
				                                <label for="id_gender<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gender']->value->id, ENT_QUOTES, 'UTF-8');?>
" class="radio-inline">
				                                <input type="radio" name="id_gender" id="id_gender<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gender']->value->id, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['gender']->value->id )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_POST['id_gender'])) && $_POST['id_gender'] == $_smarty_tpl->tpl_vars['gender']->value->id) {?>checked="checked"<?php }?> />
				                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gender']->value->name, ENT_QUOTES, 'UTF-8');?>
</label>
				                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				                            </div>
				                        <?php }?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

				                        <div class="st_news_letter_form_inner">
					                        <div class="input-group round_item js-parent-focus input-group-with-border" >
												<input class="form-control st_news_letter_input js-child-focus" type="text" name="email" value="<?php if ((isset($_smarty_tpl->tpl_vars['value']->value)) && $_smarty_tpl->tpl_vars['value']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?>" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your e-mail','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" />
								                <span class="input-group-btn">
								                	<button type="submit" name="submitStNewsletter" class="btn btn-less-padding st_news_letter_submit link_color">
									                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

									                </button>
								                </span>
											</div>
										</div>
										<input type="hidden" name="action" value="0" />
										<input type="hidden" name="submitNewsletter" value="1" />
									</form>				
									<?php }?>
                                    </div>
				            	  </div>
									<?php if (!$_smarty_tpl->tpl_vars['ec']->value['show_popup']) {?>
									<div class="st_news_letter_do_not_show_outer clearfix">
                                        <div class="st_news_letter_do_not_show_inner form-check fr mb-0">
                                            <label class="form-check-label">
                                              <input type="checkbox" name="st_news_letter_do_not_show" class="st_news_letter_do_not_show form-check-input" autocomplete="off" />
                                              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show again','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

                                            </label>
                                        </div>
									</div>
									<?php }?>	
					            </div>
					        </div>
				        </div>
			        </div>
		        </div>
        	<?php }?>
        <?php } else { ?>
	        <?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['is_full_width'])) && $_smarty_tpl->tpl_vars['ec']->value['is_full_width']) {?><div id="st_news_letter_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_news_letter'], ENT_QUOTES, 'UTF-8');?>
" class="st_news_letter_container full_container <?php if ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile']) {?>hidden-sm-down<?php }?> block"><div class="container"><div class="row"><div class="col-12 col-sm-12"><?php }?>
	            <div id="st_news_letter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_news_letter'], ENT_QUOTES, 'UTF-8');?>
" class="st_news_letter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_news_letter'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile']) {?>hidden-sm-down<?php }?> <?php if (!(isset($_smarty_tpl->tpl_vars['ec']->value['is_full_width'])) || !$_smarty_tpl->tpl_vars['ec']->value['is_full_width']) {?>block<?php }?> st_news_letter <?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['is_column'])) && $_smarty_tpl->tpl_vars['ec']->value['is_column']) {?> column_block <?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['ec']->value['title_align'] != 3) {?>
                    <div class="title_block flex_container title_align_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['ec']->value['title_align'], ENT_QUOTES, 'UTF-8');?>
 <?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['sub_title'])) && $_smarty_tpl->tpl_vars['ec']->value['sub_title']) {?> st_has_sub_title <?php }?>">
                        <div class="flex_child title_flex_left"></div>
                        <div class="title_block_inner">
                        	<?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['title'])) && $_smarty_tpl->tpl_vars['ec']->value['title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>
                        </div>
                        <div class="flex_child title_flex_right"></div>
                    </div>
					<?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['sub_title'])) && $_smarty_tpl->tpl_vars['ec']->value['sub_title']) {?><div class="slider_sub_title"><?php echo $_smarty_tpl->tpl_vars['ec']->value['sub_title'];?>
</div><?php }?>
                    <?php }?>
	            	<div class="st_news_letter_box <?php if (!$_smarty_tpl->tpl_vars['ec']->value['template']) {?> text-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['text_align'], ENT_QUOTES, 'UTF-8');?>
 text-md-2 <?php }?> block_content">
                    <div class="alert alert-danger hidden"></div>
                    <div class="alert alert-success hidden"></div>
                    <div class="news_letter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['template'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ec']->value['template']) {?> flex_container flex_column_md <?php }?>"> 
                    <?php if ($_smarty_tpl->tpl_vars['ec']->value['content']) {?><div class="st_news_letter_content style_content flex_child <?php if ($_smarty_tpl->tpl_vars['ec']->value['template']) {?> m-r-1 <?php }?>"><?php echo $_smarty_tpl->tpl_vars['ec']->value['content'];?>
</div><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['ec']->value['show_newsletter']) {?>
	            	<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_url']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class="st_news_letter_form flex_child_md">
                            <?php if ($_smarty_tpl->tpl_vars['ec']->value['show_gender']) {?>
                            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</label>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Gender::getGenders(), 'gender', false, 'k');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
                                <label for="id_gender<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gender']->value->id, ENT_QUOTES, 'UTF-8');?>
" class="radio-inline">
                                <input type="radio" name="id_gender" id="id_gender<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gender']->value->id, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['gender']->value->id )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_POST['id_gender'])) && $_POST['id_gender'] == $_smarty_tpl->tpl_vars['gender']->value->id) {?>checked="checked"<?php }?> />
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gender']->value->name, ENT_QUOTES, 'UTF-8');?>
</label>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
							<?php if (empty($_smarty_tpl->tpl_vars['ec']->value['gdpr_options'])) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

							<?php }?>
                            <div class="st_news_letter_form_inner">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "stnewsletter_button", null, null);?>
			                    <?php if (((isset($_smarty_tpl->tpl_vars['ec']->value['button_icon'])) && $_smarty_tpl->tpl_vars['ec']->value['button_icon']['value'] != '') || ((isset($_smarty_tpl->tpl_vars['ec']->value['button_text'])) && $_smarty_tpl->tpl_vars['ec']->value['button_text'] != '')) {?>
								<?php if (((isset($_smarty_tpl->tpl_vars['ec']->value['button_icon'])) && $_smarty_tpl->tpl_vars['ec']->value['button_icon']['value'] != '')) {?>
								<i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['button_icon']['value'], ENT_QUOTES, 'UTF-8');?>
"></i>
								<?php }?>
								<?php if (((isset($_smarty_tpl->tpl_vars['ec']->value['button_text'])))) {?>
								<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['button_text'], ENT_QUOTES, 'UTF-8');?>

								<?php }?>
								<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

								<?php }?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	                        <div class="input-group round_item js-parent-focus input-group-with-border <?php if (!empty($_smarty_tpl->tpl_vars['ec']->value['gdpr_options'])) {?> mb-2 <?php }?>" >
								<input class="form-control st_news_letter_input js-child-focus" type="text" name="email" value="<?php if ((isset($_smarty_tpl->tpl_vars['value']->value)) && $_smarty_tpl->tpl_vars['value']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?>" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your e-mail','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" />
								<?php if (!(isset($_smarty_tpl->tpl_vars['ec']->value['button_layout'])) || $_smarty_tpl->tpl_vars['ec']->value['button_layout'] == '1') {?>
				                <span class="input-group-btn">
				                	<button type="submit" name="submitStNewsletter" class="btn btn-less-padding st_news_letter_submit link_color"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'stnewsletter_button');?>
</button>
				                </span>
								<?php }?>
							</div>
							<?php if (!empty($_smarty_tpl->tpl_vars['ec']->value['gdpr_options'])) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

							<?php }?>
							<?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['button_layout'])) && $_smarty_tpl->tpl_vars['ec']->value['button_layout'] == '2') {?>
			                	<button type="submit" name="submitStNewsletter" class="btn btn-default st_news_letter_submit mar_t10"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'stnewsletter_button');?>
</button>
							<?php }?>
							</div>
							<input type="hidden" name="action" value="0" />
							<input type="hidden" name="submitNewsletter" value="1" />
					</form>
					<?php }?>
                    </div>
                    </div>
	            </div>
	        <?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['is_full_width'])) && $_smarty_tpl->tpl_vars['ec']->value['is_full_width']) {?></div></div></div></div><?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<!-- /MODULE st stnewsletter -->
<?php }
}
}
