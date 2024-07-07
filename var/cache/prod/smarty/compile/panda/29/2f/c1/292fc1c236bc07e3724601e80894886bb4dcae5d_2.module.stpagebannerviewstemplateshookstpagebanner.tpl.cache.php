<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from 'module:stpagebannerviewstemplateshookstpagebanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab441988784_33882591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '292fc1c236bc07e3724601e80894886bb4dcae5d' => 
    array (
      0 => 'module:stpagebannerviewstemplateshookstpagebanner.tpl',
      1 => 1720204186,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab441988784_33882591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '826797739668ab441982018_43596777';
if ((isset($_smarty_tpl->tpl_vars['banner']->value)) && $_smarty_tpl->tpl_vars['banner']->value) {?>
<!-- MODULE st stpagebanner -->
<div id="<?php if ($_smarty_tpl->tpl_vars['banner']->value) {?>page_banner_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['id_st_page_banner'], ENT_QUOTES, 'UTF-8');
}?>" class="breadcrumb_wrapper <?php if ($_smarty_tpl->tpl_vars['breadcrumb_width']->value) {?> wide_container <?php }?>" <?php if ($_smarty_tpl->tpl_vars['banner']->value['image_multi_lang']) {?> style="background-image:url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['image_multi_lang'], ENT_QUOTES, 'UTF-8');?>
);" <?php }?>>
<?php if (!$_smarty_tpl->tpl_vars['banner']->value['hide_breadcrumb'] || $_smarty_tpl->tpl_vars['banner']->value['description']) {?>
  <div class="<?php if ($_smarty_tpl->tpl_vars['breadcrumb_width']->value) {?>container<?php } else { ?>container-fluid<?php }?>"><div class="row">
        <div class="col-12 <?php if ($_smarty_tpl->tpl_vars['banner']->value['text_align'] == 2) {?> text-2 <?php } elseif ($_smarty_tpl->tpl_vars['banner']->value['text_align'] == 3) {?> text-3 <?php } else { ?> text-1 <?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['banner']->value['description']) {?>
            <div class="style_content">
                <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

            </div>
            <?php }?>
          <?php if (!$_smarty_tpl->tpl_vars['banner']->value['hide_breadcrumb'] && (isset($_smarty_tpl->tpl_vars['breadcrumb']->value['links'])) && $_smarty_tpl->tpl_vars['breadcrumb']->value['links']) {?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['breadcrumb']) ? $_smarty_tpl->tpl_vars['breadcrumb']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['links'] = array_filter($_smarty_tpl->tpl_vars['breadcrumb']->value['links']);
$_smarty_tpl->_assignInScope('breadcrumb', $_tmp_array);?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['breadcrumb']) ? $_smarty_tpl->tpl_vars['breadcrumb']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['count'] = count($_smarty_tpl->tpl_vars['breadcrumb']->value['links']);
$_smarty_tpl->_assignInScope('breadcrumb', $_tmp_array);?>
          <nav data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb_nav">
            <ul itemscope itemtype="https://schema.org/BreadcrumbList">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                  <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?><a itemprop="item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="text_color" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                    <span itemprop="name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?></a><?php }?>
                  <meta itemprop="position" content="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
                </li>
                <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?><li class="navigation-pipe"><?php echo (($tmp = $_smarty_tpl->tpl_vars['sttheme']->value['navigation_pipe'] ?? null)===null||$tmp==='' ? '>' ?? null : $tmp);?>
</li><?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </nav>
          <?php }?>
        </div>
  </div></div>
<?php }?>
</div>
<!--/ MODULE st stpagebanner -->
<?php }
}
}
