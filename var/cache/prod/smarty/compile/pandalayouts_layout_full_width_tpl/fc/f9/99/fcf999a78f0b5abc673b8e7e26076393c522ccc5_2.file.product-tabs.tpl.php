<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f0ae3b49_43588358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf999a78f0b5abc673b8e7e26076393c522ccc5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/catalog/_partials/product-tabs.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/product-tags.tpl' => 1,
  ),
),false)) {
function content_668a67f0ae3b49_43588358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1560533039668a67f0ac7de5_74055162', 'product_tabs');
}
/* {block 'product_description'} */
class Block_1035306977668a67f0ad69a2_83860702 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-description">
               <div class="product_description_container style_content truncate_block st_showless_block_<?php if (!empty($_smarty_tpl->tpl_vars['sttheme']->value['showless_pro_desc'])) {?>1<?php } else { ?>0<?php }?> truncate_cate_desc_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['truncate_pro_desc'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="st_read_more_box">
                  <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'steasycontent' && (isset($_smarty_tpl->tpl_vars['extra']->value['content']['description'])) && $_smarty_tpl->tpl_vars['extra']->value['content']['description']) {?>
                          <?php echo $_smarty_tpl->tpl_vars['extra']->value['content']['description'];?>

                      <?php }?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <a href="javascript:;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
" class="st_read_more" rel="nofollow"><span class="st_showmore_btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span><span class="st_showless_btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show less','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</span></a>
              </div>
            </div>
         <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_1802361386668a67f0ad8e86_80017251 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_2134353579668a67f0ad92f5_72705847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
    <div role="tabpanel" class="tab-pane <?php if ((isset($_smarty_tpl->tpl_vars['st_active_pro_tab']->value)) && $_smarty_tpl->tpl_vars['st_active_pro_tab']->value == 'attachments') {?> active <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_acc_style'] != 0 || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?> st_open <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_acc_style'] == 2) {?> st_open <?php }?>" id="attachments">
      <div class="mobile_tab_title">
          <a href="javascript:;" class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></a>
            <div class="mobile_tab_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</div>
        </div>
      <div class="tab-pane-body">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
          <section class="product-attachments base_list_line medium_list">
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
             <div class="attachment line_item flex_box">
               <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" rel="nofollow" class="mar_r6 font-weight-bold"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
               <div class="flex_child mar_r6"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</div>
               <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" rel="nofollow">
                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
               </a>
             </div>
           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </section>
          <?php }?>
      </div>
     </div>
    <?php }?>
   <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_1560533039668a67f0ac7de5_74055162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_tabs' => 
  array (
    0 => 'Block_1560533039668a67f0ac7de5_74055162',
  ),
  'product_description' => 
  array (
    0 => 'Block_1035306977668a67f0ad69a2_83860702',
  ),
  'product_details' => 
  array (
    0 => 'Block_1802361386668a67f0ad8e86_80017251',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_2134353579668a67f0ad92f5_72705847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('st_active_pro_tab', '');
if ((isset($_GET['activetab']))) {
$_smarty_tpl->_assignInScope('st_active_pro_tab', $_GET['activetab']);
}
$_smarty_tpl->_assignInScope('has_extra_description', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
    <?php if (($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'steasycontent' && (isset($_smarty_tpl->tpl_vars['extra']->value['content']['description'])) && $_smarty_tpl->tpl_vars['extra']->value['content']['description']) || ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'steasybuilder' && (isset($_smarty_tpl->tpl_vars['extra']->value['content']['description'])) && $_smarty_tpl->tpl_vars['extra']->value['content']['description'])) {?>
      <?php $_smarty_tpl->_assignInScope('has_extra_description', 1);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="product_info_tabs sttab_block mobile_tab <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_tabs_style'] == 0 || $_smarty_tpl->tpl_vars['sttheme']->value['product_tabs_style'] == 5) {?> sttab_2 sttab_2_2 <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_tabs_style'] == 2 || $_smarty_tpl->tpl_vars['sttheme']->value['product_tabs_style'] == 6) {?> sttab_2 sttab_2_3 <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_tabs_style'] == 3) {?> sttab_3 sttab_3_2 flex_container flex_start <?php }?>">
  <ul class="nav nav-tabs <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['product_tabs']) {?> tab_lg <?php }?> <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_tabs_style'] == 2 || $_smarty_tpl->tpl_vars['sttheme']->value['product_tabs_style'] == 6) {?> flex_box flex_center <?php }?>" role="tablist">
    <?php if ($_smarty_tpl->tpl_vars['product']->value['description'] || $_smarty_tpl->tpl_vars['has_extra_description']->value) {?>
    <li class="nav-item">
      <a class="nav-link<?php if (!$_smarty_tpl->tpl_vars['st_active_pro_tab']->value || $_smarty_tpl->tpl_vars['st_active_pro_tab']->value == 'description') {?> active<?php }?>" data-toggle="tab" role="tab" href="#description" aria-controls="description" <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
    </li>
    <?php if (!$_smarty_tpl->tpl_vars['st_active_pro_tab']->value) {
$_smarty_tpl->_assignInScope('st_active_pro_tab', "description");
}?>
    <?php }?>
    
    <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['remove_product_details_tab']) {?> display_none <?php }?>">
      <a class="nav-link<?php if ((!$_smarty_tpl->tpl_vars['st_active_pro_tab']->value || $_smarty_tpl->tpl_vars['st_active_pro_tab']->value == 'product-details') && !$_smarty_tpl->tpl_vars['sttheme']->value['remove_product_details_tab']) {?> active<?php }?>" data-toggle="tab" role="tab" href="#product-details" aria-controls="product-details" <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
    </li>
    <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['remove_product_details_tab'] && !$_smarty_tpl->tpl_vars['st_active_pro_tab']->value) {
$_smarty_tpl->_assignInScope('st_active_pro_tab', "product-details");
}?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
    <li class="nav-item">
      <a class="nav-link <?php if (!$_smarty_tpl->tpl_vars['st_active_pro_tab']->value || $_smarty_tpl->tpl_vars['st_active_pro_tab']->value == 'attachments') {?> active<?php }?>" data-toggle="tab" role="tab" aria-controls="attachments" href="#attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
    </li>
    <?php if (!$_smarty_tpl->tpl_vars['st_active_pro_tab']->value) {
$_smarty_tpl->_assignInScope('st_active_pro_tab', "attachments");
}?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_pro_tags'] == 1 && !empty($_smarty_tpl->tpl_vars['product']->value['tags'])) {?>
      <li class="nav-item">
        <a class="nav-link <?php if (!$_smarty_tpl->tpl_vars['st_active_pro_tab']->value || $_smarty_tpl->tpl_vars['st_active_pro_tab']->value == 'porudct-tags-tab') {?> active<?php }?>" data-toggle="tab" role="tab" aria-controls="porudct-tags-tab" data-module="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['moduleName'], ENT_QUOTES, 'UTF-8');?>
