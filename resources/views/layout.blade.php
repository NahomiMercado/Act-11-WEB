<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menus Project</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f6f4ff;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            padding: 20px;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        nav a {
            text-decoration: none;
            color: white;
            padding: 10px 18px;
            border-radius: 10px;
            transition: 0.3s ease;
            font-weight: bold;
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        nav a.active {
            background: white;
            color: #7c3aed;
        }

        main {
            flex: 1;
            padding: 40px 20px;
            max-width: 1000px;
            width: 100%;
            margin: auto;
        }

        .card {
            background: white;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(124, 58, 237, 0.15);
        }

        h1 {
            margin-bottom: 20px;
            color: #6d28d9;
        }

        p {
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .photo-box {
            background: #ede9fe;
            border-radius: 14px;
            padding: 30px;
            text-align: center;
            font-weight: bold;
            color: #5b21b6;
        }

        .contact-info {
            margin-top: 20px;
            padding: 20px;
            background: #ede9fe;
            border-radius: 14px;
        }

        footer {
            background: #4c1d95;
            color: white;
            text-align: center;
            padding: 18px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('photos') }}" class="{{ request()->routeIs('photos') ? 'active' : '' }}">Photos</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        Activity 11 Apps WEB - Nahomi Mercado Loaiza

</body>
</html>