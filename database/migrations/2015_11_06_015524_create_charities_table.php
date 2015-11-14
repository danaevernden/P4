<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charities', function (Blueprint $table) {

          # Increments method will make a Primary, Auto-Incrementing field.
          # Most tables start off this way
          $table->increments('id');

          # This generates two columns: `created_at` and `updated_at` to
          # keep track of changes to a row
          $table->timestamps();

          # The rest of the fields...
          $table->string('name');
          $table->string('description');
          $table->string('city');
          $table->string('state');
          $table->string('hashtags');
          $table->text('mission');
          $table->text('website');
          $table->integer('year_founded');
          $table->string('charity_or_crowdsource');
          $table->string('logo_or_pic');
          # FYI: We're skipping the 'tags' field for now; more on that later.

          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('charities');
    }
}
