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

/**
 * Class Course
 *
 * Model for a course, with data derived from data/course.xml
 */
//TODO Look at splitting this into additional models, eg Activity, Organizer, Materials
class Course extends CI_Model {

    protected $xml; // root element of our data structure

    /**
     * Constructor.
     */

    public function __construct()
    {
	parent::__construct();

	$this->xml = simplexml_load_file(DATAPATH . 'course.xml');
    }

    /**
     * Accessor for course metadata structure.
     * Convert everything to standard types.
     */
    public function metadata()
    {
	$result = new stdClass();

	// Add all the basic metadata fields
	$result->code = (string) $this->xml->code;
	$result->title = (string) $this->xml->title;
	$result->subtitle = (string) $this->xml->subtitle;
	$result->author = (string) $this->xml->author;
	$result->email = (string) $this->xml->email;
	$result->outline = (string) $this->xml->outline;
	$result->session = (string) $this->xml->session;
	$result->license = (string) $this->xml->license;
	$result->school = (string) $this->xml->school;
	$result->site = (string) $this->xml->site;

	// Add the introduction, preserving nested elements
	$result->intro = (string) $this->xml->intro->asXML();

	// Add the resources bundle
	// Return the sanitized and serializable object
	return $result;
    }

    /**
     * Determine the learning resources needed
     */
    public function resources()
    {
	$result = array();
	foreach ($this->xml->resources->resource as $resource)
	{
	    $one = new stdClass();
	    $one->name = (string) $resource->name;
	    $one->link = (string) $resource->link;
	    $one->desc = (string) $resource->desc;
	    $result[] = $one;
	}
	return $result;
    }

    /**
     * Load & return the materials provided, converted to standard types.
     */
    public function materials()
    {
	$xml = simplexml_load_file(DATAPATH . 'materials.xml');
	$result = array();

	// Build the material groups
	foreach ($xml->group as $group)
	{
	    $bundle = array();
	    $name = (string) $group['name'];

	    foreach ($group->item as $item)
	    {
		$bundle[(string) $item['type']] = $item;
	    }
	    $result[$name] = $bundle;
	}

	// All done
	return $result;
    }

    /**
     * Load & return the course organizer, converted to standard types.
     * //TODO type conversion
     */
    public function organizer()
    {
	$xml = simplexml_load_file(DATAPATH . 'organizer.xml');
	return $xml;
    }

    /**
     * Find & return an activity in the organizer
     */
    public function activity($category, $name)
    {
	$activity = new stdClass();
	$activity->category = $category;
	$activity->name = $name;

	$xml = simplexml_load_file(DATAPATH . 'organizer.xml');
	foreach ($xml->week as $week)
	{
	    foreach ($week->children() as $one)
	    {
		if ($one->getName() == $category)
		{
		    if ($name == (string) $one['name'])
		    {

			// this is the one
			$activity->type = (string) $one['type'];
			$activity->title = (string) $one;
			$activity->duedate = (string) $one['duedate'];
			$activity->link = (string) $one['link'];
			return $activity;
		    }
		}
	    }
	}
	return null;
    }

    /**
     * Find the followup activity for another, according to the organizer
     */
    public function followup($activity)
    {
	$target = $activity->name;  // what we are looking for
	$thereyet = false;     // have we found it?
	// iterate through the organizer
	$xml = simplexml_load_file(DATAPATH . 'organizer.xml');
	foreach ($xml->week as $week)
	{
	    foreach ($week->children() as $one)
	    {
		if (isset($one['name']))
		{
		    // this is *an* activity
		    if ($thereyet)
		    {
			// this *is* the next activity
			$follower = new stdClass();
			$follower->category = $one->getName();
			$follower->name = (string) $one['name'];
			$follower->type = (string) $one['type'];
			$follower->title = (string) $one;
			$follower->duedate = (string) $one['duedate'];
			$follower->link = (string) $one['link'];
			return $follower;
		    } elseif ($target == (string) $one['name'])
		    {
			// we have found our target. now look for the next activity
			$thereyet = true;
		    }
		}
	    }
	}

	// we either didn't find our target, or there is nothing after it
	return null;
    }

    /**
     * Build the internal tags for an activity.
     * Return them as an associative array of tag=>slide# pairs
     */
    public function tags($activity)
    {
	$number = 0; // slide # we are at
	$tags = array();

	$filename = DATAPATH . $activity->category . 's/' . $activity->name . '.xml';
	if (file_exists($filename))
	{
	    $xml = simplexml_load_file($filename);
	    foreach ($xml->slide as $slide)
	    {
		$number++;
		if (isset($slide['tag']))
		{
		    $tags[(string) $slide['tag']] = 'slide' . $number;
		}
	    }
	}

	return $tags;
    }

}