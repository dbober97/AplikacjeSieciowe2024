<?php
/* Smarty version 5.4.1, created on 2024-11-15 19:38:14
  from 'file:C:\xampp\htdocs\zad.4_obiektowosc/app/security/login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67379516ccf4e7_17825510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '687252ddea46a8eede59912726ab94127e7b111c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad.4_obiektowosc/app/security/login_view.tpl',
      1 => 1731682881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67379516ccf4e7_17825510 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.4_obiektowosc\\app\\security';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_169148450967379516cb2116_92370467', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_169148450967379516cb2116_92370467 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.4_obiektowosc\\app\\security';
?>

    
        
 <?php if (!$_smarty_tpl->getValue('hide_intro')) {?>
				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Witaj!</h1>
							</header>
							<div class="content">
								<p>Kalkulator jedynie dla zalogowanych użytkowników</p>
								<ul class="actions">
									<li><a href="#contact" class="button next scrolly">Zaloguj się</a></li>
								</ul>
							</div>
						</div>
					</section>
<?php }?>
				
				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form action="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/security/check.php" method="post" >
									<div class="fields">
										<div class="field half">
											<label for="login">Login</label>
											<input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->getValue('form')->login;?>
" />
										</div>
										<div class="field half">
											<label for="pass">Hasło</label>
											<input type="password" name="pass" id="pass" value="<?php echo $_smarty_tpl->getValue('form')->pass;?>
"/>
										</div>

									</div>
									<ul class="actions">
										<li><input type="submit" value="Zaloguj" class="primary" /></li>
										<li><input type="reset" value="Wyczyść" /></li>
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
		<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #f88; width:25em;">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->isInfo(), 'msg', false, 'key');
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
                                                        </section>
                                                </div>
</section>
                                                            
                                                          						
<?php
}
}
/* {/block 'content'} */
}