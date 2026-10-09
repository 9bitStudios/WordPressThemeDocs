<?php include('docs-header.php'); ?>
<h3>Clear Shortcode</h3>
<p>This drops all floated content down to a newline. Is used for the purposes of getting content to line up properly when needed.</p>

<p>The difference between the clear shortcode and the <a href="shortcodes-clearout.php">clearout shortcode</a> is that [clear] will bring the next markup to a new line whereas [clearout] will bring the markup to a newline and drop it ~20 pixels down producing a gap. (The actual spacing of [clearout] might be slightly different for different themes) So you'll want to use [clearout] if you need some extra spacing between your previous line and next line.</p>

<p>The also similar <a href="shortcodes-newline.php">newline shortcode</a> will bring you to the next line much like the clear shortcode will, but it may not necessarily clear floated elements. The newline shortcode essentially produces a &lt;br /&gt; HTML tag.</p>

<h4>Shortcode:</h4>

<div class="code">
[clear]
</div>

<h4>Attributes:</h4>

None<br /><br />

<h4>Examples:</h4>

<p>The following will display a gap in the content on a new line...</p>

<div class="code">
[clear]
</div>

<p>This shortcode can also be chained together. The following will display a larger gap in the content...</p>

<div class="code">
[clear] [clear]
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>