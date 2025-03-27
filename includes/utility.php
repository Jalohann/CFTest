<?php
/**
 * Utility file for Cloudflare Project
 * Contains header explanations and utility functions
 */

// Get all incoming request headers
function getAllHeadersWithInfo() {
    $headers = getallheaders();
    
    // Get IP country from Cloudflare headers
    $ipCountry = isset($headers['CF-IPCountry']) ? $headers['CF-IPCountry'] : 'Unknown';
    
    // Determine WAF status based on country
    $wafStatus = '';
    $wafStatusClass = '';
    $wafMessage = '';
    
    if ($ipCountry == 'US') {
        $wafStatus = 'Blocked';
        $wafStatusClass = 'danger';
        $wafMessage = 'You are accessing from the United States. WAF is configured to block US traffic. If you\'re seeing this page, WAF may be disabled or misconfigured.';
    } elseif ($ipCountry == 'CA') {
        $wafStatus = 'Challenge Passed';
        $wafStatusClass = 'success';
        $wafMessage = 'You are accessing from Canada. You have successfully passed the Cloudflare challenge.';
    } else {
        $wafStatus = 'Allowed';
        $wafStatusClass = 'info';
        $wafMessage = 'You are accessing from ' . $ipCountry . '. This location is allowed without a challenge.';
    }
    
    return [
        'headers' => $headers,
        'ipCountry' => $ipCountry,
        'wafStatus' => $wafStatus,
        'wafStatusClass' => $wafStatusClass,
        'wafMessage' => $wafMessage
    ];
}

// Mapping of header names to explanation text - expanded to cover more headers
$explanations = [
    "cf-ray"               => "Cloudflare's unique request identifier for this transaction. Every request that passes through Cloudflare gets a unique Ray ID that can be used for troubleshooting.",
    "x-forwarded-for"      => "Shows the original IP address of the client, as passed along by proxies. This helps identify the true origin of the request despite going through intermediaries.",
    "Host"                 => "Indicates the host name from the request URL. Used to determine which virtual host should handle the request when multiple sites are hosted on the same server.",
    "CF-IPCountry"         => "The country code determined by Cloudflare for the connecting IP. Used for geo-targeting, analytics, and WAF rules based on location.",
    "accept-encoding"      => "Lists the content encodings the client can understand (gzip, deflate, etc.). Helps servers send compressed content to save bandwidth when supported.",
    "upgrade-insecure-requests" => "Signals the client's preference for secure (HTTPS) connections. Browsers send this to request that the server upgrade HTTP connections to HTTPS.",
    "X-Forwarded-Proto"    => "Specifies the protocol (HTTP or HTTPS) that was used by the client. Helps maintain protocol awareness when requests pass through proxies.",
    "priority"             => "Represents the priority assigned to this request. Helps browsers communicate how important different resources are.",
    "sec-fetch-dest"       => "Indicates the intended destination of the fetched resource (e.g., document, image). Part of the Fetch Metadata Request Headers that help prevent CSRF attacks.",
    "CF-Visitor"           => "Contains information (in JSON format) about the visitor's protocol (HTTP or HTTPS). Helps Cloudflare determine if a connection was secure.",
    "sec-fetch-user"       => "Signals if the request was triggered by a user action. Helps distinguish between user-initiated requests and automatic ones.",
    "sec-fetch-mode"       => "Describes the mode of the fetch request (e.g., navigate, cors). Provides context about the purpose of the request.",
    "CF-Connecting-IP"     => "The original client IP address as seen by Cloudflare. This is the most reliable way to identify the visitor's true IP.",
    "cdn-loop"             => "Indicates that the request may be caught in a CDN loop. Helps prevent infinite loops between CDNs.",
    "sec-fetch-site"       => "Specifies the relationship between the origin of the request initiator and the requested resource. Helps with security policies.",
    "Connection"           => "Controls whether the network connection remains open after the current transaction. 'keep-alive' maintains the connection for multiple requests.",
    "accept"               => "Specifies the content types that the client is willing to receive. Allows servers to send the most appropriate format.",
    "cache-control"        => "Directives for caching mechanisms in both requests and responses. Controls how content is cached along the request/response chain.",
    "sec-ch-ua"            => "Contains information about the browser's brand and version. Helps with client hints for adaptive serving.",
    "sec-ch-ua-mobile"     => "Indicates whether the client is using a mobile device. Helps with responsive design decisions.",
    "sec-ch-ua-platform"   => "Identifies the platform (operating system) on which the browser is running. Used for analytics and compatibility.",
    "cf-ipcity"            => "The city where Cloudflare believes the visitor is located. Used for geo-targeting and analytics.",
    "cf-connecting-ip"     => "The original IP address of the visitor as detected by Cloudflare.",
    "cf-iplatitude"        => "The approximate latitude of the visitor as determined by Cloudflare's geolocation service.",
    "cf-iplongitude"       => "The approximate longitude of the visitor as determined by Cloudflare's geolocation service.",
    "user-agent"           => "Information about the client browser, operating system, and device. Helps identify the capabilities of the client.",
    "referer"              => "The URL of the page that linked to the resource being requested. Helps track where visitors are coming from.",
    "cookie"               => "Contains stored HTTP cookies previously sent by the server. Helps maintain state between requests.",
    "accept-language"      => "Indicates the natural languages the client prefers. Used for content localization.",
    "cf-challenge"         => "Information about any Cloudflare challenges that the visitor has passed.",
    "cf-waf"               => "Information related to Cloudflare's Web Application Firewall processing of the request.",
    "cf-worker"            => "Indicates if the request was processed by a Cloudflare Worker.",
    "cf-cache-status"      => "Indicates whether a request was served from Cloudflare's cache and its status.",
    "expect-ct"            => "Used for Certificate Transparency enforcement and monitoring.",
    "server"               => "Contains information about the software used by the origin server.",
    "cf-edge-server"       => "Identifies which Cloudflare edge server handled the request."
];

// Function to get explanation for a header
function getHeaderExplanation($headerName, $explanations) {
    return isset($explanations[$headerName]) 
        ? $explanations[$headerName] 
        : "This header provides additional information about the request or response.";
}
?> 