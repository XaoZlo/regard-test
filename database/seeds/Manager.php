<?php

use Illuminate\Database\Seeder;

class Manager extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Manager::class, 5)->create()->each(function ($manager) {
                        $manager->orders()->saveMany(factory(App\Order::class, 10)->make());
                });
    }
}