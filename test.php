<?php
/**
 * Simple test file
 * This file tests if the utility.php include is working
 */

// Try to include the utility file
$includeSuccess = false;
try {
    require_once 'includes/utility.php';
    $includeSuccess = true;
    $headerInfo = getAllHeadersWithInfo();
} catch (Exception $e) {
    echo "<p style='color: red;'>Error including utility.php: " . $e->getMessage() . "</p>";
}

// Display results
echo "<h1>Include Test</h1>";

if ($includeSuccess) {
    echo "<p style='color: green;'>Success! utility.php was included successfully.</p>";
    
    // Verify functions work
    echo "<h2>Function Test</h2>";
    
    // Test getAllHeadersWithInfo function
    if (isset($headerInfo) && is_array($headerInfo)) {
        echo "<p style='color: green;'>getAllHeadersWithInfo() function works!</p>";
        echo "<pre>";
        print_r($headerInfo);
        echo "</pre>";
    } else {
        echo "<p style='color: red;'>Error: getAllHeadersWithInfo() function failed.</p>";
    }
    
    // Test explanations variable
    if (isset($explanations) && is_array($explanations)) {
        echo "<p style='color: green;'>$explanations variable exists and has " . count($explanations) . " items.</p>";
    } else {
        echo "<p style='color: red;'>Error: $explanations variable is missing.</p>";
    }
    
    // Test getHeaderExplanation function
    if (function_exists('getHeaderExplanation')) {
        echo "<p style='color: green;'>getHeaderExplanation() function exists.</p>";
        $testExplanation = getHeaderExplanation('Host', $explanations);
        echo "<p>Sample explanation for 'Host': " . $testExplanation . "</p>";
    } else {
        echo "<p style='color: red;'>Error: getHeaderExplanation() function is missing.</p>";
    }
} else {
    echo "<p style='color: red;'>Failed to include utility.php.</p>";
}

echo "<h2>Include Path</h2>";
echo "<pre>" . get_include_path() . "</pre>";

echo "<h2>Current Directory</h2>";
echo "<pre>" . getcwd() . "</pre>";

echo "<h2>Available Files in includes/</h2>";
$includesDir = scandir('includes');
echo "<pre>";
print_r($includesDir);
echo "</pre>";
?> 