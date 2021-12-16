<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $suppliers = ['Own', 'Hotelbeds', 'SunHotels'];
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'supplier' => $suppliers[rand(0,2)],
            'rating' => rand(1,5),
            'status' => 1,
            'created_at' => Carbon::now()->addWeeks(rand(1, 52)),
        ];
    }
}
