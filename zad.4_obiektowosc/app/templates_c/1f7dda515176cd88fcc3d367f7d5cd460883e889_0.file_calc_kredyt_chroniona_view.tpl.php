<?php
/* Smarty version 5.4.1, created on 2024-11-15 19:37:14
  from 'file:C:\xampp\htdocs\zad.4_obiektowosc/app/calc_kredyt_chroniona_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673794da937a13_77461922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f7dda515176cd88fcc3d367f7d5cd460883e889' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad.4_obiektowosc/app/calc_kredyt_chroniona_view.tpl',
      1 => 1731691285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673794da937a13_77461922 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.4_obiektowosc\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_511717149673794da930967_14014518', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_511717149673794da930967_14014518 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.4_obiektowosc\\app';
?>

    
 <div id="main" class="alt">
    <!-- One -->
                <section id="one">
                    <div class="inner">
                            <!-- Elements -->
                        <div class="row gtr-200">
                            <div class="col-6 col-12-medium ">

                                <ul class="actions">
                                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc.php" class="button primary"> Powrót do kalkulatora</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/security/logout.php" class="button">Wyloguj</a></li>
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
