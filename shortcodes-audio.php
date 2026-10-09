<?php include('docs-header.php'); ?>
<h3>Audio Shortcode</h3>
<p>Display HTML5 audio in your pages and posts</p>

<p>NOTE: There are different "paths" for HTML5 audio because different browsers (Firefox, Chrome, Safari) use different audio formats. Current audio browser capability can be found at <a href="http://www.w3schools.com/html5/html5_audio.asp">W3 Schools</a></p>

<h4>Shortcode:</h4>

<div class="code">
[audio]
</div>

<h4>Attributes:</h4>

<b>id</b><br />
This is the "name" of the audio. It is used as an identifier if you have multiple audio on the same page. Use any string for this value (e.g. "myAudio") but each one needs to be unique<br /><br />

<b>mp3path</b><br />
Should have the value of the path to an .mp3 audio file somewhere either on your server or elsewhere on the Internet.<br /><br />

<b>oggpath</b><br />
Should have the value of the path to an .ogg audio file somewhere either on your server or elsewhere on the Internet.<br /><br />

<b>wavpath</b><br />
This is optional and only needs to be used if you are playing a .wav file. Should have the value of the path to an .wav audio file somewhere either on your server or elsewhere on the Internet.<br /><br />

<h4>Examples:</h4><br />

<p>The following will display HTML5 audio...</p>

<div class="code">
[audio oggpath="http://yourwebsite.com/song.ogg" mp3path="http://yourwebsite.com/song.mp3"]
</div>


<a href="shortcodes.php">Back to Shortcodes &#187;</a><br /><br />

<?php include('docs-footer.php'); ?>