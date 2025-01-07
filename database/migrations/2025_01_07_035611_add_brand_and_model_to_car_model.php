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
        Schema::table('cars', function (Blueprint $table) {
            $table->foreignId('car_brand_id')->constrained('car_brands');
            $table->foreignId('car_model_id')->constrained('car_models');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            if (Schema::hasColumn('cars', 'car_brand_id')) {
                $table->dropForeign(['car_brand_id']);
                $table->dropColumn('car_brand_id');
            }
            if (Schema::hasColumn('cars', 'car_model_id')) {
                $table->dropForeign(['car_model_id']);
                $table->dropColumn('car_model_id');
            }
        });
    }
};
