<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectUsersAndWishes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
       {
           Schema::table('wishes', function (Blueprint $table) {

               # Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
               $table->integer('user_id')->unsigned();

               # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
               $table->foreign('user_id')->references('id')->on('users');

           });
       }

       public function down()
       {
           Schema::table('wishes', function (Blueprint $table) {

               # ref: http://laravel.com/docs/5.1/migrations#dropping-indexes
               # combine tablename + fk field name + the word "foreign"
               $table->dropForeign('wishes_user_id_foreign');

               $table->dropColumn('user_id');
           });
       }
}