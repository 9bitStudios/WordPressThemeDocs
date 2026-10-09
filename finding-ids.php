<?php include('docs-header.php'); ?>
<h3>Finding Page, Post, &amp; Category IDs</h3>
<p>Page, post, and category IDs are used are automatically created by WordPress as you create them in the Wordpress dashboard. There might come a time when you will need to find a page, post, or category ID value to display either e.g. when using a widget, a shortcode or entering theme options.</p>

<p>To do this, follow the steps below...</p>

<ol>
<li>In the WordPress dashboard go to the "Settings" section and click "Permalinks."</li>
<li>Check "Default" if it is not already configured.</li>
<li>Click "Save Changes"</li>
</ol>
<br />

<p>You'll now need to figure out which categories and pages you want to show. You can do this by viewing the various pages and categories on your site. You should be able to see these appear in the URLs in your web browser after the tags. Below are some examples...</p>

<ul>
<li>Page ID: http://www.yoursite.com/?page_id=12</li> 
<li>Post ID: http://www.yoursite.com/?p=36 </li>
<li>Category ID: http://www.yoursite.com/?cat=9 </li>
</ul>
<br />

<p>The number at the end will differ depending on which page, category, or post it is.</p>
<?php include('docs-footer.php'); ?>