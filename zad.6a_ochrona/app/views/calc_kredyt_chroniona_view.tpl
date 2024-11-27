{extends file="main.tpl"}

{block name=content}
    
 <div id="main" class="alt">
    <!-- One -->
                <section id="one">
                    <div class="inner">
                            <!-- Elements -->
                        <div class="row gtr-200">
                            <div class="col-6 col-12-medium ">

                                <ul class="actions">
                                        <li><a href="{$conf->action_root}calcCompute" class="button primary"> Powrót do kalkulatora</a></li>
                                        <li><a href="{$conf->action_root}logout" class="button">Wyloguj</a></li>
                                </ul>
                            </div>
                            <div >
	<p>To jest inna chroniona strona aplikacji internetowej</p>
</div>
                        </div>
                    </div>
                </section>
</div>
                                
                                {include file='messages.tpl'}
      
{/block}