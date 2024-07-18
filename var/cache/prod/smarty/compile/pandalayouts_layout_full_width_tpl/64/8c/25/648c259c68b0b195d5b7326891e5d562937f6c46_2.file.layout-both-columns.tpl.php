<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:13:04
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adab0a5cd22_55057588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '648c259c68b0b195d5b7326891e5d562937f6c46' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/layouts/layout-both-columns.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/password-policy-template.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_668adab0a5cd22_55057588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171180785668adab0a39bb7_58523137', 'head');
?>

  </head>
  <body id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'manufacturer' && (isset($_smarty_tpl->tpl_vars['manufacturer']->value))) {?> manufacturer-id-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer']->value['id'], ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'supplier' && (isset($_smarty_tpl->tpl_vars['supplier']->value))) {?> supplier-id-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['supplier']->value['id'], ENT_QUOTES, 'UTF-8');
}?> lang_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?> is_rtl <?php }?> dropdown_menu_event_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['drop_down'], ENT_QUOTES, 'UTF-8');?>
 
  <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device']) {?> mobile_device <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['use_mobile_header'] == 1) {?> use_mobile_header <?php }
} else { ?> desktop_device <?php }
if ($_smarty_tpl->tpl_vars['sttheme']->value['slide_lr_column']) {?> slide_lr_column <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['use_mobile_header'] == 2) {?> use_mobile_header <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['is_safari'])) && $_smarty_tpl->tpl_vars['sttheme']->value['is_safari']) {?> is_safari <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?> is_logged_1 <?php } else { ?> is_logged_0 <?php }?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1218110843668adab0a3ef86_73869932', 'body_class');
?>

  ">	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1152157807668adab0a3f439_60447492', 'hook_after_body_opening_tag');
?>

	<div id="st-container" class="st-container st-effect-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['sidebar_transition'], ENT_QUOTES, 'UTF-8');?>
">
	  <div class="st-pusher">
		<div class="st-content"><!-- this is the wrapper for the content -->
		  <div class="st-content-inner">
	<!-- off-canvas-end -->

	<main id="body_wrapper">
	  <div id="page_wrapper" class="<?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['boxstyle'])) && $_smarty_tpl->tpl_vars['sttheme']->value['boxstyle'] == 2) {?> boxed_page_wrapper <?php }?>" <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1241177773668adab0a40673_29830770', 'page_wrapper_block');
?>
>
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_954238709668adab0a409d6_39878097', 'product_activation');
?>

	  <div class="header-container <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['transparent_header']) {?> transparent-header <?php }?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['transparent_mobile_header']) {?> transparent-mobile-header <?php }?> header_sticky_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['sticky_option'], ENT_QUOTES, 'UTF-8');?>
">
	  <header id="st_header" class="animated fast">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1798803815668adab0a41b04_55974455', 'header');
?>

	  </header>
	  </div>
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1301248203668adab0a420f8_24388250', 'breadcrumb');
?>

	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_810108062668adab0a431e3_58703585', 'notifications');
?>


	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_302081924668adab0a43984_44766173', "full_width_top");
?>


	  <section id="wrapper" class="columns-container">
		<div id="columns" class="container">
		  <div class="row">

			<?php $_smarty_tpl->_assignInScope('cols_md', 12);?>
			<?php $_smarty_tpl->_assignInScope('cols_lg', 12);?>
			<?php $_smarty_tpl->_assignInScope('cols_xl', 12);?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2014550106668adab0a45173_98248004', "left_column");
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1189438423668adab0a4cac0_21349050', "right_column");
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_455150894668adab0a53fe3_28670460', "content_wrapper");
?>

		  </div>
		</div>
	  </section>
	  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12786742668adab0a55fe5_88836892', "full_width_bottom");
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_828501941668adab0a56948_11416049', "footer");
?>

	  </div><!-- #page_wrapper -->
	</main>
	<!-- off-canvas-begin -->
			<div id="st-content-inner-after"></div>
		  </div><!-- /st-content-inner -->
		</div><!-- /st-content -->
		<div id="st-pusher-after"></div>
	  </div><!-- /st-pusher -->
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_340345927668adab0a57038_24801930', "side_bar");
?>

		
	
		<div id="sidebar_box" class="flex_container">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_386100731668adab0a576a7_00895578', "right_left_bar");
?>

		</div>
	</div><!-- /st-container -->
	<!-- off-canvas-end -->
	<div id="popup_go_login" class="inline_popup_content small_popup mfp-with-anim mfp-hide text-center">
	  <p class="fs_md"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please sign in first.','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</p>
	  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
