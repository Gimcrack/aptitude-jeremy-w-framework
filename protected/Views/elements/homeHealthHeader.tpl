<div id="page-header">
	<div id="action-left">
		{$this->loadElement("module")}
	</div>
	<div id="center-title">
		{$this->loadElement("selectLocation")}
	</div>
	<div id="action-right">
		{$this->loadElement("selectArea")}
		{if $this->page == "HomeHealth" && $this->action == "index"}
		<div id="tv-mode-button">
			<a href="{$current_url}&amp;isMicro=true" class="button">TV Mode</a>
		</div> 
		{/if}
	</div>
</div>