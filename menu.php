<?php include('docs-header.php'); ?>

<h3>Setting Up &amp; Configuring the Menu</h3>
<p>This theme uses the custom menu configuration that has existed since the launch of WordPress 3.0. For more information on how to implement custom menus, please refer to the <a href="http://codex.wordpress.org/Appearance_Menus_Screen" target="new">WordPress codex here</a>.</p>

<ol>
<li>Click on the Appearance &rarr; Menus section in the WordPress dashboard</li>
<li>To create a new custom menu, click on the + tab, give the menu a name (e.g. Main), and click "Create Menu" button.</li>
</ol>

<p>After a menu is created, then detail items can be added to the menu. Choose items like custom links, pages, and categories, from the left column to add to the menu. If you have created custom post types or custom taxonomies, those too can be added to menus. If you don't see your custom post types or taxonomies, look under the Screen Options to make sure they are checked to be Show on Screen.</p>
<p>After items have been added to a menu, drag and drop to put them in the order you want. You can also click each item to reveal additional configuration options. You can also drag a menu item a little to the right to make it a submenu, to create menus with hierarchy. You'll see when the position of the drop target shifts over to portray the nested placement.</p>
<p>This theme supports 2 sub-levels of menu items (making levels 3 in total when you include the top-level main items).</p>
<p>When you have finished building your custom menu, make sure you click the "Save Menu" button.</p>
<p>The menu uses CSS and jQuery to display all of your page titles as items in the menu. The menu links are actually styled and positioned with CSS but it uses jQuery to give it a little bit of an animation effect. The code for the jQuery dropdown (what creates the "unveil" effect) menu can be found in the footer.php file.</p>
<p>The styling for the menu is found in the style.css file and the style1.css file. This is the CSS that styles all of the menu links in the drop-down menu. Unless you are experienced in CSS, you might not want to change much of the styling here.</p>
<p>If you only have created 2 pages at this point ("Home" and "Blog"), not to worry!  Just drag those two on to the menu and click "Save Menu." You can always come back later and add more pages in when you create them.</p>

<?php include('docs-footer.php'); ?>