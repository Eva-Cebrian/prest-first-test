<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab441910586_68663724',
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
function content_668ab441910586_68663724 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1796695293668ab441903b61_43360287', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2033871040668ab441903f09_53201460', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_564413002668ab4419041d9_21432214', 'head_seo');
?>


<!--st begin -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1175723258668ab441909086_61668139', 'head_viewport');
?>

<!--st end -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1281526740668ab441909322_84267849', 'head_icons');
?>

<!--st end -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_478778904668ab44190e971_38994048', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_310719661668ab44190ef62_73935346', 'javascript_head');
?>

<!--st end -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1979677611668ab44190f659_34422397', 'hook_header');
?>

<?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['head_code'])) && $_smarty_tpl->tpl_vars['sttheme']->value['head_code']) {
echo $_smarty_tpl->tpl_vars['sttheme']->value['head_code'];
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_861425870668ab441910312_41262896', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_1796695293668ab441903b61_43360287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_1796695293668ab441903b61_43360287',
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
class Block_2033871040668ab441903f09_53201460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_2033871040668ab441903f09_53201460',
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
class Block_534973901668ab441904377_90977078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_1471668830668ab4419048e8_27623405 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_1220613826668ab441904d34_17183738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_1791699388668ab441905229_85684400 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_1020094824668ab4419062e5_68631107 extends Smarty_Internal_Block
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
class Block_564413002668ab4419041d9_21432214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_564413002668ab4419041d9_21432214',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_534973901668ab441904377_90977078',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_1471668830668ab4419048e8_27623405',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_1220613826668ab441904d34_17183738',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_1791699388668ab441905229_85684400',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_1020094824668ab4419062e5_68631107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_534973901668ab441904377_90977078', 'head_seo_title', $this->tplIndex);
?>
</title>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1471668830668ab4419048e8_27623405', 'hook_after_title_tag', $this->tplIndex);
?>

  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1220613826668ab441904d34_17183738', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1791699388668ab441905229_85684400', 'head_seo_keywords', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1020094824668ab4419062e5_68631107', 'head_hreflang', $this->tplIndex);
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
class Block_1175723258668ab441909086_61668139 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_1175723258668ab441909086_61668139',
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
class Block_1281526740668ab441909322_84267849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_1281526740668ab441909322_84267849',
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
class Block_478778904668ab44190e971_38994048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_478778904668ab44190e971_38994048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_310719661668ab44190ef62_73935346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_310719661668ab44190ef62_73935346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_1979677611668ab44190f659_34422397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_1979677611668ab44190f659_34422397',
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
class Block_861425870668ab441910312_41262896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_861425870668ab441910312_41262896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
