<?php include('docs-header.php'); ?>
<h3>Video Shortcode</h3>
<p>Display HTML5 video in your pages and posts</p>

<p>NOTE: There are 3 different "paths" for HTML5 video because different browsers (Firefox, Chrome, Safari) use different video formats.</p>

<h4>Shortcode:</h4>

<div class="code">
[video]
</div>

<h4>Attributes:</h4>

<b>id</b><br />
This is the "name" of the video. It is used as an identifier if you have multiple videos on the same page. Use any string for this value (e.g. "myVideo") but each one needs to be unique<br /><br />

<b>mp4path</b><br />
Should have the value of the path to an mp4 video somewhere either on your server or elsewhere on the Internet.<br /><br />

<b>webmpath</b><br />
Should have the value of the path to a webm video somewhere either on your server or elsewhere on the Internet.<br /><br />

<b>oggpath</b><br />
Should have the value of the path to an ogg video somewhere either on your server or elsewhere on the Internet.<br /><br />

<b>width</b><br />
Sets the width of the video<br /><br />

<b>height</b><br />
Sets the height of the video<br /><br />

<b>previewimage</b><br />
Sets the path to a preview image that you want to overlay overtop of the video area. If not set, the video area will appear blank before the user decided to play the video<br /><br />

<h4>Examples:</h4>
<p>The following will display HTML5 video...</p>

<div class="code">
[video oggpath="http://video-js.zencoder.com/oceans-clip.ogv" webmpath="http://video-js.zencoder.com/oceans-clip.webm" mp4path="http://video-js.zencoder.com/oceans-clip.mp4" previewimage="http://video-js.zencoder.com/oceans-clip.png"]
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>