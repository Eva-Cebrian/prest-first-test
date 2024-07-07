<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:43
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/password-policy-template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42b268589_19883351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb6b0c92275c5b67c343fc461f0ed39af876cbf0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/password-policy-template.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42b268589_19883351 (Smarty_Internal_Template $_smarty_tpl) {
?>

<template id="password-feedback">
  <div
    class="password-strength-feedback mt-3"
    style="display: none;"
  >
    <div class="progress-container">
      <div class="progress mb-2">
        <div class="progress-bar" role="progressbar" value="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript" class="js-hint-password">
      <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['password-policy']['feedbacks'])) {?>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['password-policy']['feedbacks'] ));?>

      <?php }?>
    <?php echo '</script'; ?>
>

    <div class="password-strength-text"></div>
    <div class="password-requirements">
      <div class="password-requirements-length mb-2" data-translation="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter a password between %s and %s characters','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">
        <i class="fto-check-1"></i>
        <span></span>
      </div>
      <p class="password-requirements-score" data-translation="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum score must be: %s','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">
        <i class="fto-check-1"></i>
        <span></span>
      </p>
    </div>
  </div>
</template>
<?php }
}
