@extends('layouts.app')

@section('title', 'Rental Booking - LoveMine Bridal Shop')

@section('content')

<!-- Rental Choice Buttons -->
<div class="rental-choice" style="text-align:center; margin:30px auto 10px auto;">
    <button id="packageBtn" style="background:#800040; color:white; padding:10px 20px; border:none; border-radius:8px; cursor:pointer; margin-right:10px;">Packages</button>
    <button id="soloBtn" style="background:#ccc; color:#000; padding:10px 20px; border:none; border-radius:8px; cursor:pointer;">Solo Selection</button>
</div>

<div class="main-content" style="display:flex; gap:20px; max-width:1200px; margin:0 auto 30px auto; flex-wrap:wrap;">

    <!-- Left Section -->
    <div class="left-section" style="background-color:#ffc0cb; flex:1; padding:20px; border-radius:10px; min-width:300px;">
        <h2>Rental Booking Form - Package A</h2>
        <p>Your Selections:</p>
        <div class="selections" style="display:flex; gap:10px; flex-wrap:wrap;">
            <div class="selection-item" style="background:white; padding:10px; border-radius:8px; flex:1; min-width:150px; text-align:center;">
                <img src="{{ asset('images/gown1.jpg') }}" alt="Gown" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
                <p><strong>Gown</strong></p>
                <p>Size: M</p>
                <p>Color: White</p>
                <p class="selected" style="color:green; font-weight:bold;">Selected</p>
            </div>
            <div class="selection-item" style="background:white; padding:10px; border-radius:8px; flex:1; min-width:150px; text-align:center;">
                <img src="{{ asset('images/suit1.jpg') }}" alt="Suit" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
                <p><strong>Suit</strong></p>
                <p>Size: M</p>
                <p>Color: Black</p>
                <p class="selected" style="color:green; font-weight:bold;">Selected</p>
            </div>
            <div class="selection-item" style="background:white; padding:10px; border-radius:8px; flex:1; min-width:150px; text-align:center;">
                <img src="{{ asset('images/maid1.jpg') }}" alt="Maid of Honor" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
                <p><strong>Maid of Honor</strong></p>
                <p>Size: M</p>
                <p>Color: Sky Blue</p>
                <p class="selected" style="color:green; font-weight:bold;">Selected</p>
            </div>
        </div>
    </div>

    <!-- Right Section (Form) -->
    <div class="right-section" style="background-color:#ffc0cb; flex:1; padding:20px; border-radius:10px; border:2px solid #800040; display:flex; flex-direction:column; justify-content:space-between; min-width:300px; max-height:650px;">
        
        <form method="POST" action="{{ route('rental.confirm') }}" style="flex:1; display:flex; flex-direction:column; justify-content:space-between;">
            @csrf
            <div class="form-content" style="overflow-y:auto; max-height:500px;">
                <h2>Event Details</h2>
                <label>Event Date:</label>
                <input type="date" name="event_date" style="width:100%; padding:8px; margin-top:3px; border-radius:5px; border:1px solid #ccc;">
                
                <label>Pick-up Date:</label>
                <input type="date" name="pickup_date" style="width:100%; padding:8px; margin-top:3px; border-radius:5px; border:1px solid #ccc;">
                
                <label>Return Date:</label>
                <input type="date" name="return_date" style="width:100%; padding:8px; margin-top:3px; border-radius:5px; border:1px solid #ccc;">

                <h2>Personal Details</h2>
                <label>Full Name:</label>
                <input type="text" name="name" style="width:100%; padding:8px; margin-top:3px; border-radius:5px; border:1px solid #ccc;">
                
                <label>Contact Number:</label>
                <input type="text" name="contact" style="width:100%; padding:8px; margin-top:3px; border-radius:5px; border:1px solid #ccc;">
                
                <label>Address:</label>
                <textarea name="address" rows="3" style="width:100%; padding:8px; margin-top:3px; border-radius:5px; border:1px solid #ccc;"></textarea>

                <!-- Hidden field for selected items -->
                <input type="hidden" name="items" id="selectedItems">
            </div>

            <div style="display:flex; justify-content:flex-end; margin-top:15px;">
                <button type="submit" class="confirm-btn" style="background:#7ac74f; color:white; padding:10px 20px; border:none; border-radius:8px; font-weight:bold; cursor:pointer;">Select to Confirm</button>
            </div>
        </form>
    </div>
