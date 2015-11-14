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

      DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 30,
          'wisher' => 'jill@harvard.edu',
          'charity' => 'UNICEF',
          'hashtags' => 'children',
          'message' => 'Thank you relatives for donating in lieu of gifts!',
          'wrapping_paper_color' => '/public/images/gift1.png',
      ]);

      DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 100,
          'wisher' => 'jill@harvard.edu',
          'charity' => 'Olivers Heart Fund',
          'hashtags' => 'heart, love',
          'message' => 'Wishing you the best, Oliver!',
          'wrapping_paper_color' => '/public/images/gift6.png',
      ]);

      DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 10,
          'wisher' => 'draper@sterlingcooperdraperpryce.com',
          'charity' => 'Red Cross',
          'hashtags' => 'red cross, relief',
          'message' => 'Red Cross helps in more ways than we all know!',
          'wrapping_paper_color' => '/public/images/gift3.png',
      ]);

    DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 30,
          'wisher' => 'piper@oitnb.com',
          'charity' => 'Mental Health America',
          'hashtags' => 'mental health needs to be better understood by all
          of us in society. Donations will help lead the charge.',
          'message' => 'mental health, wellness, mind',
          'wrapping_paper_color' => '/public/images/gift4.png',
       ]);



    }
}
