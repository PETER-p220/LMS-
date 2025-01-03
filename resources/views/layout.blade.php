<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library Management System')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
            position: relative;
        }

        .header-links {
            position: absolute;
            right: 20px;
            top: 10px;
        }

        .header-links a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-size: 16px;
        }

        .header-links a:hover {
            text-decoration: underline;
        }

        .main-content {
            padding: 50px 20px;
            text-align: center;
        }

        .main-content h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .main-content p {
            font-size: 18px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Header with links -->
    <header>
        <h1>@yield('header-title', 'Library Management System')</h1>
        <div class="header-links">
            <a href="{{ route('user-login') }}">User Login</a>
            <a href="{{ route('admin-login') }}">Admin Login</a>
            <a href="{{ route('signup') }}">Sign Up</a>
        </div>
    </header>

    <!-- Main content area -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Library Management System. All rights reserved.</p>
    </footer>

</body>
</html>
