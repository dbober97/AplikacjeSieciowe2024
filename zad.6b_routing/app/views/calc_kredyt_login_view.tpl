{extends file="main.tpl"}


{block name=content}
    
        
 {if !$hide_intro }
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
{/if}
				
				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form action="{$conf->action_root}login" method="post" >
									<div class="fields">
										<div class="field half">
											<label for="login">Login</label>
											<input type="text" name="login" id="login" value="{$form->login}" />
										</div>
										<div class="field half">
											<label for="pass">Hasło</label>
											<input type="password" name="pass" id="pass" value="{$form->pass}"/>
										</div>

									</div>
									<ul class="actions">
										<li><input type="submit" value="Zaloguj" class="primary" /></li>
										<li><input type="reset" value="Wyczyść" /></li>
									</ul>
								</form>
{include file='messages.tpl'}
                                                        </section>
                                                </div>
</section>
                                                            
                                                          						
{/block}