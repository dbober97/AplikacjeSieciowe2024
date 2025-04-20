<?php
/* Smarty version 4.2.1, created on 2025-04-20 15:16:23
  from 'content:content_en' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6804f3a770d5c0_96577016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62e936251e4799749e89fa9828a0ee7332eb5816' => 
    array (
      0 => 'content:content_en',
      1 => 1745154975,
      2 => 'content',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6804f3a770d5c0_96577016 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo News::function_plugin(array('number'=>'5','category'=>'General'),$_smarty_tpl);?>
</p>
<p><?php echo News::function_plugin(array('number'=>'5','category'=>'Testowa_kategoria1'),$_smarty_tpl);?>
</p>
<p><?php echo News::function_plugin(array('number'=>'5','category'=>'Testowa_kategoria2'),$_smarty_tpl);?>
</p><?php }
}
