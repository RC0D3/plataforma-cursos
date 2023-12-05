<?php

// Navigate three repositories up
$repoPath = '../../..'; // Adjust this based on your project structure

// Construct the full path to the public directory
$publicPath = realpath($repoPath . '/public');
$folderList = [];

// Get all folders in the /public directory
$directories = File::directories($publicPath);

foreach ($directories as $directory) {
  $folderList[] = basename($directory);
}

// Print the list of folders
print_r($folderList);
die();
