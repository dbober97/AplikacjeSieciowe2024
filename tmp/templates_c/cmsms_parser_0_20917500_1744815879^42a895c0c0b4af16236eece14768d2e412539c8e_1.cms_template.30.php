<?php
/* Smarty version 4.2.1, created on 2025-04-16 17:04:39
  from 'cms_template:30' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67ffc7073a3bc8_07657154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a895c0c0b4af16236eece14768d2e412539c8e' => 
    array (
      0 => 'cms_template:30',
      1 => '1744815739',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ffc7073a3bc8_07657154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\plugins\\function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),3=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),4=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<?php echo smarty_function_cms_stylesheet(array('name'=>'1_moje_noscript'),$_smarty_tpl);?>

</head>

<body>
	<header id="header">
		<h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
	</header>

	<nav id="menu">
		
	</nav>

	<section id="content">
		<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
		
	</section>
</body>

</html><?php }
}
