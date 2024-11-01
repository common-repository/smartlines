<?php
/*
Plugin Name: Smartlines
Plugin URI: http://wordpress.org/extend/plugins/smartlines/
Description: Smartlines intelligently adds HTML break elements.
Version: 1.1
Author: Michael Camilleri
Author URI: http://inqk.net/
License: MIT Licence
*/

/*
Copyright 2010 Michael Camilleri

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

include_once("simple_html_dom.php");

function add_smartlines($content) {
	$html = str_get_html($content);
	
	foreach($html->find('p') as $element){
		//get html in p
		$ihtml = $element->innertext;

		//apply function
		$ihtml = nl2br($ihtml);

		//save
		$element->innertext = $ihtml;
	}

	foreach($html->find('blockquote') as $element){
		//get html in blockquote
		$ihtml = $element->innertext;

		//apply function
		$ihtml = wpautop($ihtml);

		//save
		$element->innertext = $ihtml;
	}

	return $html;
}

add_filter('the_content', 'add_smartlines');

?>