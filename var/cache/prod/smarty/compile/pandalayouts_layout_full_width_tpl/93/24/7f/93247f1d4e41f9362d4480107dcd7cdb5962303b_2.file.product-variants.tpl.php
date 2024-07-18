<?php
/* Smarty version 4.3.4, created on 2024-07-07 20:13:04
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-variants.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668adab0c11052_67291194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93247f1d4e41f9362d4480107dcd7cdb5962303b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-variants.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668adab0c11052_67291194 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-variants js-product-variants">  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, 'id_attribute_group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
    <?php if (!empty($_smarty_tpl->tpl_vars['group']->value['attributes'])) {?>
    <?php $_smarty_tpl->_assignInScope('selected_keys', array());?>
    <?php if (is_array($_smarty_tpl->tpl_vars['product']->value['attributes']) && count($_smarty_tpl->tpl_vars['product']->value['attributes'])) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'av');
$_smarty_tpl->tpl_vars['av']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['av']->value) {
$_smarty_tpl->tpl_vars['av']->do_else = false;
?>
        <?php if (!array_key_exists($_smarty_tpl->tpl_vars['av']->value['id_attribute'],$_smarty_tpl->tpl_vars['group']->value['attributes'])) {?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['selected_keys']) ? $_smarty_tpl->tpl_vars['selected_keys']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['av']->value['id_attribute'];
$_smarty_tpl->_assignInScope('selected_keys', $_tmp_array);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <div class="clearfix product-variants-item">
      <span class="control-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'select') {?>
        <select
          class="form-control form-control-select"
          id="group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
          data-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
          name="group[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'color') {?>
        <ul id="group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" class="clearfix li_fl">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('temp_selected_keys', $_smarty_tpl->tpl_vars['selected_keys']->value);?>
            <?php $_smarty_tpl->_assignInScope('is_available', 1);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['temp_selected_keys']) ? $_smarty_tpl->tpl_vars['temp_selected_keys']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['id_attribute']->value;
$_smarty_tpl->_assignInScope('temp_selected_keys', $_tmp_array);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combinations']->value, 'bv');
$_smarty_tpl->tpl_vars['bv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bv']->value) {
$_smarty_tpl->tpl_vars['bv']->do_else = false;
?>
              <?php if (count(array_diff($_smarty_tpl->tpl_vars['bv']->value['attributes'],$_smarty_tpl->tpl_vars['temp_selected_keys']->value)) === 0 && !$_smarty_tpl->tpl_vars['bv']->value['quantity']) {?>
                <?php $_smarty_tpl->_assignInScope('is_available', 0);?>
              <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li class="input-container <?php if (!$_smarty_tpl->tpl_vars['is_available']->value) {?> st_unavailable_combination <?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              <input class="input-color" type="radio" data-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>/>
              <?php if ((isset($_smarty_tpl->tpl_vars['st_attr_img_as_texture']->value)) && (isset($_smarty_tpl->tpl_vars['st_attr_img_as_texture']->value[$_smarty_tpl->tpl_vars['id_attribute_group']->value][$_smarty_tpl->tpl_vars['id_attribute']->value]))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['group_attribute']) ? $_smarty_tpl->tpl_vars['group_attribute']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['texture'] = $_smarty_tpl->tpl_vars['st_attr_img_as_texture']->value[$_smarty_tpl->tpl_vars['id_attribute_group']->value][$_smarty_tpl->tpl_vars['id_attribute']->value];
$_smarty_tpl->_assignInScope('group_attribute', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['group_attribute']) ? $_smarty_tpl->tpl_vars['group_attribute']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['html_color_code'] = '';
$_smarty_tpl->_assignInScope('group_attribute', $_tmp_array);
}?>
              <span class="color <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?>texture<?php }?>"
                <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code'] && !$_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?> style="background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
              ><span class="sr-only"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></span>
              <span class="st-input-loading"><i class="fto-spin5 animate-spin"></i></span>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'radio') {?>
        <ul id="group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" class="clearfix li_fl">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('temp_selected_keys', $_smarty_tpl->tpl_vars['selected_keys']->value);?>
            <?php $_smarty_tpl->_assignInScope('is_available', 1);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['temp_selected_keys']) ? $_smarty_tpl->tpl_vars['temp_selected_keys']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['id_attribute']->value;
$_smarty_tpl->_assignInScope('temp_selected_keys', $_tmp_array);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combinations']->value, 'bv');
$_smarty_tpl->tpl_vars['bv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bv']->value) {
$_smarty_tpl->tpl_vars['bv']->do_else = false;
?>
              <?php if (count(array_diff($_smarty_tpl->tpl_vars['bv']->value['attributes'],$_smarty_tpl->tpl_vars['temp_selected_keys']->value)) === 0 && !$_smarty_tpl->tpl_vars['bv']->value['quantity']) {?>
                <?php $_smarty_tpl->_assignInScope('is_available', 0);?>
              <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li class="input-container <?php if (!$_smarty_tpl->tpl_vars['is_available']->value) {?> st_unavailable_combination <?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              <input class="input-radio" type="radio" data-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>/>
              <span class="radio-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
              <span class="st-input-loading"><i class="fto-spin5 animate-spin"></i></span>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php }?>
    </div>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayUnderProductVariants'),$_smarty_tpl ) );?>

</div><?php }
}
