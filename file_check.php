<?php
/**
 * File Check Script
 * This script checks if all required files exist and are readable
 */

// Define the required files
$requiredFiles = [
    'index.php',
    'headers.php',
    'includes/utility.php',
    'includes/header.php',
    'includes/footer.php',
    'includes/waf_status.php',
    'includes/headers_table.php',
    'includes/cloudflare_headers.php'
];

// Check each file
echo "<h1>File Check Results</h1>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>File</th><th>Status</th><th>Readable</th></tr>";

$allFilesExist = true;

foreach ($requiredFiles as $file) {
    $exists = file_exists($file);
    $readable = is_readable($file);
    
    echo "<tr>";
    echo "<td>{$file}</td>";
    echo "<td>" . ($exists ? "✅ Exists" : "❌ Missing") . "</td>";
    echo "<td>" . ($readable ? "✅ Readable" : "❌ Not Readable") . "</td>";
    echo "</tr>";
    
    if (!$exists || !$readable) {
        $allFilesExist = false;
    }
}

echo "</table>";

if ($allFilesExist) {
    echo "<p style='color: green; font-weight: bold;'>All files exist and are readable. Your project structure is correct!</p>";
} else {
    echo "<p style='color: red; font-weight: bold;'>Some files are missing or not readable. Please check the file paths.</p>";
}

// Show PHP include path
echo "<h2>PHP Include Path</h2>";
echo "<pre>" . get_include_path() . "</pre>";

// Display current directory
echo "<h2>Current Directory</h2>";
echo "<pre>" . getcwd() . "</pre>";

// Display file permissions
echo "<h2>File Permissions</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>File</th><th>Permissions</th><th>Owner</th></tr>";

foreach ($requiredFiles as $file) {
    if (file_exists($file)) {
        $perms = fileperms($file);
        
        // Format permissions string
        $info = substr(sprintf('%o', $perms), -4);
        
        // Get owner - use owner function only if it exists
        $owner = "Unknown";
        if (function_exists('posix_getpwuid') && function_exists('fileowner')) {
            $ownerInfo = posix_getpwuid(fileowner($file));
            $owner = $ownerInfo['name'] ?? 'Unknown';
        }
        
        echo "<tr>";
        echo "<td>{$file}</td>";
        echo "<td>{$info}</td>";
        echo "<td>{$owner}</td>";
        echo "</tr>";
    } else {
        echo "<tr>";
        echo "<td>{$file}</td>";
        echo "<td colspan='2'>File does not exist</td>";
        echo "</tr>";
    }
}

echo "</table>";

// PHP Info
echo "<h2>PHP Version and Server Information</h2>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Unknown') . "</p>";
echo "<p>Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'Unknown') . "</p>";
?> 