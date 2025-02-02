<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\User;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'hotel_id' => Hotel::factory(),
            'room_id' => Room::factory(),
            'check_in_date' => $this->faker->date(),
            'check_out_date' => $this->faker->date(),
            'total_price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'status' => $this->faker->randomElement(["pending","confirmed","checked_in","cancelled"]),
        ];
    }
}
