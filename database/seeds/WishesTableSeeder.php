<?php

use Illuminate\Database\Seeder;

class WishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $charity_id = \App\Charity::where('name','=','UNICEF')->pluck('id');

      DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 30,
          'wisher' => 'jill@harvard.edu',
          'charity' =>  'charity1', # $charity_id, #
          'hashtags' => 'children',
          'message' => 'Thank you relatives for donating in lieu of gifts!',
          'wrapping_paper_color' => '/public/images/gift1.png',
      ]);
  #    $charity_id = \App\Charity::where('name','=','Olivers Heart Fund')->pluck('id');
      DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 100,
          'wisher' => 'jill@harvard.edu',
          'charity' =>  'charity2', #$charity_id,
          'hashtags' => 'heart, love',
          'message' => 'Wishing you the best, Oliver!',
          'wrapping_paper_color' => '/public/images/gift6.png',
      ]);
    #  $charity_id = \App\Charity::where('name','=','Big Sister Association of Greater Boston')->pluck('id');
      DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 10,
          'wisher' => 'draper@sterlingcooperdraperpryce.com',
          'charity' =>  'charity3', # $charity_id,
          'hashtags' => 'red cross, relief',
          'message' => ' Big Sister helps in more ways than we all know!',
          'wrapping_paper_color' => '/public/images/gift3.png',
      ]);

  #   $charity_id = \App\Charity::where('name','=','The Magic Yarn Project')->pluck('id');
    DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 30,
          'wisher' => 'piper@oitnb.com',
          'charity' => #'charity4', #$charity_id,
          'hashtags' => 'Donations will help many young cancer patients.',
          'message' => 'mental health, wellness, mind',
          'wrapping_paper_color' => '/public/images/gift4.png',
       ]);



    }
}
