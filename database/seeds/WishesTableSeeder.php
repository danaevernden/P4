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
      $charity_id = \P4\Charity::where('name','=','UNICEF')->pluck('id');
      $user_id = \P4\User::where('email', '=', 'jill@harvard.edu')->pluck('id');
      DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 30,
          'user_id' => $user_id,
          'charity_id' =>  $charity_id,
          'message' => 'Thank you relatives for donating in lieu of gifts!',
          'wrapping_paper_color' => 1,
      ]);

      $charity_id = \P4\Charity::where('name','=','Olivers Heart Fund')->pluck('id');
      $user_id = \P4\User::where('email','=','jill@harvard.edu')->pluck('id');
      DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 100,
          'user_id' => $user_id,
          'charity_id' =>  $charity_id,
          'message' => 'Wishing you the best, Oliver!',
          'wrapping_paper_color' => 2,
      ]);
    $charity_id = \P4\Charity::where('name','=','Big Sister Association of Greater Boston')->pluck('id');
    $user_id = \P4\User::where('email','=','draper@sterlingcooperdraperpryce.com')->pluck('id');
      DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 10,
          'charity_id' =>  $charity_id,
          'user_id' => $user_id,
          'message' => ' Big Sister helps in more ways than we all know!',
          'wrapping_paper_color' => 3,
      ]);

     $charity_id = \P4\Charity::where('name','=','The Magic Yarn Project')->pluck('id');
     $user_id = \P4\User::where('email','=','chapman@oitnb.com')->pluck('id');
    DB::table('wishes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'donation_amnt_request' => 30,
          'user_id' => $user_id,
          'charity_id' => $charity_id,
          'message' => 'mental health, wellness, mind',
          'wrapping_paper_color' => 4,
       ]);
    }
}
