<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LoveMine Bridal Shop')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* ---------------- General Styles ---------------- */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff5f8;
            color: #333;
        }

        a {
            text-decoration: none;
        }

        button {
            border: none;
            font: inherit;
            cursor: pointer;
        }

        /* ---------------- Header ---------------- */
        header {
            background-color: #800040;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            flex-wrap: wrap;
        }

        header h1 {
            font-family: 'Georgia', serif;
            font-size: 28px;
            margin: 0;
        }

        /* ---------------- Navigation ---------------- */
        nav a, nav button {
            display: inline-flex;
            align-items: center;
            margin-left: 20px;
            padding: 5px 12px;
            border-radius: 6px;
            transition: all 0.3s ease;
            color: #fff;
            font-weight: bold;
        }

        nav a i, nav button i {
            margin-right: 6px;   /* space between icon and text */
            font-size: 16px;     /* icon size */
        }

        nav a:hover, nav button:hover {
            background-color: #a00060;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(128, 0, 64, 0.4);
        }

        /* Admin Button */
        .admin-btn {
            background: #fff;
            color: #800040 !important;
        }

        .admin-btn:hover {
            background: #ffe6f2 !important;
        }

        /* ---------------- Main Content ---------------- */
        main {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* ---------------- Footer ---------------- */
        footer {
            text-align: center;
            padding: 40px 20px;
            background-color: #800040;
            color: white;
            margin-top: 50px;
            font-size: 14px;
            border-radius: 20px 20px 0 0;
        }

        footer h2 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        footer p.subtitle {
            font-size: 18px;
            opacity: 0.85;
            margin-bottom: 25px;
        }

        footer .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }

        footer .social-icons a {
            color: white;
            font-size: 28px;
        }

        footer p.copyright {
            margin-top: 25px;
            opacity: 0.6;
            font-size: 14px;
        }

        /* ---------------- Responsive ---------------- */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }
            nav a, nav button {
                display: block;
                margin: 8px 0 0 0;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>LoveMine Bridal Shop</h1>

    <nav>
        <a href="{{ route('home') }}">
            <i class="fa-solid fa-house"></i> Home
        </a>
        <a href="{{ route('rental.booking') }}">
            <i class="fa-solid fa-calendar-days"></i> Rent
        </a>
        <a href="{{ route('services') }}">
            <i class="fa-solid fa-concierge-bell"></i> Services
        </a>
        <a href="{{ route('contact') }}">
            <i class="fa-solid fa-envelope"></i> Contact
        </a>
        <a href="{{ route('about') }}">
            <i class="fa-solid fa-info-circle"></i> About
        </a>

        {{-- Admin Login --}}
        @guest
            <a href="{{ route('admin.login') }}" class="admin-btn">
                <i class="fa-solid fa-right-to-bracket"></i> Login
            </a>
        @endguest

        {{-- Admin Logout --}}
        @auth
            @if(Auth::user()->is_admin)
                <form method="POST" action="{{ route('admin.logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="admin-btn">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </button>
                </form>
            @endif
        @endauth
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <h2>LoveMine Bridal Shop</h2>
    <p class="subtitle">Bridal & Formal Wear</p>

    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-tiktok"></i></a>
    </div>

    <p class="copyright">© 2025 LoveMine Bridal Shop. All Rights Reserved.</p>
</footer>

</body>
</html>
<script>
    // Example script to handle active navigation link
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('nav a');

        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.style.backgroundColor = '#a00060';
                link.style.transform = 'translateY(-3px)';
                link.style.boxShadow = '0 4px 12px rgba(128, 0, 64, 0.4)';
            }
        });
    });