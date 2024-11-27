<?php
/* Smarty version 5.4.1, created on 2024-11-27 22:52:26
  from 'file:messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6747949a6d4e23_93506694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '576f57e3f23e6d00b81501f1fefda004a63e805c' => 
    array (
      0 => 'messages.tpl',
      1 => 1732741228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6747949a6d4e23_93506694 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.6b_routing\\app\\views\\templates';
if ($_smarty_tpl->getValue('msgs')->isError()) {?>
		<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #f88; width:25em;">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'msg', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
<?php }?>



<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
		<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #0f2; width:25em;">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'msg', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
<?php }
}
}
