<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Hotel;
use App\Models\Room;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'hotel_id' => Hotel::factory(),
            'room_number' => $this->faker->word(),
            'type' => $this->faker->randomElement(["single","double","suite"]),
            'price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'status' => $this->faker->randomElement(["available","booked","maintenance"]),
            'max_occupancy' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
