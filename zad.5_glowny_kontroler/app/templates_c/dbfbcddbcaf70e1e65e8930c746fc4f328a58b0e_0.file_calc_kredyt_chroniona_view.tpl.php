<?php
/* Smarty version 5.4.1, created on 2024-11-21 16:50:51
  from 'file:C:\xampp\htdocs\zad.5_glowny_kontroler/app/calc/calc_kredyt_chroniona_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673f56db06c3f0_33843367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbfbcddbcaf70e1e65e8930c746fc4f328a58b0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad.5_glowny_kontroler/app/calc/calc_kredyt_chroniona_view.tpl',
      1 => 1732204248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673f56db06c3f0_33843367 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.5_glowny_kontroler\\app\\calc';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_641065917673f56db065b06_80216979', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_641065917673f56db065b06_80216979 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.5_glowny_kontroler\\app\\calc';
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
