<?php
// for now, load the bootstrap file on each index.php
require '../bootstrap.php';

// include the data
require '../data/authors.php';
require '../data/categories.php';
require '../data/posts.php';

// if there is an author requested that exists
if (isset($_GET['author']) && ( $author_key = array_search($_GET['author'], array_column($authors, 'slug')) ) !== False ) {
	// continue
} else {
	// redirect to #team section of the About page
	header('Location: ../about/#team');
}

// translate $author_key from a positional integer back into its string
$author_key = array_keys($authors)[$author_key];

// set the author for the current request
$author = $authors[$author_key];

// add the key to the $author variable, then unset the $author_key
$author['key'] = $author_key;
unset($author_key);

// get the author's posts
$posts = posts_by($author['key']);

// set the page title
$pagetitle = $author['name'].' | ';

// build the page
require '../all/layout.file';
