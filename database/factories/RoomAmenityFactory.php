<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Amenity;
use App\Models\Room;
use App\Models\RoomAmenity;

class RoomAmenityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RoomAmenity::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'room_id' => Room::factory(),
            'amenity_id' => Amenity::factory(),
        ];
    }
}
