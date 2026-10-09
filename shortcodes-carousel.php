<?php include('docs-header.php'); ?>
<h3>Carousel Shortcode</h3>
<p>The carousel allows you to display images, logos, or anything else in a rotating carousel.</p>

<h4>Shortcode:</h4>

<div class="code">
[carousel], [carousel_item]
</div>

<h4>Attributes:</h4>

<b>id</b><br />
This is the "name" of your carousel. It is used as an identifier if you have multiple different carousels on the same page. It can have any single word string value but each must be unique<br /><br />

<b>visible</b><br />
Can have the value of any number. This sets how many items are visible in the carousel at any one time.<br /><br />

<b>autoplay</b><br />
Can have the value "true" or "false." This sets whether the carousel autoscrolls on a timer. Default value is "false."<br /><br />

<b>responsive</b><br />
Can have the value "true" or "false." This sets whether the carousel responds to responsive events (showing fewer items for smaller views). Default value is "true."<br /><br />

<h4>Examples:</h4>

<div class="code">
[carousel id="myCarousel" visible="4" autoplay="false" responsive="true"] [carousel_item]&lt;img src="http://www.9bitstudios.com/images/wordpress-themes/logo-amazon.png" alt="" width="100" height="45"&gt;[/carousel_item] [/carousel_item] [carousel_item]&lt;img src="http://www.9bitstudios.com/images/wordpress-themes/logo-microsoft.png" alt="" width="100" height="45"&gt;[/carousel_item][/carousel] 
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>