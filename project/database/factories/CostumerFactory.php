<?php

namespace Database\Factories;

use App\Models\Costumer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Costumer>
 */
 
class CostumerFactory extends Factory
{
    protected $model = Costumer::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'level' => rand(0, 5),
            'address' => $this->faker->address,
        ];
    }
}
