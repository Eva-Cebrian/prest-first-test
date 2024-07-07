<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:28:42
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stsocial/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab42a737aa2_57509817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eba134c15e1061b413a484fb49c15e8721f3d537' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/modules/stsocial/views/templates/hook/header.tpl',
      1 => 1720204186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ab42a737aa2_57509817 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['has_facebook']->value && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['fb_app_id']->value)) && $_smarty_tpl->tpl_vars['fb_app_id']->value) {?>
    <meta property="fb:app_id" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fb_app_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <meta property="og:site_name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:url" content="<?php if ((isset($_smarty_tpl->tpl_vars['url']->value)) && $_smarty_tpl->tpl_vars['url']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');
}?>" />
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
    <meta property="og:type" content="product" />
    <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:description" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php if ($_smarty_tpl->tpl_vars['image_size']->value['width'] && $_smarty_tpl->tpl_vars['image_size']->value['height']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_link']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:image:width" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['width'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:height" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['height'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'manufacturer' && (isset($_GET['id_manufacturer'])) && $_GET['id_manufacturer']) {?>
    <meta property="og:type" content="product" />
    <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:description" content="<?php echo htmlspecialchars((string) strip_tags((string) $_smarty_tpl->tpl_vars['og_desc']->value), ENT_QUOTES, 'UTF-8');?>
" />
    <?php if ($_smarty_tpl->tpl_vars['image_size']->value['width'] && $_smarty_tpl->tpl_vars['image_size']->value['height']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_manu_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_GET['id_manufacturer'], ENT_QUOTES, 'UTF-8');?>
.jpg" />
    <meta property="og:image:width" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['width'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:height" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['height'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'supplier' && (isset($_GET['id_supplier'])) && $_GET['id_supplier']) {?>
    <meta property="og:type" content="product" />
    <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:description" content="<?php echo htmlspecialchars((string) strip_tags((string) $_smarty_tpl->tpl_vars['og_desc']->value), ENT_QUOTES, 'UTF-8');?>
" />
    <?php if ($_smarty_tpl->tpl_vars['image_size']->value['width'] && $_smarty_tpl->tpl_vars['image_size']->value['height']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_sup_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_GET['id_supplier'], ENT_QUOTES, 'UTF-8');?>
.jpg" />
    <meta property="og:image:width" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['width'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:height" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['height'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stblog-article') {?>
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:description" content="<?php echo htmlspecialchars((string) strip_tags((string) $_smarty_tpl->tpl_vars['og_desc']->value), ENT_QUOTES, 'UTF-8');?>
" />
    <?php if ($_smarty_tpl->tpl_vars['image_size']->value['width'] && $_smarty_tpl->tpl_vars['image_size']->value['height']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blog_image_link']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:image:width" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['width'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:height" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['height'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-amazzingblog-blog') {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['ab_post']->value)) {?>
            <meta property="og:type" content="article" />
            <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab_post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" />
            <meta property="og:description" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab_post']->value['meta_description'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['ab_category']->value)) {?>
                        <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab_category']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" />
            <meta property="og:description" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab_category']->value['meta_description'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-stproductcomments-list') {?>
    <meta property="og:type" content="product" />
    <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:description" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_link']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:image:width" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['width'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:height" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['height'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php } else { ?>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:description" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php if ((isset($_smarty_tpl->tpl_vars['logo_image_link']->value)) && $_smarty_tpl->tpl_vars['logo_image_link']->value && $_smarty_tpl->tpl_vars['image_size']->value['width'] && $_smarty_tpl->tpl_vars['image_size']->value['height']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logo_image_link']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:image:width" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['width'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:height" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_size']->value['height'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['shop']->value['logo'])) && $_smarty_tpl->tpl_vars['shop']->value['logo'] && $_smarty_tpl->tpl_vars['page']->value['page_name']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php }
}
if ((isset($_smarty_tpl->tpl_vars['custom_css']->value)) && $_smarty_tpl->tpl_vars['custom_css']->value) {?>
<style><?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
</style>
<?php }
}
}
