<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f07bb8f1_94987584',
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
function content_668a67f07bb8f1_94987584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_704506554668a67f07afb79_95473128', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295042588668a67f07afee7_13386303', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1294956178668a67f07b01a2_81707564', 'head_seo');
?>


<!--st begin -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_807833718668a67f07b4ba7_65840549', 'head_viewport');
?>

<!--st end -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1992512893668a67f07b4e29_62012176', 'head_icons');
?>

<!--st end -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_716937651668a67f07b9ea9_89238440', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1495032187668a67f07ba438_08507874', 'javascript_head');
?>

<!--st end -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1805762443668a67f07bab03_45308135', 'hook_header');
?>

<?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['head_code'])) && $_smarty_tpl->tpl_vars['sttheme']->value['head_code']) {
echo $_smarty_tpl->tpl_vars['sttheme']->value['head_code'];
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_672700489668a67f07bb6d5_33418523', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_704506554668a67f07afb79_95473128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_704506554668a67f07afb79_95473128',
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
class Block_295042588668a67f07afee7_13386303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_295042588668a67f07afee7_13386303',
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
class Block_2072764334668a67f07b0321_77090029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_1956343958668a67f07b0839_11367654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_278519560668a67f07b0c66_10483535 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_24313402668a67f07b1126_93467808 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_1515108402668a67f07b2134_63358539 extends Smarty_Internal_Block
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
class Block_1294956178668a67f07b01a2_81707564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_1294956178668a67f07b01a2_81707564',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_2072764334668a67f07b0321_77090029',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_1956343958668a67f07b0839_11367654',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_278519560668a67f07b0c66_10483535',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_24313402668a67f07b1126_93467808',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_1515108402668a67f07b2134_63358539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2072764334668a67f07b0321_77090029', 'head_seo_title', $this->tplIndex);
?>
</title>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1956343958668a67f07b0839_11367654', 'hook_after_title_tag', $this->tplIndex);
?>

  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_278519560668a67f07b0c66_10483535', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24313402668a67f07b1126_93467808', 'head_seo_keywords', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1515108402668a67f07b2134_63358539', 'head_hreflang', $this->tplIndex);
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
class Block_807833718668a67f07b4ba7_65840549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_807833718668a67f07b4ba7_65840549',
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
class Block_1992512893668a67f07b4e29_62012176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_1992512893668a67f07b4e29_62012176',
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
class Block_716937651668a67f07b9ea9_89238440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_716937651668a67f07b9ea9_89238440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_1495032187668a67f07ba438_08507874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_1495032187668a67f07ba438_08507874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_1805762443668a67f07bab03_45308135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_1805762443668a67f07bab03_45308135',
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
class Block_672700489668a67f07bb6d5_33418523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_672700489668a67f07bb6d5_33418523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
