<?php

if (isset($_GET['height']) || isset($_GET['quality'])) {
	if (!isset($_GET['format'])){
		exit('Custom height or quality requested without setting an output format.');
	}
}

if (isset($_GET['height'])) {
	$_GET['height'] = (int)$_GET['height'];
	if ($_GET['height'] < 10 || $_GET['height'] > 2000) {
		exit('Invalid height requested. Please use an integer from 10 to 2000');
	}
}

if (isset($_GET['quality'])) {
	$_GET['quality'] = (int)$_GET['quality'];
	if ($_GET['quality'] < 5 || $_GET['quality'] > 100) {
		exit('Invalid quality level requested. Please use an integer from 5 to 100');
	}
}

if (isset($_GET['format'])) {
	if (!($_GET['format'] == 'jpeg' 
		// TODO: Enable webp.
		// || $_GET['format'] == 'webp'
		)) {
		// exit('Invalid format requested. Please use either "jpeg" or "webp".');
		exit('Invalid format requested. Please use "jpeg".');
	}
}

$file_requested = $_GET['filename']
				. ($_GET['height'] ? '.'.$_GET['height'].'h' : '')
				. ($_GET['quality'] ? '.q'.$_GET['quality'] : '') 
				. ($_GET['format'] ? '.'.$_GET['format'] : '');

$optimized = 'optimized/'.$file_requested;

if (file_exists($optimized)) {
	
	// serve the file
	header('X-Sendfile: '.__DIR__.'/'.$optimized);
	header('Content-type: image/'.$_GET['format']);
	header('Content-Disposition: inline; filename="'.$file_requested.'"');

	// add a header so these files are cached
	header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60 * 24 * 365 * 10))); // 10 years 
	
	// override the header that prevents these from being cached
	header('Cache-Control: public');

} else {

	// TODO: Re-enable this and integrate the .env file.
	// Check that the request is coming from our site, 
	// to help prevent some malicious script generating tons of files
	// if(parse_url($_SERVER['HTTP_REFERER'])['host'] !== 'benhickson.com') {
		// exit('Files cannot be generated unless requested on a page on benhickson.com');
	// }	

	$original = 'original/'.$_GET['filename'];

	if (!file_exists($original)) {
		exit('Neither an optimized file or a high quality source file exist.');
	}

	// start the imagick class and pass it the original file
	$imagick = new Imagick($original);

	// scale the image - width of zero means it maintains the aspect ratio
	$imagick->scaleImage(0,$_GET['height']);

	// set image compression
	$imagick->setImageCompression(Imagick::COMPRESSION_JPEG2000);

	// set image sampling
	$imagick->setSamplingFactors(array('2x2', '1x1', '1x1'));

	// set the compression quality
	$imagick->setImageCompressionQuality($_GET['quality']);

	// make the jpeg progressive
	// TODO: will this break the .webp when that is added?
	$imagick->setInterlaceScheme(Imagick::INTERLACE_PLANE);

	// strip out any extraneous data from the file
	$imagick->stripImage();

	// write it to a file
	$imagick->writeImage($optimized);

	// serve it to the user
	// TODO: reorganize this to be more DRY
	header('Content-Type: image/'.$_GET['format']);
	echo $imagick->getImageBlob();

}