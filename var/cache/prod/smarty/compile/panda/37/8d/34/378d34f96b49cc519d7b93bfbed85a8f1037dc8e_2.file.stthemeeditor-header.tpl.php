<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:53
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stthemeeditor/views/templates/hook/stthemeeditor-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa584fe62_76820548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '378d34f96b49cc519d7b93bfbed85a8f1037dc8e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stthemeeditor/views/templates/hook/stthemeeditor-header.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa584fe62_76820548 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['version_switching'])) && $_smarty_tpl->tpl_vars['sttheme']->value['version_switching'] == 1) {?>
<style type="text/css">body{min-width:<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] == 2) {?>1440<?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] == 1) {?>1200<?php } else { ?>992<?php }?>px;}</style>
<?php }
}
}
