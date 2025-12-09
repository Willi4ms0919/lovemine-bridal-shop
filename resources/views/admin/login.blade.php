@extends('layouts.app')

@section('title', 'Admin Login - LoveMine Bridal Shop')

@section('content')
<div style="display:flex; justify-content:center; align-items:center; min-height:80vh; background-color:#fff5f8; padding:20px;">
    <div style="background:white; padding:40px; border-radius:15px; box-shadow:0 4px 15px rgba(0,0,0,0.1); max-width:400px; width:100%;">
        <h2 style="text-align:center; color:#800040; margin-bottom:30px;">Admin Login</h2>

        <!-- Success / Error Messages -->
        @if(session('success'))
            <p style="color:green; text-align:center; margin-bottom:15px;">{{ session('success') }}</p>
        @endif

        @if($errors->any())
            <div style="background:#ffe6f2; color:#800040; padding:10px; border-radius:8px; margin-bottom:15px;">
                <ul style="margin:0; padding:0 15px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div style="margin-bottom:20px;">
                <label for="email" style="display:block; margin-bottom:5px;">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    style="width:100%; padding:10px; border-radius:8px; border:1px solid #ccc;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="password" style="display:block; margin-bottom:5px;">Password</label>
                <input type="password" name="password" id="password" required
                    style="width:100%; padding:10px; border-radius:8px; border:1px solid #ccc;">
            </div>

            <button type="submit"
                style="width:100%; background:#800040; color:white; padding:12px; border:none; border-radius:8px; font-weight:bold; cursor:pointer; transition:all 0.3s;">
                Login
            </button>
        </form>

        <p style="text-align:center; margin-top:15px; font-size:14px; color:#666;">
            Return to <a href="{{ route('home') }}" style="color:#800040;">Home</a>
        </p>
    </div>
</div>
@endsection
    