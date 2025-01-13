<?php
/* Smarty version 3.1.33, created on 2025-01-12 20:30:17
  from 'C:\xampp\htdocs\blog\app\views\Autorzy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_678418492e0d36_37733400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b22f4c82ef28221ef06870851c196accbf65b9ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\app\\views\\Autorzy.tpl',
      1 => 1736710210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678418492e0d36_37733400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156524685678418492ac763_84148353', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_156524685678418492ac763_84148353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_156524685678418492ac763_84148353',
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
                    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
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
            
  <div id="main">          
    <header>
            <h2>Witaj!</h2>
            <p>Kilka słów o blogu.</p>
    </header>
      
       <p>Kilka słów o autorach.
       <img src="http://localhost/blog/public/images/4intro.png"></p>
    </div>

<?php
}
}
/* {/block 'content'} */
}
