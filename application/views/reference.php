<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * views/reference.php
 *
 * Present learning activities by activity type
 *
 */
?>
<div>
    <br/>
    <h1>{subtitle}</h1>
    <div>
	This course reference presents all the learning activities grouped
	by activity type.
    </div>

    <div>
	Course: {subtitle} {title} (<a href="{outline}">{session}</a>)<br/>
	Author: <a href="mailto:{email}">{author}</a> from <a href="{site}">
	    {school}
	</a><br/>	
    </div>
    <br/>

    {reference}

</div>
