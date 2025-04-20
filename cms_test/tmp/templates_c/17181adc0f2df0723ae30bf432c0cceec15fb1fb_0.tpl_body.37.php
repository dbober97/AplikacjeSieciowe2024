<?php
/* Smarty version 4.2.1, created on 2025-04-20 15:12:12
  from 'tpl_body:37' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6804f2ac4b1f08_94286629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17181adc0f2df0723ae30bf432c0cceec15fb1fb' => 
    array (
      0 => 'tpl_body:37',
      1 => '1745154710',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6804f2ac4b1f08_94286629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),));
echo smarty_function_global_content(array('name'=>'a_top'),$_smarty_tpl);?>

<div id="main">
	<div class="inner">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['Gallery'][0], array( array('dir'=>'Twócy'),$_smarty_tpl ) );?>

        <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
    </div>
</div>
<?php echo smarty_function_global_content(array('name'=>'a_bottom'),$_smarty_tpl);
}
}
