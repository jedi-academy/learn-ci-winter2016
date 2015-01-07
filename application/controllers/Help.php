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
 * controllers/Help.php
 *
 * Explain how to use the slideshow
 * 
 * Learn CodeIgniter website, template driven
 *
 */
class Help extends Application {

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

	$this->data['materials'] = $this->format_materials($this->course->materials());

	$this->data['pagetitle'] = $course->title . ' ~ Help';
	$this->data['pagebody'] = 'help';
	$this->render();
    }

    /**
     * Extract & format the materials & resorces
     */
    private function format_materials($materials)
    {
	$num = 1;
	$result = '';
	foreach ($materials as $name => $group)
	{
	    $partial = '';
	    foreach ($group as $type => $item)
	    {
		$parms = array('type' => $type, 'item' => $item);
		$partial .= $this->parser->parse('theme/_item', $parms, true);
	    }
	    $parms = array('name' => $name, 'items' => $partial, 'num' => $num++);
	    $result .= $this->parser->parse('theme/_heading', $parms, true);
	    $result .= $partial;
	}
	return $result;
    }


}

/* End of file Help.php */
