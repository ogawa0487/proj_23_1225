<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shifts')->insert([
            [
                'user_id' => '1',
                'start_at' => '2024-1-4 9:00:00',
                'end_at' => '2024-1-4 18:00:00',
                'breaking_hour' => '1:00:00',
                'working_hour' => '8:00:00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => '1',
                'start_at' => '2024-1-5 9:00:00',
                'end_at' => '2024-1-5 18:00:00',
                'breaking_hour' => '1:00:00',
                'working_hour' => '8:00:00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => '1',
                'start_at' => '2024-1-10 9:00:00',
                'end_at' => '2024-1-10 18:00:00',
                'breaking_hour' => '1:00:00',
                'working_hour' => '8:00:00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => '1',
                'start_at' => '2024-1-11 9:00:00',
                'end_at' => '2024-1-11 18:00:00',
                'breaking_hour' => '1:00:00',
                'working_hour' => '8:00:00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => '1',
                'start_at' => '2024-1-12 9:00:00',
                'end_at' => '2024-1-12 18:00:00',
                'breaking_hour' => '1:00:00',
                'working_hour' => '8:00:00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => '1',
                'start_at' => '2024-1-15 9:00:00',
                'end_at' => '2024-1-15 18:00:00',
                'breaking_hour' => '1:00:00',
                'working_hour' => '8:00:00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => '1',
                'start_at' => '2024-1-16 9:00:00',
                'end_at' => '2024-1-16 18:00:00',
                'breaking_hour' => '1:00:00',
                'working_hour' => '8:00:00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],[
                'user_id' => '1',
                'start_at' => '2024-1-17 9:00:00',
                'end_at' => '2024-1-17 18:00:00',
                'breaking_hour' => '1:00:00',
                'working_hour' => '8:00:00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => '1',
                'start_at' => '2024-1-18 9:00:00',
                'end_at' => '2024-1-18 18:00:00',
                'breaking_hour' => '1:00:00',
                'working_hour' => '8:00:00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => '1',
                'start_at' => '2024-1-19 9:00:00',
                'end_at' => '2024-1-19 18:00:00',
                'breaking_hour' => '1:00:00',
                'working_hour' => '8:00:00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
