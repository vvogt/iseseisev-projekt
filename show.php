<?php

function showPics($path) {

    

    $path = $path .'/*';
    $fileList = glob($path);

    foreach($fileList as $filename){
        list($width, $height, $type, $attr) = getimagesize($filename);
        if ($height < $width) {
            $orientation = 'landscape';
        } else {
            $orientation = 'portrait';
        }
        echo '<div class="galleryThumb ' .$orientation .'"><img src="' .$filename .'"></div>';
    }
}
?>