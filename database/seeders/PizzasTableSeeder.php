<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 12; $i++) {
            $pizza = new Pizza();
            $pizza->price = $faker->numberBetween(6, 12);
            $pizza->name = $faker->randomElement(['margherita', 'vesuvio', 'burratosa', 'gitaddpush', 'diavola', 'capricciosa', 'tonno e cipolla']);
            $pizza->formato = $faker->randomElement(['mignon', 'normale', 'maxi', 'famiglia']);
            $pizza->description = $faker->text(20);
            $pizza->save();
        }
    }
}
