@extends('layouts.app')

@section('title', 'About')

@section('content')

<h2 style="color:#800040; font-size:28px; margin-bottom:20px;">About LoveMine Bridal Shop</h2>

<div style="display:flex; flex-wrap:wrap; gap:20px;">
    <div style="flex:1 1 400px; background:#fff; padding:20px; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
        <img src="/images/bridal-shop.jpg" alt="LoveMine Bridal Shop" style="width:100%; height:250px; object-fit:cover; border-radius:8px; margin-bottom:15px;">

        <p>
            LoveMine Bridal Shop has been serving brides and grooms for over 10 years. 
            Our mission is to make your special day unforgettable with our premium wedding gowns, suits, and rental services.
        </p>

        <p>
            We believe every couple deserves elegance, style, and quality. Our expert staff will guide you in selecting the perfect attire for your wedding, reception, and formal events.
        </p>
    </div>

    <div style="flex:1 1 400px; background:#fff; padding:20px; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
        <h3 style="color:#800040; margin-bottom:10px;">Why Choose Us?</h3>
        <ul>
            <li>High-quality gowns and suits for rent or purchase</li>
            <li>Professional and friendly staff</li>
            <li>Wide range of wedding and formal wear options</li>
            <li>Affordable packages and flexible rental plans</li>
        </ul>
    </div>
</div>

@endsection
