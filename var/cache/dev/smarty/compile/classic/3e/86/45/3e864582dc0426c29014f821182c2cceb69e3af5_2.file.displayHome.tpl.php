<?php
/* Smarty version 4.3.4, created on 2024-03-16 01:33:25
  from 'C:\xampp\htdocs\prestashop\modules\categoryhomepage\displayHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f4e8d5b9a5c0_12576331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e864582dc0426c29014f821182c2cceb69e3af5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\categoryhomepage\\displayHome.tpl',
      1 => 1710549139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4e8d5b9a5c0_12576331 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .categories-section {
        text-align: center;
    }

    .categories-list {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .category-item {
        margin: 10px;
        text-align: center;
    }

    .category-item img {
        max-width: 100px; /* Adjust the size as needed */
        height: auto;
    }
</style>

<?php if ((isset($_smarty_tpl->tpl_vars['categories']->value)) && $_smarty_tpl->tpl_vars['categories']->value) {?>
<div class="categories-section">
<h2>Our Categories</h2>
    <div class="categories-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <div class="category-item">
                <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    <img src="http://localhost/prestashop/img/c/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['id_category'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
                    <h3><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    </div>
<?php }
}
}
