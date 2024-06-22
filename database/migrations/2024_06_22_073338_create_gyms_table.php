<?php

use App\Models\City;
use App\Models\District;
use App\Models\Package;
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
        Schema::create('gyms', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->text('description');
            $table->string('seo_title', 60)->nullable();
            $table->string('seo_description', 160)->nullable();
            $table->string('slug')->unique();
            $table->enum('type', ['male_only', 'female_only', 'both']);
            $table->tinyInteger('rate')->default(0);
            $table->boolean('open')->default(false);
            $table->text('address')->nullable();
            $table->string('location')->nullable();
            $table->boolean('visible')->default(false);
            $table->foreignIdFor(Package::class)->constrained()->noActionOnDelete()->noActionOnUpdate();
            $table->foreignIdFor(City::class)->constrained()->noActionOnDelete()->noActionOnUpdate();
            $table->foreignIdFor(District::class)->constrained()->noActionOnDelete()->noActionOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gyms');
    }
};
