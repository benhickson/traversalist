<?php

// real categories
$categories = array(
	'cp' => array('name'=>'Cities and Society', 'slug'=>'cities-and-society'),
	'pr' => array('name'=>'Programming', 'slug'=>'programming'),
	'tech' => array('name'=>'Technology', 'slug'=>'technology')
);

// categories for placeholders
$placeholder_categories = array(
	'anim' => array('name'=>'Animation','slug'=>'animation'),
	'arch' => array('name'=>'Architecture','slug'=>'architecture'),
	'gd' => array('name'=>'Graphic Design','slug'=>'graphic-design'),
	'il' => array('name'=>'Illustration','slug'=>'illustration'),
	'idx' => array('name'=>'Interactive Design','slug'=>'interactive-design'),
	'misc' => array('name'=>'Miscellaneous','slug'=>'miscellaneous'),
	'photo' => array('name'=>'Photography','slug'=>'photography'),
	'pd' => array('name'=>'Product Design','slug'=>'product-design')
);

// include placeholder categories
if (getenv('ENABLE_PLACEHOLDERS') == 'true') {
	$categories = array_merge($categories, $placeholder_categories);
}