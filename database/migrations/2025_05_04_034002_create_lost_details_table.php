<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lost_details', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('location_found');
            $table->string('item_description')->nullable();
            $table->date('date_lost')->nullable();
            $table->string('image')->nullable();
            $table->string('reported_by_email');
            $table->string('reporter_name');
            $table->string('selected_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lost_details');
    }
};
