<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:sttagsviewstemplateshooksttagsfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0ddecf8_95495478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '852704460e6921362b8528d3211a11ddf69a1aed' => 
    array (
      0 => 'module:sttagsviewstemplateshooksttagsfooter.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:sttags/views/templates/hook/sttags-items.tpl' => 1,
  ),
),false)) {
function content_668a67f0ddecf8_95495478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '968453811668a67f0ddc926_99023742';
?>
<!-- MODULE st sttags -->
<section class="block tags_block <?php if (!$_smarty_tpl->tpl_vars['is_stacked_footer']->value) {?> col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blocktags_wide_on_footer']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }
if ($_smarty_tpl->tpl_vars['hide_on_mobile']->value == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['hide_on_mobile']->value == 2) {?> st_open <?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['blocktags_title']->value != 3) {?>
	<div class="title_block <?php if ($_smarty_tpl->tpl_vars['blocktags_title']->value == 1) {?> text-center <?php } elseif ($_smarty_tpl->tpl_vars['blocktags_title']->value == 2) {?> text-right <?php }?>">
		<div class="title_block_inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular tags','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</div>
        <div class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></div>
	</div>
	<?php }?>
	<div class="footer_block_content <?php if ($_smarty_tpl->tpl_vars['blocktags_align']->value == 1) {?> text-center <?php } elseif ($_smarty_tpl->tpl_vars['blocktags_align']->value == 2) {?> text-right <?php }?> <?php if ($_smarty_tpl->tpl_vars['blocktags_title']->value == 3) {?> keep_open<?php }?>">
		<?php $_smarty_tpl->_subTemplateRender("module:sttags/views/templates/hook/sttags-items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</section>
<!-- /MODULE st sttags -->
<?php }
}
