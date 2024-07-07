<?php
/* Smarty version 4.3.4, created on 2024-07-07 12:03:28
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668a67f07e3575_41607415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b24ef1d0d11327a50dbef810f85598b4d54d21b1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/_partials/header.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668a67f07e3575_41607415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_382188570668a67f07cad57_55818913', 'header_banner');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152423788668a67f07cc254_27577711', 'header_nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_730805629668a67f07d0c53_24839843', 'mobile_header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_864530941668a67f07d6199_43273926', 'header_top');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1941485237668a67f07dfac4_51013642', 'header_menu');
}
/* {block 'header_banner'} */
class Block_382188570668a67f07cad57_55818913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_382188570668a67f07cad57_55818913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayBanner", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBanner"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayBanner')) {?>
  <div id="displayBanner" class="header-banner <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['sticky_displaybanner']) {?> hide_when_sticky <?php }?>">
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayBanner');?>

  </div>
  <?php }
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_152423788668a67f07cc254_27577711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_152423788668a67f07cc254_27577711',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayNav1", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayNav1"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayNav2", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayNav2"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayNav3", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayNav3"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayNav1') || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayNav2') || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayNav3')) {?>
    <div id="top_bar" class="nav_bar <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['sttheme']->value['header_topbar_sep_type'] ?? null)===null||$tmp==='' ? 'vertical-s' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['sticky_topbar']) {?> hide_when_sticky <?php }?>" >
      <div class="wide_container_box <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['fullwidth_topbar'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>wide_container<?php }?>">
        <div id="top_bar_container" class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['fullwidth_topbar'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>container<?php } else { ?>container-fluid<?php }?>">
          <div id="top_bar_row" class="flex_container">
            <nav id="nav_left" class="flex_float_left"><div class="flex_box"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayNav1');?>
</div></nav>
            <nav id="nav_center" class="flex_float_center"><div class="flex_box"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayNav3');?>
</div></nav>
            <nav id="nav_right" class="flex_float_right"><div class="flex_box"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayNav2');?>
</div></nav>
          </div>
        </div>          
      </div>
    </div>
  <?php }
}
}
/* {/block 'header_nav'} */
/* {block 'mobile_header_left'} */
class Block_238542899668a67f07d3d19_43583427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            	<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['sticky_mobile_header']%2 != 0) {?>
                  <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mobile_shop_logo');?>

              	<?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayMobileBarLeft"),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'mobile_header_left'} */
/* {block 'mobile_header_center'} */
class Block_473902370668a67f07d4ce3_44771173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            	<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['sticky_mobile_header']%2 == 0) {?>
                  <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mobile_shop_logo');?>

              	<?php }?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayMobileBarCenter"),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'mobile_header_center'} */
/* {block 'mobile_header_right'} */
class Block_1840880650668a67f07d5833_35324467 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayMobileBar"),$_smarty_tpl ) );
}
}
/* {/block 'mobile_header_right'} */
/* {block 'mobile_header'} */
class Block_730805629668a67f07d0c53_24839843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mobile_header' => 
  array (
    0 => 'Block_730805629668a67f07d0c53_24839843',
  ),
  'mobile_header_left' => 
  array (
    0 => 'Block_238542899668a67f07d3d19_43583427',
  ),
  'mobile_header_center' => 
  array (
    0 => 'Block_473902370668a67f07d4ce3_44771173',
  ),
  'mobile_header_right' => 
  array (
    0 => 'Block_1840880650668a67f07d5833_35324467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="mobile_bar" class="animated fast">
    <div class="container">
      <div id="mobile_bar_top" class="flex_container">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mobile_shop_logo", null, null);?>
          <a class="mobile_logo" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              <img class="logo" src="<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['mobile_logo_src']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['mobile_logo_src'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['retina_logo_src']) {?> srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['retina_logo_src'], ENT_QUOTES, 'UTF-8');?>
 2x"<?php }?> alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['mobile_logo_src'] && $_smarty_tpl->tpl_vars['sttheme']->value['mobile_logo_width']) {?> width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['mobile_logo_width'], ENT_QUOTES, 'UTF-8');?>
"<?php } elseif ((isset($_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width'])) && $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width']) {?> width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['sttheme']->value['mobile_logo_src'] && $_smarty_tpl->tpl_vars['sttheme']->value['mobile_logo_height']) {?> height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['mobile_logo_height'], ENT_QUOTES, 'UTF-8');?>
"<?php } elseif ((isset($_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height'])) && $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height']) {?> height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>/>
            </a>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
          <div id="mobile_bar_left">
            <div class="flex_container">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_238542899668a67f07d3d19_43583427', 'mobile_header_left', $this->tplIndex);
?>

            </div>
          </div>
          <div id="mobile_bar_center" class="flex_child">
            <div class="flex_container <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['sticky_mobile_header']%2 == 0) {?> flex_center <?php }?>">              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_473902370668a67f07d4ce3_44771173', 'mobile_header_center', $this->tplIndex);
?>

            </div>
          </div>
          <div id="mobile_bar_right">
            <div class="flex_container"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1840880650668a67f07d5833_35324467', 'mobile_header_right', $this->tplIndex);
?>
</div>
          </div>
      </div>
      <div id="mobile_bar_bottom" class="flex_container">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayMobileBarBottom"),$_smarty_tpl ) );?>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'mobile_header'} */
/* {block 'header_top'} */
class Block_864530941668a67f07d6199_43273926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_864530941668a67f07d6199_43273926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (!(isset($_smarty_tpl->tpl_vars['sttheme']->value['hide_header'])) || !$_smarty_tpl->tpl_vars['sttheme']->value['hide_header']) {?>
  <div id="header_primary" class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['sticky_primary_header']) {?> hide_when_sticky <?php }?>">
    <div class="wide_container_box <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['fullwidth_header'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>wide_container<?php }?>">
      <div id="header_primary_container" class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['fullwidth_header'] && $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'] != 3) {?>container<?php } else { ?>container-fluid<?php }?>">
        <div id="header_primary_row" class="flex_container <?php if (!(isset($_smarty_tpl->tpl_vars['sttheme']->value['logo_position'])) || !$_smarty_tpl->tpl_vars['sttheme']->value['logo_position']) {?> logo_left <?php } else { ?> logo_center <?php }?>">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displaySlogan1", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displaySlogan1"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displaySlogan2", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displaySlogan2"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "shop_logo", null, null);?>
        <div class="logo_box">
          <div class="slogan_horizon">
            <a class="shop_logo" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                <img class="logo" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['retina_logo_src']) {?> srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['retina_logo_src'], ENT_QUOTES, 'UTF-8');?>
 2x"<?php }?> alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width'])) && $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width']) {?> width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height'])) && $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height']) {?> height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>/>
            </a>
            <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displaySlogan1')) {?><div class="slogan_box_beside"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displaySlogan1');?>
