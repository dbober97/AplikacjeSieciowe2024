<?php
/* Smarty version 5.4.1, created on 2024-11-21 16:35:05
  from 'file:C:\xampp\htdocs\zad.5_glowny_kontroler/app/calc/calc_kredyt_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673f5329d42416_56831908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53dc0f0b29c725e3caefeda7f12781c49ef7b422' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad.5_glowny_kontroler/app/calc/calc_kredyt_view.tpl',
      1 => 1732203285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673f5329d42416_56831908 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.5_glowny_kontroler\\app\\calc';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1741192886673f5329d20d66_87223732', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1741192886673f5329d20d66_87223732 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.5_glowny_kontroler\\app\\calc';
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
                                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
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
                



<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
		<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #f88; width:25em;">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'msg', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
<?php }?>



<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
		<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #0f2; width:25em;">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'msg', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
<?php }?>



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
