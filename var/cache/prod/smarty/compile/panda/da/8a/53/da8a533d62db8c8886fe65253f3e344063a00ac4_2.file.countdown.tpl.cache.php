<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:13:04
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/countdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adab0e0f6b6_72560149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da8a533d62db8c8886fe65253f3e344063a00ac4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/miniatures/countdown.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adab0e0f6b6_72560149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '2040256047668adab0e08e11_64806782';
if ((isset($_smarty_tpl->tpl_vars['countdown_active']->value)) && $_smarty_tpl->tpl_vars['countdown_active']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price'] && !$_smarty_tpl->tpl_vars['sttheme']->value['is_catalog']) {
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <?php if ((smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S') >= $_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'] && smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S') < $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'])) {?>
            <?php if ($_smarty_tpl->tpl_vars['countdown_v_alignment']->value != 2) {?>
            <div class="countdown_wrap countdown_timer countdown_style_<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['countdown_style']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['countdown_v_alignment']->value) {?> v_middle<?php }?>">
                <div class="countdown_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Limited time offer','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</div>
                <div class="countdown_wrap_inner <?php if ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category') {?> c_countdown_timer<?php } else { ?> s_countdown_timer<?php }?>" data-countdown="<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],'%Y/%m/%d %H:%M:%S'), ENT_QUOTES, 'UTF-8');?>
" data-gmdate="<?php echo htmlspecialchars((string) gmdate('Y/m/d H:i:s',strtotime($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'])), ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></div>
            </div>
            <?php } else { ?>
                <div class="countdown_outer_box">
                    <div class="countdown_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special offer','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</div>
                    <div class="countdown_box">
                        <i class="fto-clock"></i><span class="countdown_pro <?php if ((isset($_smarty_tpl->tpl_vars['for_w']->value)) && $_smarty_tpl->tpl_vars['for_w']->value == 'category') {?> c_countdown_timer<?php } else { ?> s_countdown_timer<?php }?>" data-countdown="<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],'%Y/%m/%d %H:%M:%S'), ENT_QUOTES, 'UTF-8');?>
" data-gmdate="<?php echo htmlspecialchars((string) gmdate('Y/m/d H:i:s',strtotime($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'])), ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></span>
                    </div>
                </div>
            <?php }?>
        <?php } elseif (($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] == '0000-00-00 00:00:00') && ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'] == '0000-00-00 00:00:00') && $_smarty_tpl->tpl_vars['countdown_title_aw_display']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['countdown_v_alignment']->value != 2) {?>
                <div class="countdown_wrap s_countdown_perm <?php if ($_smarty_tpl->tpl_vars['countdown_v_alignment']->value) {?> v_middle<?php }?>" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
">
                    <div class="countdown_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Limited special offer','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</div>
                </div>
            <?php } else { ?>
                <div class="countdown_outer_box countdown_pro_perm" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
">
                    <div class="countdown_box">
                        <i class="fto-clock"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Limited special offer','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span>
                    </div>
                </div>
            <?php }?>
        <?php }?>
    <?php }
}
}
}
}
