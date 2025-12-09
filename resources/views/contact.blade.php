@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<h2 style="color:#800040; font-size:28px; margin-bottom:20px;">Contact Us</h2>

<div style="display:flex; flex-wrap:wrap; gap:30px;">

    <!-- Contact Form -->
    <div style="flex:1 1 400px; background:#fff; padding:20px; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
        <form action="#" method="POST">
            @csrf

            <label style="font-weight:bold; margin-top:10px;">Full Name:</label>
            <input type="text" name="name" style="width:100%; padding:8px; margin-top:5px; border-radius:5px; border:1px solid #ccc;">

            <label style="font-weight:bold; margin-top:10px;">Email:</label>
            <input type="email" name="email" style="width:100%; padding:8px; margin-top:5px; border-radius:5px; border:1px solid #ccc;">

            <label style="font-weight:bold; margin-top:10px;">Message:</label>
            <textarea name="message" rows="5" style="width:100%; padding:8px; margin-top:5px; border-radius:5px; border:1px solid #ccc;"></textarea>

            <button type="submit" style="margin-top:15px; background:#800040; color:white; padding:10px 20px; border:none; border-radius:8px; cursor:pointer; font-weight:bold;">
                Send Message
            </button>
        </form>
    </div>

    <!-- Contact Info -->
    <div style="flex:1 1 400px; background:#fff; padding:20px; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
        <h3 style="color:#800040; margin-bottom:15px;">Get in Touch</h3>

        <p><strong>Address:</strong> 123 Bridal Street, Manila, Philippines</p>
        <p><strong>Phone:</strong> +63 912 345 6789</p>
        <p><strong>Email:</strong> info@loveminebridal.com</p>
        <p><strong>Business Hours:</strong> Mon–Sat, 9AM – 6PM</p>
    </div>

</div>

@endsection
