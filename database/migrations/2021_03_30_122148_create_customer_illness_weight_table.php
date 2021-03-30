<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerIllnessWeightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customer_IllnessWeight', function (Blueprint $table) {
            $table->integer('CustomerID');
            $table->integer('Weight_CI');
            $table->integer('Weight_GI');
            $table->integer('Weight_MI');
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
        Schema::dropIfExists('Customer_IllnessWeight');
    }
}
