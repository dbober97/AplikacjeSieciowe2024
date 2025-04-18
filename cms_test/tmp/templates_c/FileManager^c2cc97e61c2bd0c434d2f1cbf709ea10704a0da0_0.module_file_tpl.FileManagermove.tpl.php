<?php
/* Smarty version 4.2.1, created on 2025-04-16 18:08:02
  from 'module_file_tpl:FileManager;move.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67ffd5e265f553_00524634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2cc97e61c2bd0c434d2f1cbf709ea10704a0da0' => 
    array (
      0 => 'module_file_tpl:FileManager;move.tpl',
      1 => 1743727904,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ffd5e265f553_00524634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_move');?>
</h3>
<p class="pageoverflow"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_move');?>
:</p>

<?php echo $_smarty_tpl->tpl_vars['startform']->value;?>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('itemstomove');?>
:</p>
  <p class="pageinput">
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selall']->value, 'one');
$_smarty_tpl->tpl_vars['one']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->do_else = false;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['one']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><label for="destdir"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('move_destdir');?>
:</label></p>
  <p class="pageinput">
    <select id="destdir" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
destdir">
    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['dirlist']->value,'selected'=>$_smarty_tpl->tpl_vars['cwd']->value),$_smarty_tpl);?>

    </select>
  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('move');?>
"/>
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
"/>
  </p>
</div>
<?php echo $_smarty_tpl->tpl_vars['endform']->value;
}
}
