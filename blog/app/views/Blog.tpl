{extends file="main.tpl"}


 {block name=intro}   
<!-- Intro -->
        <div id="intro">
            <h1>O naukach ścisłych</h1>
            <p>Luźne notatki i przemyślenia kręcące się wokół nauk ścisłych</p>
 <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      <img src="images/11.png" alt="" />
    </div>
    <div class="col-md-auto">
      <img src="images/22.png" alt="" />
    </div>
    <div class="col-md-auto">
      <img src="images/33.png" alt="" />
    </div>
  </div>
</div>
            
<ul class="actions">
    <li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
</ul>
            </div>
    
{/block}


{block name=content}
    
    
    <!-- Nav -->
    <nav id="nav">
             
                <ul class="links">
                    
                    <li class="active"><a href={$conf->action_url}glowna>Strona główna</a></li>
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
                

                  
<!-- Main -->
<div id="main">

<form method="get" action="{$conf->action_url}glowna">
    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
               <input type="text" placeholder="Jakiego tytułu szukasz?" name="tytul"  value="{$form->parametrWyszukiwania}" />
        </div>
        <div class="col-6 col-12-xsmall">
              Ilość artykułów spełniających kryteria: {$sumaArt}
              <br>
              Ilość podstron: {$ileStron}
        </div>

        <div class="col-12">
                <ul class="actions">
                        <li><input type="submit" value="Wyszukaj" class="primary" /></li>
                </ul>
        </div>
    </div>
</form>

        <!-- Featured Post -->
                <article class="post featured">
                        <header class="major">
                                <span class="date">{$wpis[0]["data_publikacji"]|date_format}</span>
                                <h2><a href="{$conf->action_url}pelnaStrona/{$wpis[0]["id"]}">{$wpis[0]["tytul"]}</a></h2>
                                <p>{assign var="teststring" value=$wpis[0]["tresc_artykulu"]}
                                    {assign var="testsplit" value="$"|explode:$teststring}
                                    {$testsplit[0]}
                                </p>
                        </header>
                        <a href="{$conf->action_url}pelnaStrona/{$wpis[0]["id"]}" class="image main">
                            {if $kat[0]["kategorie_artykuly_id"] eq 1 }
                            <img src="http://localhost/blog/public/images/obMatma.jpg" alt="" /></a>
                            {/if}
                            {if $kat[0]["kategorie_artykuly_id"] eq 2 }
                            <img src="http://localhost/blog/public/images/obFizyka.jpg" alt="" /></a>
                            {/if}
                            {if $kat[0]["kategorie_artykuly_id"] eq 3 }
                            <img src="http://localhost/blog/public/images/obInfor.jpg" alt="" /></a>
                            {/if}                
                        <ul class="actions special">
                                <li><a href="{$conf->action_url}pelnaStrona/{$wpis[0]["id"]}" class="button large">Rozwiń</a></li>
                        </ul>
                </article>

        <!-- Posts -->
                <section class="posts">
                    
                    {foreach $wpis as $art}
                        {if $art@index lt 7 && $art@index gt 0 }
                        <article>
                                <header>
                                        <span class="date">{$art["data_publikacji"]|date_format}</span>
                                        <h2><a href="{$conf->action_url}pelnaStrona/{$art["id"]}">{$art["tytul"]}</a></h2>
                                </header>
                                <a href="{$conf->action_url}pelnaStrona/{$art["id"]}" class="image fit">
                                    
                                {if $kat[$art@index]["kategorie_artykuly_id"] eq 1 }
                                <img src="http://localhost/blog/public/images/obMatma.jpg" alt="" /></a>
                                {/if}
                                {if $kat[$art@index]["kategorie_artykuly_id"] eq 2 }
                                <img src="http://localhost/blog/public/images/obFizyka.jpg" alt="" /></a>
                                {/if}
                                {if $kat[$art@index]["kategorie_artykuly_id"] eq 3 }
                                <img src="http://localhost/blog/public/images/obInfor.jpg" alt="" /></a>
                                {/if}      
                        
                                <p>{assign var="teststring" value=$art["tresc_artykulu"]}
                                    {assign var="testsplit" value="$"|explode:$teststring}
                                    {$testsplit[0]}
                                </p>
                                <ul class="actions special">
                                        <li><a href="{$conf->action_url}pelnaStrona/{$art["id"]}" class="button">Rozwiń</a></li>
                                </ul>
                        </article>
                        {/if}
                    {/foreach}            
                       
                </section>

        <!-- Footer -->
                <footer>
                        <div class="pagination">
                                <!--<a href="#" class="previous">Prev</a>-->
                                <a {if $page gt 1} href="{$conf->action_url}glowna?tytul={$form->parametrWyszukiwania}&page={$page-1}" {/if} class="previous" >poprzednia</a>
                                <a class="page">{$page} / {$ileStron}</a>
                                <a {if $ileStron gt $page} href="{$conf->action_url}glowna?tytul={$form->parametrWyszukiwania}&page={$page+1}" {/if} class="next">następna</a>
                        </div>
                </footer>

</div>

{/block}

 {block name=intro}   

{/block}

   
