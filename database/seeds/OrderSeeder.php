<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'client_id' => 1,
            'flight_to' => "دهب",
            'total_price' => 5000,
            'paid' => 2500,
            'invoice' => '1607298830.png'
        ]);
    }
}
