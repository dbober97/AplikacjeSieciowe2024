<?php
/* Smarty version 5.4.1, created on 2024-11-27 22:52:42
  from 'file:calc_kredyt_chroniona_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_674794aaedf048_09053289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61b19a267a646ee03150db542b85c48d697c48d3' => 
    array (
      0 => 'calc_kredyt_chroniona_view.tpl',
      1 => 1732741225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_674794aaedf048_09053289 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.6b_routing\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_592644051674794aaed00f5_88796007', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_592644051674794aaed00f5_88796007 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.6b_routing\\app\\views';
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
                                
                                <?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      
<?php
}
}
/* {/block 'content'} */
}
