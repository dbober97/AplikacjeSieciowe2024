{extends file="main.tpl"}

{block name=content}
<!-- Nav -->
        <nav id="nav">
                <ul class="links">
                    <li><a href={$conf->action_url}glowna>Strona główna</a></li>
                    <ol>
                           <li><a class="dropdown-toggle" data-toggle="dropdown" >kategorie</a>
                                <ul>
                                  <li><a href="{$conf->action_url}matematyka">Matematyka</a></li>
                                  <li><a href="{$conf->action_url}informatyka">Informatyka</a></li>
                                  <li><a href="{$conf->action_url}fizyka">Fizyka</a></li>
                                </ul>
                           </li>
                    </ol> 
                    <li><a href="{$conf->action_url}autorzy">Autorzy</a></li>
                    <li><a href="{$conf->action_url}kontakt">Kontakt</a></li>
                    {if \core\RoleUtils::inRole("admin") || \core\RoleUtils::inRole("moderator") || \core\RoleUtils::inRole("czytelnik") || \core\RoleUtils::inRole("autor")}
                        <li><a href="{$conf->action_url}logout">Wyloguj się</a></li>
                        <ol>
                           <li><a class="dropdown-toggle" data-toggle="dropdown" >Panel zalogowanego: {\core\SessionUtils::load("login", true)}</a>
                                <ul>
                                  {if \core\RoleUtils::inRole("admin")} <li><a href="{$conf->action_url}panelAdmin">administrator</a></li> {/if}
                                 {if \core\RoleUtils::inRole("moderator")}<li><a href="{$conf->action_url}panelModerator">moderator</a></li> {/if}
                                 {if \core\RoleUtils::inRole("autor")} <li><a href="{$conf->action_url}panelAutor">autor</a></li> {/if}
                                 {if \core\RoleUtils::inRole("czytelnik")} <li><a href="{$conf->action_url}panelCzytelnik">czytelnik</a></li> {/if}
                                </ul>
                           </li>
                       </ol> 
                        {else}
                            <li><a href="{$conf->action_url}logowanie">Logowanie</a></li>
                    {/if}
                </ul>

        </nav>
                    
<div id="main">
    <section class="post">
            
<h3>Lista komentarzy na blogu</h3>
<div class="table-wrapper">
            <form  action="{$conf->action_url}panelModerator">
                <fieldset>
                    <ul class="actions">
                        <button type="submit" class="button primary icon solid fa-search">Wyszukaj</button ><!-- comment -->
                        <input type="text" placeholder="Jakiego tytułu szukasz (wystarczy fragment tytułu)?" name="tytul" value="{$form->parametrWyszukiwania}" /><br />
                    </ul>
                </fieldset>
            </form>
                    
                    
    {foreach $msgs->getMessages() as $msg}
     <div class="alert {if $msg->isInfo()}alert-success{/if}
                       {if $msg->isWarning()}alert-warning{/if}
                       {if $msg->isError()}alert-danger{/if}" role="alert">
        {$msg->text}
        <br>
     </div>
    {/foreach} 
    
    <br>

        <table class="alt">
                <thead>
                        <tr>
                                <th>Napisano dnia</th>
                                <th>Zmieniono dnia</th>
                                <th>Tytuł artykułu</th>                                
                                <th>Treść komentarza</th>
                                <th>Status komentarza</th>
                        </tr>
                </thead>
                <tbody>
                    {foreach $listaKom as $kom}
                    {strip}
                            <tr>
                                    <td>{$kom["data_dodania"]}</td><!-- utworzono -->               
                                    <td>{if {$kom["data_modyfikacji"]} == NULL} - {else} {$kom["data_modyfikacji"]}} {/if}</td><!-- zmodyfikowano -->
                                    <td>{$kom["tytul"]}</td><!-- tytuł -->
                                    <td>{$kom["tresc_komentarza"]}</td><!-- komentarze -->
                                    <td>{if {$kom["aktywny"]} == NULL} 
                                        <form method ="post" action="{$conf->action_url}panelModeratorZmiana/{$kom["id"]}">
                                        <div class="col-4 col-12-small">
                                                <input type="radio" id="aktywuj{$kom["id"]}" name="kom{$kom["id"]}" value="aktywuj">
                                                <label for="aktywuj{$kom["id"]}">Aktywny</label>
                                        </div>
                                        <div class="col-4 col-12-small">
                                                <input type="radio" id="odrzuc{$kom["id"]}" name="kom{$kom["id"]}" value="odrzuc">
                                                <label for="odrzuc{$kom["id"]}">Odrzucony</label>
                                        </div>
                                        <div class="col-12">
                                                <ul class="actions">
                                                        <li><input type="submit" value="Zapisz" class="primary" /></li>
                                                </ul>
                                        </div>
                                        </form>
                                        {else} {if {$kom["aktywny"]} == 1} 
                                        <form  method ="post" action="{$conf->action_url}panelModeratorZmiana/{$kom["id"]}">
                                        <div class="col-4 col-12-small">
                                                <input type="radio" id="aktywuj{$kom["id"]}" name="kom{$kom["id"]}" value="aktywuj" checked>
                                                <label for="aktywuj{$kom["id"]}">Aktywny</label>
                                        </div>
                                        <div class="col-4 col-12-small">
                                                <input type="radio" id="odrzuc{$kom["id"]}" name="kom{$kom["id"]}" value="odrzuc">
                                                <label for="odrzuc{$kom["id"]}">Odrzucony</label>
                                        </div>
                                        <div class="col-12">
                                                <ul class="actions">
                                                        <li><input type="submit" value="Zapisz" class="primary" /></li>
                                                </ul>
                                        </div>
                                        </form>
                                            {else} 
                                             <form  method ="post" action="{$conf->action_url}panelModeratorZmiana/{$kom["id"]}">
                                            <div class="col-4 col-12-small">
                                                    <input type="radio" id="aktywuj{$kom["id"]}" name="kom{$kom["id"]}" value="aktywuj">
                                                    <label for="aktywuj{$kom["id"]}">Aktywny</label>
                                            </div>
                                            <div class="col-4 col-12-small">
                                                    <input type="radio" id="odrzuc{$kom["id"]}" name="kom{$kom["id"]}" value="odrzuc" checked>
                                                    <label for="odrzuc{$kom["id"]}">Odrzucony</label>
                                            </div>
                                            <div class="col-12">
                                                    <ul class="actions">
                                                            <li><input type="submit" value="Zapisz" class="primary" /></li>
                                                    </ul>
                                            </div>
                                            </form> 
                                            {/if} {/if}</td><!-- widoczność -->
                            </tr>
                    {/strip}
                    {/foreach}      
                </tbody>
                <tfoot>
                        <tr>
                                <td colspan="2"></td>
                                <td>Ilość komentarzy na blogu: {$ileKom}</td>
                        </tr>
                </tfoot>
        </table>
</div>  

</section>  
</div>
{/block}


 {block name=intro}   

 {/block}