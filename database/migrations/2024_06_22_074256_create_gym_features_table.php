<?php

use App\Models\Feature;
use App\Models\Gym;
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
        Schema::create('gym_features', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Gym::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Feature::class)->constrained()->cascadeOnDelete();
            $table->unique(['gym_id', 'feature_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_features');
    }
};
