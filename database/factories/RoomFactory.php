<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type'=>fake()->firstNameMale(),
            'room_number'=>rand(0,999),
            'price'=>rand(0,500),
            'support'=>rand(1,2),
            'air'=>'ธรรมชาติ',
            'space'=>fake()->e164PhoneNumber(),
            'img'=>fake()->imageUrl(),
            'max_amount'=>fake()->name()
        ];
    }
}
