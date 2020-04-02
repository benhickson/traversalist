<?php

$authors = array(
	'kyle' => array('name'=>'Kyle Nutter', 'slug'=>'kyle-nutter','role'=>'Author','image'=>'kyle.jpg','bio'=>'Jared\'s bio, website link.'),
	'ben' => array('name'=>'Ben Hickson', 'slug'=>'ben-hickson','role'=>'Author','image'=>'5e62813d87cd3c6f994bb2a0_10.jpg','bio' => 'Ben Hickson is a programmer and filmmaker based in Brooklyn, NY.<br><br>He is a student at Flatiron School and makes films with <a href="villahouse.tv" target="_blank">Villa House Pictures</a>. You can see his portfolio at <a href="benhickson.com" target="_blank">benhickson.com</a>')
);

$placeholder_authors = array(
	'sonia' => array('name'=>'Sonia Laamoui-Hickson', 'slug'=>'sonia-laamoui-hickson','role'=>'Author','image'=>'asdfhkaty8394husfa.png','bio'=>'Sonia\'s bio'),
	'ian' => array('name'=>'Ian Cavnar', 'slug'=>'ian-cavnar','role'=>'Author','image'=>'5e62813d87cd3c02784bb29d_7.jpg','bio'=>'Ian\'s bio, website link.'),
	'jared' => array('name'=>'Jared Schneiderman', 'slug'=>'jared-schneiderman','role'=>'Author','image'=>'5e62813d87cd3cd2434bb29b_5.jpg','bio'=>'Jared\'s bio, website link.'),
	'jimmy' => array('name'=>'Jimmy Sudekum', 'slug'=>'jimmy-sudekum','role'=>'Author','image'=>'5e62813d87cd3cb0ae4bb297_1.jpg','bio'=>'Jimmy\'s bio, website link.')
);

// include placeholder authors
if (getenv('ENABLE_PLACEHOLDERS') == 'true') {
	$authors = array_merge($authors, $placeholder_authors);
}
