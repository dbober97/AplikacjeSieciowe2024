<?php
/* Smarty version 4.2.1, created on 2025-04-16 14:43:44
  from 'C:\xampp-starszy\xampp\htdocs\cms_test\admin\themes\OneEleven\templates\topcontent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67ffa60053ac36_05744298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ecc60a4c9079fdff80e7b5a05b1d713f07bb356' => 
    array (
      0 => 'C:\\xampp-starszy\\xampp\\htdocs\\cms_test\\admin\\themes\\OneEleven\\templates\\topcontent.tpl',
      1 => 1743727863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ffa60053ac36_05744298 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="topcontent_wrap"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node', false, NULL, 'box', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_box']->value['index']++;
$_smarty_tpl->_assignInScope('icon', "themes/OneEleven/images/icons/topfiles/".((string)$_smarty_tpl->tpl_vars['node']->value['name']));
$_smarty_tpl->_assignInScope('module', "../modules/".((string)$_smarty_tpl->tpl_vars['node']->value['name'])."/images/icon");
if ($_smarty_tpl->tpl_vars['node']->value['show_in_menu'] && $_smarty_tpl->tpl_vars['node']->value['url'] && $_smarty_tpl->tpl_vars['node']->value['title']) {?><div class="dashboard-box<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_box']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_box']->value['index'] : null)%3 == 2) {?> last<?php }?>"><nav class="dashboard-inner cf"><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['url'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['target']))) {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value['target'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['node']->value['selected']) {?> class="selected"<?php }?> tabindex="-1"><?php if (file_exists(($_smarty_tpl->tpl_vars['module']->value).('.png'))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.png" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['description']);?>
"<?php }?> /><?php } elseif (file_exists(($_smarty_tpl->tpl_vars['module']->value).('.gif'))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.gif" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['description']);?>
"<?php }?> /><?php } elseif (file_exists(($_smarty_tpl->tpl_vars['icon']->value).('.png'))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
.png" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['description']);?>
"<?php }?> /><?php } elseif (file_exists(($_smarty_tpl->tpl_vars['icon']->value).('.gif'))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
.gif" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['description']);?>
"<?php }?> /><?php } else { ?><img src="themes/OneEleven/images/icons/topfiles/modules.png" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['description']);?>
"<?php }?> /><?php }?></a><h3><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value['url'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['target']))) {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value['target'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['node']->value['selected']) {?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['node']->value['title'];?>
</a></h3><?php if ($_smarty_tpl->tpl_vars['node']->value['description']) {?><span class="description"><?php echo $_smarty_tpl->tpl_vars['node']->value['description'];?>
</span><?php }
if ((isset($_smarty_tpl->tpl_vars['node']->value['children']))) {?><h4><?php echo lang('subitems');?>
</h4><ul class="subitems cf"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['children'], 'one');
$_smarty_tpl->tpl_vars['one']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->do_else = false;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['one']->value['url'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['one']->value['target']))) {?> target="<?php echo $_smarty_tpl->tpl_vars['one']->value['target'];?>
"<?php }?> <?php if (substr($_smarty_tpl->tpl_vars['one']->value['url'],0,6) == 'logout' && (isset($_smarty_tpl->tpl_vars['is_sitedown']->value))) {?>onclick="return confirm('<?php echo strtr((string)lang('maintenance_warning'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
')"<?php }?>><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></nav></div><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_box']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_box']->value['index'] : null)%3 == 2) {?><div class="clear"></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
