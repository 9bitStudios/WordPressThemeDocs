<?php include('docs-header.php'); ?>

<h3>Sidebar</h3>
<p>The sidebar is found in the sidebar.php file. Anytime that another .php file in the theme calls the get_sidebar(); function, all of the code in the sidebar.php file will be displayed. Essentially the code outputs the various items returned by the function calls it makes (archives, tag cloud, categories).</p>

<p>You'll want to configure the sidebar of your blog (and pages that include the sidebar) to display the content you want. To do this you can either edit the default content of the sidebar.php file (shown below) or <a href="sidebar-widgets.php">use widgets</a>. It is recommended that you use widgets especially if you are not very familiar with WordPress and/or PHP programming. </p>

<p>If you *do* decide to directly edit the sidebar.php file to display different default content, you can get a complete listing of template tags that you might want to put into your sidebar.php file in the WordPress documentation found <a href="http://codex.wordpress.org/Template_Tags" target="new">here</a>.</p>

<?php include('docs-footer.php'); ?>