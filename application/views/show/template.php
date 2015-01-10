<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * views/show/template.php
 *
 * Template page for a course slideshow
 *
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>{pagetitle}</title>
        <link rel="icon" type="image/png" href="/assets/images/ci-icon.png" />
        <!-- metadata -->
	<meta name="generator" content="S5" />
	<meta name="version" content="S5 1.3" />
	<meta name="presdate" content="Winter2015" />
        <meta name="author" content="{author}" />
        <meta name="company" content="BCIT" />
	<!-- meta extensions -->
	<meta name="subject" content="[subject]" />
	<meta name="creator" content="[creator]" />
	<meta name="contributor" content="[contributor]" />
	<meta name="publisher" content="[publisher]" />
	<!-- meta temporary -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
        <!-- configuration parameters -->
        <meta name="defaultView" content="slideshow" />
        <meta name="controlVis" content="hidden" />
	<!-- configuration extensions -->
	<meta name="tranSitions" content="false" />
	<meta name="fadeDuration" content="500" />
	<meta name="incrDuration" content="250" />
	<!-- configuration autoplay extension -->
	<meta name="autoMatic" content="false" />
	<meta name="playLoop" content="false" />
	<meta name="playDelay" content="10" />
	<!-- configuration audio extension -->
	<meta name="audioSupport" content="false" />
	<meta name="audioVolume" content="100" />
	<meta name="audioError" content="false" />
	<!-- configuration audio debug -->
	<meta name="audioDebug" content="false" />
        <!-- style sheet links -->
        <link rel="stylesheet" href="/assets/ui/advanced_gfx/slides.css" type="text/css" media="projection" id="slideProj" />
        <link rel="stylesheet" href="/assets/ui/advanced_gfx/outline.css" type="text/css" media="screen" id="outlineStyle" />
        <link rel="stylesheet" href="/assets/ui/advanced_gfx/print.css" type="text/css" media="print" id="slidePrint" />
        <link rel="stylesheet" href="/assets/ui/advanced_gfx/opera.css" type="text/css" media="projection" id="operaFix" />
        <link rel="stylesheet" href="/assets/css/my.css" type="text/css" media="all" id="myStuff" />
    </head>
    <body>

	<div class="layout">
	    <div id="controls"><!-- DO NOT EDIT --></div>
	    <div id="currentSlide"><!-- DO NOT EDIT --></div>
	    <div id="header">
		<img class="scale logo" width="89" height="89" 
		     src="/assets/images/tl-ci.png" alt="CodeIgniter" title="CodeIgniter" />
		<object type="application/x-shockwave-flash" 
			data="assets/obj/flash/relog.swf" width="80" height="80" 
			class="scale clock" classid="CLSID:D27CDB6E-AE6D-11cf-96B8-444553540000" 
			codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=6,0,0,0">
		    <param name="movie" value="assets/obj/flash/relog.swf" />
		    <param name="wmode" value="transparent" />
		    <param name="quality" value="high" />
		    <param name="menu" value="true" />
		    <param name="bgcolor" value="#000000" />
		</object>
	    </div>
	    <div id="footer">
		<h1>{subtitle}</h1>
		<h2>{status} {name}</h2>
	    </div>
	</div>

	<div class="presentation">
	    {intro_slide}
	    {slides}
	    {congrats}
	</div>

	<div class="handout">
	</div>

	<div class="notes">
	</div>

	<script src="/assets/ui/advanced_gfx/slides.js"></script>
    </body>
</html>
