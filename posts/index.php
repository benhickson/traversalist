<?php
// for now, load the bootstrap file on each index.php
require '../bootstrap.php';

// include the data
require '../data/authors.php';
require '../data/categories.php';
require '../data/posts.php';

// if there is a post slug requested that exists
if (isset($_GET['slug']) && array_key_exists($_GET['slug'], $posts)) {
	// continue
} else {
	// redirect to the homepage
	header('Location: ..');	
}

// set the slug variable, grab the post itself, and set the page title for the <head>
$slug = $_GET['slug'];
$post = $posts[$slug];
$pagetitle = substr($posts[$slug]['title'], 0, 50).'...'.' | '; 		// Gets prepended to 'Traversalist'

// build the page
require '../all/outline.file';

