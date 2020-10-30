<!-- /modules/Dietary/Views/photos/view_photos.tpl -->
<script>
	$(document).ready(function() {
		$(".fancybox").fancybox({
			openEffect: "none",
			closeEffect: "none"
		});

		$("#select-location").change(function() {
			window.location.href = SITE_URL + "/?module={$this->getModule()}&page={$this->page}&action={$this->action}&facility=" + $("option:selected", this).val();
		});



		var timeoutID = null;

		function findPhotos(str) {
			$.ajax({
				type: 'post',
				url: SITE_URL,
				data: {
					page: "photos",
					action: "search_photos",
					facility: $("#selected-facility").val(),
					term: str
				},
				success: function(data) {
					var $container = $("#image-container");
					$container.empty();
					$("#page-links").empty();
					$.each(data, function(key, value) {
						$container.append('<a class="fancybox image-item" rel="fancybox-thumb" href="' + SITE_URL + '/files/dietary_photos/' + value.filename + '" title="' + value.name + '": "' + value.description + '"> <img src="' + SITE_URL + '/files/dietary_photos/thumbnails/' + value.filename + '" class="photo-image" alt=""></a>');
					});
				},
				dataType: "json"
			});
		}

		$("#search-pictures").keyup(function() {
			clearTimeout(timeoutID);
			var $target = $(this);
			console.log($target.val());
			timeoutID = setTimeout(function() { findPhotos($target.val()); }, 500);
		});

	});
</script>
<div id="page-header">
	<div id="action-left">
		Location:
		<select name="location" id="select-location">
			<option value="all">All</option>
			{foreach from=$facilities item=facility}
			<option value="{$facility->public_id}" {if $facility->public_id == $selectedFacility->public_id} selected{/if}>{$facility->name}</option>
			{/foreach} 
		</select>
	</div>
	<div id="center-title"></div>
	<div id="action-right">
		Search: <input type="text" id="search-pictures" size="30">
	</div>
</div>

<input type="hidden" name="facility" value="{$selectedFacility->public_id}" id="selected-facility">
<div id="image-container">
	{foreach from=$photos item=photo}
		<a class="fancybox image-item" rel="fancybox-thumb" href="{$SITE_URL}/files/dietary_photos/{$photo->filename}" title="{$photo->name}: {$photo->description}">
			<img src="{$SITE_URL}/files/dietary_photos/thumbnails/{$photo->filename}" class="photo-image" alt="">
		</a>
	{/foreach}
</div>
<div class="clear"></div>
<div id="page-links">
	{$var = "{$SITE_URL}?module=Dietary&page=photos&action=view_photos"}
	{include file="elements/pagination.tpl"}	
</div>

