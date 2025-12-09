@extends('layouts.app')

@section('title', 'Admin Dashboard - LoveMine Bridal Shop')

@section('content')
<div style="max-width:1200px; margin:40px auto;">
    <h2 style="color:#800040; font-size:32px; margin-bottom:30px;">Admin Dashboard</h2>

    @if(session('success'))
        <div style="background:#d4edda; color:#155724; padding:10px 15px; border-radius:5px; margin-bottom:20px;">
            {{ session('success') }}
        </div>
    @endif

    <h3 style="margin-bottom:15px;">Rental Bookings</h3>

    <table style="width:100%; border-collapse:collapse; background:white; border-radius:10px; overflow:hidden; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
        <thead style="background:#800040; color:white;">
            <tr>
                <th style="padding:10px; text-align:left;">ID</th>
                <th style="padding:10px; text-align:left;">Full Name</th>
                <th style="padding:10px; text-align:left;">Contact</th>
                <th style="padding:10px; text-align:left;">Event Date</th>
                <th style="padding:10px; text-align:left;">Pickup</th>
                <th style="padding:10px; text-align:left;">Return</th>
                <th style="padding:10px; text-align:left;">Items Selected</th>
                <th style="padding:10px; text-align:left;">Booked At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($rentals as $rental)
            <tr style="border-bottom:1px solid #ccc;">
                <td style="padding:10px;">{{ $rental->id }}</td>
                <td style="padding:10px;">{{ $rental->full_name }}</td>
                <td style="padding:10px;">{{ $rental->contact_number }}</td>
                <td style="padding:10px;">{{ $rental->event_date }}</td>
                <td style="padding:10px;">{{ $rental->pickup_date }}</td>
                <td style="padding:10px;">{{ $rental->return_date }}</td>
                <td style="padding:10px;">
                    @foreach($rental->selected_items as $item)
                        <span style="background:#800040; color:white; padding:2px 6px; border-radius:5px; margin-right:3px; font-size:12px;">{{ $item }}</span>
                    @endforeach
                </td>
                <td style="padding:10px;">{{ $rental->created_at->format('Y-m-d H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="8" style="padding:10px; text-align:center;">No rentals yet.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
