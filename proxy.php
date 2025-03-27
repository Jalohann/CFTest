<?php
// Set error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Target URL
$target_url = 'https://ase.mmitchellse.com';

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

// Set our custom header
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'x-header-set: 15647'
));

// Execute the request
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
    exit;
}

// Get response headers
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$headers = curl_getinfo($ch);

// Close cURL session
curl_close($ch);

// Forward the content type
header('Content-Type: text/html');

// Output the response
echo $response;
?> 