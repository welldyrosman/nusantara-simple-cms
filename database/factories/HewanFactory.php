<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HewanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'weight_start'=>3,
            'weight_end'=>3,
            'image'=>'sd/sd/sd',
            'category'=>'',
            'price'=>$this->faker->numberBetween(1000000,3000000)
        ];
    }
}
