<?php
$publicPath = public_path();
$folderList = [];

// Get all folders in the /public directory
$directories = File::directories($publicPath);

foreach ($directories as $directory) {
    $folderList[] = basename($directory);
}

// You can modify the response format as needed
print_r($folderList);
die();
