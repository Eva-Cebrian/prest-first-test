<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from 'module:stcustomersigninviewstemplateshookstcustomersigninmobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b15b924_68422789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c163a3e6aeaa3df0c86d48f35cc4dd180ffe4e8d' => 
    array (
      0 => 'module:stcustomersigninviewstemplateshookstcustomersigninmobile.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42b15b924_68422789 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE st stcustomersignin -->
<!-- Block user information module NAV  -->
<?php $_smarty_tpl->_assignInScope('show_user_info_icons', Configuration::get('ST_SHOW_USER_INFO_ICONS'));
$_smarty_tpl->_assignInScope('welcome_logged', Configuration::get('STSN_WELCOME_LOGGED',$_smarty_tpl->tpl_vars['language']->value['id']));
$_smarty_tpl->_assignInScope('welcome_link', Configuration::get('STSN_WELCOME_LINK',$_smarty_tpl->tpl_vars['language']->value['id']));
$_smarty_tpl->_assignInScope('welcome', Configuration::get('STSN_WELCOME',$_smarty_tpl->tpl_vars['language']->value['id']));?>
<ul id="userinfo_mod_mobile_menu" class="mo_mu_level_0 mobile_menu_ul">
<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
	<?php if ((isset($_smarty_tpl->tpl_vars['welcome_logged']->value)) && trim($_smarty_tpl->tpl_vars['welcome_logged']->value)) {?>
    <li class="mo_ml_level_0 mo_ml_column">
        <a href="<?php if ($_smarty_tpl->tpl_vars['welcome_link']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome_link']->value, ENT_QUOTES, 'UTF-8');
} else { ?>javascript:;<?php }?>" rel="nofollow" class="mo_ma_level_0 <?php if (!$_smarty_tpl->tpl_vars['welcome_link']->value) {?> ma_span<?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome_logged']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome_logged']->value, ENT_QUOTES, 'UTF-8');?>

        </a>
    </li>
    <?php }?>
    <li class="mo_ml_level_0 mo_ml_column">
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="mo_ma_level_0" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
">
            <?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value) {?><i class="fto-user icon_btn mar_r4"></i><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>

        </a>
    </li>
    <li class="mo_ml_level_0 mo_ml_column">
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="mo_ma_level_0" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

        </a>
    </li>
    <li class="mo_ml_level_0 mo_ml_column">
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="mo_ma_level_0" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log me out','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
">
            <?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value) {?><i class="fto-logout mar_r4"></i><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

        </a>
    </li>
<?php } else { ?>
	<?php if ((isset($_smarty_tpl->tpl_vars['welcome']->value)) && trim($_smarty_tpl->tpl_vars['welcome']->value)) {?>
    <li class="mo_ml_level_0 mo_ml_column">
        <a href="<?php if ($_smarty_tpl->tpl_vars['welcome_link']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome_link']->value, ENT_QUOTES, 'UTF-8');
} else { ?>javascript:;<?php }?>" rel="nofollow" class="mo_ma_level_0 <?php if (!$_smarty_tpl->tpl_vars['welcome_link']->value) {?> ma_span<?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['welcome']->value, ENT_QUOTES, 'UTF-8');?>

        </a>
    </li>
    <?php }?>
    <li class="mo_ml_level_0 mo_ml_column">
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" rel="nofollow" class="mo_ma_level_0">
            <?php if ($_smarty_tpl->tpl_vars['show_user_info_icons']->value) {?><i class="fto-user icon_btn mar_r4"></i><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>

        </a>
    </li>
<?php }?>
</ul>
<!-- /Block usmodule NAV -->
<!-- /MODULE st stcustomersignin -->
<?php }
}
