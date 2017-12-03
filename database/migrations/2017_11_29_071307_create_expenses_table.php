<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('voucher_num', 255);
            $table->date('voucher_date');
            $table->text('voucher_comment');
            $table->string('expense_account', 255);
            $table->string('expense_amount', 255);
            $table->text('expense_comment');
            $table->string('paying_account', 255);
            $table->string('paying_amount', 255);
            $table->text('paying_comment');
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
        Schema::dropIfExists('expenses');
    }
}
