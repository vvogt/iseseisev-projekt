<?php

$newFiles = FALSE;

function renameFiles($path) {
    $path = $path .'/*';
    $fileList = glob($path);
    $idCount = 0;

    //check for largest id from filename
    foreach ($fileList as $filename) {
        $nameCheck = substr($filename, 5, 15);
        
        if($nameCheck == 'vv_porftol') {
            $nameArray = explode(".",$filename);

            $id = substr($nameArray[0], 16,  strlen($nameArray[0])-1);
            
            if ($id > $idCount) {
                $idCount = $id;
            }
        }
    }
    
    $idCount++;

    //if file hasn't been renamed yet, do it
    foreach($fileList as $filename){
        $nameCheck = ''.substr($filename, 5, 10);
        $newName = 'work/vv_portfol_' .$idCount;
         
        if($nameCheck != 'vv_portfol') {
            //change permissions, so thumbnails can be created later
            //chmod($filename, 0755);
            //didn't work, have to change permissions manually after uploading
            
            //change filename
            $extension = explode(".",$filename);
            $newName .= '.' .$extension[1];
            rename($filename, $newName);

            $GLOBALS['newFiles'] = TRUE;
        }
        $idCount++;
    }
}

//checks all thumbnail files and deletes them if they do not have a corresponding file in 'work' folder
function compareAndDelete($path) {
    $path = $path .'/*';
    $fileList = glob($path);

    foreach ($fileList as $fileName) {
        $nameToCheck = ''.substr($fileName, 17, strlen($fileName)-1);
        
        $workPath = 'work/*';
        $workFileList = glob($workPath);
        $fileExists = FALSE;
        foreach ($workFileList as $workFileName) {
            if (substr($workFileName, 5, strlen($workFileName)-1) == $nameToCheck) {
                $fileExists = TRUE;
            }
        }
        
        if ($fileExists == FALSE) {
            unlink($fileName);
        }
    }
}

//creates thumbnail images from files in the 'work' folder
function createThumbs($workPath) {
    $workPath .= '/*';
    $fileList = glob($workPath);

    if ($GLOBALS['newFiles'] == TRUE) {
        foreach ($fileList as $fileName) {
            $oldPath = substr($fileName, 5, strlen($fileName)-1);
            $newPath = 'thumbnails/thumb_' .$oldPath;
    
            if (!file_exists($newPath)) {
                list($width, $height, $type, $attr) = getimagesize($fileName);
                $newWidth = 300;
                $newHeight = $height/($width/$newWidth);
                
                $thumb = imagecreatetruecolor($newWidth, $newHeight);
                
                if ($type == 1) {
                    $source = imagecreatefromgif($fileName);
                } elseif ($type == 2) {
                    $source = imagecreatefromjpeg($fileName);
                } elseif ($type == 3) {
                    $source = imagecreatefrompng($fileName);
                }
    
                imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
    
                if ($type == 1) {
                    imagegif($thumb, $newPath, 100);
                } elseif ($type == 2) {
                    imagejpeg($thumb, $newPath, 100);
                } elseif ($type == 3) {
                    imagepng($thumb, $newPath, 9);
                }
            }
        }
    }
}

//show images from folder
function showPics($path) {
    $path = $path .'/*';
    $fileList = glob($path);
    $idCount = 0;

    foreach($fileList as $filename){

        echo '<img id="' .$idCount .'" src="' .$filename .'" onclick="showPic(' .$idCount .')">';
        $idCount ++;
    }
}
?>