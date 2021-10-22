<?php
if (!function_exists('base64_to_jpeg')) {
	function base64_to_jpeg($base64_string, $output_file) {
		// open the output file for writing
		$ifp = fopen( $output_file, 'wb' ); 
	
		// split the string on commas
		// $data[ 0 ] == "data:image/png;base64"
		// $data[ 1 ] == <actual base64 string>
		$data = explode( ',', $base64_string );
	
		// we could add validation here with ensuring count( $data ) > 1
		fwrite( $ifp, base64_decode( $data[ 1 ] ) );
	
		// clean up the file resource
		fclose( $ifp ); 
	
		return $output_file; 
	}
}

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