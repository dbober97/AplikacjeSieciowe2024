<?php
/* Smarty version 4.2.1, created on 2025-04-20 12:50:46
  from 'module_file_tpl:AceEditor2;about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6804d18642aaa1_90039097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4202dc18ef9a00343be2e5cc47dd7f29f655df8' => 
    array (
      0 => 'module_file_tpl:AceEditor2;about.tpl',
      1 => 1745009323,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6804d18642aaa1_90039097 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Version 1.03</h3>
<b>Versions before 1.03 were pulled from the forge because they simply do not work.</b>
<ul>
	<li>Initial working release</li>
</ul>
<h3>Version 1.05 (17 januari 2016)</h3>
<ul>
	<li>Reworks the way the hidden textarea (the one that CMSMS actually saves) is generated so that Ace Editor also works with third party modules.</li>
	<li>Adds keybinding CTRL + S. Using this hotkey while in editor will trigger the 'apply' button.
</ul>
<?php }
}
