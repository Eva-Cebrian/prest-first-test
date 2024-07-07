<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from 'module:ps_categorytreeviewstemplateshookps_categorytree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4419aea00_57164984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8921007f54626fc7fe42cbff53f1d70828d3393d' => 
    array (
      0 => 'module:ps_categorytreeviewstemplateshookps_categorytree.tpl',
      1 => 1720204187,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab4419aea00_57164984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/var/cache/prod/smarty/compile/panda/89/21/00/8921007f54626fc7fe42cbff53f1d70828d3393d_2.module.ps_categorytreeviewstemplateshookps_categorytree.tpl.php',
    'uid' => '8921007f54626fc7fe42cbff53f1d70828d3393d',
    'call_name' => 'smarty_template_function_categories_226890940668ab4419a4e34_97589713',
  ),
));
?>


<?php if (count($_smarty_tpl->tpl_vars['categories']->value['children'])) {?>
<div class="block-categories block column_block">
  <div class="title_block flex_container title_align_0 title_style_<?php echo htmlspecialchars((string) (int)$_smarty_tpl->tpl_vars['sttheme']->value['heading_style'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="flex_child title_flex_left"></div>
    <a class="title_block_inner" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['categories']->value['name'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['categories']->value['link'];?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['categories']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
    <div class="flex_child title_flex_right"></div>
  </div>
  <div class="block_content">
    <div class="acc_box category-top-menu">
      <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['categories']->value['children']), true);?>

    </div>
  </div>
</div>
<?php }
}
/* smarty_template_function_categories_226890940668ab4419a4e34_97589713 */
if (!function_exists('smarty_template_function_categories_226890940668ab4419a4e34_97589713')) {
function smarty_template_function_categories_226890940668ab4419a4e34_97589713(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="category-sub-menu category-sub-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?><li data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if (((isset($_smarty_tpl->tpl_vars['category']->value)) && is_array($_smarty_tpl->tpl_vars['category']->value) && (isset($_smarty_tpl->tpl_vars['category']->value['id'])) && $_smarty_tpl->tpl_vars['category']->value['id'] == $_smarty_tpl->tpl_vars['node']->value['id']) || ((isset($_smarty_tpl->tpl_vars['id_category_current']->value)) && $_smarty_tpl->tpl_vars['id_category_current']->value == $_smarty_tpl->tpl_vars['node']->value['id'])) {?> current_cate <?php }?>"><div class="acc_header flex_container"><a class="flex_child" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><span class="acc_icon collapsed" data-toggle="collapse" data-target="#exCollapsingNavbar<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="fto-plus-2 acc_open fs_xl"></i><i class="fto-minus acc_close fs_xl"></i></span><?php }?></div><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><div class="collapse" id="exCollapsingNavbar<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}}
/*/ smarty_template_function_categories_226890940668ab4419a4e34_97589713 */
}
