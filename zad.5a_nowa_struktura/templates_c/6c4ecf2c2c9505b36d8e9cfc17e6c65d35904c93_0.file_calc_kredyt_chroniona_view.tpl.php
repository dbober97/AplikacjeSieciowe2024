<?php
/* Smarty version 5.4.1, created on 2024-11-21 20:43:03
  from 'file:calc_kredyt_chroniona_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673f8d478885a3_39946049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c4ecf2c2c9505b36d8e9cfc17e6c65d35904c93' => 
    array (
      0 => 'calc_kredyt_chroniona_view.tpl',
      1 => 1732215587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673f8d478885a3_39946049 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.5a_nowa_struktura\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1145158088673f8d47881b25_35989076', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1145158088673f8d47881b25_35989076 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.5a_nowa_struktura\\app\\views';
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
