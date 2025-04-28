<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTableYknt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('stocks', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->string('item_name', 255);
			$table->bigInteger('type_id')->unsigned();
			$table->bigInteger('branch_id')->unsigned();
			$table->bigInteger('amount_of_stock');
			$table->dateTime('date_of_entry');
			$table->timestamps();
        });

        Schema::table('stocks', function (Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('types')->onDelete('restrict')->onUpdate('no action');
			$table->foreign('branch_id')->references('id')->on('branches')->onDelete('restrict')->onUpdate('no action');
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
        Schema::dropIfExists('stocks');
    }
}
