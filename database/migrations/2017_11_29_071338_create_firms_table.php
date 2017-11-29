<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firm_name', 255);
            $table->text('firm_logo');
            $table->string('email', 255);
            $table->string('mobile', 255);
            $table->text('website');
            $table->string('landline', 255);
            $table->string('state', 255);
            $table->string('city', 255);
            $table->text('address');
            $table->string('pin_code', 255);
            $table->string('pan', 255);
            $table->string('tan', 255);
            $table->string('cin', 255);
            $table->string('gstin', 255);
            $table->string('authorised_signatory', 255);
            $table->string('designation', 255);
            $table->string('contact_person', 255);
            $table->string('certified', 255);
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
        Schema::dropIfExists('firms');
    }
}
