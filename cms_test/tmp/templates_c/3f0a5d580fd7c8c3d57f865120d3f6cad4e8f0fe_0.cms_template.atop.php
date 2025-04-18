<?php
/* Smarty version 4.2.1, created on 2025-04-16 20:00:18
  from 'cms_template:a_top' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67fff0324a3021_98934837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f0a5d580fd7c8c3d57f865120d3f6cad4e8f0fe' => 
    array (
      0 => 'cms_template:a_top',
      1 => '1744826391',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67fff0324a3021_98934837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	    <?php echo smarty_function_cms_stylesheet(array('name'=>'a_main'),$_smarty_tpl);?>

		<?php echo smarty_function_cms_stylesheet(array('name'=>'a_noscript'),$_smarty_tpl);?>

		<title>Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="uploads/images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
		    	<nav id="menu">
						<h2>Menu</h2>
			        	<?php echo Navigator::function_plugin(array('name'=>'a_navigator'),$_smarty_tpl);?>

				</nav><?php }
}
