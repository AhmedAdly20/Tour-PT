<?php

use App\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name' => 'عمر محمد',
            'phone' => '01045646548972',
            'email' => 'omarmohamed@gmail.com',
        ]);
    }
}
