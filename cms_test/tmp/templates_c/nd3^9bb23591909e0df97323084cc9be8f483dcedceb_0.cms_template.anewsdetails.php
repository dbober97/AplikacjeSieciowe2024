<?php
/* Smarty version 4.2.1, created on 2025-04-20 15:25:20
  from 'cms_template:a_news_details' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6804f5c00c6e39_14075953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb23591909e0df97323084cc9be8f483dcedceb' => 
    array (
      0 => 'cms_template:a_news_details',
      1 => '1745102038',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6804f5c00c6e39_14075953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\plugins\\modifier.cms_date_format.php','function'=>'smarty_modifier_cms_date_format',),1=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\plugins\\modifier.cms_escape.php','function'=>'smarty_modifier_cms_escape',),2=>array('file'=>'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\lib\\plugins\\function.file_url.php','function'=>'smarty_function_file_url',),));
if ((isset($_smarty_tpl->tpl_vars['entry']->value->canonical))) {?>
    <?php $_smarty_tpl->_assignInScope('canonical', $_smarty_tpl->tpl_vars['entry']->value->canonical ,false ,32);
}?>

<?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
	<div id="NewsPostDetailDate">
		<?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

	</div>
<?php }?>
<h3 id="NewsPostDetailTitle"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
</h3>

<hr id="NewsPostDetailHorizRule" />

<?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
	<div id="NewsPostDetailSummary">
		<strong>
			<?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

		</strong>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['entry']->value->category) {?>
	<div id="NewsPostDetailCategory">
		<?php echo $_smarty_tpl->tpl_vars['category_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>

	</div>
<?php }
if ($_smarty_tpl->tpl_vars['entry']->value->author) {?>
	<div id="NewsPostDetailAuthor">
		<?php echo $_smarty_tpl->tpl_vars['author_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>

	</div>
<?php }?>

<div id="NewsPostDetailContent">
        	<?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

</div>

<?php if ($_smarty_tpl->tpl_vars['entry']->value->extra) {?>
	<div id="NewsPostDetailExtra">
		<?php echo $_smarty_tpl->tpl_vars['extra_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->extra;?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['return_url']->value != '') {?>
<div id="NewsPostDetailReturnLink"><?php echo $_smarty_tpl->tpl_vars['return_url']->value;
if ($_smarty_tpl->tpl_vars['category_name']->value != '') {?> - <?php echo $_smarty_tpl->tpl_vars['category_link']->value;
}?></div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['entry']->value->fields))) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entry']->value->fields, 'field', false, 'fieldname');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fieldname']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
     <div class="NewsDetailField">
        <?php if ($_smarty_tpl->tpl_vars['field']->value->type == 'file') {?>
	            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value->value)) && $_smarty_tpl->tpl_vars['field']->value->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->file_location;?>
/<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
"/>
          <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->type == 'linkedfile') {?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['field']->value->value)) {?>
            <img src="<?php echo smarty_function_file_url(array('file'=>$_smarty_tpl->tpl_vars['field']->value->value),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
"/>
          <?php }?>
        <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>

        <?php }?>
     </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
