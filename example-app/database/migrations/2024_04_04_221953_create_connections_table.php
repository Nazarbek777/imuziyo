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
        Schema::create('connections', function (Blueprint $table) {
            $table->id();
            $table->string('crm_name_uz');
            $table->string('crm_name_ru')->nullable();
            $table->string('crm_name_en')->nullable();
            $table->string('crm_number');
            $table->string('crm_location_uz')->nullable();
            $table->string('crm_location_ru')->nullable();
            $table->string('crm_location_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('connections');
    }
};
