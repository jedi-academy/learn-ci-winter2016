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
 * controllers/Organizer.php
 *
 * Present the course organizer, i.e. learning activities in time sequence
 * 
 * Learn CodeIgniter website, template driven
 *
 */
class Organizer extends Application {

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

	$this->data['organizer'] = $this->format_organizer($this->course->organizer());

	$this->data['pagetitle'] = $course->title . ' ~ Course Organizer';
	$this->data['pagebody'] = 'organizer';
	$this->render();
    }

    /**
     * Extract & format the materials & resources, by week
     */
    private function format_organizer($stuff)
    {
	$num = 1;

	// Recognized activity types
	$valid = array('lesson', 'video', 'tutorial', 'lab',
	    'assignment', 'example', 'github');

	$result = '';
	foreach ($stuff as $week)
	{
	    $number = (int) $week['num'];
	    $topic = (string) $week->topic;

	    // Collect the activities for this week
	    $partial = '';
	    foreach ($week->children() as $activity)
	    {
		$type = (string) isset($activity['type']) ?
			$activity['type'] : $activity->getName();
		if (in_array($type, $valid))
		{
		    $item = (string) $activity;
		    $name = (string) $activity['name'];
		    $duedate = (string) isset($activity['duedate']) ?
			    ' (due ' . $activity['duedate'] . ')' : '';
		    $parms = array('type' => $type, 'item' => $item,
			'name' => $name, 'typed' => ucfirst($type),
			'duedate' => $duedate);
		    $partial .= $this->parser->parse('theme/_activity', $parms, true);
		}
	    }

	    $parms = array('number' => $number, 'topic' => $topic,
		'activities' => $partial, 'num' => $num++);
	    $result .= $this->parser->parse('theme/_week', $parms, true);
	}
	return $result;
    }

}

/* End of file Organizer.php */
