<?php
/* Smarty version 4.3.4, created on 2024-03-16 01:33:26
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\_partials\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f4e8d6a1ea75_74800091',
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
function content_65f4e8d6a1ea75_74800091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157692786065f4e8d69fae38_54855937', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11019749865f4e8d69fc006_49719755', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108738161665f4e8d69fce48_22120897', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63584177865f4e8d6a14993_58719385', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88196869065f4e8d6a15712_73489332', 'head_icons');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131582502465f4e8d6a18da7_58475472', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181136031265f4e8d6a1a8d4_74653411', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195589186465f4e8d6a1cb28_93841433', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64977030165f4e8d6a1e110_62368139', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_157692786065f4e8d69fae38_54855937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_157692786065f4e8d69fae38_54855937',
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
class Block_11019749865f4e8d69fc006_49719755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_11019749865f4e8d69fc006_49719755',
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
class Block_196309573165f4e8d69fd687_25228173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_180926634765f4e8d69fefc8_26419563 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_71710352265f4e8d6a01363_45783522 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_11709340165f4e8d6a02d17_61642387 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_105358431365f4e8d6a07db4_35402398 extends Smarty_Internal_Block
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
class Block_95547337065f4e8d6a0a971_09895415 extends Smarty_Internal_Block
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
class Block_88838553965f4e8d6a0c516_71342484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_microdata_special'} */
/* {block 'head_pagination_seo'} */
class Block_188448011265f4e8d6a0d0f8_35736891 extends Smarty_Internal_Block
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
class Block_141634370965f4e8d6a0e885_64078311 extends Smarty_Internal_Block
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
class Block_108738161665f4e8d69fce48_22120897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_108738161665f4e8d69fce48_22120897',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_196309573165f4e8d69fd687_25228173',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_180926634765f4e8d69fefc8_26419563',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_71710352265f4e8d6a01363_45783522',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_11709340165f4e8d6a02d17_61642387',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_105358431365f4e8d6a07db4_35402398',
  ),
  'head_microdata' => 
  array (
    0 => 'Block_95547337065f4e8d6a0a971_09895415',
  ),
  'head_microdata_special' => 
  array (
    0 => 'Block_88838553965f4e8d6a0c516_71342484',
  ),
  'head_pagination_seo' => 
  array (
    0 => 'Block_188448011265f4e8d6a0d0f8_35736891',
  ),
  'head_open_graph' => 
  array (
    0 => 'Block_141634370965f4e8d6a0e885_64078311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196309573165f4e8d69fd687_25228173', 'head_seo_title', $this->tplIndex);
?>
</title>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180926634765f4e8d69fefc8_26419563', 'hook_after_title_tag', $this->tplIndex);
?>

  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71710352265f4e8d6a01363_45783522', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11709340165f4e8d6a02d17_61642387', 'head_seo_keywords', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105358431365f4e8d6a07db4_35402398', 'head_hreflang', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95547337065f4e8d6a0a971_09895415', 'head_microdata', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88838553965f4e8d6a0c516_71342484', 'head_microdata_special', $this->tplIndex);
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188448011265f4e8d6a0d0f8_35736891', 'head_pagination_seo', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141634370965f4e8d6a0e885_64078311', 'head_open_graph', $this->tplIndex);
?>
  
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_63584177865f4e8d6a14993_58719385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_63584177865f4e8d6a14993_58719385',
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
class Block_88196869065f4e8d6a15712_73489332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_88196869065f4e8d6a15712_73489332',
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
class Block_131582502465f4e8d6a18da7_58475472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_131582502465f4e8d6a18da7_58475472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_181136031265f4e8d6a1a8d4_74653411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_181136031265f4e8d6a1a8d4_74653411',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_195589186465f4e8d6a1cb28_93841433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_195589186465f4e8d6a1cb28_93841433',
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
class Block_64977030165f4e8d6a1e110_62368139 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_64977030165f4e8d6a1e110_62368139',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
