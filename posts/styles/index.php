<?php
// for now, load the bootstrap file on each index.php
require '../../bootstrap.php';

// include the data
require '../../data/authors.php';
require '../../data/categories.php';
require '../../data/posts.php';

// set the page title for the <head>
$pagetitle = 'Post styles'.' | '; 		// Gets prepended to 'Traversalist'

// set a fake post to leverage pagecontent.file
$slug = 'styles';
$post = array('title'=>'Styles available in posts',
			'author'=>'ben','date'=>'2020-03-27','category'=>'pr',
			'image'=>'001-photo1.png','content_html'=>'styles-content.html',
			'description'=>'A demonstration.');

// set the base path for the content
$postcontentpath = './';

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
require '../../all/layout.file';