</div>

<script>
// Package / Solo Toggle
const packageBtn = document.getElementById('packageBtn');
const soloBtn = document.getElementById('soloBtn');
const leftSection = document.querySelector('.left-section');

packageBtn.addEventListener('click', () => {
    packageBtn.style.background = '#800040';
    packageBtn.style.color = 'white';
    soloBtn.style.background = '#ccc';
    soloBtn.style.color = '#000';
    leftSection.innerHTML = `
        <h2>Rental Booking Form - Package A</h2>
        <p>Your Selections:</p>
        <div class="selections" style="display:flex; gap:10px; flex-wrap:wrap;">
            <div class="selection-item" style="background:white; padding:10px; border-radius:8px; flex:1; min-width:150px; text-align:center;">
                <img src="{{ asset('images/hero3.webp') }}" alt="Gown" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
                <p><strong>Gown</strong></p>
                <p>Size: M</p>
                <p>Color: White</p>
                <p class="selected" style="color:green; font-weight:bold;">Selected</p>
            </div>
            <div class="selection-item" style="background:white; padding:10px; border-radius:8px; flex:1; min-width:150px; text-align:center;">
                <img src="{{ asset('images/hero2.webp') }}" alt="Suit" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
                <p><strong>Suit</strong></p>
                <p>Size: M</p>
                <p>Color: Black</p>
                <p class="selected" style="color:green; font-weight:bold;">Selected</p>
            </div>
            <div class="selection-item" style="background:white; padding:10px; border-radius:8px; flex:1; min-width:150px; text-align:center;">
                <img src="{{ asset('images/hero4.webp') }}" alt="Maid of Honor" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
                <p><strong>Maid of Honor</strong></p>
                <p>Size: M</p>
                <p>Color: Sky Blue</p>
                <p class="selected" style="color:green; font-weight:bold;">Selected</p>
            </div>
        </div>
    `;
});

soloBtn.addEventListener('click', () => {
    soloBtn.style.background = '#800040';
    soloBtn.style.color = 'white';
    packageBtn.style.background = '#ccc';
    packageBtn.style.color = '#000';
    leftSection.innerHTML = `
        <h2>Rental Booking Form - Solo Selection</h2>
        <p>Select individual items:</p>
        <div class="selections" style="display:flex; gap:10px; flex-wrap:wrap;">
            <div class="selection-item" style="background:white; padding:10px; border-radius:8px; flex:1; min-width:150px; text-align:center;">
                <img src="{{ asset('images/hero1.jpg') }}" alt="Gown" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
                <p><strong>Gown</strong></p>
                <p>Size: M</p>
                <p>Color: White</p>
                <button style="background:#800040; color:white; border:none; padding:5px 10px; border-radius:5px; cursor:pointer;" onclick="selectItem(this, 'Gown')">Select</button>
            </div>
            <div class="selection-item" style="background:white; padding:10px; border-radius:8px; flex:1; min-width:150px; text-align:center;">
                <img src="{{ asset('images/hero2.webp') }}" alt="Suit" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
                <p><strong>Suit</strong></p>
                <p>Size: M</p>
                <p>Color: Black</p>
                <button style="background:#800040; color:white; border:none; padding:5px 10px; border-radius:5px; cursor:pointer;" onclick="selectItem(this, 'Suit')">Select</button>
            </div>
            <div class="selection-item" style="background:white; padding:10px; border-radius:8px; flex:1; min-width:150px; text-align:center;">
                <img src="{{ asset('images/hero3.webp') }}" alt="Maid of Honor" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
                <p><strong>Maid of Honor</strong></p>
                <p>Size: M</p>
                <p>Color: Sky Blue</p>
                <button style="background:#800040; color:white; border:none; padding:5px 10px; border-radius:5px; cursor:pointer;" onclick="selectItem(this, 'Maid of Honor')">Select</button>
            </div>
        </div>
    `;
});

// Function to add selected items to hidden input
function selectItem(button, itemName){
    button.style.background = 'green';
    button.style.color = 'white';
    const selectedInput = document.getElementById('selectedItems');
    let items = selectedInput.value ? selectedInput.value.split(',') : [];
    if(!items.includes(itemName)){
        items.push(itemName);
    }
    selectedInput.value = items.join(',');
}
</script>

@endsection
