<?php include('docs-header.php'); ?>
<h3>Page Templplates</h3>
<p>This page contains a listing of the tempates available with this theme...</p>

<h4>Default Page Template</h4>
<p>By default, page.php is the page that will be displayed when a user visits an individual page. If you create a new page in the WordPress dashboard (as you did for the home page and blog page), but don't set a template under the "Attributes" section (you leave it at default), then this is the "look and feel" that the page will have by default when you create the page.</p>

<p>The default page.php does not have a sidebar and displays all the content in the full width frame of the site.</p>

<p>But maybe you don't want your page to look like this exactly. Maybe you want to create your own page that has things in different places, leaves certain things out, adds new things in, etc. etc. etc. Well you can actually do this through the use of page templates. Again, the best and most comprehensive information on how to do this is available in the WordPress documentation found here. This theme has a number of different pre-made templates for you to use, but if none of these are to your satisfaction there is also a section on <a href="page-template-creation.php">Creating Your Own Page Template</a> that will help you make your own page templates.</p>

<h4>No Title Page</h4>
<p>If for some reason, you do not want to have the big bold title text displayed at the top of your page you can use the "Page - No Title" file as a template. The template is found in the template-page-notitle.php file.</p>

<h4>Sidebar Page</h4>
<p>If you want one of your pages to have a sidebar you can use the "Page - Sidebar" template. The "Page - Sidebar" template is found in the template-page-sidebar.php file.</p>

<h4>Left Sidebar Page</h4>
<p>If you want one of your pages to have a sidebar on the left you can use the "Page - Sidebar - Left" template. The "Page - Sidebar - Left" template is found in the template-page-sidebar-left.php file.</p>

<h4>Contact Page</h4>
<p>The "Contact" page template(s) can be found in the files named like the following: template-page-contact1.php file, template-page-contact2.php file, etc. Each of these files represent different styles of a contact page. There is also another template called template-page-contact-nomap.php. The template-page-contact-nomap.php file does not have the map and contact information that the other files do.</p>
<p>The way that you configure the contact page is <a href="theme-options-contact-form.php">using the Contact Form theme options</a>. You'll want to enter the email you want to use into the Contact Form section of the theme options in the WordPress dashboard as well as the security question and answer. Make sure that the answer is correct. You will also want to enter your contact address if you are using a version of the contact form that supports a map.</p>

<?php include('docs-footer.php'); ?>