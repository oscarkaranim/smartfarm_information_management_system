<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('supplier_contact')->nullable();
            $table->string('supplier_name')->nullable();
            $table->string('date')->nullable();
            $table->string('commodity')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->bigInteger('unit_price')->nullable();
            $table->bigInteger('total_amount')->nullable();


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
        Schema::dropIfExists('supplies');
    }
}
