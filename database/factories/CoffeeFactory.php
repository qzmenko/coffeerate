<?php

namespace Database\Factories;

use App\Enums\Coffee\CoffeeAcidity;
use App\Enums\Coffee\CoffeeBitterness;
use App\Enums\Coffee\CoffeeDensity;
use App\Enums\Coffee\CoffeeFormat;
use App\Enums\Coffee\CoffeeRoasting;
use App\Enums\Coffee\CoffeeType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coffee>
 */
class CoffeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->realTextBetween(10, 20),
            'type' => $this->faker->randomElement(CoffeeType::cases()),
            'format' => $this->faker->randomElement(CoffeeFormat::cases()),
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(500, 5000),
            'sca_grade' => $this->faker->numberBetween(50, 100),
            'density' => $this->faker->randomElement(CoffeeDensity::cases()),
            'acidity' => $this->faker->randomElement(CoffeeAcidity::cases()),
            'bitterness' => $this->faker->randomElement(CoffeeBitterness::cases()),
            'roasting' => $this->faker->randomElement(CoffeeRoasting::cases()),
            'no_caffeine' => $this->faker->boolean(10),
        ];
    }
}
