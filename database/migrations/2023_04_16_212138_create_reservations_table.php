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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->references("id")->on("clients")->onDelete('cascade');
            $table->string("reservation_name");
            $table->string("reservation_email");
            $table->integer("reservation_tele");
            $table->dateTime("reservation_date");
            $table->unsignedBigInteger("table_id");
            $table->integer('guest_number');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};