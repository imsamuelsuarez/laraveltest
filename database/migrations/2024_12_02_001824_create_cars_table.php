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

        Schema::create('car_states', function (Blueprint $table) {
            $table->id();
            $table->string('label');
        });

        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->foreignId('state_id')->nullable()->default(1)->constrained('car_states')->default(1);
            $table->foreignIdFor(App\Models\User::class);
            $table->foreignIdFor(App\Models\Employer::class)->constrained('employers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
