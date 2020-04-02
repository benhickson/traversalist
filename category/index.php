<?php
// for now, load the bootstrap file on each index.php
require '../bootstrap.php';

// include the data
require '../data/authors.php';
require '../data/categories.php';
require '../data/posts.php';

// if there is an category requested that exists
if (isset($_GET['category']) && ( $category_key = array_search($_GET['category'], array_column($categories, 'slug')) ) !== False ) {
	// continue
} else {
	// redirect to the "latest" page
	header('Location: ../latest');
}

// translate $category_key from a positional integer back into its string
$category_key = array_keys($categories)[$category_key];

// set the category for the current request
$category = $categories[$category_key];

// add the key to the $category variable, then unset the $category_key
$category['key'] = $category_key;
unset($category_key);

// get the category's posts
$posts = posts_in($category['key']);

// set the page title
$pagetitle = $category['name'].' | ';

// build the page
require '../all/outline.file';
