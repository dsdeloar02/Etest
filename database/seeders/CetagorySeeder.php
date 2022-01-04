<?php

namespace Database\Seeders;

use App\Models\Cetagory;
use Illuminate\Database\Seeder;

class CetagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cetagory::factory()->times(30)->create();
    }
}
