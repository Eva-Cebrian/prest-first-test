<?php
/* Smarty version 4.3.4, created on 2024-07-18 19:54:29
  from 'module:steasycontentviewstemplateshooktextboxes2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_669956d575f2f6_22425116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '320988ef84f039086acc7bfdc1260539372e9006' => 
    array (
      0 => 'module:steasycontentviewstemplateshooktextboxes2.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669956d575f2f6_22425116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '696658148669956d5759096_59726127';
?>
<div class="flex_container flex_start">
	<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_image'])) && $_smarty_tpl->tpl_vars['element']->value['st_image']) {?>
		<div class="steasy_textboxes_image m-r-1">
			<img src="<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strpos' ][ 0 ], array( $_smarty_tpl->tpl_vars['element']->value['st_image'],'/modules/' )) !== false) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_image'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['easy_image_path']->value).($_smarty_tpl->tpl_vars['element']->value['st_image']), ENT_QUOTES, 'UTF-8');
}?>" class="easy_image" alt="<?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_header']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_header'], ENT_QUOTES, 'UTF-8');
}?>">
		</div>
	<?php }?>
	<div class="flex_child">
		<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_header'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_header']) {?><h6 class="easy_header mar_b4"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_header'], ENT_QUOTES, 'UTF-8');?>
</h6><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_sub_header'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_sub_header']) {?><div class="mar_b1 easy_sub_header"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_sub_header'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_stars']) {?>
		<div class="testimonial_stars stars_box m-b-1 fs_lg">
			<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
			<i class="fto-star-2 <?php if ($_smarty_tpl->tpl_vars['foo']->value <= $_smarty_tpl->tpl_vars['element']->value['st_el_stars']) {?> star_on <?php } else { ?> star_off <?php }?>"></i>
			<?php }
}
?>
		</div>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_text'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_text']) {?><div class="easy_text <?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_text_style'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_text_style']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_text_style'], ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->tpl_vars['element']->value['st_el_text'];?>
</div><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_info'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_info']) {?><div class="mar_b1 easy_additional_info"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_info'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_url'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_url']) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_button']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_button'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>" class="btn btn-link easy_link" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_button']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_button'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></a><?php }?>
	</div>
</div><?php }
}
