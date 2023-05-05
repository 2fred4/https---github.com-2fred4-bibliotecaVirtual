<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prestamo;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestamo::factory(50)->create();
    }
}
