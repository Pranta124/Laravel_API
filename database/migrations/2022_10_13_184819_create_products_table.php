<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id');
            $table->string('title');
            $table->bigInteger('category_id');
            $table->bigInteger('sub_category_id');
            $table->string('negotiable');
            $table->decimal('price');
            $table->string('condition');
            $table->string('description');
            $table->integer('min_quantity');
            $table->datetime('validity');
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
        Schema::dropIfExists('products');
    }
}
