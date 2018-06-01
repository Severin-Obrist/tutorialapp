<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->increments('id'); //simple way to id each entry
            $table->integer('pid'); //Id of the person who added the entry to the Budget
            $table->integer('bid'); //Id of the Budget that was edited
            $table->string('budgetPosten'); //identifies to which row of the budget the entry was added
            $table->integer('content'); //the value of the entry
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}