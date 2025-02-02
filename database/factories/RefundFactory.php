<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Payment;
use App\Models\Refund;

class RefundFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Refund::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'payment_id' => Payment::factory(),
            'amount' => $this->faker->randomFloat(2, 0, 99999999.99),
            'reason' => $this->faker->text(),
            'status' => $this->faker->randomElement(["requested","approved","rejected","processed"]),
        ];
    }
}
