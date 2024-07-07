<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab441b38086_21840084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bcf48a1116ed6ed7dfb7a3a2d00be5d4f7e1692' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/footer.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/footer-bottom.tpl' => 1,
  ),
),false)) {
function content_668ab441b38086_21840084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<footer id="footer" class="footer-container">
    <div id="footer_before_container"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterBefore"),$_smarty_tpl ) );?>
</div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_611256368668ab441b2db01_10527527', 'hook_stacked_footer');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_279968523668ab441b34641_63381271', 'hook_footer');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1774110310668ab441b361b3_21676034', 'hook_footer_after');
?>


    <?php $_smarty_tpl->_subTemplateRender('file:_partials/footer-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</footer><?php }
/* {block 'hook_stacked_footer'} */
class Block_611256368668ab441b2db01_10527527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_stacked_footer' => 
  array (
    0 => 'Block_611256368668ab441b2db01_10527527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

	<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_1']->value )) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_2']->value )) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_3']->value )) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_4']->value )) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_5']->value )) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_6']->value )) || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?>
    <section id="footer-primary">
		<div class="wide_container_box <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['f_top_fullwidth'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>wide_container<?php }?>">
            <div id="footer-primary-container" class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['f_top_fullwidth'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>container<?php } else { ?>container-fluid<?php }?>">
                <div class="row footer_first_level_row">
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_1'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?><div id="stacked_footer_column_1" class="col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_1'],'.','-'), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_1']->value;?>
</div><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_2'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?><div id="stacked_footer_column_2" class="col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_2'],'.','-'), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_2']->value;?>
</div><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_3'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?><div id="stacked_footer_column_3" class="col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_3'],'.','-'), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_3']->value;?>
</div><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_4'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?><div id="stacked_footer_column_4" class="col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_4'],'.','-'), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_4']->value;?>
</div><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_5'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?><div id="stacked_footer_column_5" class="col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_5'],'.','-'), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_5']->value;?>
</div><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_6'] || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?><div id="stacked_footer_column_6" class="col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['stacked_footer_column_6'],'.','-'), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_STACKED_FOOTER_6']->value;?>
</div><?php }?>
                </div>
			</div>
        </div>
    </section>
    <?php }?>
    <?php
}
}
/* {/block 'hook_stacked_footer'} */
/* {block 'hook_footer'} */
class Block_279968523668ab441b34641_63381271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_279968523668ab441b34641_63381271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayFooter", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooter"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayFooter') ))) {?>
    <section id="footer-secondary">
		<div class="wide_container_box <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['footer_fullwidth'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>wide_container<?php }?>">
			<div id="footer-secondary-container" class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['footer_fullwidth'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>container<?php } else { ?>container-fluid<?php }?>">
                <div class="row footer_first_level_row">
				    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayFooter');?>

                </div>
			</div>
        </div>
    </section>
    <?php }?>
    <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_1774110310668ab441b361b3_21676034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_1774110310668ab441b361b3_21676034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayFooterAfter", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterAfter"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayFooterAfter') ))) {?>
    <section id="footer-tertiary">
		<div class="wide_container_box <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['f_secondary_fullwidth'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>wide_container<?php }?>">
			<div id="footer-tertiary-container" class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['f_secondary_fullwidth'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>container<?php } else { ?>container-fluid<?php }?>">
                <div class="row footer_first_level_row">
                	<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayFooterAfter');?>

                </div>
			</div>
        </div>
    </section>
    <?php }?>
    <?php
}
}
/* {/block 'hook_footer_after'} */
}
