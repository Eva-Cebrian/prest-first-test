<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a7f0b45_85277927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca1ba2c668ce2c594ccb8957bafaa64d2cb2c918' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/head.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_668ab42a7f0b45_85277927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1689620643668ab42a7e4976_79541957', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1039069445668ab42a7e4cd3_78281953', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_659788025668ab42a7e4fa3_80164441', 'head_seo');
?>


<!--st begin -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1647510605668ab42a7e9aa5_04701815', 'head_viewport');
?>

<!--st end -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1465008728668ab42a7e9d34_18220924', 'head_icons');
?>

<!--st end -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_694931678668ab42a7ef064_80955566', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1539614047668ab42a7ef639_16488952', 'javascript_head');
?>

<!--st end -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1813003357668ab42a7efd21_26852839', 'hook_header');
?>

<?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['head_code'])) && $_smarty_tpl->tpl_vars['sttheme']->value['head_code']) {
echo $_smarty_tpl->tpl_vars['sttheme']->value['head_code'];
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1916574958668ab42a7f0917_98080685', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_1689620643668ab42a7e4976_79541957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_1689620643668ab42a7e4976_79541957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_1039069445668ab42a7e4cd3_78281953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_1039069445668ab42a7e4cd3_78281953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_1587231105668ab42a7e5134_70789541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_16330226668ab42a7e5631_67350901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_771132497668ab42a7e5a44_80848854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_1812720691668ab42a7e5f32_24205670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_330256143668ab42a7e6fb0_07890810 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['urls']->value['alternative_langs']))) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
$_smarty_tpl->tpl_vars['pageUrl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
$_smarty_tpl->tpl_vars['pageUrl']->do_else = false;
?>
            <link rel="alternate" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php if ($_smarty_tpl->tpl_vars['language']->value['language_code'] == $_smarty_tpl->tpl_vars['code']->value) {?>x-default<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');
}?>">
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
  <?php
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_seo'} */
class Block_659788025668ab42a7e4fa3_80164441 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_659788025668ab42a7e4fa3_80164441',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_1587231105668ab42a7e5134_70789541',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_16330226668ab42a7e5631_67350901',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_771132497668ab42a7e5a44_80848854',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_1812720691668ab42a7e5f32_24205670',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_330256143668ab42a7e6fb0_07890810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1587231105668ab42a7e5134_70789541', 'head_seo_title', $this->tplIndex);
?>
</title>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16330226668ab42a7e5631_67350901', 'hook_after_title_tag', $this->tplIndex);
?>

  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_771132497668ab42a7e5a44_80848854', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1812720691668ab42a7e5f32_24205670', 'head_seo_keywords', $this->tplIndex);
?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_330256143668ab42a7e6fb0_07890810', 'head_hreflang', $this->tplIndex);
?>

  <?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['pagination']['pages']))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['pagination']['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['page']->value['clickable'] && $_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
      <link rel="prev" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" />
      <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['clickable'] && $_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
      <link rel="next" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" />
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_1647510605668ab42a7e9aa5_04701815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_1647510605668ab42a7e9aa5_04701815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1.0" />
<?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_1465008728668ab42a7e9d34_18220924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_1465008728668ab42a7e9d34_18220924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <!--st begin -->
  <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_180'])) && $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_180']) {?>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_180'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
" />
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_16'])) && $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_16']) {?>
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_16'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
" />
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_32'])) && $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_32']) {?>
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_32'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
" />
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['site_webmanifest'])) && $_smarty_tpl->tpl_vars['sttheme']->value['site_webmanifest']) {?>
  <link rel="manifest" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['site_webmanifest'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
" crossorigin="use-credentials">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_svg'])) && $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_svg']) {?>
  <link rel="mask-icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_svg'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
" color="<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['favicon_svg_color']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['favicon_svg_color'], ENT_QUOTES, 'UTF-8');
} else { ?>#e54d26<?php }?>">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['browserconfig'])) && $_smarty_tpl->tpl_vars['sttheme']->value['browserconfig']) {?>
  <meta name="msapplication-config" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['browserconfig'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['browser_theme_color'])) && $_smarty_tpl->tpl_vars['sttheme']->value['browser_theme_color']) {?>
  <meta name="theme-color" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['browser_theme_color'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_694931678668ab42a7ef064_80955566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_694931678668ab42a7ef064_80955566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_1539614047668ab42a7ef639_16488952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_1539614047668ab42a7ef639_16488952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_1813003357668ab42a7efd21_26852839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_1813003357668ab42a7efd21_26852839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_1916574958668ab42a7f0917_98080685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_1916574958668ab42a7f0917_98080685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
