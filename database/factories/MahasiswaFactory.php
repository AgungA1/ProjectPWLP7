<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nim = $this->faker->randomNumber(4) + 2141720000;
        $number = $this->faker->numberBetween(1, 4);
        $letter = $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I']);
        $kelas = $number . $letter;
        return [
            'nim' => $nim,
            'nama' => fake()->name(),
            'tanggal_lahir' =>fake()->date(),
            'kelas' => $kelas,
            'jurusan' => fake()->randomElement(['Informatika', 'Sipil', 'Mesin', 'Elektro','Akuntansi']),
            'email' => fake()->unique()->safeEmail(),
            'no_hp'=> fake()->phoneNumber(),
        ];
    }
}
