<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentalIllnessIcdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mental_IllnessICD', function (Blueprint $table) {
            $table->string('10ClassKind', 50);
            $table->string('10DepthInKind', 50);
            $table->string('icd10Code', 50);
            $table->string('icd10Chapter', 50);
            $table->string('icd10Title', 5000);
            $table->string('illness', 500);
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
        Schema::dropIfExists('Mental_IllnessICD');
    }
}
