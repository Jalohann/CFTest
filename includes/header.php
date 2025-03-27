<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cloudflare Solutions Engineering - Johann Rajadurai</title>
    <!-- Include Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Include Flag Icons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css">
    <style>
        :root {
            --cf-orange: #f6821f;
            --cf-blue: #003682;
            --cf-light-blue: #2c7cb0;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Arial', sans-serif;
            padding-bottom: 40px;
        }
        
        .header-table {
            margin-top: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        
        .tooltip-inner {
            max-width: 300px;
            text-align: left;
        }
        
        .navbar {
            background-color: var(--cf-blue);
        }
        
        .navbar-brand {
            color: white;
            font-weight: bold;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--cf-blue) 0%, var(--cf-light-blue) 100%);
            color: white;
            padding: 50px 0;
            margin-bottom: 30px;
            border-radius: 0 0 10px 10px;
        }
        
        .waf-status-card {
            margin-bottom: 30px;
            border: none;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        
        .header-name {
            font-weight: bold;
            color: var(--cf-blue);
        }
        
        .header-explanation {
            color: #666;
            font-size: 0.9rem;
        }
        
        .footer {
            margin-top: 40px;
            padding: 20px 0;
            background-color: #f1f1f1;
            text-align: center;
        }
        
        .cf-logo {
            height: 40px;
        }
        
        .table-header {
            background-color: var(--cf-blue);
            color: white;
        }
        
        .country-flag {
            width: 3em;
            height: 2em;
            margin-right: 10px;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);
            border-radius: 4px;
        }
        
        .country-display {
            display: flex;
            align-items: center;
        }
        
        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 30px;
            font-weight: bold;
            margin-right: 10px;
        }
        
        /* Add responsive text classes */
        .text-break {
            word-break: break-word !important;
            word-wrap: break-word !important;
        }
        
        /* Table responsive styles */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- Cloudflare logo as text for simplicity -->
                <span class="cf-logo-text">Cloudflare</span> | Technical Project
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container-fluid">
            <h1><i class="fas fa-cloud"></i> Hi Solutions Engineering Team!</h1>
            <p class="lead">My name is Johann Rajadurai, and this is my deliverable for Part 1 of the technical project.</p>
            <p>This application demonstrates the headers received by the origin server and showcases WAF functionality based on geographic location.</p>
        </div>
    </div>

    <div class="container"> 