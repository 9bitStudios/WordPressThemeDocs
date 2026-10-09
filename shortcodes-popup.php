<?php include('docs-header.php'); ?>
<h3>Popup Shortcode</h3>
<p>Displays a link in the form of a thumbnail image or text where a pop-up image or video will appear when the user clicks on the link.</p>

<h4>Shortcode:</h4>
<div class="code">
[popup]
</div>

<h4>Attributes:</h4>

<b>path</b><br />
Should have the value of the path to an image somewhere either on your server or elsewhere on the Internet. This image display in a pop-up when it the applicable link is clicked<br /><br />

<h4>Examples:</h4>
<p>Here is an example using a thumbnail image...</p>

<div class="code">
[popup path="http://www.9bitstudios.com/images/wordpress-themes/cherry-blossom.jpg"]Click here to open[/popup] [popup path="http://www.9bitstudios.com/images/wordpress-themes/cherry-blossom.jpg"]&lt;img src="http://www.9bitstudios.com/images/wordpress-themes/cherry-blossom-thumbnail.jpg" /&gt;[/popup] 
</div>

<p>The process is the same to display video...</p>

<div class="code">
[popup path="http://www.youtube.com/watch?v=bh8mOqPUh7U"]
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>