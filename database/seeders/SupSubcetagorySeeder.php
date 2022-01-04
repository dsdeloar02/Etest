<?php

namespace Database\Seeders;

use App\Models\SupSubcetagory;
use Illuminate\Database\Seeder;

class SupSubcetagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SupSubcetagory::factory()->times(100)->create();
    }
}
