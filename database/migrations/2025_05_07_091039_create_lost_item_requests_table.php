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
        Schema::create('lost_item_requests', function (Blueprint $table) {
            $table->id();
            $table->string('reporter_name');
            $table->string('item_name');
            $table->string('selected_category');
            $table->enum('status', ['Pending', 'Matched', 'Reopened', 'Unresolved'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lost_item_requests');
    }
};
