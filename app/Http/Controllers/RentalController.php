<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;

class RentalController extends Controller
{
    /**
     * Show rental booking page.
     */
    public function index()
    {
        return view('rental_booking');
    }

    /**
     * Handle rental booking form submission.
     */
    public function confirm(Request $request)
    {
        // Validate inputs
        $request->validate([
            'full_name'       => 'required|string|max:255',
            'contact_number'  => 'required|string|max:50',
            'address'         => 'required|string',
            'event_date'      => 'required|date',
            'pickup_date'     => 'required|date|after_or_equal:event_date',
            'return_date'     => 'required|date|after_or_equal:pickup_date',
            'selected_items'  => 'required|string', // comma-separated string
        ]);

        // Convert comma-separated items to array
        $selectedItemsArray = explode(',', $request->selected_items);

        // Save to database
        $rental = Rental::create([
            'full_name'       => $request->full_name,
            'contact_number'  => $request->contact_number,
            'address'         => $request->address,
            'event_date'      => $request->event_date,
            'pickup_date'     => $request->pickup_date,
            'return_date'     => $request->return_date,
            'selected_items'  => json_encode($selectedItemsArray), // store as JSON
        ]);

        // Redirect to admin dashboard with success message
        return redirect()->route('admin.dashboard')->with('success', 'Rental booking submitted successfully!');
    }
}
