@extends('layouts.app')

@section('title', 'Services')

@section('content')

<h2 style="color:#800040; font-size:28px; margin-bottom:20px;">Our Services</h2>

<div style="display:flex; flex-wrap:wrap; gap:20px;">

    <div style="background:#fff; padding:20px; border-radius:10px; flex:1 1 300px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
        <img src="/images/wedding-gown.jpg" alt="Wedding Gown" style="width:100%; height:200px; object-fit:cover; border-radius:5px;">
        <h3 style="color:#800040; margin-top:15px;">Wedding Gown Rental</h3>
        <p>Rent beautiful wedding gowns for your special day.</p>
    </div>

    <div style="background:#fff; padding:20px; border-radius:10px; flex:1 1 300px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
        <img src="/images/suit-rental.jpg" alt="Suit Rental" style="width:100%; height:200px; object-fit:cover; border-radius:5px;">
        <h3 style="color:#800040; margin-top:15px;">Suit Rental</h3>
        <p>Premium suits for weddings and formal events.</p>
    </div>

</div>

@endsection
