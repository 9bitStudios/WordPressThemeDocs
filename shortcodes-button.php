<?php include('docs-header.php'); ?>
<h3>Button</h3>
<p>Displays a nicely styled button with your own custom text and link.</p>

<h4>Shortcode:</h4>

<div class="code">
[button]
</div>


<h4>Attributes:</h4>

<b>link</b><br />
Can have the value of any valid link. This is the link the user will be taken to when they click on the button.<br /><br />

<b>newwindow</b><br />
Can have the value "true" or "false" and is only applicable if the link value is set. If set to true, this will open the link URL value in a new browser window.<br /><br />

<b>linebreak</b><br />
Can have the value true or false. This determines whether the button will add a line break and continue the content that follows it on a new line. Set this value to false if you want to add multiple buttons one after another.  Set it to true if you are going to begin a new paragraph below it. Even if you have a number of buttons lined up one after the other, you'll definitely want the *last* button to have its linebreak value set to "true" so that the content that follows it will appear on a new line.<br /><br />

<b>size</b><br />
Sets the size of the button. Can have the values "small," "medium," or "large."<br /><br />

<b>color</b><br />
Sets the color of the button. This can have any of the following values...<br /><br />

<ul>
<li>red</li>
<li>lightred</li>
<li>orange</li>
<li>yellow</li>
<li>green</li>
<li>blue</li>
<li>aqua</li>
<li>navy</li>
<li>purple</li>
<li>coffee</li>
<li>black</li>
<li>white</li>
<li>gray</li>
<li>darkgray</li>
</ul>

<b>style</b><br />
Sets the style of the button. Can have the values "normal" or "flat". The default will depend on the theme's overall style.<br /><br />

<h4>Examples:</h4>

<p>Here is an example of a single button...</p>

<div class="code">
[button link="http://www.9bitstudios.com" linebreak="true" color="black"]Button Text[/button]
</div>

<p>Here is an example of 3 buttons that would be displayed next to each other...</p>

<div class="code">
[button link="http://www.9bitstudios.com" linebreak="false" size="small" color="black"]Button Text[/button] [button link="http://www.9bitstudios.com" linebreak="false" size="medium" color="white"]Button Text[/button] [button link="http://www.9bitstudios.com" size="large" linebreak="true" color="gray"]Button Text[/button] 
</div>

<p>Notice how the 3rd button has linebreak set to "true" so that content that follows this could continue on the next line.</p>

<p>You could even combine button with the <a href="shortcodes-icon-text.php">icon shortcode</a> to make an icon button...</p>

<div class="code">
[button link="http://www.9bitstudios.com" linebreak="true" size="medium" color="yellow"][icon type=" question-sign "]This is button with an icon[/icon][/button]
</div>


<a href="shortcodes.php">Back to Shortcodes &#187;</a>

<?php include('docs-footer.php'); ?>