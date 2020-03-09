<?php
use Dotenv\Dotenv;

// include composer vendor libraries
require_once 'vendor/autoload.php';

// load the env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// include the data
require 'data/authors.php';
require 'data/categories.php';
require 'data/posts.php';

// this page's custom variables
$pagetitle = ''; 		// None. the homepage simply reads "Traversalist"


// build the page
require 'all/outline.file';

