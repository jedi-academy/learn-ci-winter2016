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
 * @copyright	Copyright (c) 2008-2015, James L. Parry
 * @copyright	Copyright (c) 2015, British Columbia Institute of Technology
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://learn.codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * controllers/Welcome.php
 *
 * Present the course homepage.
 * 
 * Learn CodeIgniter website, template driven
 *
 */
class Welcome extends Application {

    /**
     * Constructor
     */
    function __construct()
    {
	parent::__construct();
    }

    /**
     * Default entry point
     */
    function index()
    {
	$course = $this->course->metadata();
	$this->data = array_merge($this->data, (array) $course);

	$this->data['resources'] = $this->format_resources($this->course->resources());

	$this->data['pagetitle'] = $course->title;
	$this->data['pagebody'] = 'learn';
	$this->render();
    }

    /**
     * Extract & format the learning resources
     */
    private function format_resources($resources)
    {
	$result = '';
	foreach ($resources as $resource)
	{
	    $result .= $this->parser->parse('theme/_resource', (array) $resource, true);
	}
	return $result;
    }

}

/* End of file Welcome.php */
