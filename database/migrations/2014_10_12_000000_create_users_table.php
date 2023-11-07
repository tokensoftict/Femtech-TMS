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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 30)->unique();
            $table->string('phone_number',13);
            $table->string('password');
            $table->string('gender', 10);
            $table->text('address1')->nullable();
            $table->string('city', 20)->nullable();
            $table->string('pincode', 4)->nullable();
            $table->string('profile_pic', 100)->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
