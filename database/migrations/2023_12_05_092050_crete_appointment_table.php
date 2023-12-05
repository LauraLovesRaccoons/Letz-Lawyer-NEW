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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('users'); // Keep as it is
            $table->foreignId('lawyers'); // Keep as it is
            $table->foreignId('categories'); // Keep as it is

        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
