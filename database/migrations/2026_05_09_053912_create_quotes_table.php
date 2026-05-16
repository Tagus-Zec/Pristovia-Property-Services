<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            // Step 1: Info
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            
            // Step 2: Property
            $table->string('property_type');
            
            // Step 3: Service
            $table->string('service_requested');
            
            // Step 4: Location
            $table->string('location');
            $table->string('other_city')->nullable();
            
            // Step 5: Condition
            $table->string('property_condition');
            
            // Step 6: Date
            $table->date('preferred_date');
            
            // Step 7: Message
            $table->text('final_message')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
