<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Usuario::create([
                'name' => $faker->firstName,
                'apellido' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'), 
                'created_at' => $faker->dateTimeBetween('-2 years'),
            ]);
        }
    }
}