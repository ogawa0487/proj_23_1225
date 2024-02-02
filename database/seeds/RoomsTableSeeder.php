<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'name' => 'Ａ会議室',
                'floor' => 2,
                'capacity' => 10,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Ｂ会議室',
                'floor' => 2,
                'capacity' => 15,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Ｃ会議室',
                'floor' => 2,
                'capacity' => 30,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Ｄ会議室',
                'floor' => 3,
                'capacity' => 6,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Ｅ会議室',
                'floor' => 3,
                'capacity' => 12,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Ｆ会議室',
                'floor' => 4,
                'capacity' => 20,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Ｇ会議室',
                'floor' => 5,
                'capacity' => 50,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Ｈ会議室',
                'floor' => 5,
                'capacity' => 100,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Ｉ会議室',
                'floor' => 8,
                'capacity' => 65,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Ｊ会議室',
                'floor' => 8,
                'capacity' => 30,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
