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
 * controllers/Feedback.php
 *
 * Capture feedback about a course component
 *
 * ------------------------------------------------------------------------
 */
class Feedback extends Application {

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
     * Present the feedback form
     */
    public function survey($category, $name)
    {
	$activity = $this->course->activity($category, $name);
	$course = $this->course->metadata();
	$this->data = array_merge($this->data, (array) $course);
	$this->data = array_merge($this->data, (array) $activity);

	//TODO - present list of choices
	if ($activity == null)
	{
	    redirect('/');
	    exit();
	}

	// Present the feedback form
	$this->data['pagebody'] = 'feedback';
	$this->render();
    }

    /**
     * Process submitted feedback
     */
    public function opinion($category, $name)
    {
	// Identify the file where feedback is stored
	$folder = './feedback/';
	$filename = $folder . $category . '-' . $name . '.csv';

	// Build a CSV line for feedback
	// date/time, category, lesson, useful, length, depth, suggestions, name
	$result = '';
	$result .= '"' . date('c') . '"';
	$result .= ','.$this->input->post('useful');
	$result .= ','.$this->input->post('length');
	$result .= ','.$this->input->post('depth');

	$this->load->helper('text');
	$result .= ',"' . $this->input->post('suggestions', true) . '"';
	$result .= ',"' . $this->input->post('yourname', true) . '"';
	$result .= PHP_EOL;

	// Save the feedback
	$this->load->helper('file');
	$message = 'Your input has been recorded, and will be used to help make this course better :)';
	if (!write_file($filename, $result, 'a'))
	{
	    $message = 'Unable to save feedback: ';
	    $error = error_get_last();
	    $message .= $error['message'];
	}
	$this->data['message'] = $message;

	// Be gracious
	$this->data['pagebody'] = 'thanks';
	$this->render();
    }

}

/* End of file Learn.php */
