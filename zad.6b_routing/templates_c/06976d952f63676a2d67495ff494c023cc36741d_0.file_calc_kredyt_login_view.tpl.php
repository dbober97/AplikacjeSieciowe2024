<?php
/* Smarty version 5.4.1, created on 2024-11-27 22:52:26
  from 'file:calc_kredyt_login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6747949a3a8030_05602963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06976d952f63676a2d67495ff494c023cc36741d' => 
    array (
      0 => 'calc_kredyt_login_view.tpl',
      1 => 1732741226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_6747949a3a8030_05602963 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.6b_routing\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14085644066747949a38bef7_24455458', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_14085644066747949a38bef7_24455458 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zad.6b_routing\\app\\views';
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
								<form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
login" method="post" >
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
<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                                                        </section>
                                                </div>
</section>
                                                            
                                                          						
<?php
}
}
/* {/block 'content'} */
}