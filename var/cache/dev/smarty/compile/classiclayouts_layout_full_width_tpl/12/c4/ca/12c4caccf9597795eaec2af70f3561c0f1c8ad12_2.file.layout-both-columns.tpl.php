<?php
/* Smarty version 4.3.4, created on 2024-03-16 01:33:26
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f4e8d6311049_22183347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12c4caccf9597795eaec2af70f3561c0f1c8ad12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/helpers.tpl' => 1,
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/password-policy-template.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_65f4e8d6311049_22183347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164220302565f4e8d62efcd4_88931792', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12077720365f4e8d62f30d7_80697433', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116626370865f4e8d62f4972_52877323', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77950243265f4e8d62f5f33_32319401', 'header');
?>

      </header>

      <section id="wrapper">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142455487065f4e8d62f75d3_10096311', 'notifications');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119394025665f4e8d62f96b1_44943669', 'breadcrumb');
?>


          <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13457013665f4e8d62faf57_10458086', "left_column");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117967334365f4e8d62feff5_11441676', "content_wrapper");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58361676065f4e8d6302e40_16095254', "right_column");
?>

          </div>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer" class="js-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66237264765f4e8d630b1b3_79739578', "footer");
?>

      </footer>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125708700165f4e8d630cd22_26868265', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147034371065f4e8d630f9b0_96437587', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_164220302565f4e8d62efcd4_88931792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_164220302565f4e8d62efcd4_88931792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_12077720365f4e8d62f30d7_80697433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_12077720365f4e8d62f30d7_80697433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_116626370865f4e8d62f4972_52877323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_116626370865f4e8d62f4972_52877323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_77950243265f4e8d62f5f33_32319401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_77950243265f4e8d62f5f33_32319401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_142455487065f4e8d62f75d3_10096311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_142455487065f4e8d62f75d3_10096311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_119394025665f4e8d62f96b1_44943669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_119394025665f4e8d62f96b1_44943669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_13457013665f4e8d62faf57_10458086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_13457013665f4e8d62faf57_10458086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="left-column" class="col-xs-12 col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_196386663065f4e8d63004d8_91114095 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <p>Hello world! This is HTML5 Boilerplate.</p>
                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_117967334365f4e8d62feff5_11441676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_117967334365f4e8d62feff5_11441676',
  ),
  'content' => 
  array (
    0 => 'Block_196386663065f4e8d63004d8_91114095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="content-wrapper" class="js-content-wrapper left-column right-column col-md-4 col-lg-3">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196386663065f4e8d63004d8_91114095', "content", $this->tplIndex);
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

              </div>
            <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_58361676065f4e8d6302e40_16095254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_58361676065f4e8d6302e40_16095254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="right-column" class="col-xs-12 col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_66237264765f4e8d630b1b3_79739578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_66237264765f4e8d630b1b3_79739578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_125708700165f4e8d630cd22_26868265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_125708700165f4e8d630cd22_26868265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/password-policy-template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_147034371065f4e8d630f9b0_96437587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_147034371065f4e8d630f9b0_96437587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
