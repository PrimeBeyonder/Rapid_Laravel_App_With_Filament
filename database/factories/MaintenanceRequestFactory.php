<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employee;
use App\Models\MaintenanceRequest;
use App\Models\Room;

class MaintenanceRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MaintenanceRequest::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'room_id' => Room::factory(),
            'employee_id' => Employee::factory(),
            'issue_description' => $this->faker->text(),
            'status' => $this->faker->randomElement(["pending","in_progress","completed"]),
        ];
    }
}
