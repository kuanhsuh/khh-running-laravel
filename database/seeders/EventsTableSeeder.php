<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'event_name' => 'Event 1',
                'event_description' => 'This is event 1',
                'race_date' => '2023-05-01',
                'register_date' => '2023-04-01',
                'enrollment_limit' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'event_name' => 'Event 2',
                'event_description' => 'This is event 2',
                'race_date' => '2023-06-01',
                'register_date' => '2023-05-01',
                'enrollment_limit' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'event_name' => 'Event 3',
                'event_description' => 'This is event 3',
                'race_date' => '2023-07-01',
                'register_date' => '2023-06-01',
                'enrollment_limit' => 30,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'event_name' => 'Event 4',
                'event_description' => 'This is event 4',
                'race_date' => '2023-08-01',
                'register_date' => '2023-07-01',
                'enrollment_limit' => 40,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'event_name' => 'Event 5',
                'event_description' => 'This is event 5',
                'race_date' => '2023-09-01',
                'register_date' => '2023-08-01',
                'enrollment_limit' => 30,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
