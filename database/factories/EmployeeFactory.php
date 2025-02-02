<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employee;
use App\Models\Hotel;
use App\Models\User;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'hotel_id' => Hotel::factory(),
            'user_id' => User::factory(),
            'role' => $this->faker->randomElement(["receptionist","cleaner","manager"]),
            'salary' => $this->faker->randomFloat(2, 0, 99999999.99),
        ];
    }
}
