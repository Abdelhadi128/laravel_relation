<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;
use GuzzleHttp\Promise\Create;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee_detail>
 */
class employee_detailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone' => '06' . rand(1000000, 99999999),
            'adress'=>fake()->address(),
            'employeeId'=>Employee::factory()->create()->employeeId,
        ];
    }
}
