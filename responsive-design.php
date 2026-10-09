<?php include('docs-header.php'); ?>

<h3>Responsive Design</h3>
<p>Responsive web design is essentially the implementation where websites adapt to different screen resolutions. Because there has been such a push towards mobile web design with the advent of smartphones and tablet devices, responsive design is an essential component of making the mobile experience good for your site visitors.</p>
<p>You can see the responsive design in action by shrinking the size of your browser window to see the different displays that will occur for users coming in on different devices...</p>

<h4>Resolutions</h4>
<p>The responsive design components of the website are handled in the style.css file where media queries are set up to change the display of the website based on the screen resolution. A general layout of these can be found below. Something similar to this will be found in your style.css file</p>

<div class="code">
@media only screen and (max-width: 480px) { }<br /><br />
@media only screen and (min-width: 481px) and (max-width: 767px) { }<br /><br />
@media only screen and (min-width: 768px) and (max-width: 980px) { }<br /><br />
</div>

<p>Custom CSS gets set when the screen resolution is less than or in-between these specific widths.</p>

<p>If you want your images to resize with the responsive views, you may have to add the proper class in the CSS.</p>

<h4>Sliders</h4>
<p>The following sliders are responsive...</p>

<ul>
<li>FlexSlider</li>
</ul>

<p>If you are using a slider that is not responsive, you should set the slider to not display for responsive views in the <a href="theme-options-mobile.php">theme options</a>.</p>

<?php include('docs-footer.php'); ?>