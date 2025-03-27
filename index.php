<?php
/**
 * Cloudflare Solutions Engineering Technical Project
 * 
 * This is the main entry point for the application.
 * It shows HTTP headers and WAF functionality demonstration.
 * 
 * Author: Johann Rajadurai
 */

// Include utility file with header explanations and utility functions
require_once 'includes/utility.php';

// Get header information
$headerInfo = getAllHeadersWithInfo();
$headers = $headerInfo['headers'];
$ipCountry = $headerInfo['ipCountry'];
$wafStatus = $headerInfo['wafStatus'];
$wafStatusClass = $headerInfo['wafStatusClass'];
$wafMessage = $headerInfo['wafMessage'];

// Include the page header
require_once 'includes/header.php';

// Include the WAF status component
require_once 'includes/waf_status.php';

// Include the headers table component
require_once 'includes/headers_table.php';

// Include the Cloudflare headers component
require_once 'includes/cloudflare_headers.php';

// Include the page footer
require_once 'includes/footer.php';
?>