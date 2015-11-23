<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishes', function (Blueprint $table) {

        # Increments method will make a Primary, Auto-Incrementing field.
        # Most tables start off this way
        $table->increments('id');

        # This generates two columns: `created_at` and `updated_at` to
        # keep track of changes to a row
        $table->timestamps();

        # The rest of the fields...
        $table->string('donation_amnt_request');
  #      $table->string('wisher');
        $table->string('material_gift');
        $table->string('hashtags');
        $table->text('message');
        $table->integer('wrapping_paper_color');
        # FYI: We're skipping the 'tags' field for now; more on that later.
        $table->integer('charity_id')->unsigned();
        });

        Schema::table('wishes', function($table) {
       $table->foreign('charity_id')->references('id')->on('charities');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('wishes', function (Blueprint $table) {

          # ref: http://laravel.com/docs/5.1/migrations#dropping-indexes
          # combine tablename + fk field name + the word "foreign"
          $table->dropForeign('wishes_charity_id_foreign');

          $table->dropColumn('charity_id');
        });
        Schema::drop('wishes');
    }
}
