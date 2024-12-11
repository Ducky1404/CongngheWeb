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
        Schema::create('hardware__devices', function (Blueprint $table) {
            $table->id('device_id');
            $table->string('device_name');
            $table->string('device_type');
            $table->boolean('status');
            $table->unsignedBigInteger('center_id'); // Ensure this is unsignedBigInteger
            $table->foreign('center_id')->references('center_id')->on('i_t__centers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware__devices');
    }
};
