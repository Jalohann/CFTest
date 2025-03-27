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
        }
        
        body {
            background-color: #fff5eb;
            color: #333;
            font-family: 'Arial', sans-serif;
            padding-bottom: 40px;
        }
        
        .navbar {
            background-color: var(--cf-orange);
        }
        
        .navbar-brand {
            color: white;
            font-weight: bold;
        }
        
        .hero-section {
            background-color: var(--cf-orange);
            color: white;
            padding: 50px 0;
            margin-bottom: 30px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 15px rgba(246, 130, 31, 0.2);
        }

        .cf-logo-nav {
            height: 30px;
            margin-right: 10px;
        }

        /* Button Styles */
        .btn-base, .report-btn, .bypass-btn {
            padding: 6px 15px;
            border-radius: 20px;
            text-decoration: none;
            margin-left: 10px;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
        }

        .btn-base i, .report-btn i, .bypass-btn i {
            margin-right: 5px;
        }

        .report-btn {
            color: white;
            border: 2px solid white;
        }

        .report-btn:hover {
            background-color: white;
            color: var(--cf-orange);
            text-decoration: none;
        }

        .bypass-btn {
            color: var(--cf-blue);
            border: 2px solid var(--cf-blue);
            background-color: white;
        }

        .bypass-btn:hover {
            background-color: var(--cf-blue);
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../cfassets/cf-logo-v-rgb.png" alt="Cloudflare Logo" class="cf-logo-nav">
                Technical Project
            </a>
            <div class="ms-auto d-flex align-items-center">
                <a href="/proxy.php" class="bypass-btn" target="_blank">
                    <i class="fas fa-shield-alt"></i>Access Part 2
                </a>
                <a href="https://blog.johannrajadurai.com/report1" class="report-btn" target="_blank">
                    <i class="fas fa-file-alt"></i>Report 1
                </a>
                <a href="https://blog.johannrajadurai.com/report2" class="report-btn" target="_blank">
                    <i class="fas fa-file-alt"></i>Report 2
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1><i class="fas fa-cloud"></i> Hi Solutions Engineering Team!</h1>
                    <p class="lead">My name is Johann Rajadurai, and this is my deliverable for Part 1 of the technical project.</p>
                    <p>This application demonstrates the headers received by the origin server and showcases WAF functionality based on geographic location.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container"> 