{extends file="../templates/main.tpl"}

{block name=content}
    
  <!-- Main -->
<div id="main" class="alt">

        <!-- One -->
                <section id="one">
                    <div class="inner">
                            <!-- Elements -->
                        <div class="row gtr-200">
                            <div class="col-6 col-12-medium ">

                                <ul class="actions">
                                        <li><a href="{$app_url}/app/inna_chroniona.php" class="button primary">Kolejna chroniona strona</a></li>
                                        <li><a href="{$app_url}/app/security/logout.php" class="button">Wyloguj</a></li>
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
                    <form method="post" action="{$app_url}/app/calc_kredyt.php">
                            <div class="fields">
                                <div class="field">
                                        <label for="id_kwota">Kwota kredytu </label>
                                        <input id="id_kwota" type="text" name="kwota" value="{$kwota}" placeholder="podaj kwotę"/><br />
                                </div>
                                <div class="field">
                                        <label for="id_lata">Czas trwania kredytu </label>
                                        <input id="id_lata" type="text" name="lata" value="{$lata}" placeholder="podaj czas w latach"/><br />
                                </div>
                                <div class="field">
                                        <label for="id_procent">Oprocentowanie </label>
                                        <input id="id_procent" type="text" name="oprocentowanie" value="{$oprocentowanie}" placeholder="podaj oprocentowanie" /><br />
                                </div>
                            </div>
                            <ul class="actions">
                                    <li><input type="submit" value="Oblicz" class="primary" /></li>
                            </ul>
                    </form>
                



{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #f88; width:25em;">
		{foreach  $messages as $key => $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}




{if isset($rata)}
    <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #fa0; width:25em;">
	Miesięczna rata kredytu: {$rata} zł
    </div>
{/if}
                
                
           </section>
             </div>
</section> 
    
{/block}