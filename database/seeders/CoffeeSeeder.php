<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Coffee;
use App\Models\Country;
use App\Models\Flavor;
use Illuminate\Database\Seeder;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = Brand::factory()->count(20)->create();
        $countries = Country::factory()->count(10)->create();
        $flavors = Flavor::factory()->count(10)->create();

        foreach ($brands as $brand) {
            $coffeeCount = rand(0, 10);
            $flavorsCount = rand(0, 3);
            if ($coffeeCount) {
                Coffee::factory($coffeeCount)
                    ->for($brand)
                    ->has(Flavor::factory()->count($flavorsCount))
                    ->for($countries->random())
                    ->create();
            }
        }
    }
}
