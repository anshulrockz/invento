<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpeningstocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('openingstocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category', 255);
            $table->string('item', 255);
            $table->string('barcode', 255);
            $table->date('expiry_date');
            $table->string('quantity', 255);
            $table->string('cost', 255);
            $table->date('date');
            $table->text('description');
            $table->integer('updated_by');
            $table->integer('created_by');
            $table->tinyInteger('is_active');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('openingstocks');
    }
}
