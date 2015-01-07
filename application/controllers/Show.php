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
 * controllers/Show.php
 *
 * Render a slideshow using S5
 *
 * ------------------------------------------------------------------------
 */
class Show extends Application {

    function __construct()
    {
	parent::__construct();
    }

    //-------------------------------------------------------------
    //  Default entry point
    //-------------------------------------------------------------

    function index()
    {
	// We should never enter here
	redirect('/');
    }

    /**
     * Render a slideshow
     */
    private function work($category, $name)
    {
	$activity = $this->course->activity($category, $name);
	if ($activity == null)
	{
	    redirect('/');
	    exit();
	}

	// handle the type of activity
	switch ($activity->type)
	{
	    case 'lesson':
	    case 'tutorial':
	    case 'lab':
	    case 'assignment':
		$this->slideshow($activity);
		break;
	    case 'video':
	    case 'github':
		redirect($activity->link);
		break;
	    case 'example':
		$this->serve($activity->link);
		break;
	    case 'quiz':
		// hmm - what should we do for this?
		redirect('/');
		break;
	}
    }

    /**
     * Entry point for a lesson
     */
    public function lesson($which)
    {
	$this->work('lesson', $which);
    }

    /**
     * Entry point for an example
     */
    public function example($which)
    {
	$this->work('example', $which);
    }

    /**
     * Entry point for a tutorial
     */
    public function tutorial($which)
    {
	$this->work('tutorial', $which);
    }

    /**
     * Entry point for a lab
     */
    public function lab($which)
    {
	$this->work('lab', $which);
    }

    /**
     * Entry point for an assignment
     */
    public function assignment($which)
    {
	$this->work('assignment', $which);
    }

    /**
     * Entry point for a exam
     */
    public function exam($which)
    {
	$this->work('exam', $which);
    }

    /**
     * Serve a file
     */
    private function _serve($source)
    {
	if (!file_exists($source))
	{
	    show_404($source);
	}
	$this->load->helper('file');
	$mimeType = get_mime_by_extension($source);
	header("Content-type: " . $mimeType);
	header('Content-Disposition: inline');
	readfile($source);
    }

    /**
     * Render an activity XML document as a slideshow
     */
    private function slideshow($activity)
    {
	$course = $this->course->metadata();
	$this->data = array_merge($this->data, (array) $course);
	$this->data = array_merge($this->data, (array) $activity);

	$this->data['intro_slide'] = $this->parser->parse('show/_title_slide', $this->data, true);

	// Now through the slides
	$result = '';

	$filename = DATAPATH . $activity->category . 's/' . $activity->name . '.xml';
	if (file_exists($filename))
	{
	    $xml = simplexml_load_file($filename);
	    foreach ($xml->slide as $slide)
	    {
		$parms = array(
		    'title' => (string) $slide['title'],
		    'layout' => (string) $slide['layout'],
		    'body' => (string) $slide->asXML(),
		);
		$result .= $this->parser->parse('show/_slide', $parms, true);
	    }
	}
	$this->data['slides'] = $result;

	$this->data['congrats'] = $this->parser->parse('show/_congrats', $this->data, true);

	$this->data['pagetitle'] = $this->data['title'];
	$this->parser->parse('show/template', $this->data);
    }

}

/* End of file Learn.php */
