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
        Schema::create('accreditation_criteria_material_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accreditation_criteria_id');
            $table->foreign('accreditation_criteria_id', 'fk_accreditation_criteria_id')
                  ->references('id')
                  ->on('accreditation_criterias')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('material_property_id');
            $table->foreign('material_property_id', 'fk_material_property_id')
                  ->references('id')
                  ->on('material_properties')
                  ->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accreditation_criteria_material_properties');
    }
};