" href="#porudct-tags-tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</a>
      </li>
      <?php if (!$_smarty_tpl->tpl_vars['st_active_pro_tab']->value) {
$_smarty_tpl->_assignInScope('st_active_pro_tab', "porudct-tags-tab");
}?>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stproductlinknav' || $_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'ststickers' || $_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stvideo') {
continue 1;
}?>
        <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'steasycontent') {?>
          <?php if ((isset($_smarty_tpl->tpl_vars['extra']->value['content']['tabs'])) && $_smarty_tpl->tpl_vars['extra']->value['content']['tabs']) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['content']['tabs'], 'es');
$_smarty_tpl->tpl_vars['es']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['es']->value) {
$_smarty_tpl->tpl_vars['es']->do_else = false;
?>
            <li class="nav-item">
              <?php $_smarty_tpl->_assignInScope('easycontent_tab_key', "easybuilder-tab-".((string)$_smarty_tpl->tpl_vars['es']->value['id_st_easy_content']));?>
              <a class="nav-link <?php if (!$_smarty_tpl->tpl_vars['st_active_pro_tab']->value || $_smarty_tpl->tpl_vars['st_active_pro_tab']->value == $_smarty_tpl->tpl_vars['easycontent_tab_key']->value) {?> active<?php }?>" data-toggle="tab" role="tab" aria-controls="easycontent-tab-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['es']->value['id_st_easy_content'], ENT_QUOTES, 'UTF-8');?>
" data-module="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['moduleName'], ENT_QUOTES, 'UTF-8');?>
" href="#easycontent-tab-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['es']->value['id_st_easy_content'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['es']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
            </li>
            <?php if (!$_smarty_tpl->tpl_vars['st_active_pro_tab']->value) {
$_smarty_tpl->_assignInScope('st_active_pro_tab', "easycontent-tab-".((string)$_smarty_tpl->tpl_vars['es']->value['id_st_easy_content']));
}?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
          <?php continue 1;?>
        <?php }?>
        <li class="nav-item">
          <?php $_smarty_tpl->_assignInScope('extra_tab_key', "extra-".((string)$_smarty_tpl->tpl_vars['extraKey']->value));?>
          <a class="nav-link <?php if (!$_smarty_tpl->tpl_vars['st_active_pro_tab']->value || $_smarty_tpl->tpl_vars['st_active_pro_tab']->value == $_smarty_tpl->tpl_vars['extra_tab_key']->value) {?> active<?php }?>" data-toggle="tab" role="tab" aria-controls="extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" data-module="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['moduleName'], ENT_QUOTES, 'UTF-8');?>
