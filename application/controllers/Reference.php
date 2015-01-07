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
 * controllers/Reference.php
 *
 * Present the course reference, i.e. learning activites according to activity type
 * 
 * Learn CodeIgniter website, template driven
 *
 */
class Reference extends Application {

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

	$this->data['reference'] = $this->format_reference(
		$this->course->materials(), $this->course->organizer());

	$this->data['pagetitle'] = $course->title;
	$this->data['pagebody'] = 'reference';
	$this->render();
    }

    /**
     * Extract & format the materials & resorces by activity type
     */
    private function format_reference($materials, $stuff)
    {
	// Recognized activity types
	$valid = array('lesson', 'video', 'tutorial', 'lab',
	    'assignment', 'example', 'github');

	$num = 1;
	$result = '';
	foreach ($materials as $activity_name => $group)
	{
	    $partial = '';
	    foreach ($group as $type => $item)
	    {
		// Make a pass through the organizer for this kind of activity
		foreach ($stuff as $week)
		{
		    foreach ($week->children() as $activity)
		    {
			$activity_type = $activity->getName();
			if ($activity_type != $type)
			    continue;

			$mytype = (string) isset($activity['type']) ?
				$activity['type'] : $activity->getName();
			if (in_array($type, $valid))
			{
			    $item = (string) $activity;
			    $name = (string) $activity['name'];
			    $duedate = (string) isset($activity['duedate']) ?
				    ' (due ' . $activity['duedate'] . ')' : '';
			    $parms = array('type' => $mytype, 'item' => $item,
				'name' => $name, 'typed' => ucfirst($type),
				'duedate' => $duedate);
			    $partial .= $this->parser->parse('theme/_activity', $parms, true);
			}
		    }
		}
	    }
	    $parms = array('name' => $activity_name, 'items' => $partial, 'num' => $num++);
	    $result .= $this->parser->parse('theme/_group', $parms, true);
	}
	return $result;
    }

}

/* End of file Reference.php */
