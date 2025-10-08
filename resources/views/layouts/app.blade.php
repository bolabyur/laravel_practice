<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: #7bce33ff;
            padding: 18px;
            text-align: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #4e38ddff;
        }

         .container {
            max-width: 800px;
            margin: 50px auto;
            background: #ebf3beff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(44, 101, 50, 0.1);
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #555;
        }
        </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ url('/profile') }}">Profil</a>
        <a href="{{ url('/kontak') }}">Kontak</a>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
