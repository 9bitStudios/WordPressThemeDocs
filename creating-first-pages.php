<?php include('docs-header.php'); ?>
<h3>Creating a Home Page, Blog Page, &amp; Other Pages </h3>

<p>The first thing you'll need to do after you install WordPress is create your various pages that will make up the content of your website. This includes creating a home page, a blog page, and other additional pages, such as a contact page.</p>

<h4>Creating a Home Page</h4>
<p>You'll need to create an individual page in the WordPress dashboard to "house" the home page. That is, when users click to go to this page, they will be taken to the page that shows all of the slick and unique home page content that is featured with this theme.</p>

<p>To create your home page...</p>

<ol>
<li>First create a page that will be your home page by selecting "Pages" in the WordPress administration panel (a.k.a. the Dashboard).</li>  
<li>Add a new page if you haven't already added one and give it a title (e.g. "Home"). This will be your home page.</li>   
<li>You should then look for the template dropdown under the Attributes section... <br /><br />

    <ul>
        <li>You'll likely want to select "Page - No Title" The Page - No Title template is found in the template-page-notitle.php file. What this does is remove the title from the top of the page (so that you don't have the word "Home" in giant letters at the top of the page). Not too many homepages have this.</li>
        <li>If, by chance, you do want to have the word "Home" at the top of your homepage, you can just leave the setting at "Default Template"</li>
    </ul>          

</li>  
<li>Click "Publish" to save the page.</li>
</ol>

<h4>Creating a Blog Page</h4>
<p>The process to create a Blog section of the site is essentially the same as it was for the home page. This will be displayed when users click on the "Blog" category in the menu (or whatever you end up naming it -- but it will likely be "Blog"), and it will display a listing of your blog posts. </p>

<p>To create your blog page...</p>

<ol>
<li>First create a page that will contain your blog by selecting "Pages" in the WordPress administration panel (a.k.a. the Dashboard).</li>
<li>Add a new page if you haven't already added one and give it a title (e.g. "Blog"). This will be your blog's main page. </li>
<li>Unlike with the home page, you do not need to change the template from Default for the blog page. Keep the Template setting to default.</li> 
<li>Click the "Publish" button</li>
</ol>


<p>And you're done.</p>

<h4>Configuring Wordpress to Display Your Home Page &amp; Blog Page</h4>
<p>Now that individual pages have been created for the home page and the blog page, the next step is to set your home page so that it will be shown whenever a user comes to your WordPress site and the blog page to display when users click on a link to your blog page.</p>

<ol>
<li>In the WordPress Dashboard go to "Settings"
<li>Select "Reading"
<li>Look for the "Front Page Displays" section, select the "A static page" radio button. 
<li>Set Front Page to "Home" and Posts page to "Blog" (or whatever names you gave to these pages when you created them).
</ol>


<img src="images/home-blog-settings.jpg" alt="Home and Blog Configuration" /><br /><br />

<p>And now you have your default home page and your blog page displayed.</p>

<h4>Creating Other Pages</h4>
<p>Now you can go to town and create other pages for your site. The default wordpress </p>

<ol>
<li>Create a page selecting "Pages" in the WordPress administration panel (a.k.a. the Dashboard).</li>
<li>Add a new page give it a title (e.g. "Products").</li>
<li>Keep the Template setting as Default Template and start typing in your content.</li> 
<li>Click the "Publish" button</li>
</ol>

<p>Once you are finished creating all of the pages you want for your website, the next step would be to <a href="menu.php">put them into the menu</a>.</p>

<?php include('docs-footer.php'); ?>