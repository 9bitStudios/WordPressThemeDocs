<?php include('docs-header.php'); ?>
<h3>Image Shortcode</h3>
<p>Displays an image with no additional formatting. This does not really do anything different than adding a normal image in the WordPress editor. It's more for usage if you prefer the shortcode syntax over HTML and can be used as a shortcode in the sidebar or footer widget areas</p>

<h4>Shortcode:</h4>
<div class="code">
[image]
</div>

<h4>Attributes:</h4>

<b>path</b><br />
Should have the value of the path to an image somewhere either on your server or elsewhere on the Internet.<br /><br />

<b>border</b><br />
Can have the value "true" or "false". If set to true, this will put a border around the image. The appearance of the border depeneds on the settings in each individual theme.<br /><br />

<b>class</b><br />
Sets the "class" attribute of the image. This value is optional.<br /><br />

<b>alt</b><br />
Can have any value. This is the alt text that appears in a browser tooltip when a user mouses over the image<br /><br />

<h4>Examples:</h4>
To display an image...<br /><br />

<div class="code">
[image path="http://www.yourdomain.com/wp-content/uploads/2010/12/redpuddle.jpg" border="false" class="slickHoverPlus" alt="red puddle"]
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>