<?php include('docs-header.php'); ?>
<h3>Alert Box Shortcode</h3>
<p>Display a box of specially formatted text that can be used for an "alert," to get the user's attention about something.</p>

<h4>Shortcode:</h4>

<div class="code">
[alertbox]
</div>

<h4>Attributes:</h4>

<b>type</b><br />
This is the type of alert box you want to display. Please refer to the guide below for the possible options you can set here...<br /><br />

<ul>
<li>accepted - Displays an accepted box in green</li>
<li>warning - Displays a warning box in yellow</li>
<li>cancel - Displays a canceled box in red</li>
<li>information - Displays an information box in blue</li>
</ul>
<br />

<h4>Examples:</h4>

<p>The following will display an accepted alert...</p>

<div class="code">
[alertbox type="accepted"]Thank you! Please come again![/alertbox]
</div>

<p>The following will display a canceled alert...</p>

<div class="code">
[alertbox type="cancel"]Stop! You may not access this page![/alertbox]
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a><br /><br />

<?php include('docs-footer.php'); ?>