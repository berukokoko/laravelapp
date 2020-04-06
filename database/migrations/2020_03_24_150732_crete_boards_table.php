<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsrsTable extends Migration
{
  public function up(){
    Shema::create('users',function(Bluprint $table)){
      $table->increments('id');
      $table->string('name');
      $table->string('email')->unique();
      $table->string('password');
      $table->remenberToken();
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('users');
  }
}


// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Migrations\Migration;
//
// class CreteBoardsTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//      public function up(){
//        Schema::create('boards' function (Blueprint $table)){
//          $table->increments('id');
//          $table->integer('person_id');
//          $table->string('title');
//          $table->string('message');
//          $table->timestamps();
//      });
//
//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//      public function down(){
//        Schema::dropIfExists('boards');
//      }
// }
