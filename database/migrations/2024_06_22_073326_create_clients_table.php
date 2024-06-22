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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->unique();
            $table->string('verify_code')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('national_code')->unique();
            $table->string('father_name')->nullable();
            $table->date('birthday')->nullable();
            $table->text('address')->nullable();
            $table->string('subscription_code')->nullable();
            $table->dateTime('subscription_end_date')->default(0);
            $table->integer('subscription_remaining_sessions')->default(0);
            $table->unsignedInteger('active_package')->nullable();
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
