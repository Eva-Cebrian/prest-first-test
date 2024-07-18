<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:12:54
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adaa63b61d6_21782044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48b9098d6dd5d57a4c162658bcd0d0b401f6f2aa' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/pagination.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adaa63b61d6_21782044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('is_product_page', true);
$_smarty_tpl->_assignInScope('pagi_class', 'js-search-link');
if ((isset($_smarty_tpl->tpl_vars['is_blog_fengye']->value))) {?>
  <?php if ($_smarty_tpl->tpl_vars['is_blog_fengye']->value == 2) {?>
    <?php $_smarty_tpl->_assignInScope('pagi_class', 'pc-search-link');?>
  <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('is_product_page', false);?>
  <?php }
}
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
}
$_smarty_tpl->_assignInScope('pagination_jump_to', Configuration::get('STSN_PAGINATION_JUMP_TO'));?>
<nav class="bottom_pagination flex_box flex_space_between mb-3 <?php if ($_smarty_tpl->tpl_vars['last_page_number']->value && $_smarty_tpl->tpl_vars['last_page_number']->value == 1) {?> only_one_page<?php }?>">
  <div class="product_count flex_child">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1700433382668adaa63af8c5_40974354', 'pagination_summary');
?>

  </div>
  <nav aria-label="Page navigation">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_794878164668adaa63b0876_30144953', 'pagination_page_list');
?>

  </nav>
</nav>
<?php }
/* {block 'pagination_summary'} */
class Block_1700433382668adaa63af8c5_40974354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_1700433382668adaa63af8c5_40974354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_794878164668adaa63b0876_30144953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_794878164668adaa63b0876_30144953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="pagination">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
        <li class="page-item <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> active <?php }?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable']) )), ENT_QUOTES, 'UTF-8');?>
">
          <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
            <span class="spacer">&hellip;</span>
          <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['pagination_jump_to']->value && $_smarty_tpl->tpl_vars['is_product_page']->value && !$_smarty_tpl->tpl_vars['page']->value['clickable']) {?>
              <div class="input-group st_pjump_box general_border" data-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-count="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['pages_count'], ENT_QUOTES, 'UTF-8');?>
">
                <input type="number" class="form-control" name="st_pjump" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="input-group-append">
                  <button class="btn st_pjump_button" type="button" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Jump to','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><i class="fto-search-1"></i></button>
                </div>
              </div>
            <?php } else { ?>
            <a
              rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
              href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
              class="page-link <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],$_smarty_tpl->tpl_vars['pagi_class']->value=>$_smarty_tpl->tpl_vars['is_product_page']->value) )), ENT_QUOTES, 'UTF-8');?>
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

              <?php }?>
            </a>
            <?php }?>
          <?php }?>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php
}
}
/* {/block 'pagination_page_list'} */
}
