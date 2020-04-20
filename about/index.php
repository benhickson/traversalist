<?php
// for now, load the bootstrap file on each index.php
require '../bootstrap.php';

// include the data
require '../data/authors.php';
require '../data/categories.php';
require '../data/posts.php';

// this page's custom variables
$pagetitle = 'About | '; 		// None. the homepage simply reads "Traversalist"


// build the page
require '../all/layout.file';
