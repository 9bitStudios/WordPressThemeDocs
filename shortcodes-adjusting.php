<?php include('docs-header.php'); ?>
<h3>Adjusting Shortcodes</h3>
<p>Shortcodes have a tendency to be a little bit fickle when it comes to formatting in how what they display appear in your pages and posts. Because the WordPress engine automatically adds HTML &lt;p&gt; tags to the content that you enter into the WordPress dashboard editor, and because shortcodes do not always return &lt;p&gt; tags, sometimes it takes a bit of finagling to make things line up properly.</p>

<p>For example, when entered into the WordPress editor (HTML tab), this text:</p>

<div class="code">
[inlinebox orientation="left"]Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Claritas est etiam processus dynamicus, qui sequitur mutationem.[/inlinebox] Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Duis autem vel eum iriure dolor in hendrerit in vulputate velit
</div>


<p>Might give you a different result than this:</p>

<div class="code">
[inlinebox orientation="left"]Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Claritas est etiam processus dynamicus, qui sequitur mutationem.[/inlinebox]<br />
Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Duis autem vel eum iriure dolor in hendrerit in vulputate velit
</div>

<p>In case you are still scratching your head, the difference here was that the shortcode was on a separate line in the second example.</p>

<p>To make shortcodes work, try doing things deleting whitespace and carriage returns and putting them on the same line(s) as your text as shown in the first example above. Also, it seems to be a good practice to put a space character between the last bracket of the closing of your shortcode and the first letter of the next word. That is, do this:</p>

<div class="code">
...lectorum.[/inlinebox] Mirum est...
</div>

<p>And not this:</p>

<div class="code">
...lectorum.[/inlinebox]Mirum est...
</div>

<p>Do this:</p> 

<div class="code">
...lectorum.[/inlinebox] Mirum est...
</div>


<p>And not this:</p>

<div class="code">
...lectorum.[/inlinebox]<br />
Mirum est...
</div>

<p>In short, if the shortcode is not displaying exactly as you want it, try working with it a little bit before worrying that it is completely broken.</p>

<?php include('docs-footer.php'); ?>