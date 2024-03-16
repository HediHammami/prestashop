<?php
/* Smarty version 4.3.4, created on 2024-03-15 17:12:15
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\_partials\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f4735f978782_50396333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '804905fa7b682b22b0427f4c691bc3e27b1a5c4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\_partials\\head.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/head-jsonld.tpl' => 1,
    'file:_partials/pagination-seo.tpl' => 1,
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_65f4735f978782_50396333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191058701565f4735f94e6d6_60740052', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212417461865f4735f94f715_08179610', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198836846765f4735f950459_40110202', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213548896765f4735f96d987_65416344', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130159077165f4735f96e946_70087455', 'head_icons');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47738205265f4735f972710_67701182', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70257778365f4735f9743d6_59561589', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22742926365f4735f9765f4_41651395', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185097367165f4735f977bf8_12403162', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_191058701565f4735f94e6d6_60740052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_191058701565f4735f94e6d6_60740052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_212417461865f4735f94f715_08179610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_212417461865f4735f94f715_08179610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_54289964065f4735f950bf9_15222204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_68626379465f4735f9525c4_10900252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_21493497765f4735f9539a6_06364662 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_129558514365f4735f955036_32741516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_96778129665f4735f95a192_31531404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
$_smarty_tpl->tpl_vars['pageUrl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
$_smarty_tpl->tpl_vars['pageUrl']->do_else = false;
?>
      <link rel="alternate" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_microdata'} */
class Block_162604651365f4735f95d2a8_99286679 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/microdata/head-jsonld.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'head_microdata'} */
/* {block 'head_microdata_special'} */
class Block_52471788965f4735f95eef3_50989439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_microdata_special'} */
/* {block 'head_pagination_seo'} */
class Block_176722538965f4735f95fb12_37277780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/pagination-seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'head_pagination_seo'} */
/* {block 'head_open_graph'} */
class Block_34585177565f4735f961493_18313300 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:description" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:url" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta property="og:site_name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php if (!(isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?><meta property="og:type" content="website" /><?php }?>
  <?php
}
}
/* {/block 'head_open_graph'} */
/* {block 'head_seo'} */
class Block_198836846765f4735f950459_40110202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_198836846765f4735f950459_40110202',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_54289964065f4735f950bf9_15222204',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_68626379465f4735f9525c4_10900252',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_21493497765f4735f9539a6_06364662',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_129558514365f4735f955036_32741516',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_96778129665f4735f95a192_31531404',
  ),
  'head_microdata' => 
  array (
    0 => 'Block_162604651365f4735f95d2a8_99286679',
  ),
  'head_microdata_special' => 
  array (
    0 => 'Block_52471788965f4735f95eef3_50989439',
  ),
  'head_pagination_seo' => 
  array (
    0 => 'Block_176722538965f4735f95fb12_37277780',
  ),
  'head_open_graph' => 
  array (
    0 => 'Block_34585177565f4735f961493_18313300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54289964065f4735f950bf9_15222204', 'head_seo_title', $this->tplIndex);
?>
</title>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68626379465f4735f9525c4_10900252', 'hook_after_title_tag', $this->tplIndex);
?>

  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21493497765f4735f9539a6_06364662', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129558514365f4735f955036_32741516', 'head_seo_keywords', $this->tplIndex);
?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96778129665f4735f95a192_31531404', 'head_hreflang', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162604651365f4735f95d2a8_99286679', 'head_microdata', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52471788965f4735f95eef3_50989439', 'head_microdata_special', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176722538965f4735f95fb12_37277780', 'head_pagination_seo', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34585177565f4735f961493_18313300', 'head_open_graph', $this->tplIndex);
?>
  
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_213548896765f4735f96d987_65416344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_213548896765f4735f96d987_65416344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_130159077165f4735f96e946_70087455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_130159077165f4735f96e946_70087455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_47738205265f4735f972710_67701182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_47738205265f4735f972710_67701182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_70257778365f4735f9743d6_59561589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_70257778365f4735f9743d6_59561589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_22742926365f4735f9765f4_41651395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_22742926365f4735f9765f4_41651395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_185097367165f4735f977bf8_12403162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_185097367165f4735f977bf8_12403162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
