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
        $this->call(AdminsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        $this->call(FollowsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(ShiftsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(Cart_itemsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
