<?php include('docs-header.php'); ?>
<h3>Popup Gallery Shortcode</h3>
<p>Displays a popup gallery containing images and video...</p>

<h4>Shortcode:</h4>

<div class="code">
[popupgallery], [popupgallery_item]
</div>

<h4>Attributes:</h4>

<b>path</b><br />
Should have the value of the path to the *first item that you want to display in the gallery* whether that is an image, video, or something else. This should be a path to something somewhere either on your server or elsewhere on the Internet. It will be the first item to display in a pop-up when it the applicable link is clicked.<br /><br />

<b>name</b><br />
Can have any value. This is the name of the partcilar gallery. The only caveat to this is that the name have to be unique.<br /><br /> 

<h4>Examples:</h4>

<div class="code">
[popupgallery path="http://www.youtube.com/watch?v=bh8mOqPUh7U" name="gallery1"] [image path="http://www.9bitstudios.com/images/wordpress-themes/palm-trees.jpg" alt="Palm Trees" border="true"] [/popupgallery] [popupgallery_item path="http://www.9bitstudios.com/images/wordpress-themes/rain-leaf.jpg" name="gallery1"]
</div>

<p>After you add the initial item you then use the [popupgalleryitem] shortcode to add additional gallery items. All you have to do is make sure that the name matches the name of the initial [popupgallery] shortcode. In this manner you can have as many gallery items as you like.</p>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>