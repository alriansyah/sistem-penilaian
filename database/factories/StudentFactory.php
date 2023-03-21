<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(1),
            'gender' => Arr::random(['Laki-laki', 'Perempuan']),
            'nis' => mt_rand(00000000001, 99999999999),
            'no_hp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address(),
            'foto' => '',
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => Arr::random([1, 2, 3])
        ];
    }
}