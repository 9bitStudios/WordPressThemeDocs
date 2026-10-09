<?php include('docs-header.php'); ?>
<h3>E-Mail Shortcode</h3>
<p>Displays a link to an email address that is hidden from spambots JavaScript, but is displayed as regular text inline.</p>

<h4>Shortcode:</h4>

<div class="code">
[email]
</div>
<br />

<h4>Attributes:</h4>

<b>alias</b><br />
Should have the value of your e-mail alias. For example, if my email was john@website.com the value entered in here would be "john"<br /><br />

<b>domain</b><br />
Should have the value of your e-mail domain. For example, if my email was john@website.com the value entered in here would be "website"<br /><br />

<b>extension</b><br />
Should have the value of your e-mail alias. For example, if my email was john@website.com the value entered in here would be "com"<br /><br />

<h4>Examples:</h4>

<p>Here is an example of an email...</p>

<div class="code">
[email alias="john" domain="website" extension="com"] 
</div>
<br />

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>