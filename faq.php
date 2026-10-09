<?php include('docs-header.php'); ?>
<h3>Frequently Asked Questions</h3>
<p>This section is an ongoing doc of FAQs that people have asked regarding WordPress themes...</p>

<h4>When I activate the theme I get errors that say "Warning: include(...)  No such file or directory..." or the screen is blank on my live server</h4>
<p>Depending on where you aquired the theme, it is possible that the theme folder name has gotten changed. If you look at the theme-config.php file in the root of the theme folder, there is a define("NBS_THEME_FOLDER") statement that indicates what the theme folder should be named -- or, rather, what the theme is expecting the theme folder to be named.</p>

<p>You can either change the name of the theme folder match the name that is set there in the file currently *or* you can edit the theme-config.php file and change the define("NBS_THEME_FOLDER", "original"); to define("NBS_THEME_FOLDER", "your-custom-name") or whatever your folder name is or what you want it to be. The 2 have to match.</p>

<h4>When I activate the theme, the screen is a blank screen...</h4>
<p>Refer to the previous question above to see if this is the same issue. If following the steps there do not solve the issue for you, please <a href="contact.php">contact support</a></p>

<h4>The menu doesn't look it does in the preview screenshots/demo site</h4>
<p>You have to set up a menu in the WordPress dashboard to make it appear as you want it to. To do this, please see the <a href="menu.php">Setting Up & Configuring the Menu</a> section.</p>

<h4>How do I make the blog page display as the first page that people see when they come to my website?</h4>
<p>In <a href="creating-first-pages.php">this section</a>, it was shown how to set page named "Home" to be the first page that is seen when users go to your site. You just need to set the front page to "Blog" instead of "Home"</p>

<h4>My shortcodes aren't working the way I want them to!</h4>
<p>Please do the following to make sure that you've done everything correctly...</p>

<ol>
<li>Refer to the information on the specific shortcode and check that you have entered in everything properly (exactly as the given examples have been done)</li>
<li>If it is still not working properly, please try some of the suggestions found in the <a href="shortcodes-adjusting.php">Adjusting Shortcodes section</a>.</li>
</ol>

<h4>How do I create the image hover effect with the magnifying glass icon, video icon, etc?</h4>

<p>This can be accomplished by setting the class of the image to 1 of 4 values...</p>

<ul>
<li>slickHoverPicture </li>
<li>slickHoverZoom</li>
<li>slickHoverVideo</li>
<li>slickHoverPlus </li>
</ul>

<p>So for example...</p>

<div class="code">
&lt;img src="http://www.9bitstudios.com/images/wordpress-themes/some-image.png" class="slickHoverVideo" alt="" width="100" height="45"&gt;
</div>

<p>You can also do this if using a shortcode...</p>

<div class="code">
[image path="http://www.yourdomain.com/wp-content/uploads/2010/12/redpuddle.jpg" border="false" class="slickHoverPlus" alt="red puddle"]
</div>

<h4>How do I set a custom background image for individual pages?</h4>

<p>Look for the Custom Field box in whatever WordPress page you want to edit. Look for the "Background Image" field and enter the path to the background image that you want to use. Note that you also have to enable background images by turning on a setting in the <a href="theme-options-miscellaneous.php">theme options</a>.</p>


<?php include('docs-footer.php'); ?>