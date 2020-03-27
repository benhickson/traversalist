<?php

// real content
$posts = array(
	'micro-apartments-wont-solve-the-housing-crisis' => array('title'=>'Micro-sized apartments are not NYC\'s solution to the housing crisis',
				'author'=>'kyle','date'=>'2020-03-30','category'=>'cp',
				'image'=>'001-photo1.png','content_html'=>'001-kyle-micro-apartments.html',
				'description'=>'A dissertation on living space.'
	),
	'how-to-fake-an-api' => array('title'=>'How to fake an API when developing your app.',
				'author'=>'ben','date'=>'2020-03-27','category'=>'pr',
				'image'=>'001-photo1.png','content_html'=>'002-ben-fake-api.html',
				'description'=>'A dissertation on living space.'
	)
);

// placeholder content
$placeholder_posts = array(
	'helmut' => array('title'=>'Helmut Lang celebrates taxi drivers worldwide in latest campaign',
						'author'=>'ben','date'=>'2020-03-07','category'=>'photo',
						'image'=>'5e62813d87cd3cc4f44bb295_image-15.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.'),
	'japan' => array('title'=>'Japan house opens in mountainside to foster peak creativity',
						'author'=>'sonia','date'=>'2020-03-06','category'=>'il',
						'image'=>'5e62813d87cd3c4f844bb293_image-14.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.'),
	'bowlcut-launch' => array('title'=>'Bowlcut launch a new summer collection that pays homage to “UK legends”',
						'author'=>'jared','date'=>'2020-02-06','category'=>'arch',
						'image'=>'5e62813d87cd3ccd9c4bb291_image-13.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.'),
	'thousands' => array('title'=>'Thousands of previously unseen photographs by Andy Warhol will be made public this Autumn',
						'author'=>'ian','date'=>'2020-03-06','category'=>'arch',
						'image'=>'5e62813d87cd3cf53f4bb28f_image-12.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.'),
	'london' => array('title'=>'London-based Yinka Ilori’s storytelling furniture',
						'author'=>'jared','date'=>'2020-04-06','category'=>'anim',
						'image'=>'5e62813d87cd3c842b4bb28d_image-11.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.'),
	'israeli' => array('title'=>'Anonymous Israeli art collective Broken Fingaz direct music video for U2 and Beck',
						'author'=>'ben','date'=>'2020-05-06','category'=>'anim',
						'image'=>'5e62813d87cd3c26cc4bb273_image_large.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.'),
	'suzanne' => array('title'=>'Suzanne Saroff’s meticulously arranged photographs alter perceptions',
						'author'=>'jimmy','date'=>'2020-06-06','category'=>'il',
						'image'=>'5e62813d87cd3c06a04bb28b_image-10.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.'),
	'anu-ambasna' => array('title'=>'Anu Ambasna’s playful illustrations celebrate club culture, brown bodies and perfect paunches',
						'author'=>'kyle','date'=>'2020-03-06','category'=>'misc',
						'image'=>'5e62813d87cd3c77044bb289_image-9.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.'),
	'fifa-history' => array('title'=>'A Brief History of the FIFA World Cup Logo',
						'author'=>'sonia','date'=>'2020-03-05','category'=>'il',
						'image'=>'5e62813d87cd3c26cc4bb273_image_large.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.'),
	'la-graphic-design' => array('title'=>'Need a guide to LA’s graphic design scene? Shoplifters’ new issue has got your back',
						'author'=>'ian','date'=>'2020-03-06','category'=>'gd',
						'image'=>'5e62813d87cd3c10c54bb274_image-1.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.'),
	'fred-rowson-years-and-years' => array('title'=>'Fred Rowson directs film for Years and Years',
						'author'=>'kyle','date'=>'2020-03-08','category'=>'gd',
						'image'=>'5e62813d87cd3c48aa4bb275_image-2.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.'),
	'saatchi-fontsmith-collaboration-house-of-st-barnabas' => array('title'=>'M&C Saatchi and Fontsmith collaborate on font collection for House of St Barnabas',
						'author'=>'ian','date'=>'2020-03-04','category'=>'misc',
						'image'=>'5e62813d87cd3c58e54bb276_image-3.jpg','content_html'=>'001-japan-lorem.html',
						'description'=>'Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.')
);

// include placeholder content in posts
if (getenv('ENABLE_PLACEHOLDERS') == 'true') {
	$posts = array_merge($posts, $placeholder_posts);
}

// this helper function can sort an array of assoc_arrays by a particular key
// returns a new array, doesn't modify the existing array
function sort_multi_array ($array, $key_name) {
	uasort($array, function($a, $b) use ($key_name) {
		return $a[$key_name] > $b[$key_name];
    });
	return $array;
}

// returns $limit number of recent posts
function latest_posts($limit){
	global $posts;
	return array_slice(array_reverse(sort_multi_array($posts, 'date')), 0, $limit);
}

// top post, for the homepage banner
$top_post_slug = 'saatchi-fontsmith-collaboration-house-of-st-barnabas';
$top_post = $posts[$top_post_slug];

// returns additional top posts for homepage
function addl_top_posts(){
	global $posts;
	// best if there are either 3 or 6 posts here.
	$addl_top_posts = array_intersect_key($posts, array_flip(
		['thousands','bowlcut-launch','japan']
	));
	return $addl_top_posts;
}

// bottom of pages, "featured", read more
function featured_posts(){
	global $posts;
	// 2 or 4 items
	$featured_posts = array_intersect_key($posts, array_flip(
		['suzanne','london']
	));
	return $featured_posts;
}

// returns the posts by a particular author
function posts_by($author_key){
	global $posts;
	return array_filter($posts, function($post) use ($author_key) {
		return ($post['author'] == $author_key);
	});
}

// returns the posts in a particular category
function posts_in($category_key){
	global $posts;
	return array_filter($posts, function($post) use ($category_key) {
		return ($post['category'] == $category_key);
	});
}
