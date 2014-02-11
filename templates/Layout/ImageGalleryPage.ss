<% require css(image_gallery/css/colorbox.css) %>
<%-- require javascript(http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js) --%>
<% require javascript(image_gallery/javascript/jquery.colorbox.js) %>
<% require javascript(image_gallery/javascript/colorbox_init.js) %>
<% require javascript(themes/default/javascript/colorbox_init.js) %>

<div class="row typography">
	<div id="left-menu" class="three columns">
		<% include LeftMenu %>
	</div>
	<div class="nine columns">
		<h1>$Title</h1>
		$Content
		<ul class="block-grid four-up">
			<% control Images %>
			<% control Image.SetWidth(1200) %>
			<li><a class="colorbox" rel="image-gallery" href="$FileName" title="$Caption">
			<% end_control %>
			$Image.CroppedImage(240,180)
			</a></li>
			<% end_control %>
		</ul>
	</div>
</div>