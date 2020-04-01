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

// set the base path for the content
$postcontentpath = '../data/post-content/';

// create a function to create image blocks
function insertImageBlock($image_filename, $caption = null){
	$figcaption = '';
	if ($caption) {
		$figcaption = "\n<figcaption>$caption</figcaption>\n";
	}
	return 	"
<figure class=\"w-richtext-figure-type-image w-richtext-align-fullwidth\"	data-rt-type=\"image\" data-rt-align=\"fullwidth\">
	<div>
		<img src=\"images/$image_filename&height=1070&quality=80&format=jpeg\">
	</div>$figcaption
</figure>
	";
}

// build the page
require '../all/outline.file';

