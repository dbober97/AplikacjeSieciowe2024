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
								<form action="{$conf->action_root}security" method="post" >
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
{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
		<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #f88; width:25em;">
		{foreach  $msgs->getErrors() as $key => $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
{/if}


{* wyświeltenie listy informacji, jeśli istnieją *}

{if $msgs->isInfo()}
		<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #f88; width:25em;">
		{foreach  $msgs->isInfo() as $key => $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
{/if}
                                                        </section>
                                                </div>
</section>
                                                            
                                                          						
{/block}