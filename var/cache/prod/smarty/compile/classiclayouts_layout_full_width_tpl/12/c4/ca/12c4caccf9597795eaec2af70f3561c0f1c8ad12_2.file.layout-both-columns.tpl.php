<?php
/* Smarty version 4.3.4, created on 2024-03-15 17:12:15
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f4735f1ae409_51895898',
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
function content_65f4735f1ae409_51895898 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46526956065f4735f18f6f2_18725698', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162431114065f4735f193e92_51877416', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130313979665f4735f1956b0_44749295', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101868693265f4735f196b38_48845381', 'header');
?>

      </header>

      <section id="wrapper">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199241246765f4735f197ef1_45058387', 'notifications');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162267954265f4735f199ef6_56990983', 'breadcrumb');
?>


          <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78259846165f4735f19b4f6_50771389', "left_column");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76241170465f4735f1a09f3_14216389', "content_wrapper");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171067377765f4735f1a4868_08715088', "right_column");
?>

          </div>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer" class="js-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60464427665f4735f1a8b28_00508207', "footer");
?>

      </footer>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200567704465f4735f1aa369_15347869', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101902938065f4735f1ace73_51462677', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_46526956065f4735f18f6f2_18725698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_46526956065f4735f18f6f2_18725698',
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
class Block_162431114065f4735f193e92_51877416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_162431114065f4735f193e92_51877416',
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
class Block_130313979665f4735f1956b0_44749295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_130313979665f4735f1956b0_44749295',
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
class Block_101868693265f4735f196b38_48845381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_101868693265f4735f196b38_48845381',
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
class Block_199241246765f4735f197ef1_45058387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_199241246765f4735f197ef1_45058387',
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
class Block_162267954265f4735f199ef6_56990983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_162267954265f4735f199ef6_56990983',
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
class Block_78259846165f4735f19b4f6_50771389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_78259846165f4735f19b4f6_50771389',
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
class Block_63229674365f4735f1a23a2_25559796 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <p>Hello world! This is HTML5 Boilerplate.</p>
                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_76241170465f4735f1a09f3_14216389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_76241170465f4735f1a09f3_14216389',
  ),
  'content' => 
  array (
    0 => 'Block_63229674365f4735f1a23a2_25559796',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="content-wrapper" class="js-content-wrapper left-column right-column col-md-4 col-lg-3">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63229674365f4735f1a23a2_25559796', "content", $this->tplIndex);
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

              </div>
            <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_171067377765f4735f1a4868_08715088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_171067377765f4735f1a4868_08715088',
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
class Block_60464427665f4735f1a8b28_00508207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_60464427665f4735f1a8b28_00508207',
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
class Block_200567704465f4735f1aa369_15347869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_200567704465f4735f1aa369_15347869',
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
class Block_101902938065f4735f1ace73_51462677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_101902938065f4735f1ace73_51462677',
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
