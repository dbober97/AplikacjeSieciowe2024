<?php
/* Smarty version 5.4.1, created on 2024-11-07 10:42:08
  from 'file:C:\xampp\htdocs\zad.3_smarty/app/inna_chroniona.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672c8b70764b44_22496619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa41992883c1c49956391cd93c6c1d2cd1f60e56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad.3_smarty/app/inna_chroniona.tpl',
      1 => 1730972525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672c8b70764b44_22496619 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.3_smarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_370196312672c8b7075aa15_08387501', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_370196312672c8b7075aa15_08387501 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.3_smarty\\app';
?>

    
 <div id="main" class="alt">
    <!-- One -->
                <section id="one">
                    <div class="inner">
                            <!-- Elements -->
                        <div class="row gtr-200">
                            <div class="col-6 col-12-medium ">

                                <ul class="actions">
                                        <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc_kredyt.php" class="button primary"> Powrót do kalkulatora</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
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
