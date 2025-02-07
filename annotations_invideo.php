<?php
header('Content-Type: text/xml');

// Include config file
include('./config.php');

// URL of the file you want to request
$url = $invidApi . '/api/v1/annotations/' . $_GET['video_id'] . '?source=archive';

// Cache file path
$cache_file = './cache/annotations/' . $_GET['video_id'] . '.json';

// Cache duration in seconds (24 hours)
$cache_duration = 24 * 60 * 60;

// Check if cache file exists and is still valid
if (file_exists($cache_file) && (time() - filemtime($cache_file) < $cache_duration)) {
    // Read data from cache
    $data = file_get_contents($cache_file);
} else {
    // Fetch data from URL
    $data = file_get_contents($url);

    // Save data to cache file
    file_put_contents($cache_file, $data);
}

echo $data;
?>