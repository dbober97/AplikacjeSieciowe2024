<?php
/* Smarty version 5.4.1, created on 2024-11-07 11:52:41
  from 'file:C:\xampp\htdocs\zad.3_smarty/app/security/login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672c9bf9cdf1e6_19701139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f65dc496e2c9e2ae23ffadf6db695eb76ba0f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad.3_smarty/app/security/login_view.tpl',
      1 => 1730975915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672c9bf9cdf1e6_19701139 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.3_smarty\\app\\security';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_44650763672c9bf9cc2592_18075833', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_44650763672c9bf9cc2592_18075833 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.3_smarty\\app\\security';
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
								<form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/security/login.php" method="post" >
									<div class="fields">
										<div class="field half">
											<label for="login">Login</label>
											<input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->getValue('form')['login'];?>
" />
										</div>
										<div class="field half">
											<label for="pass">Hasło</label>
											<input type="password" name="pass" id="pass" value="<?php echo $_smarty_tpl->getValue('form')['pass'];?>
"/>
										</div>

									</div>
									<ul class="actions">
										<li><input type="submit" value="Zaloguj" class="primary" /></li>
										<li><input type="reset" value="Wyczyść" /></li>
									</ul>
								</form>
<div class="fields">
<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
		<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #f88; width:25em;">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'messages');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('messages')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('messages');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>
</div>
                                                        </section>
                                                </div>
</section>
                                                            
                                                          						
<?php
}
}
/* {/block 'content'} */
}
