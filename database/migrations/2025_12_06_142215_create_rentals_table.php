<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('rentals', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('contact_number');
        $table->text('address');
        $table->date('event_date');
        $table->date('pickup_date');
        $table->date('return_date');
        $table->json('selected_items'); // store selected items as JSON
        $table->timestamps();
    });
    }


    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
