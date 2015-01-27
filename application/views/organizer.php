<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * views/organizer.php
 *
 * Present learning activities by week
 *
 */
?>
<div>
    <br/>
    <h1>{subtitle} Organizer</h1>
    <div>
	This course organizer presents all the learning activities in date 
	sequence, i.e. by week.
    </div>

    <div>
	Course: {subtitle} {title} (<a href="{outline}">{session}</a>)<br/>
	Author: <a href="mailto:{email}">{author}</a> from <a href="{site}">
	    {school}
	</a><br/>	
    </div>
    <br/>

    {organizer}

</div>
