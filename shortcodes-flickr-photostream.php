<?php include('docs-header.php'); ?>
<h3>Flickr Photostream Shortcode</h3>
<p>Displays a Flickr photostream. You can set the width and height of the Flickr thumbs in the theme options</p>

<h4>Shortcode:</h4>

<div class="code">
[flickr]
</div>

<h4>Attributes:</h4>

<b>id</b><br />
This is the "name" of the collection of Flickr photos. It is used as an identifier if you have multiple different collections of photostreams on the same page. Use any string for this value (e.g. "myFlickr") but each one needs to be unique<br /><br />

<b>flickraccount</b><br />
Can have the value of any valid Flickr account<br /><br />

<b>limit</b><br />
Can have the value of any number. This is the number of Flickr thumbnails you want to show in your list<br /><br />

<h4>Examples:</h4>

<p>The following will display a Flickr photostream</p>

<div class="code">
[flickr id="myFlickr" flickraccount="0123456" limit="9"]
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>