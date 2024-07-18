<?php
/* Smarty version 4.3.4, created on 2024-07-18 19:54:29
  from '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_669956d53faef1_71279656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bce28c119b5868dffb18c1c7a08050403734ac1d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tienda-prestashop/themes/panda/templates/index.tpl',
      1 => 1720204187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669956d53faef1_71279656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_229690807669956d53e9c47_62031179', 'breadcrumb');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_516480327669956d53ea343_55209102', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'breadcrumb'} */
class Block_229690807669956d53e9c47_62031179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_229690807669956d53e9c47_62031179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'page_content_top'} */
class Block_1249413537669956d53ea562_49942166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1924389391669956d53ee1a8_90396316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_758418605669956d53ea870_68452600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHomeTop"),$_smarty_tpl ) );?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1924389391669956d53ee1a8_90396316', 'hook_home', $this->tplIndex);
?>


          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayHomeRight", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHomeRight"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayHomeLeft", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHomeLeft"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayHomeFirstQuarter", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHomeFirstQuarter"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayHomeSecondQuarter", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHomeSecondQuarter"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayHomeThirdQuarter", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHomeThirdQuarter"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "displayHomeFourthQuarter", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHomeFourthQuarter"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

          <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeRight') || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeLeft')) {?>
            <div id="home_secondary_row" class="row">
              <div id="home_secondary_left" class="col-lg-6">
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeLeft');?>

              </div>
              <div id="home_secondary_right" class="col-lg-6">
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeRight');?>

              </div>
            </div>
          <?php }?>
          <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeFirstQuarter') || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeSecondQuarter') || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeThirdQuarter') || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeFourthQuarter')) {?>
          <div id="home_tertiary_row" class="row">
              <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['quarter_1']) {?>
              <div id="home_first_quarter" class="col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['quarter_1'], ENT_QUOTES, 'UTF-8');?>
">
                  <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeFirstQuarter');?>

              </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['quarter_2']) {?>
              <div id="home_second_quarter" class="col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['quarter_2'], ENT_QUOTES, 'UTF-8');?>
">
                  <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeSecondQuarter');?>

              </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['quarter_3']) {?>
              <div id="home_third_quarter" class="col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['quarter_3'], ENT_QUOTES, 'UTF-8');?>
">
                  <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeThirdQuarter');?>

              </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['quarter_4']) {?>
              <div id="home_fourth_quarter" class="col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sttheme']->value['quarter_4'], ENT_QUOTES, 'UTF-8');?>
">
                  <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayHomeFourthQuarter');?>

              </div>
              <?php }?>
          </div>
          <?php }?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHomeBottom"),$_smarty_tpl ) );?>


        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_516480327669956d53ea343_55209102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_516480327669956d53ea343_55209102',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1249413537669956d53ea562_49942166',
  ),
  'page_content' => 
  array (
    0 => 'Block_758418605669956d53ea870_68452600',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1924389391669956d53ee1a8_90396316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1249413537669956d53ea562_49942166', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_758418605669956d53ea870_68452600', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
