<?php
/* Smarty version 4.2.1, created on 2025-04-20 15:13:18
  from 'module_db_tpl:Gallery;a_lightbox_moje' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6804f2eeda0ec4_26322510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e237c56e1c9a8f513b02bf74030cce1e2ef3c28' => 
    array (
      0 => 'module_db_tpl:Gallery;a_lightbox_moje',
      1 => 1745154788,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6804f2eeda0ec4_26322510 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="gallery">
<?php if (!empty($_smarty_tpl->tpl_vars['gallerytitle']->value)) {?><h3><?php echo $_smarty_tpl->tpl_vars['gallerytitle']->value;?>
</h3><?php }?>


</div>

<section>
	<div class="box alt">
		<div class="row gtr-uniform">
		    
		    
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
<div class="col-4"><span class="image fit">
	<div class="img">
	<?php if ($_smarty_tpl->tpl_vars['image']->value->isdir) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" /></a><br />
		<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>

	<?php } else { ?>
				<a class="group" href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;
if (!empty($_smarty_tpl->tpl_vars['image']->value->comment)) {?> &bull; &lt;em&gt;<?php echo htmlspecialchars((string)preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['image']->value->comment), ENT_QUOTES, 'UTF-8', true);?>
&lt;em&gt;<?php }?>" data-lightbox="cmsmsgallery<?php echo $_smarty_tpl->tpl_vars['galleryid']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" /></a>
	<?php }?>
	</div>
	</span></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
</div>
</section>


<div class="galleryclear">&nbsp;</div>
</div><?php }
}
