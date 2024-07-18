<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/number-per-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa6288337_84358132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee1566b7fb5c5eb4633b324a2fc2b12168008d85' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/number-per-page.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa6288337_84358132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_assignInScope('enable_number_per_page', Configuration::get('STSN_ENABLE_NUMBER_PER_PAGE'));
$_smarty_tpl->_assignInScope('number_per_page_str', Configuration::get('STSN_NUMBER_PER_PAGE'));?>

<?php if ($_smarty_tpl->tpl_vars['enable_number_per_page']->value || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?>
  <?php if ($_smarty_tpl->tpl_vars['number_per_page_str']->value) {?>
    <?php $_smarty_tpl->_assignInScope('number_per_page', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'explode' ][ 0 ], array( ",",$_smarty_tpl->tpl_vars['number_per_page_str']->value )));?>
  <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('number_per_page', array(20,40,60,10000));?>
  <?php }?>
  <div class="products-number-per-page dropdown_wrap mar_r1 <?php if (!$_smarty_tpl->tpl_vars['enable_number_per_page']->value) {?> display_none <?php }?>">
    <a href="javascript:" class="dropdown_tri dropdown_tri_in" rel="nofollow" aria-haspopup="true" aria-expanded="false">
      <?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products']), ENT_QUOTES, 'UTF-8');?>

      <i class="fto-angle-down arrow_down arrow"></i>
      <i class="fto-angle-up arrow_up arrow"></i>
    </a>
    <div class="dropdown_list">
      <ul class="dropdown_list_ul dropdown_box">
      <?php $_smarty_tpl->_assignInScope('number_per_page_url', '');?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['sort_orders'], 'sort_order');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['sort_order']->value['current']) {
$_smarty_tpl->_assignInScope('number_per_page_url', $_smarty_tpl->tpl_vars['sort_order']->value['url']);
break 1;
}?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php if (!$_smarty_tpl->tpl_vars['number_per_page_url']->value) {
$_smarty_tpl->_assignInScope('number_per_page_url', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['sort_orders'][0]['url'],"/(\W)order=[^\&]+&*/","$"."1"),"&" )),"?" )));
}?>
      <?php $_smarty_tpl->_assignInScope('number_per_page_url', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['number_per_page_url']->value,"/(\W)resultsPerPage=\d+&*/","$"."1"),"&" )),"?" )));?>
      <?php if (strpos($_smarty_tpl->tpl_vars['number_per_page_url']->value,'?') !== false) {?>
      <?php $_smarty_tpl->_assignInScope('number_per_page_url', ($_smarty_tpl->tpl_vars['number_per_page_url']->value).("&resultsPerPage="));?>
      <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('number_per_page_url', ($_smarty_tpl->tpl_vars['number_per_page_url']->value).("?resultsPerPage="));?>
      <?php }?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['number_per_page']->value, 'number');
$_smarty_tpl->tpl_vars['number']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['number']->value) {
$_smarty_tpl->tpl_vars['number']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('xnumber', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['number']->value )) )));?>
        <?php if (!$_smarty_tpl->tpl_vars['xnumber']->value) {
continue 1;
}?>
        <li>
        <a
          rel="nofollow"
          title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xnumber']->value, ENT_QUOTES, 'UTF-8');?>
"
          href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['number_per_page_url']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xnumber']->value, ENT_QUOTES, 'UTF-8');?>
"
          class="dropdown_list_item <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
 btn-spin js-btn-active"
        >
          <i class="fto-angle-right mar_r4"></i><?php if ($_smarty_tpl->tpl_vars['xnumber']->value < 10000) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xnumber']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>
        </a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
