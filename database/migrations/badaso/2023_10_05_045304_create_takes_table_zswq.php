<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakesTableZswq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('takes', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('stock_id')->unsigned();
			$table->bigInteger('user_id')->unsigned();
			$table->bigInteger('store_id')->unsigned();
			$table->bigInteger('amount_of_take');
			$table->dateTime('date_of_take');
			$table->timestamps();
        });

        Schema::table('takes', function (Blueprint $table) {
            $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('restrict')->onUpdate('no action');
			$table->foreign('user_id')->references('id')->on('badaso_users')->onDelete('restrict')->onUpdate('no action');
			$table->foreign('store_id')->references('id')->on('stores')->onDelete('restrict')->onUpdate('no action');
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('takes');
    }
}
