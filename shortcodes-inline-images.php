<?php include('docs-header.php'); ?>
<h3>Inline Images Shortcode</h3>
<p>Displays images floated inline to the left or right of post and page text.</p>

<h4>Shortcode:</h4>
<div class="code">
    [inlineimage]
</div>

<h4>Attributes:</h4>

<b>path</b><br />
Should have the value of the path to an image somewhere either on your server or elsewhere on the Internet.<br /><br />

<b>link</b><br />
If this value is set, this sets the URL if you want the image to have a ink to something when clicked.<br /><br />

<b>newwindow</b><br />
Can have the value "true" or "false" and is only applicable if the link value is set. If set to true, this will open the link URL value in a new browser window.<br /><br />

<b>border</b><br />
Can have the value "true" or "false". If set to true, this will put a border around the image. The appearance of the border depeneds on the settings in each individual theme.<br /><br />

<b>orientation</b><br />
Can have the values left and right. Specifying "left" will display the image inline on the left. Specifying "right" will display the image inline on the right.<br /><br />

<b>class</b><br />
Sets the "class" attribute of the image. This value is completely optional.<br /><br />

<b>alt</b><br />
Can have any value. This is the alt text that appears in a browser tooltip when a user mouses over the image<br /><br />

<h4>Examples:</h4><br />
To display an image inline left...<br /><br />

<div class="code">
[inlineimage path="http://www.yourdomain.com/wp-content/uploads/2010/12/redpuddle.jpg" orientation="left" alt="red puddle"]
</div>

<p>To display an image inline right...</p>

<div class="code">
[inlineimage path="http://www.yourdomain.com/wp-content/uploads/2010/12/redpuddle.jpg" orientation="right" alt="red puddle"]
</div>

<p>To display an image inline right with a link and border...</p>

<div class="code">
[inlineimage path="http://www.yourdomain.com/wp-content/uploads/2010/12/redpuddle.jpg" link="http://www.9bitstudios.com" border="true" orientation="right" alt="red puddle"]
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>