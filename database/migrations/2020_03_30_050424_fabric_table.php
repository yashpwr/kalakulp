<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FabricTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabric', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('style_no');
            $table->string('material');
            $table->integer('width');
            $table->integer('weight');
            $table->string('feel');
            $table->string('price');
            $table->integer('quantity');
            $table->enum('stock', ['in_stock', 'stock_out']);
            $table->rememberToken();
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
        Schema::dropIfExists('fabric');
    }
}
