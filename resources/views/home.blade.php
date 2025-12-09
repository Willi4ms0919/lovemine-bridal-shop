
ۦۦۦۦ
@extends('layouts.app')

@section('title', 'Home')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* HERO SLIDER */
.hero-slider { position: relative; width: 100%; overflow: hidden; margin-bottom:30px; }
.hero-slide { width: 100%; height: 450px; object-fit: cover; display: none; }
.hero-slide.active { display: block; }

/* REPEATING BANNERS */
.banner { width:100%; margin:40px 0; position:relative; }
.banner img { width:100%; height:300px; object-fit:cover; border-radius:6px; }

/* RENT BUTTON ON BANNER */
.banner-btn {
    position:absolute;
    left:50%;
    top:50%;
    transform:translate(-50%, -50%);
    background:rgba(255,255,255,0.85);
    color:#800040;
    padding:14px 30px;
    border-radius:12px;
    font-size:22px;
    font-weight:bold;
    text-decoration:none;
    transition:0.3s;
}
.banner-btn:hover {
    background:#800040;
    color:white;
}

/* SERVICES GRID */
.services-section {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 15px;
    margin: 50px 0;
}
.service-card {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
}
.service-card img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    transition: 0.4s ease;
}
.service-card:hover img {
    transform: scale(1.1);
}
.service-title {
    position: absolute;
    bottom: 0;
    width: 100%;
    background: rgba(255,255,255,0.85);
    color: #800040;
    text-align: center;
    padding: 10px;
    font-weight: bold;
    text-transform: uppercase;
}

/* RENTAL PACKAGES */
.rental-package {
    flex:1 1 300px; background:#fff; padding:25px; border-radius:15px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
}
.rental-package h3 { color:#800040; }
.rental-package a {
    display:inline-block; margin-top:15px; background:#800040;
    color:white; padding:8px 20px; border-radius:10px; text-decoration:none;
}
</style>

<!-- HERO TEXT -->
<section style="background:#800040; color:white; padding:50px 20px; text-align:center; border-radius:10px;">
    <h1>Welcome to LoveMine Bridal Shop</h1>
    <p>Elegant gowns, stylish suits, premium rental services</p>
</section>

<!-- HERO SLIDER -->
<div class="hero-slider" id="heroSlider">
    <img src="{{ asset('imagess/imagesss.png') }}" class="hero-slide active">
    <img src="{{ asset('images/hero2.jpg') }}" class="hero-slide">
    <img src="{{ asset('images/hero3.jpg') }}" class="hero-slide">
    <img src="{{ asset('images/hero4.jpg') }}" class="hero-slide">
    <img src="{{ asset('images/hero5.jpg') }}" class="hero-slide">
</div>

<!-- FOUR IMAGE SECTION -->
<section class="services-section">
    <div class="service-card">
        <img src="{{ asset('images/hero1.jpg') }}">
        <div class="service-title">Bouquet</div>
    </div>
    <div class="service-card">
        <img src="{{ asset('images/hero2.webp') }}">
        <div class="service-title">Invitations</div>
    </div>
    <div class="service-card">
        <img src="{{ asset('images/hero3.webp') }}">
        <div class="service-title">Giveaways</div>
    </div>
    <div class="service-card">
        <img src="{{ asset('images/hero4.webp') }}">
        <div class="service-title">Accessories</div>
    </div>
</section>

<!-- BANNER WITH RENT BUTTON -->
<div class="banner">
    <img src="{{ asset('images/rings.webp') }}">
    <a href="{{ route('rental.booking') }}" class="banner-btn">RENT NOW</a>
</div>

<!-- FEATURED PRODUCTS -->
<section>
    <h2 style="color:#800040">Featured Products</h2>
    <div style="display:flex;flex-wrap:wrap;gap:20px">
        @foreach($featuredProducts as $product)
            <div style="flex:1 1 250px;background:white;padding:15px;border-radius:10px">
                <img src="{{ $product->image }}" style="width:100%;height:200px;object-fit:cover">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <strong>₱{{ number_format($product->price,2) }}</strong><br>
                <a href="{{ route('product.show', $product->id) }}">View Details</a>
            </div>
        @endforeach
    </div>
</section>

<!-- RENTAL PACKAGES -->
<section>
    <h2 style="text-align:center;color:#800040">Rental Packages</h2>
    <div style="display:flex;justify-content:center;gap:30px;flex-wrap:wrap">
        <div class="rental-package">
            <h3>Package A</h3>
            <p>Gown + Suit + Maid of Honor</p>
            <strong>₱12,000</strong><br>
            <a href="{{ route('rental.booking') }}">Book Now</a>
        </div>
        <div class="rental-package">
            <h3>Package B</h3>
            <p>Gown + Groom Suit</p>
            <strong>₱8,500</strong><br>
            <a href="{{ route('rental.booking') }}">Book Now</a>
        </div>
    </div>
</section>

<!-- HERO SLIDER SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.hero-slide');
    let index = 0;
    setInterval(() => {
        slides[index].classList.remove('active');
        index = (index + 1) % slides.length;
        slides[index].classList.add('active');
    }, 4000);
});
</script>

@endsection