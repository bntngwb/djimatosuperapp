<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Djimato SuperApp</title>
    @vite('resources/css/app.css')
    
    <!-- Import Jakarta Sans -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap');
    </style>

    <style>
        :root {
            --green: #1db954;
            --green-hover: #17a744;
            --black: #0a0a0a;
        }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, var(--black) 70%, #003311 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            color: white;
            text-align: center;
        }

        h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .description {
            font-size: 1.1rem;
            font-weight: 400;
            color: #cccccc;
            margin-bottom: 1.5rem;
        }

        .highlight {
            color: var(--green);
            font-style: italic;
        }

        .btn-group {
            display: flex;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn {
            display: inline-block;
            width: 180px;
            text-align: center;
            background-color: var(--green);
            color: white;
            padding: 12px 0;
            border-radius: 999px;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn:hover {
            background-color: var(--green-hover);
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--green);
            color: var(--green);
        }

        .btn-outline:hover {
            background-color: var(--green);
            color: white;
        }
    </style>
</head>
<body>
    <h1>Welcome to Djimato <span class="highlight">SuperApp</span></h1>
    <p class="description">Integrated system dashboard</p>

    <div class="btn-group">
        <a href="{{ route('login') }}" class="btn">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline">Register</a>
    </div>
</body>
</html>
