<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id')->unique();
            $table->string('patient_name');
            $table->string('patient_ic');
            $table->string('patient_email');
            $table->string('patient_no');
            $table->string('patient_address');
            $table->string('blood_type')->nullable();
            $table->string('patient_weight')->nullable();
            $table->string('patient_height')->nullable();
            $table->string('patient_mhistory')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
