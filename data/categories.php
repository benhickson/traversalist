<?php

// real categories
$categories = array(

);

// categories for placeholders
$placeholder_categories = array(
	'anim' => array('name'=>'Animation','slug'=>'animation'),
	'arch' => array('name'=>'Architecture','slug'=>'architecture'),
	'gd' => array('name'=>'Graphic Design','slug'=>'graphic-design'),
	'il' => array('name'=>'Illustration','slug'=>'illustration'),
	'idx' => array('name'=>'Interactive Design','slug'=>'interactive-design'),
	'misc' => array('name'=>'Miscellaneous','slug'=>'miscellaneous'),
	'photo' => array('name'=>'Photo Graphy','slug'=>'photography'),
	'pd' => array('name'=>'Product Design','slug'=>'product-design')
);

// include placeholder categories
$categories = array_merge($categories, $placeholder_categories);