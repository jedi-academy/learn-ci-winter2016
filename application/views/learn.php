<?php
/**
 * Learn CodeIgniter
 *
 * A Webapp Development course, using CodeIgniter
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2008-2015, James L. Parry
 * Copyright (c) 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	Learn CodeIgniter
 * @author	Jim Parry
 * @copyright	Copyright (c) 2015, British Columbia Institute of Technology
 * @copyright	Copyright (c) 2008-2015, James L. Parry
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://learn.codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
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
