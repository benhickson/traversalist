<?php
// for now, load the bootstrap file on each index.php
require '../bootstrap.php';

// include the data
require '../data/authors.php';
require '../data/categories.php';
require '../data/posts.php';

// set the page title
$pagetitle = 'Latest Posts | ';

// get the posts
$posts = latest_posts(15);

// build the page
require '../all/outline.file';
