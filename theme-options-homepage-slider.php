<?php include('docs-header.php'); ?>
<h3>Homepage Slider Theme Options</h3>
<p>Below are the theme options that you can configure for the Slider found on the homepage...</p>

<b>Enable Homepage Slider</b><br />
Check this box if you want to enable a slider/banner rotator on the homepage<br /><br />

<b>Slider Type</b><br />
This determines what type of slider you want to choose<br /><br />

<b>Autoplay (If Applicable)</b><br />
This determines if you want to have your slider's slides automatically animate on page load or whether you want users to have to manually advance the slider by clicking on the controls<br /><br />

<b>Pause on Hover?</b><br />
You'll want to check this box if you want the slideshow to pause when the user hovers his/her mouse over it.<br /><br />

<b>Show Direction Navigation?</b><br />
You'll want to check this box if you want the direction navigation arrows to be visible.<br /><br />

<b>Only Show Direction Navigation on Hover?</b><br />
You'll want to check this box if you want the direction navigation arrows to be visible only when the user hovers his/her mouse over the slideshow.<br /><br /> 

<b>Transition Time (seconds)</b><br />
This determines what the transition time between banner changes is.<br /><br />

<b>Show homepage slider for respnsive views?</b><br />
Check this box if you want to show the homepage slider for supported responsive views. Note that you must be using a slider/banner rotator that is responsive (such as FlexSlider). Not all sliders/banner rotators currently support responsive web design (though they might later on down the road as future updates become available.<br /><br />


<h4>Options for Slider Items</h4>
Depending on the type of slider you have chosen, you might be able to choose whether each slide is an image or a video, or you may just be limited to images only. It all depends on the type of slider chosen under the "Slider Type" setting. If the slider you have chosen supports video, you will see an extra dropdown box present in the area for each item which will allow you to choose either an image or a video. If video is not supported for the type of slider yo have chosen, the dropdown will not be there. 

For the slider items (whether they are images or video) you can enable/disable each individual item. The directions for each field that you can fill out are given in the theme options page. Note that in the directions below (#) refers to any number (e.g. 1, 2, 3, etc.)<br /><br />

<b>Check this box if you want to enable item (#)</b><br />
You'll want to check this box if you want the item to be included in the slider slideshow on the homepage.<br /><br />

<b>Check this box if you want to add a link for item (#)</b><br />
This box should be checked if you want the item to link to a certain location for when the user clicks on it in the slideshow.<br /><br /> 

<b>Enter the URL to the link for slider item (#)</b><br />
This is the actual path to the website that you want to take the user to when the user clicks on this item in the slideshow. Note: for this to be applicable, the "Check this box if you want to add a link for item" checkbox must be checked.<br /><br />

<b>Check this box if you want to add a caption for item (#)</b><br />
Check this checkbox if you want to add a caption to the specific item.<br /><br />

<b>Enter the caption for slider item (#) using HTML if needed</b><br />
This is the location where you enter the caption of the item. You can use HTML here, using things such as &lt;h2&gt; &lt;br /&gt; tags as well as links and other styling tags. Note:  for this to be applicable, the "Check this box if you want to add a caption for item" checkbox must be checked. You can also use <a href="shortcodes.php">shortcodes</a> here.<br /><br />

<h4>Video Support in Slider</h4>
<p>If you want to put videos in your slider you'll need to use a slider that supports video.</p>

<p>Below is a listing of the sliders that support video...</p>

<ul>
<li>Flex Slider</li>
</ul>

If you are using <a href="http://www.youtube.com" target="_blank">YouTube</a> videos in your slider, you'll want to set the URL in the theme options in the following manner...

<div class="code">
http://www.youtube.com/embed/BoqCcHQZlWw?wmode=transparent&amp;showinfo=0
</div>

<p>Essentially what you are doing is adding the <em>?wmode=transparent&amp;showinfo=0</em> string to the end of your normal YouTube URL. </p>

<p>The wmode="transparent" parameter allows things to display over top of the video properly (such as the drop-down menu)</p>

<p>As described in the <a href="https://developers.google.com/youtube/player_parameters" target="_blank">YouTube API documentation</a>, the showinfo parameter removes the video title from the embedded video on the page. The video display does not look as good aesthetically otherwise.</p>

<p>Vimeo currently does not have any additional parameters that need to be added.</p>

<img src="images/theme-options-homepage-slider.png" alt="Theme Options"><br /><br />

<a href="theme-options.php">Back to Theme Options &#187;</a>

<?php include('docs-footer.php'); ?>