<?php
/* Smarty version 4.3.4, created on 2024-03-15 17:12:03
  from 'C:\xampp\htdocs\prestashop\admin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f473530f7be5_72490927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3675c4684fec7dd69488f205d4752d98dbaee9ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\new-theme\\template\\content.tpl',
      1 => 1708958657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f473530f7be5_72490927 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
