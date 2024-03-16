<?php
/* Smarty version 4.3.4, created on 2024-03-16 01:33:25
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f4e8d5e587c0_92244243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d42563aca1b2369ebc6fe8da823c533b7ff3754' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1710511706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4e8d5e587c0_92244243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84152715865f4e8d5e4fd47_58204896', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_209308653865f4e8d5e50fc8_42739276 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_205801609165f4e8d5e505d0_73230816 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209308653865f4e8d5e50fc8_42739276', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_136484239665f4e8d5e54e82_90223249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_77274788665f4e8d5e55bb5_67492676 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_66754961765f4e8d5e546b9_24040676 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136484239665f4e8d5e54e82_90223249', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77274788665f4e8d5e55bb5_67492676', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_168024893465f4e8d5e573c0_96876306 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_34886330965f4e8d5e56c60_85863294 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168024893465f4e8d5e573c0_96876306', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_84152715865f4e8d5e4fd47_58204896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_84152715865f4e8d5e4fd47_58204896',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_205801609165f4e8d5e505d0_73230816',
  ),
  'page_title' => 
  array (
    0 => 'Block_209308653865f4e8d5e50fc8_42739276',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_66754961765f4e8d5e546b9_24040676',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_136484239665f4e8d5e54e82_90223249',
  ),
  'page_content' => 
  array (
    0 => 'Block_77274788665f4e8d5e55bb5_67492676',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_34886330965f4e8d5e56c60_85863294',
  ),
  'page_footer' => 
  array (
    0 => 'Block_168024893465f4e8d5e573c0_96876306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205801609165f4e8d5e505d0_73230816', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66754961765f4e8d5e546b9_24040676', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34886330965f4e8d5e56c60_85863294', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
