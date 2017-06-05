<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     ublic function up()
     {
         Schema::create('Categories',function(Blueprint $table)){
           $table->increments('id');
           $table->string('name');
           $table->text('desc');
         }
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('Categories');
     }
}
