<?php
/* Smarty version 4.3.4, created on 2024-07-06 21:11:10
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/admin-backoffice/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668996ce77b852_25374656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb1afa35d835de70de5485193e6db47781cc203e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/admin-backoffice/themes/new-theme/template/content.tpl',
      1 => 1718360660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668996ce77b852_25374656 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}