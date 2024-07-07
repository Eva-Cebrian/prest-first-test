<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from 'module:stnewsletterviewstemplateshookstnewsletterfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b05c562_10719907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3171cf815947ef8833155ae4d6c64c1288ea6cca' => 
    array (
      0 => 'module:stnewsletterviewstemplateshookstnewsletterfooter.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42b05c562_10719907 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1067544142668ab42b054746_79184708';
if ((isset($_smarty_tpl->tpl_vars['news_letter_array']->value)) && count($_smarty_tpl->tpl_vars['news_letter_array']->value)) {?>
	<!-- MODULE st stnewsletter -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news_letter_array']->value, 'ec');
$_smarty_tpl->tpl_vars['ec']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ec']->value) {
$_smarty_tpl->tpl_vars['ec']->do_else = false;
?>
		<section id="st_news_letter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_news_letter'], ENT_QUOTES, 'UTF-8');?>
" class="st_news_letter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['id_st_news_letter'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 1) {?> hidden-md-down <?php } elseif ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile'] == 2) {?> st_open<?php }?> footer_block block <?php if (!$_smarty_tpl->tpl_vars['ec']->value['is_stacked_footer']) {?> col-lg-<?php if ($_smarty_tpl->tpl_vars['ec']->value['span']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['span'], ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?> <?php }?>">
		    <?php if ($_smarty_tpl->tpl_vars['ec']->value['title_align'] != 3) {?>
    		<div class="title_block">
                <div class="title_block_inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</div>
                <div class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></div></div>
			<?php }?>
			<div class="footer_block_content <?php if ($_smarty_tpl->tpl_vars['ec']->value['title_align'] == 3) {?>keep_open<?php }?> <?php if (!$_smarty_tpl->tpl_vars['ec']->value['template']) {?> text-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['text_align'], ENT_QUOTES, 'UTF-8');?>
 text-md-2 <?php }?>">
				<div class="st_news_letter_box">
                <div class="alert alert-danger hidden"></div>
                <div class="alert alert-success hidden"></div>
                <div class="news_letter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ec']->value['template'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['ec']->value['template']) {?> flex_container flex_column_md <?php if ($_smarty_tpl->tpl_vars['ec']->value['text_align'] == 2) {?> flex_center <?php } elseif ($_smarty_tpl->tpl_vars['ec']->value['text_align'] == 3) {?> flex_right <?php } else { ?> flex_left <?php }?> text-md-2 <?php }?>">
            	<?php if ($_smarty_tpl->tpl_vars['ec']->value['content']) {?><div class="st_news_letter_content style_content flex_child_md <?php if ($_smarty_tpl->tpl_vars['ec']->value['template']) {?> mar_r10 <?php }?>"><?php echo $_smarty_tpl->tpl_vars['ec']->value['content'];?>
</div><?php }?>
            	<?php if ($_smarty_tpl->tpl_vars['ec']->value['show_newsletter']) {?>
            	<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_url']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class="st_news_letter_form flex_child">
                    <?php if ((isset($_smarty_tpl->tpl_vars['ec']->value['show_gender'])) && $_smarty_tpl->tpl_vars['ec']->value['show_gender']) {?>
                        <div class="st_news_letter_gender">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Gender::getGenders(), 'gender', false, 'k');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
                            <label for="id_gender<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gender']->value->id, ENT_QUOTES, 'UTF-8');?>
" class="radio-inline">
                            <input type="radio" name="id_gender" id="id_gender<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gender']->value->id, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['gender']->value->id )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_POST['id_gender'])) && $_POST['id_gender'] == $_smarty_tpl->tpl_vars['gender']->value->id) {?>checked="checked"<?php }?> />
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gender']->value->name, ENT_QUOTES, 'UTF-8');?>
</label>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

					<div class="st_news_letter_form_inner">
						<div class="input-group round_item js-parent-focus input-group-with-border" >
							<input class="form-control st_news_letter_input js-child-focus" type="text" name="email" value="<?php if ((isset($_smarty_tpl->tpl_vars['value']->value)) && $_smarty_tpl->tpl_vars['value']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
}?>" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your e-mail','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" />
			                <span class="input-group-btn">
			                	<button type="submit" name="submitStNewsletter" class="btn btn-less-padding st_news_letter_submit link_color">
				                    <i class="fto-mail-alt"></i>
				                </button>
			                </span>
						</div>
					</div>
					<input type="hidden" name="action" value="0" />
                    <input type="hidden" name="submitNewsletter" value="1" />
				</form>
				<?php }?>
                </div>
				</div>
			</div>
		</section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<!-- /MODULE st stnewsletter -->
<?php }
}
}
