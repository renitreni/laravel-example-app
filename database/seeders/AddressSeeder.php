<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=AddressSeeder
     *
     * @return void
     */
    public function run()
    {
        Address::factory()->count(10)->create();
    }
}
