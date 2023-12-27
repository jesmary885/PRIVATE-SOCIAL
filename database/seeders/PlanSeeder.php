<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'Desnudos',
        ]);

        Plan::create([
            'name' => 'Pies',
        ]);

        Plan::create([
            'name' => 'Vip',
        ]);
    }
}