</div><?php }?>
          </div>
          <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displaySlogan2')) {?><div class="slogan_box_under"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displaySlogan2');?>
</div><?php }?>
        </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
          <div id="header_left" class="">
            <div class="flex_container header_box <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['header_left_alignment'] == 1) {?> flex_center <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['header_left_alignment'] == 2) {?> flex_right <?php } else { ?> flex_left <?php }?>">
              <?php if (!(isset($_smarty_tpl->tpl_vars['sttheme']->value['logo_position'])) || !$_smarty_tpl->tpl_vars['sttheme']->value['logo_position']) {?>
                  <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shop_logo');?>

              <?php }?>
              <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HEADER_LEFT']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_HEADER_LEFT']->value ))) {?>
                <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER_LEFT']->value;?>

              <?php }?>
            </div>
          </div>
            <div id="header_center" class="">
              <div class="flex_container header_box <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['header_center_alignment'] == 1) {?> flex_center <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['header_center_alignment'] == 2) {?> flex_right <?php } else { ?> flex_left <?php }?>">
              <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['logo_position'])) && $_smarty_tpl->tpl_vars['sttheme']->value['logo_position']) {?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shop_logo');?>

              <?php }?>
              <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HEADER_CENTER']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_HEADER_CENTER']->value ))) {?>
                  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER_CENTER']->value;?>

                <?php }?>
              </div>
            </div>
          <div id="header_right" class="">
            <div id="header_right_top" class="flex_container header_box <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['header_right_alignment'] == 1) {?> flex_center <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['header_right_alignment'] == 2) {?> flex_right <?php } else { ?> flex_left <?php }?>">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

            </div>
                <div id="header_right_bottom" class="flex_container header_box <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['header_right_bottom_alignment'] == 1) {?> flex_center <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['header_right_bottom_alignment'] == 2) {?> flex_right <?php } else { ?> flex_left <?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HEADER_BOTTOM']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_HEADER_BOTTOM']->value ))) {?>
                    <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER_BOTTOM']->value;?>

                <?php }?>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }?>
  <div class="nav_full_container <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['sticky_primary_header']) {?> hide_when_sticky <?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>
</div>
<?php
}
}
/* {/block 'header_top'} */
/* {block 'header_menu'} */
class Block_1941485237668a67f07dfac4_51013642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_menu' => 
  array (
    0 => 'Block_1941485237668a67f07dfac4_51013642',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="easymenu_container" class="easymenu_bar"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayEasyMenu"),$_smarty_tpl ) );?>
</div>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayMainMenu", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayMainMenu"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayMainMenuWidget", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayMainMenuWidget"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php $_smarty_tpl->_assignInScope('has_widgets', 0);?>
  <?php if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayMainMenuWidget') !== null )) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayMainMenuWidget') ))) {
$_smarty_tpl->_assignInScope('has_widgets', 1);
}?>
  <?php if (((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayMainMenu') !== null )) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayMainMenu') ))) || $_smarty_tpl->tpl_vars['has_widgets']->value) {?>
    <section id="top_extra" class="main_menu_has_widgets_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['has_widgets']->value, ENT_QUOTES, 'UTF-8');?>
">
      <div class="<?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['megamenu_width']) {?>wide_container boxed_megamenu<?php }?>">
      <div class="st_mega_menu_container animated fast">
      <div class="container">
        <div id="top_extra_container" class="flex_container <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['megamenu_position'] == 1) {?> flex_center <?php } elseif ($_smarty_tpl->tpl_vars['sttheme']->value['megamenu_position'] == 2) {?> flex_right <?php }?>">
            <?php if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayMainMenu') !== null ))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayMainMenu');
}?>
            <?php if ($_smarty_tpl->tpl_vars['has_widgets']->value) {?>
              <div id="main_menu_widgets">
                <div class="flex_box">
                  <?php if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayMainMenuWidget') !== null ))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayMainMenuWidget');
}?>
                </div>
              </div>
            <?php }?>
        </div>
      </div>
      </div>
      </div> 
  </section>
  <?php }
}
}
/* {/block 'header_menu'} */
}
