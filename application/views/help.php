<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * views/help.php
 *
 * Any explanations needed
 *
 */
?>
<h2>Slideshow Controls</h2>
<div>The public domain <a href="http://meyerweb.com/eric/tools/s5/">S5</a> slideshow 
    system has been used for many of the materials presented.</div>
<img class="pull-right" src="/assets/images/s5-controls.png"/>
<p>
    While a slideshow is being views, mousing over the lower right of the
    browser window will reveal the slideshow control panel.
    Clicking on the stroked "O" will toggle between slideshow view and
    outline view (used for printing). There is also a combobox to directly
    select any slide in the show.</p>
<div>You can also use the keyboard to navigate a slideshow...
    <ul>
	<li>Right arrow, down arrow, page down or space will take you to the next slide</li>
	<li>Left arrow, up arrow or page up will take you to the previous slide</li>
	<li>Home will take you to the first slide</li>
	<li>End will take you to the last slide</li>
	<li>T will toggle between slideshow and outline view</li>
	<li>C will show/hide the slideshow controls</li>
    </ul>
    <p>Clicking in the browser window,
	outside of the control area or any embedded object,
	will also take you to the next slide.</p>
    <p>Note: text is easier to copy to the clipboard if using the "outline" view.
	In "slideshow" view, when you highlight a block of text to copy it,
	clicking the right button on your mouse usually takes you to the next
	slide, instead of giving you a context menu :(</p>
</div>
<h2>Course Materials Icons Legend</h2>
<div>The following kinds of course materials may be provided.</div>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    {materials}
</div>
