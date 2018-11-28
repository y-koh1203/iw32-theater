<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            DB::table('members')->insert([
                'member_name' => str_random(10),
                'gender' => 1,
                'birthday' => '2018-12-01',
                'email' => str_random(10).'@gmail.com',
                'card_name' => str_random(8),
                'card_no' => str_random(12),
                'security_code' => 100,
                'limit' => '2018-12-01',
                'subscribed_at' => '2018-12-01', 
                'unsubscribed_at' => '2018-12-01', 
                'member_status' => 1,
            ]);
        }

        for($i = 0; $i < 3; $i++){
            DB::table('movies')->insert([
                'movie_name' => str_random(10),
                'showing_open' => '2018-12-01',
                'showing_close' => '2018-12-01',
                'genre_no' => mt_rand(1,4),
                'description' => str_random(30),
                'screening_time' => 100,
                'registed_at' => '2018-12-01', 
                'updated_at' => '2018-12-01', 
                'movie_status' => 1,
            ]);
        }

        for($i = 0; $i < 10; $i++){
            $date = [
                '2018-10-12 20:10',
                '2018-10-12 21:30',
                '2018-10-13 20:10',
                '2018-10-13 21:30',
                '2018-10-14 20:10',
                '2018-10-15 21:30',
                '2018-10-15 20:10',
                '2018-10-16 21:30',
                '2018-10-17 20:10',
                '2018-10-17 21:30',
            ];

            DB::table('schedules')->insert([
                'movie_no' => mt_rand(1,3),
                'screen_no' => mt_rand(1,3),
                'screening_date' => $date[$i],
                'screening_status' => 1,
                'registed_at' => '2018-12-01', 
                'updated_at' => '2018-12-01', 
            ]);
        }
    }
}
