<?php
/**
 * Simple headers display page
 * This is a lightweight version that just shows the raw headers
 */

// Include utility file for utility functions
require_once 'includes/utility.php';

// Get headers
$headerInfo = getAllHeadersWithInfo();
$headers = $headerInfo['headers'];

// Set content type
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTTP Headers - Cloudflare Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .header-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .alert-info {
            margin-bottom: 20px;
        }
        .text-break {
            word-break: break-word !important;
            word-wrap: break-word !important;
        }
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="alert alert-info">
            <h4>Simple Header Display</h4>
            <p>This is a simple utility page that displays raw HTTP headers. For a more comprehensive view with explanations, please visit the <a href="index.php" class="alert-link">main page</a>.</p>
        </div>
        
        <div class="header-container">
            <h2>Raw HTTP Headers</h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 30%">Header Name</th>
                            <th style="width: 70%">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($headers as $name => $value): ?>
                        <tr>
                            <td class="fw-bold"><?= htmlspecialchars($name) ?></td>
                            <td class="text-break"><?= htmlspecialchars($value) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="mt-4 text-center">
            <a href="index.php" class="btn btn-primary">Go to Main Page</a>
        </div>
    </div>
</body>
</html>
