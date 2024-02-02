<?php

use Illuminate\Database\Seeder;

class Cart_itemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cart_item::class, 10)
            ->create();
    }
}
