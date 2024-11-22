<?php
/* Smarty version 5.4.1, created on 2024-11-22 21:59:19
  from 'file:calc_kredyt_chroniona_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6740f0a7b35308_60526663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f82064b8327c8b32891bc80488c7bb3e3944bb4d' => 
    array (
      0 => 'calc_kredyt_chroniona_view.tpl',
      1 => 1732309033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6740f0a7b35308_60526663 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.5b_namespaces\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_308295186740f0a7b2dcf9_86283763', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_308295186740f0a7b2dcf9_86283763 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.5b_namespaces\\app\\views';
?>

    
 <div id="main" class="alt">
    <!-- One -->
                <section id="one">
                    <div class="inner">
                            <!-- Elements -->
                        <div class="row gtr-200">
                            <div class="col-6 col-12-medium ">

                                <ul class="actions">
                                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute" class="button primary"> Powrót do kalkulatora</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
logout" class="button">Wyloguj</a></li>
                                </ul>
                            </div>
                            <div >
	<p>To jest inna chroniona strona aplikacji internetowej</p>
</div>
                        </div>
                    </div>
                </section>
</div>
      
<?php
}
}
/* {/block 'content'} */
}
