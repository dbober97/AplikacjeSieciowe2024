<?php
/* Smarty version 4.2.1, created on 2025-04-20 15:12:55
  from 'tpl_body:36' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6804f2d7e0b911_76937744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b83d87c15e52fdb8bc68ce94845dd636e11941f3' => 
    array (
      0 => 'tpl_body:36',
      1 => '1745100356',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6804f2d7e0b911_76937744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),));
echo smarty_function_global_content(array('name'=>'a_top'),$_smarty_tpl);?>

<div id="main">
	<div class="inner">
        <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
    </div>
</div>
<?php echo smarty_function_global_content(array('name'=>'a_bottom'),$_smarty_tpl);
}
}
