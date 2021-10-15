<?php
if (!function_exists('create_thumbnail')) {
    function create_thumbnail($path, $file = null, $prefix = 'thumb_', $width = 200)
    {
		$thumbnails = service('thumbnails');
		$thumbnails->setImageType(IMAGETYPE_JPEG);
		$thumbnails->setWidth($width);

		if(!empty($file)){
			if(file_exists($path.'/'.$file)){
				$thumbnails->create($path.'/'.$file, $path.'/'.$prefix.$file);
			}
		}
    }
}

if (!function_exists('unlink_file')) {
    function unlink_file($path, $file = null)
    {
		$result = false;
		if(!empty($file)){
			if(file_exists($path.'/'.$file)){
				unlink($path.'/'.$file);
				$result = true;
			} 
		}

		return false;
    }
}