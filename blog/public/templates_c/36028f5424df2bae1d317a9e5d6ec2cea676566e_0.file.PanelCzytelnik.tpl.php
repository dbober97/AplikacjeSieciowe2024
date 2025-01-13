<?php
/* Smarty version 3.1.33, created on 2025-01-12 21:51:20
  from 'C:\xampp\htdocs\blog\app\views\PanelCzytelnik.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_67842b482b6eb8_05557951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36028f5424df2bae1d317a9e5d6ec2cea676566e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\app\\views\\PanelCzytelnik.tpl',
      1 => 1736710141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67842b482b6eb8_05557951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130163960467842b480ce9b6_00995820', 'content');
?>



 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136265589167842b482b56d5_72078403', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_130163960467842b480ce9b6_00995820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_130163960467842b480ce9b6_00995820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Nav -->
<nav id="nav">
                <ul class="links">
                    <li><a href=<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
glowna>Strona główna</a></li>
                    <ol>
                           <li><a class="dropdown-toggle" data-toggle="dropdown" >kategorie</a>
                                <ul>
                                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
matematyka">Matematyka</a></li>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
informatyka">Informatyka</a></li>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
fizyka">Fizyka</a></li>
                                </ul>
                           </li>
                    </ol> 
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
autorzy">Autorzy</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
kontakt">Kontakt</a></li>
                    <?php if (\core\RoleUtils::inRole("admin") || \core\RoleUtils::inRole("moderator") || \core\RoleUtils::inRole("czytelnik") || \core\RoleUtils::inRole("autor")) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj się</a></li>
                        <ol>
                           <li><a class="dropdown-toggle" data-toggle="dropdown" >Panel zalogowanego: <?php echo \core\SessionUtils::load("login",true);?>
</a>
                                <ul>
                                  <li><a <?php if (\core\RoleUtils::inRole("admin")) {?>href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
panelAdmin"<?php }?>>administrator</a></li>
                                  <li><a <?php if (\core\RoleUtils::inRole("moderator")) {?>href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
panelModerator"<?php }?>>moderator</a></li>
                                  <li><a <?php if (\core\RoleUtils::inRole("autor")) {?>href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
panelAutor"<?php }?>>autor</a></li>
                                   <li><a <?php if (\core\RoleUtils::inRole("czytelnik")) {?>href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
panelCzytelnik"<?php }?>>czytelnik</a></li>
                                </ul>
                           </li>
                       </ol> 
                        <?php } else { ?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logowanie">Logowanie</a></li>
                    <?php }?>
                </ul>
        </nav>
<?php
}
}
/* {/block 'content'} */
/* {block 'intro'} */
class Block_136265589167842b482b56d5_72078403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_136265589167842b482b56d5_72078403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   

 <?php
}
}
/* {/block 'intro'} */
}
