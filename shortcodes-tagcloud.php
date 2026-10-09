<?php include('docs-header.php'); ?>
<h3>Tag Cloud Shortcode</h3>
<p>Display a list of all of the registered tags...</p>

<h4>Shortcode:</h4>

<div class="code">
[tagcloud]
</div>

<h4>Attributes:</h4>

<b>smallest</b><br />
The smallest size (integer) for the tag cloud item. e.g. 8.<br /><br />

<b>largest</b><br />
The smallest size (integer) for the tag cloud item . e.g. 14.<br /><br />

<h4>Examples:</h4>
<p>The following will display a tag cloud...</p>

<div class="code">
[tagcloud]
</div>

<p>The following will display a tag cloud with varying sizes...</p>

<div class="code">
[tagcloud smallest="8" largest=14]
</div>

<p>Note that some themes may be configured to have tag clouds all the same size so for best results you may just want to use [tagcloud] without giving any attributes so that the default values are used.</p>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>