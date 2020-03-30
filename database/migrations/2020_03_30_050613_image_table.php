<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImageTable extends Migration
{
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img_name');
            $table->string('post_id');
            $table->enum('img_type', ['fabric', 'product']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('image');
    }
}
