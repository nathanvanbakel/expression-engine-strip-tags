<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	// Removing HTML tags with the PHP strip_tags() function: https://secure.php.net/manual/en/function.strip-tags.php
	// Example input: <p>Something <strong>with</strong> all <em>sorts</em> of <a href="something.html" title="Testing title">tags</a>.</p>
	// Example output: Something with all sorts of tags. 
	// Example usage: {exp:striptags}{your_field_with_tags}{/exp:striptags}
	
class striptags {
	
	public static $name         = 'Voorloper.com: Strip Tags';
	public static $version      = '1.0.1';
	public static $author       = 'Nathan van Bakel';
	public static $author_url   = 'https://www.voorloper.com/';
	public static $description  = 'Removes tags from a given bit of data';
	public static $typography   = FALSE;
	
	public $return_data = "";
	
	public function __construct() {
	
	  // Get the information between {exp:striptags} and {/exp:striptags}
		$string = ee()->TMPL->tagdata;
		
		// Strip the tags
		$return_data = strip_tags($string);

    // Return the cleaned data.
		$this->return_data = $return_data;
	}

}

//eof
