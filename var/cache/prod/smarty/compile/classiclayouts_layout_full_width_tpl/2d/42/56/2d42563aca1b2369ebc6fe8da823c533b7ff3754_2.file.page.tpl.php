<?php
/* Smarty version 4.3.4, created on 2024-03-15 17:12:14
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f4735ecc5df6_46828818',
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
function content_65f4735ecc5df6_46828818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21056956865f4735ecbb296_78857511', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_136500923065f4735ecbc4c1_85154635 extends Smarty_Internal_Block
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
class Block_33987147365f4735ecbbad4_02107055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136500923065f4735ecbc4c1_85154635', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_55558377865f4735ecc05f2_79450072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_183415813265f4735ecc20d4_41682567 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_30723904565f4735ecbfe23_70707367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55558377865f4735ecc05f2_79450072', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183415813265f4735ecc20d4_41682567', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_47209778365f4735ecc4448_35945566 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_101888352365f4735ecc3ba4_07669105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47209778365f4735ecc4448_35945566', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_21056956865f4735ecbb296_78857511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21056956865f4735ecbb296_78857511',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_33987147365f4735ecbbad4_02107055',
  ),
  'page_title' => 
  array (
    0 => 'Block_136500923065f4735ecbc4c1_85154635',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_30723904565f4735ecbfe23_70707367',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_55558377865f4735ecc05f2_79450072',
  ),
  'page_content' => 
  array (
    0 => 'Block_183415813265f4735ecc20d4_41682567',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_101888352365f4735ecc3ba4_07669105',
  ),
  'page_footer' => 
  array (
    0 => 'Block_47209778365f4735ecc4448_35945566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33987147365f4735ecbbad4_02107055', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30723904565f4735ecbfe23_70707367', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101888352365f4735ecc3ba4_07669105', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