" class="go" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a> 
	</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2069922831668adab0a5a296_62200833', 'javascript_bottom');
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['custom_js'])) && $_smarty_tpl->tpl_vars['sttheme']->value['custom_js']) {?>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['custom_js'], ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['tracking_code'])) && $_smarty_tpl->tpl_vars['sttheme']->value['tracking_code']) {
echo $_smarty_tpl->tpl_vars['sttheme']->value['tracking_code'];
}?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_673111310668adab0a5c2c0_19614634', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_171180785668adab0a39bb7_58523137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_171180785668adab0a39bb7_58523137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php
}
}
/* {/block 'head'} */
/* {block 'body_class'} */
class Block_1218110843668adab0a3ef86_73869932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body_class' => 
  array (
    0 => 'Block_1218110843668adab0a3ef86_73869932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 hide-left-column hide-right-column <?php
}
}
/* {/block 'body_class'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_1152157807668adab0a3f439_60447492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_1152157807668adab0a3f439_60447492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'page_wrapper_block'} */
class Block_1241177773668adab0a40673_29830770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_wrapper_block' => 
  array (
    0 => 'Block_1241177773668adab0a40673_29830770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_wrapper_block'} */
/* {block 'product_activation'} */
class Block_954238709668adab0a409d6_39878097 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_954238709668adab0a409d6_39878097',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	  <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_1798803815668adab0a41b04_55974455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1798803815668adab0a41b04_55974455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_1301248203668adab0a420f8_24388250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_1301248203668adab0a420f8_24388250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  <?php if ((isset($_smarty_tpl->tpl_vars['steasybreadcrumb']->value))) {?>
	  	<?php echo $_smarty_tpl->tpl_vars['steasybreadcrumb']->value;?>

	  <?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBreadcrumb','page_name'=>$_smarty_tpl->tpl_vars['page']->value['page_name']),$_smarty_tpl ) );?>

		<div class="breadcrumb_spacing"></div>		<?php }?>
	  <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'notifications'} */
class Block_810108062668adab0a431e3_58703585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_810108062668adab0a431e3_58703585',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	  <?php
}
}
/* {/block 'notifications'} */
/* {block "full_width_top"} */
class Block_302081924668adab0a43984_44766173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'full_width_top' => 
  array (
    0 => 'Block_302081924668adab0a43984_44766173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <div class="full_width_top_container"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFullWidthTop'),$_smarty_tpl ) );?>
</div>
		  <div class="full_width_top2_container"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFullWidthTop2'),$_smarty_tpl ) );?>
</div>
		  <div class="wrapper_top_container"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>
