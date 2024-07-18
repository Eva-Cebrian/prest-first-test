<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/pagination-sample.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa62910c4_42527205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '618e0a34780ce0565fbc14bb87ecd75b2a1206ca' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/pagination-sample.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa62910c4_42527205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('last_page', false);
$_smarty_tpl->_assignInScope('last_page_number', '');
$_smarty_tpl->_assignInScope('pagination_pages', $_smarty_tpl->tpl_vars['pagination']->value['pages']);
if (count($_smarty_tpl->tpl_vars['pagination_pages']->value)) {
$_smarty_tpl->_assignInScope('last_page', array_pop($_smarty_tpl->tpl_vars['pagination_pages']->value));
}
if ($_smarty_tpl->tpl_vars['last_page']->value['type'] != 'page' && count($_smarty_tpl->tpl_vars['pagination_pages']->value)) {
$_smarty_tpl->_assignInScope('last_page', array_pop($_smarty_tpl->tpl_vars['pagination_pages']->value));
}
if ($_smarty_tpl->tpl_vars['last_page']->value && $_smarty_tpl->tpl_vars['last_page']->value['type'] == 'page') {
$_smarty_tpl->_assignInScope('last_page_number', $_smarty_tpl->tpl_vars['last_page']->value['page']);
}?>
  <nav class="paginaton_sample <?php if ($_smarty_tpl->tpl_vars['last_page_number']->value && $_smarty_tpl->tpl_vars['last_page_number']->value == 1) {?> only_one_page<?php }?>" aria-label="Page navigation">
    <ul class="pagination">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous' || $_smarty_tpl->tpl_vars['page']->value['type'] === 'next' || $_smarty_tpl->tpl_vars['page']->value['current']) {?>
        <li class="page-item <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> active <?php }?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable']) )), ENT_QUOTES, 'UTF-8');?>
">
            <a
              rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
              href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
              class="page-link <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
              <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?> aria-label="Previous" <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?> aria-label="Next" <?php }?>
            >
              <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                <i class="fto-left-open-3"></i><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
                <i class="fto-right-open-3"></i><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
              <?php } else { ?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['last_page_number']->value, ENT_QUOTES, 'UTF-8');?>

              <?php }?>
            </a>
        </li>
        <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </nav>
<?php }
}
