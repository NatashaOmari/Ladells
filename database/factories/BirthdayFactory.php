<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Birthday>
 */
class BirthdayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name'=>fake()->name,
            'user_id'=>User::pluck('id')->random(),
            'image'=>fake()->image(storage_path('uploads/birthdays'), 200, 200, null, false),
            'recipe'=>fake()->sentence(),
        ];
    }
}