" href="#extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
          <?php if (!$_smarty_tpl->tpl_vars['st_active_pro_tab']->value) {
$_smarty_tpl->_assignInScope('st_active_pro_tab', "extra-".((string)$_smarty_tpl->tpl_vars['extraKey']->value));
}?>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductTab"),$_smarty_tpl ) );?>

  </ul>

  <div class="tab-content <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_tabs_style'] == 3) {?> flex_child <?php }?>">
   <?php if ($_smarty_tpl->tpl_vars['product']->value['description'] || $_smarty_tpl->tpl_vars['has_extra_description']->value) {?>
   <div role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['st_active_pro_tab']->value == 'description') {?> active <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_acc_style'] != 0 || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?> st_open <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_acc_style'] == 2) {?> st_open <?php }?>" id="description">
      <div class="mobile_tab_title">
            <a href="javascript:;" class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></a>
              <div class="mobile_tab_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</div>
          </div>
      <div class="tab-pane-body">
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1035306977668a67f0ad69a2_83860702', 'product_description', $this->tplIndex);
?>

        </div>
   </div>
   <?php }?>

   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1802361386668a67f0ad8e86_80017251', 'product_details', $this->tplIndex);
?>

   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2134353579668a67f0ad92f5_72705847', 'product_attachments', $this->tplIndex);
?>

   <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['display_pro_tags'] == 1 && !empty($_smarty_tpl->tpl_vars['product']->value['tags'])) {?>
    <div role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['st_active_pro_tab']->value == 'porudct-tags-tab') {?> active <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_acc_style'] != 0 || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?> st_open <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_acc_style'] == 2) {?> st_open <?php }?>" id="porudct-tags-tab">
        <div class="mobile_tab_title">
            <a href="javascript:;" class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></a>
              <div class="mobile_tab_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags','d'=>'Shop.Theme.Panda'),$_smarty_tpl ) );?>
</div>
          </div>
        <div class="tab-pane-body">
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
    <?php }?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
       <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stproductlinknav' || $_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'ststickers' || $_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'stvideo') {
continue 1;
}?>
        <?php if ($_smarty_tpl->tpl_vars['extra']->value['moduleName'] == 'steasycontent') {?>
          <?php if ((isset($_smarty_tpl->tpl_vars['extra']->value['content']['tabs'])) && $_smarty_tpl->tpl_vars['extra']->value['content']['tabs']) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['content']['tabs'], 'es');
$_smarty_tpl->tpl_vars['es']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['es']->value) {
$_smarty_tpl->tpl_vars['es']->do_else = false;
?>
            <div role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['st_active_pro_tab']->value == "easycontent-tab-".((string)$_smarty_tpl->tpl_vars['es']->value['id_st_easy_content'])) {?> active <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_acc_style'] != 0 || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?> st_open <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_acc_style'] == 2) {?> st_open <?php }?>" id="easycontent-tab-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['es']->value['id_st_easy_content'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="mobile_tab_title">
                    <a href="javascript:;" class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></a>
                      <div class="mobile_tab_name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['es']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
                  </div>
                <div class="tab-pane-body">
                    <?php echo $_smarty_tpl->tpl_vars['es']->value['tab_content'];?>

                </div>
           </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
          <?php continue 1;?>
        <?php }?>
       <div role="tabpanel" class="tab-pane <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['st_active_pro_tab']->value == "extra-".((string)$_smarty_tpl->tpl_vars['extraKey']->value)) {?> active <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['product_acc_style'] != 0 || ((isset($_smarty_tpl->tpl_vars['steasybuilder']->value)) && $_smarty_tpl->tpl_vars['steasybuilder']->value['is_editing'])) {?> st_open <?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['product_acc_style'] == 2) {?> st_open <?php }?>" id="extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
            <div class="mobile_tab_title">
                <a href="javascript:;" class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></a>
                  <div class="mobile_tab_name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
              </div>
            <div class="tab-pane-body">
                <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

            </div>
       </div>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductTabContent"),$_smarty_tpl ) );?>

</div>
</div>
<?php
}
}
/* {/block 'product_tabs'} */
}
