<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from 'module:steasycontentviewstemplateshooksteasycontentelement1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0e2b771_16366686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '896af6a64713a5bd4ec2b642e53cc415f1f0f976' => 
    array (
      0 => 'module:steasycontentviewstemplateshooksteasycontentelement1.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:steasycontent/views/templates/hook/icon_with_text/".((string)$_smarty_tpl->tpl_vars[\'pre_template\']->value[0]).".tpl' => 1,
  ),
),false)) {
function content_668a67f0e2b771_16366686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->compiled->nocache_hash = '1268013996668a67f0e27351_72383009';
?>
<div class="row">
<?php $_smarty_tpl->_assignInScope('element_width_total', 0);?> 
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_column']->value['elements'], 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
    <?php if (($_smarty_tpl->tpl_vars['element_width_total']->value+$_smarty_tpl->tpl_vars['element']->value['st_el_width']) > 12) {?>
    	</div><div class="row">
    	<?php $_smarty_tpl->_assignInScope('element_width_total', 0);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('element_width_total', $_smarty_tpl->tpl_vars['element_width_total']->value+$_smarty_tpl->tpl_vars['element']->value['st_el_width']);?>
    <?php echo smarty_function_math(array('assign'=>"element_width",'equation'=>'(x*y)/y','x'=>$_smarty_tpl->tpl_vars['element']->value['st_el_width'],'y'=>10),$_smarty_tpl);?>
 
    <div id="steasy_element_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['id_st_easy_content_element'], ENT_QUOTES, 'UTF-8');?>
" class="col-lg-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['element_width']->value,'.','-'), ENT_QUOTES, 'UTF-8');?>
 steasy_element_1 <?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['st_el_hide_on_mobile'] == 2) {?> hidden-lg-up <?php }?>">
    	<div class="steasy_element_item text-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_text_align'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_content_width']) {?> width_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_content_width'], ENT_QUOTES, 'UTF-8');?>
 <?php }?>">
		<?php $_smarty_tpl->_assignInScope('pre_template', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'explode' ][ 0 ], array( "_",$_smarty_tpl->tpl_vars['element']->value['st_el_icon_with_text'] )));?>
    	<?php $_smarty_tpl->_subTemplateRender("module:steasycontent/views/templates/hook/icon_with_text/".((string)$_smarty_tpl->tpl_vars['pre_template']->value[0]).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    	</div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
</div>  <?php }
}
