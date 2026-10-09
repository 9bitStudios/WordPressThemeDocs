<?php include('docs-header.php'); ?>
<h3>Facebook Box Shortcode</h3>
<p>This theme is capable of adding a Facebook "Like" box. To get set up, you'll have to create a Facebook fan page</p>

<h4>Shortcode:</h4>

<div class="code">
[facebookbox]
</div>

<h4>Attributes:</h4>

<b>id</b><br />
This is the "name" of your Facebook box. It is used as an identifier if you have multiple different Facebook boxes on the same page. It can have any single word string value but each must be unique<br /><br />

<b>path</b><br />
This is the URL of the Facebook page you want people to "Like" e.g. http://www.facebook.com/platform<br /><br />

<b>colorscheme</b><br />
Can have the values "dark" or "light"<br /><br />

<b>showfaces</b><br />
Can have the values "true" or "false"<br /><br />

<b>bordercolor</b><br />
Set the color of the border here.<br /><br />


<h4>Examples:</h4>

<p>The following will display a Facebook box...</p>

<div class="code">
[facebookbox id="myFacebookBox" path="http://www.facebook.com/platform" showfaces="true" colorscheme="light" bordercolor="white"]
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>