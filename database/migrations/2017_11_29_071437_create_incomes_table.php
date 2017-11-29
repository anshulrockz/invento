<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('voucher_num', 255);
            $table->date('voucher_date');
            $table->text('voucher_comment');
            $table->string('income_account', 255);
            $table->string('income_amount', 255);
            $table->text('income_comment');
            $table->string('income_from', 255);
            $table->string('income_from_amount', 255);
            $table->text('income_from_comment');
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
        Schema::dropIfExists('incomes');
    }
}
