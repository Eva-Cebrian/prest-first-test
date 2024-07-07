<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/facets-input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4418a8f54_27503951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '268697a9a93fc66afafdd76bfaea0e043bd1d278' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/facets-input.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab4418a8f54_27503951 (Smarty_Internal_Template $_smarty_tpl) {
?>              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                  <li class="facet_filter_item_li">
                    <label class="facet-label checkbox-inline <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?> flex_container flex_start" for="facet_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                      <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                        <span class="custom-input-box">
                          <input
                            id="facet_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-search-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            type="checkbox"
                            class="custom-input"
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                          >
                          <?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']))) {?>
                              <span class="custom-input-item custom-input-color texture" style="background-image:url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"><i class="fto-ok-1 checkbox-checked"></i><i class="fto-spin5 animate-spin"></i></span>
                            <?php } elseif ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']))) {?>
                            <span class="custom-input-item custom-input-color" style="background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"><i class="fto-ok-1 checkbox-checked"></i><i class="fto-spin5 animate-spin"></i></span>
                            <?php } else { ?>
                            <span class="custom-input-item custom-input-checkbox <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> ps-shown-by-js <?php }?>"><i class="fto-ok-1 checkbox-checked"></i><i class="fto-spin5 animate-spin"></i></span>
                          <?php }?>
                        </span>
                      <?php } else { ?>
                        <span class="custom-input-box">
                          <input
                            id="facet_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-search-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            type="radio"
                            class="custom-input "
                            name="filter <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                          >
                          <span class="custom-input-item custom-input-radio <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> ps-shown-by-js <?php }?>"><i class="fto-ok-1 checkbox-checked"></i><i class="fto-spin5 animate-spin"></i></span>
                        </span>
                      <?php }?>

                      <a
                        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                        class="_gray-darker search-link js-search-link flex_child"
                        rel="nofollow"
                      >
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && (!(isset($_smarty_tpl->tpl_vars['ps_layered_show_qties']->value)) || ((isset($_smarty_tpl->tpl_vars['ps_layered_show_qties']->value)) && $_smarty_tpl->tpl_vars['ps_layered_show_qties']->value == 1))) {?>
                          <span class="magnitude">(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                        <?php }?>
                      </a>
                    </label>
                  </li>
                <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
