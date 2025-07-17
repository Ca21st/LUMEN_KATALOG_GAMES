<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Aplikasi')</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 700px;
            margin: 40px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            padding: 32px;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 24px;
            text-align: center;
        }
        nav {
            margin-bottom: 24px;
            text-align: center;
        }
        nav a {
            color: #3498db;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        ul {
            list-style: none;
            padding: 0;
            margin-bottom: 24px;
        }
        li {
            background: #ecf0f1;
            margin-bottom: 10px;
            padding: 16px 20px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .game-info {
            display: flex;
            flex-direction: column;
        }
        .game-title {
            font-weight: bold;
            color: #34495e;
            font-size: 18px;
        }
        .game-genre {
            color: #7f8c8d;
            font-size: 14px;
        }
        .game-dev {
            color: #2980b9;
            font-size: 14px;
        }
        form {
            display: inline;
        }
        button {
            background: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 6px 12px;
            cursor: pointer;
            font-size: 14px;
        }
        button:hover {
            background: #c0392b;
        }
        .form-add {
            display: flex;
            gap: 10px;
            margin-bottom: 0;
            justify-content: center;
        }
        .form-add input, .form-add select {
            padding: 8px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
            font-size: 14px;
        }
        .form-add button {
            background: #27ae60;
        }
        .form-add button:hover {
            background: #219150;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-top: 32px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="/games">Game</a>
            <a href="/developers">Developer</a>
        </nav>
        <hr>
        @yield('content')
    </div>
</body>
</html>