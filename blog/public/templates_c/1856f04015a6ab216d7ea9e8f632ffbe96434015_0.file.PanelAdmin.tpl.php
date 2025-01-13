<?php
/* Smarty version 3.1.33, created on 2025-01-12 20:34:26
  from 'C:\xampp\htdocs\blog\app\views\PanelAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_678419424039d6_97807979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1856f04015a6ab216d7ea9e8f632ffbe96434015' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\app\\views\\PanelAdmin.tpl',
      1 => 1736710153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678419424039d6_97807979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2052700852678419423d12a1_80655340', 'content');
?>



 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27131701967841942402837_39648834', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2052700852678419423d12a1_80655340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2052700852678419423d12a1_80655340',
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
class Block_27131701967841942402837_39648834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_27131701967841942402837_39648834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   

 <?php
}
}
/* {/block 'intro'} */
}
