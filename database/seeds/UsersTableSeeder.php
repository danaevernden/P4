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
      DB::table('users')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'first_name' => 'Jill',
          'last_name' => 'Smith',
          'city' => 'Cambridge',
          'state' => 'Massachusetts',
          'email' => 'jill@harvard.edu',
          'password' => \Hash::make('helloworld'),
      ]);

        DB::table('users')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Don',
            'last_name' => 'Draper',
            'city' => 'New York City',
            'state' => 'NewYork',
            'email' => 'draper@sterlingcooperdraperpryce.com',
            'password' => \Hash::make('helloworlddon'),
        ]);

          DB::table('users')->insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'first_name' => 'Piper',
              'last_name' => 'Chapman',
              'city' => 'Northampton',
              'state' => 'Massachusetts',
              'email' => 'chapman@oitnb.com',
              'password' => Hash::make('helloworldpiper'),
          ]);

            DB::table('users')->insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'first_name' => 'Tina',
                'last_name' => 'Belcher',
                'city' => 'Newport',
                'state' => 'Rhode Island',
                'email' => 'tina@bobsburgers.com',
                'password' => Hash::make('helloworldtina'),
            ]);

    }
}
