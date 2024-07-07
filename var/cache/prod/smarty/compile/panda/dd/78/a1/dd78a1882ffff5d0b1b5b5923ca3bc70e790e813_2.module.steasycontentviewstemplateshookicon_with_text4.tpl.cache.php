<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from 'module:steasycontentviewstemplateshookicon_with_text4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b0ad206_32748499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd78a1882ffff5d0b1b5b5923ca3bc70e790e813' => 
    array (
      0 => 'module:steasycontentviewstemplateshookicon_with_text4.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42b0ad206_32748499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '654125742668ab42b0a8838_34589884';
?>
<div class="easy_icon_with_text_<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_icon_with_text']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_icon_with_text'], ENT_QUOTES, 'UTF-8');
}?> flex_container flex_start">
	<em class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_icon'], ENT_QUOTES, 'UTF-8');?>
 easy_icon fs_md color_444"><span class="unvisible">&nbsp;</span></em>
	<div class="flex_child">
        <?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_header'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_header']) {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_url'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_url']) {?>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_url'], ENT_QUOTES, 'UTF-8');?>
" class="fs_lg easy_header color_444" rel="nofollow" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_header'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_header'], ENT_QUOTES, 'UTF-8');?>
</a>                
            <?php } else { ?>
                <div class="fs_lg easy_header color_444"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_header'], ENT_QUOTES, 'UTF-8');?>
</div>
            <?php }?>
        <?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_sub_header'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_sub_header']) {?><div class="easy_sub_header pad_b6"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_sub_header'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_text'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_text']) {?><div class="easy_text <?php if (!$_smarty_tpl->tpl_vars['element']->value['st_el_url']) {?> pad_b6<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_text'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_url'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_url'] && $_smarty_tpl->tpl_vars['element']->value['st_el_button']) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_button']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_button'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>" class="easy_link" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_button']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_button'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></a><?php }?>
	</div>
</div><?php }
}
