<script>

	$(document).ready(function() {

		var animating = false;

		$("#preview-nav-next").click(function(e) {
			e.preventDefault();
			if (animating == false) {
				var leftCurrent = $("#preview-img").position().left ;
				var leftNew = leftCurrent - {$width};
				if (! (leftNew <= -1 * {$width} * {$totalPages} )) {
					//animating = true;
					$("#preview-img").animate( {
						"left": leftNew + "px"
					}, "slow", function() {
						animating = false;
					});
				}
			}
		});
		$("#preview-nav-prev").click(function(e) {
			e.preventDefault();
			if (animating == false) {
				var leftCurrent = $("#preview-img").position().left ;
				var leftNew = leftCurrent + {$width};
				if (leftCurrent < 0) {
					//animating = true;
					$("#preview-img").animate( {
						"left": leftNew + "px"
					}, "slow", function() {
						animating = false;
					});
				}
			}
		});


		$(".preview-nav-bypage").click(function(e) {
			e.preventDefault();
			if ( animating == false) {
				var page = $(this).attr("rel");
				
				var leftCurrent = $("#preview-img").position().left ;
				var leftNew = -1 * page * {$width};
				console.log(leftCurrent);
				console.log(leftNew);
				if (leftCurrent < 0 || !(leftNew <= -1 * {$width} * {$numPages} )) {
					console.log(2);
					//animating = true;
					$("#preview-img").animate( {
						"left": leftNew + "px"
					}, "slow", function() {
						console.log(3);
						animating = false;
					});
				}
			}
		});
		
		// hide the "no JS" straight IMG element. its download will continue.
		$("#preview-img-noscript").hide();
		
		// show the IMG element that currently contains our spinner graphic
		$("#preview-img").show();

		// asynchronoiusly load the image into an Image object. the browser *should* make use of the
		// resource already grabbed, or currently being grabbed, by the "NO JS" element
		var img = $("<img />").attr("src", $("#preview-img-noscript").attr("src")).load(function() {
			if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
				$("#preview-img").attr("src", "{$SITE_URL}/images/preview-not-available.png");
			} else {
				// show the navigation buttons
				$("#preview-buttons").show();
				
				// show the navigation buttons for the chunks
				$("#preview-chunks").show();
		
				// when the Image has finished downloading, replace the spinner with the image
				$("#preview-img").attr("src", $(this).attr("src"));
			}
		});
	});
</script>
<div id="go-back">
	<a href="{$SITE_URL}/?module=HomeHealth&amp;page=patients&amp;action=patient_files&amp;patient={$patient->public_id}" class="button">Go Back</a>
</div>
<h1>Preview File</h1>
<p class="text-center">Please note that large files will take a while to be available for preview.</p>


<div id="preview-chunks">
	{for $i=0 to $totalPages step $numPages}
	<a href="{if $i == $offset}#{else}{$SITE_URL}/?module=HomeHealth&amp;page=Patients&amp;action=previewNotesFile&amp;patient={$patient->public_id}&amp;file={$note->file}&amp;b={urlencode($b)}&amp;offset={$i}&amp;width={/if}" class="{if $i == $offset}button-disabled{else}button{/if}" style="margin-right: 5px;">Pages {$i+1} to {if $i + $numPages < $totalPages}{$i+$numPages}{else}{$totalPages}{/if}</a>	
	{/for}
{* 	<a class="button" href="{$SITE_URL}/?module=HomeHealth&amp;page=patients&amp;action=downloadNotesFile&amp;patient={$patient->public_id}" title="Print File">Print File</a>
 *}
</div>


<div id="preview-buttons">
	{$pageI = 0}
	{for $page = $offset to ($offset + $thisChunkNumPages -1)}
	<a href="#" class="button preview-nav-bypage" id="preview-page-{$page}" rel="{$pageI}" style="margin-right: 5px;">{$page + 1}</a>
		{$pageI = $pageI + 1}
	{/for}
	
</div>


<input type="hidden" id="preview-pages" value="{$totalPages}" />
<div id="image-viewport" style="width: {$width + 2}px;">
	<div id="image-inner">
		<img id="preview-img-noscript" data-previewPage="0" src="{$SITE_URL}/?module=HomeHealth&amp;page=Patients&amp;action=previewNotesFileImage&amp;patient={$patient->public_id}&amp;file={$note->file}&amp;offset={$offset}&amp;numPages={$numPages}&amp;totalPages={$totalPages}&amp;width={$width}" style="position: relative; left: 0;" />

		<img id="preview-img" data-previewPage="0" src="{$SITE_URL}/img/ajax-loader.gif" style="position: relative; left: 0; display: none;" />
	</div>
</div>