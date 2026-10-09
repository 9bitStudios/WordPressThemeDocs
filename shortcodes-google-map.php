<?php include('docs-header.php'); ?>
<h3>Google Map Shortcode</h3>
<p>Displays a Google Map.</p>

<h4>Shortcode:</h4>

<div class="code">
[googlemap]
</div>

<h4>Attributes:</h4>

<b>id</b><br />
This is the "name" of the Google map. It is used as an identifier if you have multiple different maps on the same page. Use any string for this value (e.g. "myMap") but each one needs to be unique<br /><br />

<b>type</b><br />
The type of map to be displayed. Please refer to the guide below for the possible options you can set here...<br /><br />

<ul>
<li>road - displays the default road map view</li> 
<li>satellite - displays Google Earth satellite images</li> 
<li>hybrid - displays a mixture of normal and satellite views</li> 
<li>terrain - displays a physical map based on terrain information.</li> 
</ul>

<b>latitude</b><br />
Latitude of the marker. To find the coordinates you want you can use service such as the one at <a href="http://itouchmap.com/latlong.html">http://itouchmap.com/latlong.html</a><br /><br />

<b>longitude</b><br />
Longitude of the marker. To find the coordinates you want you can use service such as the one at <a href="http://itouchmap.com/latlong.html">http://itouchmap.com/latlong.html</a><br /><br />

<b>message</b><br />
This is the message that will be displayed when somebody hovers over the marker...<br /><br />

<b>zoom</b><br />
Sets how far the map is zoomed in or out. Can have any interget value between 1 and 19. Default is 9.<br /><br />

<h4>Examples:</h4>
<p>The following will display a Google Map with a message...</p>

<div class="code">
[googlemap id="myMap" zoom="9" latitude="21.306944" longitude="-157.858333" message="We are here"]
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>