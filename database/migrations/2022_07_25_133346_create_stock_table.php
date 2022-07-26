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
        Schema::create('stock', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('size_id')->constrained('sizes');
            $table->integer('quantity');
            $table->unique(['product_id','size_id']);
            $table->integer('image_1')->foreign('image_1')->references('id')->on('images');
            $table->integer('image_2')->foreign('image_2')->references('id')->on('images');
            $table->integer('image_3')->foreign('image_3')->references('id')->on('images');
            $table->integer('image_4')->foreign('image_4')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock');
    }
};
