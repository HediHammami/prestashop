<?php
/* Smarty version 4.3.4, created on 2024-03-16 01:42:53
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f4eb0d27a1c9_29861552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd59ac7ce97e92170e7a8c3efe5bb7301c0d3e9dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\content.tpl',
      1 => 1708958657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4eb0d27a1c9_29861552 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
