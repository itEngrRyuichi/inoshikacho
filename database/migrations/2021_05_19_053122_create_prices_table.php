<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('person_type_id')->unsigned()->index();
            $table->bigInteger('plan_id')->unsigned()->index();
            $table->integer('price');
            $table->date('created_at');
            $table->date('updated_at');
            $table->timestamps();

            $table->foreign('person_type_id')->references('id')->on('person_types')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
