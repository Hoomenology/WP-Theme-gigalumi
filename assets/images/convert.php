<?php
function convert($dir) {
	$handle  = opendir($dir);
	while ($file = readdir($handle)) {
		if ($file !== '..' && $file !== '.') {
			$f = $dir . '/' . $file;
			if (is_file($f)) {
				to_webp($f);
			} else {
				convert($f);
			}
		}
	}
}

function to_webp($file) {
	$file_type = mime_content_type($file);
	$pathinfo = pathinfo($file);
	$im = '';
	switch ($file_type) {
		case 'image/jpeg':
			$im = imagecreatefromjpeg($file);
			break;
		case 'image/png':
			$im = imagecreatefrompng($file);
			break;
		default:
			break;
	}

	if ($im) {
		imagewebp($im, $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '.webp');
		imagedestroy($im);
	}
}


convert('./');