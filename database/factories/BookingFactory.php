<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>fake()->name(),
            'room_id'=>fake()->name(),
            'room_number'=>rand(0,999),
            'check_in'=>fake()->dateTime(),
            'check_out'=>fake()->dateTime(),
            'b_fname'=>fake()->name(),
            'b_lname'=>fake()->name(),
            'b_tel' =>fake()->phoneNumber(),
            'b_email' => fake()->unique()->safeEmail(),
            'amount'=>rand(1,2),
        ];
    }
}
