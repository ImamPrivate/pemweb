<?php

namespace Database\Factories;

// use Faker\Factory as faker;

// use Faker\Factory as FakerFactory;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Factory::create();
        return [
            'name' => $faker->name(),
            'gender' => Arr::random(['L', 'P']),
            'nis' => mt_rand(000001, 999999)
        ];
    }
}
