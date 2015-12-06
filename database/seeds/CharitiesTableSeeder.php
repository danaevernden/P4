<?php

use Illuminate\Database\Seeder;

class CharitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('charities')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'name' => 'UNICEF',
             'description' => 'The United Nations Childrens Fund (UNICEF)
             is a United Nations Program headquartered in New York City that
             provides long-term humanitarian and developmental assistance to
             children and mothers in developing countries.',
             'city' => 'New York City',
             'state' => 'New York',
             'hashtags' => 'children, humanitarian',
             'mission' => 'UNICEF is mandated by the United Nations General
             Assembly to advocate for the protection of childrens rights, to
             help meet their basic needs and to expand their opportunities to
             reach their full potential.',
             'website' => 'http://www.unicef.org/',
             'year_founded' => 1946,
             'charity_or_crowdsource' => 'charity',
             'logo_or_pic' => 'http://spiked.co.zw/wp-content/uploads/unicef-logo.png',
         ]);

         DB::table('charities')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'name' => 'Big Sister Association of Greater Boston',
             'description' => 'Big Sister Association of Greater Boston
             is the only mentoring organization in the United States that
             combines the established, research-based practices of Big
             Brothers Big Sisters of America with a gender-specific lens
              proven to increase positive outcomes for girls.',
             'city' => 'Boston',
             'state' => 'Massachusetts',
             'hashtags' => 'Big Sisters, Boston, mentoring, relationships, women',
             'mission' => 'We ignite girls passion and power to succeed
             through positive mentoring relationships with women and
             enrichment programs that support girls healthy development.',
             'website' => 'http://www.bigsister.org/',
             'year_founded' => 1951,
             'charity_or_crowdsource' => 'charity',
             'logo_or_pic' => 'http://www.ucarecdn.com/48050ac2-ac46-4b76-af04-839e441981b5/-/preview/300x300/',
         ]);

         DB::table('charities')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'name' => 'The Magic Yarn Project',
             'description' => 'Magic Yarn creates soft and beautiful
             yarn wigs for little warriors who are bravely battling cancer.
             Chemo treatments often leave patients bare
             scalps too sensitive for traditional wigs. To create head
             coverings that are warm, comfortable, and  giggle-inducing, Magic
             Yarn volunteers crochet extra-soft "baby" yarn into beanies, and
             then transform them into storybook hairstyles.
             All of our wigs are free to their recipient families, in hospitals
              nationwide. We rely solely on monetary donations to pay for
              supplies, shipping costs, and logistics.',
             'city' => 'Palmer',
             'state' => 'Arkansas',
             'hashtags' => '',
             'website' => 'https://www.gofundme.com/magicyarn',
             'charity_or_crowdsource' => 'crowdsource',
             'logo_or_pic'=> 'https://2dbdd5116ffa30a49aa8-c03f075f8191fb4e60e74b907071aee8.ssl.cf1.rackcdn.com/6039051_1442456198.1327.jpg',
          ]);

           DB::table('charities')->insert([
                 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                 'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                 'name' => 'Olivers Heart Fund',
                 'description' => 'Oliver was born with numerous congenital
                  heart defects and has required many surgeries. His first open
                  heart surgery was within the first few weeks of life. A short
                  5 months later, he had another surgery in which he
                  adversely had a stroke and went into cardiac arrest. This
                  has left him with some cognitive delays and one-sided
                  paralysis. These on-going issues have affected him greatly
                  and at one point landed him on the Heart Transplant List.',
                 'city' => 'Boston',
                 'state' => 'Massachusetts',
                 'hashtags' => 'surgery, children, heart',
                 'website' => 'https://www.gofundme.com/mc92k4g4',
                 'charity_or_crowdsource' => 'crowdsource',
                 'logo_or_pic' => 'https://2dbdd5116ffa30a49aa8-c03f075f8191fb4e60e74b907071aee8.ssl.cf1.rackcdn.com/6837197_1447277431.1248.jpg',
        ]);

    
     }
}
