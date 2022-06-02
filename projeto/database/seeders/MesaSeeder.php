<?php

namespace Database\Seeders;

use App\Models\mesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        mesa::create(['status' => 0, 'pessoas' => 0, 'total' => 0]);
        mesa::create(['status' => 0, 'pessoas' => 0, 'total' => 0]);
        mesa::create(['status' => 0, 'pessoas' => 0, 'total' => 0]);
        mesa::create(['status' => 0, 'pessoas' => 0, 'total' => 0]);
        mesa::create(['status' => 0, 'pessoas' => 0, 'total' => 0]);
    }
}
