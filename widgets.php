<?php include('docs-header.php'); ?>
<h3>Widgets</h3>
<p>When you log in to the WordPress dashboard and select "Widgets" you will see a location or locations to drop widgets. What these locations are and how many of them there are will depend on the theme you are using. Additional information on widgets is available in the WordPress documentation found <a href="http://codex.wordpress.org/WordPress_Widgets">here</a></p>

<p>Below is a basic rundown on how to use widgets...</p>

<ol> 
<li>Select the Appearance &rarr; Widgets option in the WordPress dashboard. This should take you to the Widgets page.</li>
<li>Expand a widget section by clicking on the drop down of the Sidebar item. By default it should be visible on the right hand side of the WordPress dashboard. # will be the particular part of the footer that the widget corresponds to. So it might be Footer 1, Footer 2, etc.</li>    
<li>From here you can drag and drop the various widgets that are available onto the widget drop section. What each widget does depends on the widget itself so feel free to experiment with it a little bit. You can move widgets on and off, up and down.</li>
<li>When you are finished adding and customizing a widget, click "Save"</li>
<li>Go to your website and refresh. You should now see the widgets that you dragged and dropped and then configured now visible on your site.</li> 
</ol>

<h4>Places to Use Widgets</h4>
<p>The most common places to use widgets on a theme that support widgets are the <a href="sidebar-widgets.php">sidebar</a> and the <a href="footer-widgets.php">footer</a>. However, widgets can be used in a number of different places. It all depends on the theme, and what is written into the theme's functionality.</p>

<h4>Shortcodes Within Widgets</h4>

<p>You can also use shortcodes within your widgets, which is a great way to display whatever content you want. To do this, you can use the "Text" or the "Alternate Text" widgets. Alternate Text is a custom widget that removes a lot of the automatic formatting that WordPress does, so it's a pretty good bet to go with it. But you can use the "Text" widget as well and have no problems</p>

<p>To use shortcodes in a widgets...</p>

<ol> 
<li>Select the Appearance &rarr; Widgets option in the WordPress dashboard. This should take you to the Widgets page.</li>
<li>Expand a widget section by clicking on the drop down of one of the items. By default it should be visible on the right hand side of the WordPress dashboard.</li>    <li>Drag and drop the "Text" or the "Alternate Text" widget onto the widget drop section.</li>
<li>Enter one of the <a href="shortcodes.php">Shortcodes</a> into the text section. You can also give your widget a title, which will display a header in larget text above or near your widget. For example, each section in the sidebar has a header text above it (e.g. Categories, Archives, etc.). If you want that header text above this widget, you'll want to enter that text into the title field.</li>
<li>When you are finished adding and customizing the widget, click "Save"</li>
<li>Go to your website and refresh. You should now see the widgets that you dragged and dropped and then configured now visible on your site.</li> 
</ol>

<p><img src="images/text-widget.jpg" alt="Text Widget" /></p>

<p><img src="images/text-widget-writing.jpg" alt="Text Widget" /></p>

<p>This might produce the following result...</p>

<p><img src="images/text-widget-result.jpg" alt="Text Widget" /></p>

<?php include('docs-footer.php'); ?>