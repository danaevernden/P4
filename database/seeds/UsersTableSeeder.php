<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $user = \P4\User::firstOrCreate(['email' => 'jill@harvard.edu']);
      $user->first_name = 'Jill';
      $user->last_name = 'Smith';
      $user->city = 'Cambridge';
      $user->state = 'Massachusetts';
      $user->email = 'jill@harvard.edu';
      $user->password = \Hash::make('helloworld');
      $user->save();

      $user = \P4\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
      $user->first_name = 'Jamal';
      $user->last_name = 'Smith';
      $user->city = 'Cambridge';
      $user->state = 'Massachusetts';
      $user->email = 'jamal@harvard.edu';
      $user->password = \Hash::make('helloworld');
      $user->save();

      $user = \P4\User::firstOrCreate(['email' => 'draper@sterlingcooperdraperpryce.com']);
      $user->first_name = 'Don';
      $user->last_name = 'Draper';
      $user->city = 'New York City';
      $user->state = 'New York';
      $user->email = 'draper@sterlingcooperdraperpryce.com';
      $user->password = \Hash::make('helloworlddon');
      $user->save();

      $user = \P4\User::firstOrCreate(['email' => 'chapman@oitnb.com']);
      $user->first_name = 'Piper';
      $user->last_name = 'Chapman';
      $user->city = 'Northampton';
      $user->state = 'Massachusetts';
      $user->email = 'chapman@oitnb.com';
      $user->password = \Hash::make('helloworldpiper');
      $user->save();

      $user = \P4\User::firstOrCreate(['email' => 'tina@bobsburgers.com']);
      $user->first_name = 'Tina';
      $user->last_name = 'Belcher';
      $user->city = 'Newport';
      $user->state = 'Rhode Island';
      $user->email = 'tina@bobsburgers.com';
      $user->password = \Hash::make('helloworldtina');
      $user->save();


#      DB::table('users')->insert([
#          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
#          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
#          'first_name' => 'Tina',
#          'last_name' => 'Belcher',
#          'city' => 'Newport',
#          'state' => 'Rhode Island',
#          'email' => 'tina@bobsburgers.com',
#          'password' => \Hash::make('helloworldtina');
#      ]);



#      DB::table('users')->insert([
#          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
#          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
#          'first_name' => 'Piper',
#          'last_name' => 'Chapman',
#          'city' => 'Northampton',
#          'state' => 'Massachusetts',
#          'email' => 'chapman@oitnb.com',
#          'password' => \Hash::make('helloworldpiper');
#      ]);



#      DB::table('users')->insert([
#          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
#          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
#          'first_name' => 'Don',
#          'last_name' => 'Draper',
#          'city' => 'New York City',
#          'state' => 'New York',
#          'email' => 'draper@sterlingcooperdraperpryce.com',
#          'password' => \Hash::make('helloworlddon');
#      ]);


    #  DB::table('users')->insert([
      #    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      #    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      #    'first_name' => 'Jill',
      #    'last_name' => 'Smith',
      #    'city' => 'Cambridge',
      #    'state' => 'Massachusetts',
      #    'email' => 'jill@harvard.edu',
      #    'password' => \Hash::make('helloworld');
      #]);

      #DB::table('users')->insert([
      #    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      #    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      #    'first_name' => 'Jamal',
      #    'last_name' => 'Smith',
      #    'city' => 'Cambridge',
      #    'state' => 'Massachusetts',
      #    'email' => 'jamal@harvard.edu',
      #    'password' => \Hash::make('helloworld');
    #  ]);

    }
}
