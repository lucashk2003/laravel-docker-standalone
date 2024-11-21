<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Costumer;
use App\Models\Device;

class CostumerDeviceSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 Costumers con entre 1 y 2 Devices
        \App\Models\Costumer::factory(10)->create()->each(function ($costumer) {
            $costumer->devices()->createMany([
                [
                    'brand' => 'Brand ' . rand(1, 100),
                    'model' => 'Model ' . rand(1, 100),
                ],
                [
                    'brand' => 'Brand ' . rand(101, 200),
                    'model' => 'Model ' . rand(101, 200),
                ]
            ]);
        });
    }
}
