<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from 'module:steasycontentviewstemplateshookicon_with_text2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42ade4972_40942908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '278ac93b03a893a3e62cb2ad69fcf0a4bcd37d68' => 
    array (
      0 => 'module:steasycontentviewstemplateshookicon_with_text2.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42ade4972_40942908 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="easy_icon_with_text_<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_icon_with_text']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_icon_with_text'], ENT_QUOTES, 'UTF-8');
}?>">
<div class="easy_icon_wrap flex_container <?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_icon_with_text'] == '2_4') {?> flex_start <?php } else { ?> pad_b1 <?php }?>">
	<em class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_icon'], ENT_QUOTES, 'UTF-8');?>
 fs_xl easy_icon color_444"><span class="unvisible">&nbsp;</span></em>
	<div class="flex_child">
        <?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_icon_with_text'] == '2_3' && $_smarty_tpl->tpl_vars['element']->value['st_el_sub_header']) {?><div class="easy_sub_header"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_sub_header'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_header'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_header']) {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_url'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_url']) {?>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_url'], ENT_QUOTES, 'UTF-8');?>
" class="fs_lg color_444 easy_header" rel="nofollow" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_header'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_header'], ENT_QUOTES, 'UTF-8');?>
</a>                
            <?php } else { ?>
                <div class="fs_lg color_444 easy_header"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_header'], ENT_QUOTES, 'UTF-8');?>
</div>
            <?php }?>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_icon_with_text'] != '2_3' && $_smarty_tpl->tpl_vars['element']->value['st_el_sub_header']) {?><div class="easy_sub_header"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_sub_header'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
	</div>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_text'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_text']) {?><div class="color_999 easy_text pad_b1"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_text'], ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ((isset($_smarty_tpl->tpl_vars['element']->value['st_el_url'])) && $_smarty_tpl->tpl_vars['element']->value['st_el_url'] && $_smarty_tpl->tpl_vars['element']->value['st_el_button']) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_button']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_button'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?>" class="easy_link" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['element']->value['st_el_button']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['st_el_button'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );
}?></a><?php }?>
</div><?php }
}
