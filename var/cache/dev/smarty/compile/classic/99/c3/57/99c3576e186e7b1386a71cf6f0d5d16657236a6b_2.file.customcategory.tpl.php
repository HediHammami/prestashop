<?php
/* Smarty version 4.3.4, created on 2024-03-16 01:33:25
  from 'C:\xampp\htdocs\prestashop\modules\customcategory\customcategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f4e8d55bffc7_38486777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99c3576e186e7b1386a71cf6f0d5d16657236a6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\customcategory\\customcategory.tpl',
      1 => 1710545869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4e8d55bffc7_38486777 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['categories']->value) {?>
    <div class="home-categories">
        <h2 style="text-align: center;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Categories'),$_smarty_tpl ) );?>
</h2>
        <div class="category-list" style="display: flex; justify-content: center;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <div class="category-item" style="text-align: center; margin: 0 10px;">
                    <div class="category-image">
                        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_cover'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                    <div class="category-name" style="margin-top: 5px; white-space: nowrap;">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
