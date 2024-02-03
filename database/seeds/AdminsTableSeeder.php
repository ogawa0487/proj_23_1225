<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'テストアカウント',
                'email' => 'test@gmail.com',
                'password' => Hash::make('testtest'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);

        factory(App\Admin::class, 9)
            ->create();
    }
}
