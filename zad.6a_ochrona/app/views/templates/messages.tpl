
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
		<ol style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #0f2; width:25em;">
		{foreach  $msgs->getInfos() as $key => $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
{/if}
