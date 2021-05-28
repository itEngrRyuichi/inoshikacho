<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('store_name', 50);
            $table->string('postal', 7);
            $table->string('address', 100);
            $table->string('phone');
            $table->string('email')->nullable();
            $table->text('description', 1000)->nullable();
            $table->text('access', 1000)->nullable();
            $table->bigInteger('store_type_id')->unsigned()->index();
            $table->bigInteger('area_id')->unsigned()->index();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('store_type_id')->references('id')->on('store_types')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
