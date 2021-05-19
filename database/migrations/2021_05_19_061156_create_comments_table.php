<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('store_id')->unsigned()->index();
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->date('created_at');
            $table->date('updated_at');
            $table->timestamps();

            $table->foreign('store_id')->references('id')->on('stores_table')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users_table')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
