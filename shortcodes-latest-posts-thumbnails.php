<?php include('docs-header.php'); ?>
<h3>Latest Posts with Thumbnails Shortcode</h3>
<p>Displays a list of your most recent posts with the thumbnail image of the post shown as well.</p>
<p>This shortcode is dependent on setting the "Thumbnail Image" value in the "Additional Page/Post Details" custom fields (i.e. metadata).</p>

<h4>Shortcode:</h4>
<div class="code">
[latestposts_thumbnails] 
</div>

<h4>Attributes:</h4>

<b>limit</b><br />
Can have any numerical value. This is the number of your recent posts that you want to display.<br /><br />

<h4>Examples:</h4>
<p>The following shortcode will display the 4 latest posts with the post thumbnails...</p>

<div class="code">
[latestposts_thumbnails limit="4"]
</div>

<p>The result might look something like the following...</p>

<img src="images/thumbnail-posts.jpg" alt="Thumbnail Posts" />

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>