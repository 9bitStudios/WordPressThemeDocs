<?php include('docs-header.php'); ?>
<h3>Creating Your Own Page Templates</h3>
<p>To really take the theme to the next level and make it your own, it is highly recommended that you create your own page templates for each of the individual pages that you want to display. That way, whenever you create a new page, you can choose this template file to represent that page when a user goes to it. You'll see it in the "Template" dropdown in Attributes section of the WordPress dashboard when creating a new page.</p>

<p>Creating templates is for individuals with a good grasp of HTML, CSS, and little bit of PHP and a good understanding of WordPress. If you are not fully comfortable with any or all of these, it is probably best to stick to using the standard templates that come with this theme. But even still, you can always experiment and delete the files later! If anything, you will gain a better understanding of how template files work in WordPress.</p>

<p>To create your own page template...</p>

<ol>
<li>The best way to start out is to copy an existing template. If you want a page template that has the sidebar in it, it is recommended that you copy the template-page-sidebar.php file. If you want to start more-or-less from scratch with a "blank" page template use the template-page-notitle.php file.</li> 

<li>Rename the newly copied .php file (whichever one you choose) to the name of your custom template page. You can pick whatever name you like. For the sake of this illustration, we'll call our new template page template-page-mytemplate.php</li>

<li>Then change the "Template Name: " inside the first line of the .php file to your new template name. e.g. Template Name: My Template</li>

<li>After this, you can code away with HTML and PHP however you like.</li> 

<li>Then go the WordPress dashboard and create a new page.</li> 

<li>Give your page a title but don't add any content in the text editor field yet.</li>

<li>In the Attributes section select your page template name from the dropdown (it will noe be present in the dropdown as WordPress searches through all the PHP files to find the available templates.</li> 

<li>Click "Publish" and your page template is now added.</li>

</ol>

<p>For more information on page templates, see the WordPress documentation.</p>

<?php include('docs-footer.php'); ?>