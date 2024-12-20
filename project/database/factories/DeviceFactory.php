<?php

namespace Database\Factories;

use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */

class DeviceFactory extends Factory
{
    protected $model = Device::class;

    public function definition()
    {
        return [
            'brand' => $this->faker->company,
            'model' => $this->faker->word,
        ];
    }
}
