<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'name' => 'テストアカウント',
                'email' => 'test@gmail.com',
                'password' => Hash::make('testtest'),
                'department_id' => 1,
                'bio' => 'テストアカウントのプロフィール',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);

        factory(App\User::class, 9)
            ->create();
    }
}
