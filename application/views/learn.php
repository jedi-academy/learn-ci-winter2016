<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * views/learn.php
 *
 * Home page for the Learning CodeIgniter website
 *
 */
?>
<div>
    <br/>
    <h1>{subtitle}</h1>
    {intro}

    <h2>Course Information</h2>
    <div>
	Course: {subtitle} {title} (<a href="{outline}">{session}</a>)<br/>
	Author: <a href="mailto:{email}">{author}</a> from <a href="{site}">
	    {school}
	</a><br/>	
    </div>

    <h2>This Course</h2>
    <p><a href="/organizer" class="btn btn-primary active">Organizer</a> shows the 
	course materials organized by week.</p>
    <p><a href="/reference" class="btn btn-primary active">Reference</a> shows the 
	course materials organized by type of resource.</p>
    <p><a href="/help" class="btn btn-primary active">Help</a> explains keyboard
	shortcuts that can be used in a slideshow, and provides an icon legend.</p>

    <h2>Learning Resources</h2>
    <ul>
	{resources}
    </ul>

    <h2>License</h2>
    <div>This course is being released under the <a href="/license.txt">{license}</a></div>

</div>
