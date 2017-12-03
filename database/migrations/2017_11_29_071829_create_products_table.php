<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 255);
            $table->string('category', 255);
            $table->string('model', 255);
            $table->string('form', 255);
            $table->string('price', 255);
            $table->string('currency', 255);
            $table->string('strength', 255);
            $table->string('unit', 255);
            $table->string('brand', 255);
            $table->string('manufacturer', 255);
            $table->string('pack_size', 255);
            $table->string('notify_quantity', 255);
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->tinyInteger('is_active');
            $table->tinyInteger('deleted_at');
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
