<?php

namespace Database\Seeders;

use App\Models\FechaHora;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FechaHoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FechaHora::factory(3)->create();
    }
}
