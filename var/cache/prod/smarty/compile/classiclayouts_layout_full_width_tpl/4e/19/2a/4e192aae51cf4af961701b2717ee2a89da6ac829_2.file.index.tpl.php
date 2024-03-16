<?php
/* Smarty version 4.3.4, created on 2024-03-15 17:12:14
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f4735eaf5ec6_72567624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e192aae51cf4af961701b2717ee2a89da6ac829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1710512032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4735eaf5ec6_72567624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208850169165f4735eaefb56_80771683', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_132828064665f4735eaf0810_29290900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_181143589765f4735eaf2082_78894802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
    <div class="category">
        <pre><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'print_r' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value )), ENT_QUOTES, 'UTF-8');?>
</pre>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_92081871165f4735eaf17e1_61553500 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181143589765f4735eaf2082_78894802', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_208850169165f4735eaefb56_80771683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_208850169165f4735eaefb56_80771683',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_132828064665f4735eaf0810_29290900',
  ),
  'page_content' => 
  array (
    0 => 'Block_92081871165f4735eaf17e1_61553500',
  ),
  'hook_home' => 
  array (
    0 => 'Block_181143589765f4735eaf2082_78894802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132828064665f4735eaf0810_29290900', 'page_content_top', $this->tplIndex);
?>

           
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92081871165f4735eaf17e1_61553500', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
