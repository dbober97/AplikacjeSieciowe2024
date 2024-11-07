<?php
/* Smarty version 5.4.1, created on 2024-11-07 11:52:54
  from 'file:C:\xampp\htdocs\zad.3_smarty/app/calc_kredyt_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672c9c0629faa7_70641509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36861fb95a213ab11e4b93942217ea769a784780' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad.3_smarty/app/calc_kredyt_view.tpl',
      1 => 1730976740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672c9c0629faa7_70641509 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.3_smarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_419766212672c9c06278d34_92593609', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_419766212672c9c06278d34_92593609 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.3_smarty\\app';
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
                                        <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/inna_chroniona.php" class="button primary">Kolejna chroniona strona</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/security/logout.php" class="button">Wyloguj</a></li>
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
                    <form method="post" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc_kredyt.php">
                            <div class="fields">
                                <div class="field">
                                        <label for="id_kwota">Kwota kredytu </label>
                                        <input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->getValue('kwota');?>
" placeholder="podaj kwotę"/><br />
                                </div>
                                <div class="field">
                                        <label for="id_lata">Czas trwania kredytu </label>
                                        <input id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->getValue('lata');?>
" placeholder="podaj czas w latach"/><br />
                                </div>
                                <div class="field">
                                        <label for="id_procent">Oprocentowanie </label>
                                        <input id="id_procent" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->getValue('oprocentowanie');?>
" placeholder="podaj oprocentowanie" /><br />
                                </div>
                            </div>
                            <ul class="actions">
                                    <li><input type="submit" value="Oblicz" class="primary" /></li>
                            </ul>
                    </form>
                



<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
		<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #f88; width:25em;">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg', false, 'key');
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
	<?php }
}?>




<?php if ((null !== ($_smarty_tpl->getValue('rata') ?? null))) {?>
    <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #fa0; width:25em;">
	Miesięczna rata kredytu: <?php echo $_smarty_tpl->getValue('rata');?>
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
