<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    if (!Schema::hasTable('lawyers')) {
        Schema::create('lawyers', function (Blueprint $table) {
            // Your table schema here
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('location');
            $table->string('speciality');
            $table->timestamps();
        });
    }
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers');
    }
};
