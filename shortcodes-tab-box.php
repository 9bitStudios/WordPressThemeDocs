<?php include('docs-header.php'); ?>
<h3>Tabs Shortcode</h3>
<p>Display content in tabs</p>

<h4>Shortcode:</h4>

<div class="code">
[tabs], [tab_item], [tab_container], [tab_content]
</div>

<h4>Attributes:</h4>
None<br /><br />

<h4>Examples:</h4>
<p>The following will display content in tabs. This example omits the [tab_container] shortcode</p>

<div class="code">
[tabs][tab_item id="tab1"]Tab 1[/tab_item][tab_item id="tab2"]Tab 2[/tab_item][tab_item id="tab3"]Tab 3[/tab_item][/tabs] [tab_content id="tab1"][clearout]Praesent consectetur ante neque, sed aliquet dui. Duis adipiscing volutpat ante, ac aliquam leo malesuada id. Aenean aliquet, ante non tempor mollis, quam sapien luctus nunc, in ultrices eros metus laoreet eros. Praesent eu lectus sed nibh varius rhoncus id et orci.[/tab_content] 
</div>

<p>By adding in an additonal [tab_container] shortcode encasing the [tab_content] shortcodes you can make a tab box...</p>

<div class="code">
[tabs][tab_item id="tab1"]Tab 1[/tab_item][tab_item id="tab2"]Tab 2[/tab_item][tab_item id="tab3"]Tab 3[/tab_item][/tabs] [tab_container] [tab_content id="tab1"] Praesent consectetur ante neque, sed aliquet dui. Duis adipiscing volutpat ante, ac aliquam leo malesuada id. Aenean aliquet, ante non tempor mollis, quam sapien luctus nunc, in ultrices eros metus laoreet eros. Praesent eu lectus sed nibh varius rhoncus id et orci.[/tab_content] [tab_content id="tab2"] Nulla in ipsum nibh, auctor porta ipsum. Curabitur bibendum posuere ante, a porttitor mi pellentesque eu. Morbi in libero ligula, vitae vehicula nisi. Praesent faucibus lacinia mauris a tristique. Donec facilisis, turpis ut dignissim fringilla, nulla metus interdum mauris, at dapibus nulla metus vel est. [/tab_content] [tab_content id="tab3"] Cras auctor, ante quis laoreet tincidunt, mauris nulla mollis sem, ac interdum arcu turpis non est. Nullam interdum turpis id odio imperdiet scelerisque. Quisque ut adipiscing dui. Pellentesque nibh ligula, pharetra vitae porttitor et, euismod eu enim. Nam augue enim, aliquam ac lobortis a, ullamcorper a elit. Integer metus ligula, feugiat sed tincidunt ut, egestas a arcu. Pellentesque sed fringilla urna. [/tab_content] [/tab_container]
</div>

<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>