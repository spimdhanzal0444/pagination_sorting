<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaginateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Paginate::factory(20)->create();
    }
}
