<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Djimato SuperApp</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header (Nama User + Logout) -->
    <div class="dashboard-header">
        <div class="user-info">
            Hi, {{ Auth::user()->name }}
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

    <!-- Konten Utama -->
    <div class="dashboard-container">
        <h1 class="title">Welcome to <span class="highlight">Djimato <em>SuperApp</em></span></h1>
        <p class="subtitle">Integrated System Dashboard</p>
        <a href="tel:+628123456789" class="btn-call">📞 Call Admin</a>

        <div class="card-grid">
            <a href="https://docs.google.com/spreadsheets/d/1nkWi-wtG_Scc23-DMQFWNC3-svZy_G5sADe6sdg7QyY/edit?usp=sharing" class="card" target="_blank">
                <div class="icon">📅</div>
                <h3>Booking</h3>
                <p>Manage your reservations with ease and efficiency.</p>
            </a>

            <a href="https://docs.google.com/spreadsheets/d/1MMhC6zgjrtj-j-nC3Qxh4K1VEyYJ4vKxPZQDpjFAduI/edit?usp=sharing" class="card" target="_blank">
                <div class="icon">📢</div>
                <h3>Marketing</h3>
                <p>Promote your products and services to the right audience.</p>
            </a>

            <a href="https://docs.google.com/spreadsheets/d/1WHfuBjWTlh2idLkhiXc8l0FiE9O32zn9KkVh-7cmsbU/edit?gid=939329318#gid=939329318" class="card" target="_blank">
                <div class="icon">📦</div>
                <h3>Stock</h3>
                <p>Track and organize inventory in real-time.</p>
            </a>

            <a href="https://kasirpintar.co.id/" class="card" target="_blank">
                <div class="icon">💰</div>
                <h3>Sales</h3>
                <p>Analyze and boost your sales performance with insights.</p>
            </a>

            <a href="https://docs.google.com/spreadsheets/d/1y6NdXp8BUJschGjNilHROSAOu2ShEJq0Kw2xBKLfLJ0/edit?usp=sharing" class="card" target="_blank">
                <div class="icon">📂</div>
                <h3>Archive</h3>
                <p>Keep all your records safe and easily accessible.</p>
            </a>

            <div class="card">
                <div class="icon">⚙️</div>
                <h3>Settings</h3>
                <p>Configure your preferences and customize your app.</p>
            </div>

            <a href="https://gemini.google.com/app" class="card" target="_blank">
                <div class="icon">🤖</div>
                <h3>Gemini AI</h3>
                <p>Google’s next-gen AI for smart reasoning and assistance.</p>
            </a>
        </div>
    </div>
</body>
</html>