</div>
	  <?php
}
}
/* {/block "full_width_top"} */
/* {block "left_column"} */
class Block_2014550106668adab0a45173_98248004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_2014550106668adab0a45173_98248004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

			<?php $_smarty_tpl->_assignInScope('cols_md', ($_smarty_tpl->tpl_vars['cols_md']->value-$_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_md']));?>
			<?php $_smarty_tpl->_assignInScope('cols_lg', ($_smarty_tpl->tpl_vars['cols_lg']->value-$_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_lg']));?>
			<?php $_smarty_tpl->_assignInScope('cols_xl', ($_smarty_tpl->tpl_vars['cols_xl']->value-$_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_xl']));?>
			  <div id="left_column" class="main_column <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['slide_lr_column']) {?> col-<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_xxs']) {
echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_xxs'],'.','-'), ENT_QUOTES, 'UTF-8');
} else { ?>8<?php }?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_xs']) {?> col-sm-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_xs'],'.','-'), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_sm']) {?> col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_sm'],'.','-'), ENT_QUOTES, 'UTF-8');
}?> <?php } else { ?> col-12 <?php }?> col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_md'],'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_lg'],'.','-'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_xl']) {?> col-xxl-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_xl'],'.','-'), ENT_QUOTES, 'UTF-8');
}?>">
			  <div class="wrapper-sticky">
			  	<div class="main_column_box">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

				<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblog-default' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblog-category' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblog-article' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblogarchives-default' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblogarchives-default' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblogsearch-default') {?>				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayStBlogLeftColumn'),$_smarty_tpl ) );?>

				<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

				<?php }?>
			  	</div>
			  </div>
			  </div>
			<?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_1189438423668adab0a4cac0_21349050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1189438423668adab0a4cac0_21349050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

			<?php $_smarty_tpl->_assignInScope('cols_md', ($_smarty_tpl->tpl_vars['cols_md']->value-$_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_md']));?>
			<?php $_smarty_tpl->_assignInScope('cols_lg', ($_smarty_tpl->tpl_vars['cols_lg']->value-$_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_lg']));?>
			<?php $_smarty_tpl->_assignInScope('cols_xl', ($_smarty_tpl->tpl_vars['cols_xl']->value-$_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_xl']));?>
			  <div id="right_column" class="main_column <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['slide_lr_column']) {?> col-<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_xxs']) {
echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_xxs'],'.','-'), ENT_QUOTES, 'UTF-8');
} else { ?>8<?php }?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_xs']) {?> col-sm-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_xs'],'.','-'), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_sm']) {?> col-md-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_sm'],'.','-'), ENT_QUOTES, 'UTF-8');
}?> <?php } else { ?> col-12 <?php }?> col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_md'],'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_lg'],'.','-'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_xl']) {?> col-xxl-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['right_column_size_xl'],'.','-'), ENT_QUOTES, 'UTF-8');
}?>">
			  <div class="wrapper-sticky">
			  	<div class="main_column_box">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

				<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblog-default' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblog-category' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblog-article' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblogarchives-default' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblogarchives-default' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblogsearch-default') {?>				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayStBlogRightColumn'),$_smarty_tpl ) );?>

				<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

				<?php }?>
			  	</div>
			  </div>
			  </div>
			<?php
}
}
/* {/block "right_column"} */
/* {block "content"} */
class Block_179953046668adab0a556d8_14231551 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <p>Hello world! This is HTML5 Boilerplate.</p>
				<?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_455150894668adab0a53fe3_28670460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_455150894668adab0a53fe3_28670460',
  ),
  'content' => 
  array (
    0 => 'Block_179953046668adab0a556d8_14231551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

			  <div id="center_column" class="col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['cols_md']->value,'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['cols_lg']->value,'.','-'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['left_column_size_xl']) {?> col-xxl-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['cols_xl']->value,'.','-'), ENT_QUOTES, 'UTF-8');
}?>">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179953046668adab0a556d8_14231551', "content", $this->tplIndex);
?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

			  </div>
			<?php
}
}
/* {/block "content_wrapper"} */
/* {block "full_width_bottom"} */
class Block_12786742668adab0a55fe5_88836892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'full_width_bottom' => 
  array (
    0 => 'Block_12786742668adab0a55fe5_88836892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <div class="full_width_bottom_container"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFullWidthBottom"),$_smarty_tpl ) );?>
</div>
		  <div class="wrapper_bottom_container"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>
</div>
		<?php
}
}
/* {/block "full_width_bottom"} */
/* {block "footer"} */
class Block_828501941668adab0a56948_11416049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_828501941668adab0a56948_11416049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php
}
}
/* {/block "footer"} */
/* {block "side_bar"} */
class Block_340345927668adab0a57038_24801930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'side_bar' => 
  array (
    0 => 'Block_340345927668adab0a57038_24801930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
		
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displaySideBar"),$_smarty_tpl ) );?>

	  <?php
}
}
/* {/block "side_bar"} */
/* {block 'right_left_bar_left_column'} */
class Block_162922583668adab0a57891_71223857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="switch_left_column_wrap" class="rightbar_wrap <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['slide_lr_column']) {?> hidden-lg-up <?php } else { ?> display_none <?php }?>">
					<a href="javascript:;" id="switch_left_column" data-name="left_column" data-direction="open_column" class="rightbar_tri icon_wrap with_text" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle left column','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-columns"></i><span class="icon_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Left column','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span></a>   
				</div>
			<?php
}
}
/* {/block 'right_left_bar_left_column'} */
/* {block 'right_left_bar_right_column'} */
class Block_1521839459668adab0a588e5_58227383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="switch_right_column_wrap" class="rightbar_wrap <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['slide_lr_column']) {?> hidden-lg-up <?php } else { ?> display_none <?php }?>">
					<a href="javascript:;" id="switch_right_column" data-name="right_column" data-direction="open_column" class="rightbar_tri icon_wrap with_text" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle right column','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
"><i class="fto-columns"></i><span class="icon_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Right column','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span></a>   
				</div>
			<?php
}
}
/* {/block 'right_left_bar_right_column'} */
/* {block "right_left_bar"} */
class Block_386100731668adab0a576a7_00895578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_left_bar' => 
  array (
    0 => 'Block_386100731668adab0a576a7_00895578',
  ),
  'right_left_bar_left_column' => 
  array (
    0 => 'Block_162922583668adab0a57891_71223857',
  ),
  'right_left_bar_right_column' => 
  array (
    0 => 'Block_1521839459668adab0a588e5_58227383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162922583668adab0a57891_71223857', 'right_left_bar_left_column', $this->tplIndex);
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightBar"),$_smarty_tpl ) );?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1521839459668adab0a588e5_58227383', 'right_left_bar_right_column', $this->tplIndex);
?>

		<?php
}
}
/* {/block "right_left_bar"} */
/* {block 'javascript_bottom'} */
class Block_2069922831668adab0a5a296_62200833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_2069922831668adab0a5a296_62200833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender("file:_partials/password-policy-template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_673111310668adab0a5c2c0_19614634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_673111310668adab0a5c2c0_19614634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
