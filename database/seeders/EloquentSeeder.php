<?php

namespace Database\Seeders;

use App\Models\Eloquent;
use Illuminate\Database\Seeder;

class EloquentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Eloquent::factory(10)->create();

    }
}
