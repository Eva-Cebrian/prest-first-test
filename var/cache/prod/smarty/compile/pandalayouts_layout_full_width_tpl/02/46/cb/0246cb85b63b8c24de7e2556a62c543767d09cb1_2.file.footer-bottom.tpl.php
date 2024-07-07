<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/footer-bottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b0b6422_03579430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0246cb85b63b8c24de7e2556a62c543767d09cb1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/footer-bottom.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42b0b6422_03579430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayFooterBottomLeft", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterBottomLeft"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayFooterBottomRight", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterBottomRight"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (((isset($_smarty_tpl->tpl_vars['sttheme']->value['copyright_text'])) && $_smarty_tpl->tpl_vars['sttheme']->value['copyright_text']) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayFooterBottomLeft') )) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayFooterBottomRight') )) || ((isset($_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src'])) && $_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src']) || ((isset($_smarty_tpl->tpl_vars['sttheme']->value['responsive'])) && $_smarty_tpl->tpl_vars['sttheme']->value['responsive'] && (isset($_smarty_tpl->tpl_vars['sttheme']->value['enabled_version_swithing'])) && $_smarty_tpl->tpl_vars['sttheme']->value['enabled_version_swithing']) || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?>
    <div id="footer-bottom" class="<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['f_info_center']) {?> footer_bottom_center <?php }?>">
        <div class="wide_container_box <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['f_info_fullwidth'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>wide_container<?php }?>">
            <div id="footer-bottom-container" class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['f_info_fullwidth'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>container<?php } else { ?>container-fluid<?php }?>">
                <div class="row">
                    <div class="col-12 col-sm-12 clearfix">      
                        <aside id="footer_bottom_right">
                        	<?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src'])) && $_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src']) {?>    
	                            <img data-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" class="st_payment_icon cate_pro_lazy" />
	                        <?php }?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayFooterBottomRight');?>

                        </aside>
                        <aside id="footer_bottom_left">
                        	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_523266560668ab42b0b5725_50606531', 'copyright_link');
?>

	    					<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayFooterBottomLeft');?>
 
    					</aside> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }
}
/* {block 'copyright_link'} */
class Block_523266560668ab42b0b5725_50606531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_523266560668ab42b0b5725_50606531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="copyright_text"><?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['copyright_text']))) {
echo $_smarty_tpl->tpl_vars['sttheme']->value['copyright_text'];
}?></div><?php
}
}
/* {/block 'copyright_link'} */
}
