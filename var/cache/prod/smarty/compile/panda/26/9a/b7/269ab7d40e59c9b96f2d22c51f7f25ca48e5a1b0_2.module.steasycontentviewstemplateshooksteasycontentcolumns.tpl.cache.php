<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from 'module:steasycontentviewstemplateshooksteasycontentcolumns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa653fba5_06352881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '269ab7d40e59c9b96f2d22c51f7f25ca48e5a1b0' => 
    array (
      0 => 'module:steasycontentviewstemplateshooksteasycontentcolumns.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:steasycontent/views/templates/hook/steasycontent-columns.tpl' => 2,
    'module:steasycontent/views/templates/hook/steasycontent-element-".((string)$_smarty_tpl->tpl_vars[\'sub_column\']->value[\'element\']).".tpl' => 1,
  ),
),false)) {
function content_668adaa653fba5_06352881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->compiled->nocache_hash = '359797696668adaa65359c6_54212910';
if (smarty_modifier_count($_smarty_tpl->tpl_vars['columns']->value) > 0) {?>
	<!-- MODULE st easy content -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['column']->value['columns'])) && count($_smarty_tpl->tpl_vars['column']->value['columns'])) {?>
		<div id="steasy_column_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['column']->value['id_st_easy_content_column'], ENT_QUOTES, 'UTF-8');?>
" class="row <?php if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?>">
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['columns'], 'sub_column');
$_smarty_tpl->tpl_vars['sub_column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_column']->value) {
$_smarty_tpl->tpl_vars['sub_column']->do_else = false;
?>
	        	<?php echo smarty_function_math(array('assign'=>"column_width",'equation'=>'(x*y)/y','x'=>$_smarty_tpl->tpl_vars['sub_column']->value['width'],'y'=>10),$_smarty_tpl);?>
 
                <?php if ((isset($_smarty_tpl->tpl_vars['sub_column']->value['width_md']))) {
if ($_smarty_tpl->tpl_vars['sub_column']->value['width_md'] != 0) {
echo smarty_function_math(array('assign'=>"column_width_md",'equation'=>'(x*y)/y','x'=>$_smarty_tpl->tpl_vars['sub_column']->value['width_md'],'y'=>10),$_smarty_tpl);
} else {
echo smarty_function_math(array('assign'=>"column_width_md",'equation'=>'(x*y)/y','x'=>$_smarty_tpl->tpl_vars['sub_column']->value['width'],'y'=>10),$_smarty_tpl);
}
} else {
$_smarty_tpl->_assignInScope('column_width_md', 12);
}?>
                <?php if ((isset($_smarty_tpl->tpl_vars['sub_column']->value['width_xs']))) {
if ($_smarty_tpl->tpl_vars['sub_column']->value['width_xs'] != 0) {
echo smarty_function_math(array('assign'=>"column_width_xs",'equation'=>'(x*y)/y','x'=>$_smarty_tpl->tpl_vars['sub_column']->value['width_xs'],'y'=>10),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['sub_column']->value['width_md'] != 0) {
echo smarty_function_math(array('assign'=>"column_width_xs",'equation'=>'(x*y)/y','x'=>$_smarty_tpl->tpl_vars['sub_column']->value['width_md'],'y'=>10),$_smarty_tpl);
} else {
echo smarty_function_math(array('assign'=>"column_width_xs",'equation'=>'(x*y)/y','x'=>$_smarty_tpl->tpl_vars['sub_column']->value['width'],'y'=>10),$_smarty_tpl);
}
} else {
$_smarty_tpl->_assignInScope('column_width_xs', 12);
}?>
	            <div id="steasy_column_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_column']->value['id_st_easy_content_column'], ENT_QUOTES, 'UTF-8');?>
" class="col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['column_width']->value,'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['column_width_md']->value,'.','-'), ENT_QUOTES, 'UTF-8');?>
 col-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['column_width_xs']->value,'.','-'), ENT_QUOTES, 'UTF-8');?>
 steasy_column <?php if ($_smarty_tpl->tpl_vars['sub_column']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['sub_column']->value['hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?>" >
    				<?php if (!$_smarty_tpl->tpl_vars['sub_column']->value['element'] && (isset($_smarty_tpl->tpl_vars['sub_column']->value['columns'])) && count($_smarty_tpl->tpl_vars['sub_column']->value['columns'])) {?>
	                	<div class="steasy_column_block"><?php $_smarty_tpl->_subTemplateRender("module:steasycontent/views/templates/hook/steasycontent-columns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['sub_column']->value['columns']), 0, true);
?></div>
	                <?php } elseif ($_smarty_tpl->tpl_vars['sub_column']->value['element'] && (((isset($_smarty_tpl->tpl_vars['sub_column']->value['elements'])) && count($_smarty_tpl->tpl_vars['sub_column']->value['elements'])) || $_smarty_tpl->tpl_vars['sub_column']->value['element'] == 7)) {?>	                	<div class="steasy_element_block"><?php $_smarty_tpl->_subTemplateRender("module:steasycontent/views/templates/hook/steasycontent-element-".((string)$_smarty_tpl->tpl_vars['sub_column']->value['element']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('sub_column'=>$_smarty_tpl->tpl_vars['sub_column']->value), 0, true);
?></div>
            		<?php }?>
	            </div>
	        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
        <?php }?>   
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
	<!-- MODULE st easy content -->   
<?php }
}
}
