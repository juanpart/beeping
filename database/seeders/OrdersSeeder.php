<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\OrderLine;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;


class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Factory::factoryForModel(Order::class)->count(20)->create()->each(function ($order) {
            Factory::factoryForModel(OrderLine::class)->count(rand(1, 5))->create([
                'order_id' => $order->id,
            ]);
        });
    }
}