<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from 'module:stcustomersigninviewstemplateshookstcustomersignin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa5f33765_57751836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43b8c09337d64b800baa98253de92269f5c603b2' => 
    array (
      0 => 'module:stcustomersigninviewstemplateshookstcustomersignin.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa5f33765_57751836 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stcustomersignin -->
<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['welcome_logged']->value)) && trim($_smarty_tpl->tpl_vars['welcome_logged']->value) || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {
if ($_smarty_tpl->tpl_vars['welcome_link']->value) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="welcome top_bar_item <?php if ((isset($_smarty_tpl->tpl_vars['welcome_logged']->value)) && !trim($_smarty_tpl->tpl_vars['welcome_logged']->value)) {?> display_none <?php }?>" rel="nofollow" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome_logged']->value, ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><span class="welcome top_bar_item <?php if ((isset($_smarty_tpl->tpl_vars['welcome_logged']->value)) && !trim($_smarty_tpl->tpl_vars['welcome_logged']->value)) {?> display_none <?php }?>"><?php }?><span class="header_item"><?php if ((isset($_smarty_tpl->tpl_vars['welcome_logged']->value)) && trim($_smarty_tpl->tpl_vars['welcome_logged']->value)) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome_logged']->value, ENT_QUOTES, 'UTF-8');
}?></span><?php if ($_smarty_tpl->tpl_vars['welcome_link']->value) {?></a><?php } else { ?></span><?php }
}?>
		<?php if ($_smarty_tpl->tpl_vars['userinfo_dropdown']->value || $_smarty_tpl->tpl_vars['show_user_info_icons']->value == 3) {?>
			<div class="userinfo_mod_top dropdown_wrap top_bar_item header_icon_btn_<?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 0) {?>1<?php } elseif ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 1) {?>2<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_user_info_icons']->value, ENT_QUOTES, 'UTF-8');
}?>"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="dropdown_tri dropdown_tri_in header_item" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" rel="nofollow" aria-haspopup="true" aria-expanded="false"><?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value != 0) {?><span class="header_icon_btn_icon header_v_align_m <?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 1) {?> mar_r4 <?php }?>"><i class="fto-user icon_btn <?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 1) {?>fs_lg<?php } else { ?>fs_big<?php }?> mar_r4"></i></span><?php }
if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value != 2) {?><span class="header_icon_btn_text header_v_align_m"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }?><i class="fto-angle-down arrow_down arrow"></i><i class="fto-angle-up arrow_up arrow"></i></a>
		        <div class="dropdown_list">
            		<ul class="dropdown_list_ul dropdown_box custom_links_list">
            			<?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 2) {?><li><span class="dropdown_list_item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span></li><?php }?>
            			<li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow" class="dropdown_list_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a></li>
						<?php if ($_smarty_tpl->tpl_vars['show_love']->value) {?><li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'stlovedproduct','controller'=>'myloved'),$_smarty_tpl ) );?>
" rel="nofollow" class="dropdown_list_item" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loved items','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loved items','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a></li><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['show_wishlist']->value) {?><li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'stwishlist','controller'=>'mywishlist'),$_smarty_tpl ) );?>
" rel="nofollow" class="dropdown_list_item" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a></li><?php }?>
						<li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="dropdown_list_item" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log me out','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a></li>
		    		</ul>
		        </div>
		    </div>
		<?php } else { ?>
			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" class="account top_bar_item" rel="nofollow"><span class="header_item"><?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value) {?><i class="fto-user icon_btn header_v_align_m <?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value != 2) {?>fs_lg<?php } else { ?>fs_big<?php }?> mar_r4"></i><?php }
if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value != 2) {?><span class="header_v_align_m"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a>
			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" class="my_account_link top_bar_item" rel="nofollow"><span class="header_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span></a>
			<a class="logout top_bar_item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log me out','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><span class="header_item"><?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value) {?><i class="fto-logout <?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value != 2) {?>fs_lg<?php } else { ?>fs_big<?php }?> mar_r4 header_v_align_m"></i><?php }
if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value != 2) {?><span class="header_v_align_m"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><?php }?></span></a>
		<?php }
} else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['welcome']->value)) && trim($_smarty_tpl->tpl_vars['welcome']->value) || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {
if ($_smarty_tpl->tpl_vars['welcome_link']->value) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="welcome top_bar_item <?php if ((isset($_smarty_tpl->tpl_vars['welcome']->value)) && !trim($_smarty_tpl->tpl_vars['welcome']->value)) {?> display_none <?php }?>" rel="nofollow" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome']->value, ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><span class="welcome top_bar_item <?php if ((isset($_smarty_tpl->tpl_vars['welcome']->value)) && !trim($_smarty_tpl->tpl_vars['welcome']->value)) {?> display_none <?php }?>"><?php }?><span class="header_item"><?php if ((isset($_smarty_tpl->tpl_vars['welcome']->value)) && trim($_smarty_tpl->tpl_vars['welcome']->value)) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome']->value, ENT_QUOTES, 'UTF-8');
}?></span><?php if ($_smarty_tpl->tpl_vars['welcome_link']->value) {?></a><?php } else { ?></span><?php }
}?>
		<?php if ($_smarty_tpl->tpl_vars['userinfo_login']->value) {?>
			<div class="quick_login dropdown_wrap top_bar_item header_icon_btn_<?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 0) {?>1<?php } elseif ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 1) {?>2<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_user_info_icons']->value, ENT_QUOTES, 'UTF-8');
}?>"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="dropdown_tri dropdown_tri_in header_item" aria-haspopup="true" aria-expanded="false" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value != 0) {?><span class="header_icon_btn_icon header_v_align_m <?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 1) {?> mar_r4 <?php }?>"><i class="fto-user icon_btn <?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 1) {?>fs_lg<?php } else { ?>fs_big<?php }?> mar_r4"></i></span><?php }
if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value != 2) {?><span class="header_icon_btn_text header_v_align_m"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><?php }?><i class="fto-angle-down arrow_down arrow"></i><i class="fto-angle-up arrow_up arrow"></i></a>
		        <div class="dropdown_list">
		            <div class="dropdown_box login_from_block">
		    			<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['authentication_url']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
						  <div class="form_content">
					        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
					            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value,'file'=>'_partials/form-fields-1.tpl'),$_smarty_tpl ) );?>

					        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						      <div class="form-group forgot-password">
						          <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
">
						            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

						          </a>
						      </div>
						  </div>
						  <div class="form-footer">
						    <input type="hidden" name="submitLogin" value="1">
						    <button class="btn btn-default btn-spin btn-full-width" data-link-action="sign-in" type="submit">
						      <i class="fto-lock fto_small"></i>
						      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

						    </button>
						    <a class="btn btn-link btn-full-width btn-spin js-submit-active" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

							</a>
						  </div>

						</form>

		    		</div>
		        </div>
		    </div>
		<?php } else { ?>
		<a class="login top_bar_item header_icon_btn_<?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 0) {?>1<?php } elseif ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 1) {?>2<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_user_info_icons']->value, ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><span class="header_item"><?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value != 0) {?><span class="header_icon_btn_icon header_v_align_m <?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 1) {?> mar_r4 <?php }?>"><i class="fto-user icon_btn <?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value == 1) {?>fs_lg<?php } else { ?>fs_big<?php }?>"></i></span><?php }
if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value != 2) {?><span class="header_icon_btn_text header_v_align_m"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><?php }?></span></a>
		<?php }
}?>
<!-- /MODULE st stcustomersignin --><?php }
}
