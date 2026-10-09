<?php include('docs-header.php'); ?>
<h3>Social Media</h3>
<p>Displays a social media icon with a hover effect and a link to your social media account (e.g. Facebook, Twitter, etc.) </p>

<h4>Shortcode:</h4>
<div class="code">
[socialmedia]
</div>

<h4>Attributes:</h4>

<b>link</b><br />
This should be set the path (URL) to your social media account.<br /><br />

<b>newwindow</b><br />
Can have the value "true" or "false". If set to true, this will open the link URL value in a new browser window.<br /><br />

<b>linebreak</b><br />
Can have the value true or false. This determines whether the icon will add a line break and continue the content that follows it on a new line. Set this value to false if you want to add multiple icons one after another next to each other.  Set it to true if you are going to begin a new paragraph below it. Even if you have a number of buttons lined up one after the other, you'll definitely want the *last* icon to have its linebreak value set to "true" so that the content that follows it will appear on a new line.<br /><br />

<b>title</b><br />
Title of the tooltip that will display on hover.<br /><br />

<b>type</b><br />
This is the type of social media icon you want to display. Please refer to the guide below for the possible options you can set here...<br /><br />

<ul>
<li>facebook - Facebook</li>
<li>mail - Mail icon (recommended you link it to your contact page)</li>
<li>twitter - Twitter</li>
<li>youtube - YouTube</li>
<li>vimeo - Vimeo </li>
<li>rss - RSS Feed </li>
<li>flickr - Flickr</li>
<li>linkedin - LinkedIn</li>
<li>pinterest - Pinterest</li>
<li>googleplus - Google+</li>
</ul>

<h4>Examples:</h4>

<p>The following will display a twitter icon...</p>

<div class="code">
[socialmedia link="http://www.twitter.com/youraccount" title="Twitter" type="twitter" linebreak="true"]
</div>

<p>The following will display a few icons next to each other...</p>

<div class="code">
[socialmedia link="http://www.twitter.com" type="twitter" title="Twitter" linebreak="false"] [socialmedia link="http://www.facebook.com" type="fb" title="Facebook" linebreak="false"] [socialmedia link="http://www.google.com" type="rss" title="Blog Feed" linebreak="true"] 
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>