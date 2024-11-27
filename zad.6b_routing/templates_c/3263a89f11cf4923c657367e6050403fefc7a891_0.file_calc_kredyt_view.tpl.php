<?php
/* Smarty version 5.4.1, created on 2024-11-27 22:52:35
  from 'file:calc_kredyt_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_674794a36d6848_64540209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3263a89f11cf4923c657367e6050403fefc7a891' => 
    array (
      0 => 'calc_kredyt_view.tpl',
      1 => 1732741227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_674794a36d6848_64540209 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.6b_routing\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2014102457674794a36add13_61100046', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_2014102457674794a36add13_61100046 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.6b_routing\\app\\views';
?>

    
  <!-- Main -->
<div id="main" class="alt">

        <!-- One -->
                <section id="one">
                    <div class="inner">
                            <!-- Elements -->
                        <div class="row gtr-200">
                            <div class="col-6 col-12-medium ">

                                <ul class="actions">
                                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
chroniona" class="button primary">Kolejna chroniona strona</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
logout" class="button">Wyloguj</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
</div>

<!-- Contact -->
<section id="contact">
        <div class="inner">
            <section>
                    <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute">
                            <div class="fields">
                                <div class="field">
                                        <label for="id_kwota">Kwota kredytu </label>
                                        <input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->getValue('form')->kwota;?>
" placeholder="podaj kwotę"/><br />
                                </div>
                                <div class="field">
                                        <label for="id_lata">Czas trwania kredytu </label>
                                        <input id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->getValue('form')->lata;?>
" placeholder="podaj czas w latach"/><br />
                                </div>
                                <div class="field">
                                        <label for="id_procent">Oprocentowanie </label>
                                        <input id="id_procent" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->getValue('form')->oprocentowanie;?>
" placeholder="podaj oprocentowanie" /><br />
                                </div>
                            </div>
                            <ul class="actions">
                                    <li><input type="submit" value="Oblicz" class="primary" /></li>
                            </ul>
                    </form>
                

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ((null !== ($_smarty_tpl->getValue('res')->rata ?? null))) {?>
    <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #fa0; width:25em;">
	Miesięczna rata kredytu: <?php echo $_smarty_tpl->getValue('res')->rata;?>
 zł
    </div>
<?php }?>
                
                
           </section>
             </div>
</section> 
    
<?php
}
}
/* {/block 'content'} */
}
