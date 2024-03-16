<?php
/* Smarty version 4.3.4, created on 2024-03-16 01:33:25
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f4e8d5d03f66_04506450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e192aae51cf4af961701b2717ee2a89da6ac829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1710546516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4e8d5d03f66_04506450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42524903665f4e8d5cffb79_42075093', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_31803831465f4e8d5d00633_61544208 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_127211220765f4e8d5d01ef8_17697863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>


          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_6420527165f4e8d5d014f2_21650158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127211220765f4e8d5d01ef8_17697863', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_42524903665f4e8d5cffb79_42075093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_42524903665f4e8d5cffb79_42075093',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_31803831465f4e8d5d00633_61544208',
  ),
  'page_content' => 
  array (
    0 => 'Block_6420527165f4e8d5d014f2_21650158',
  ),
  'hook_home' => 
  array (
    0 => 'Block_127211220765f4e8d5d01ef8_17697863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31803831465f4e8d5d00633_61544208', 'page_content_top', $this->tplIndex);
?>

           
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6420527165f4e8d5d014f2_21650158', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
