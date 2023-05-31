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
            $pizza->image = 'https://image.spreadshirtmedia.net/image-server/v1/products/T1459A839PA4459PT28D172562359W8333H10000/views/1,width=550,height=550,appearanceId=839,backgroundColor=F2F2F2/gioco-sulla-scatola-di-pizza-vuota-umorismo-da-scherzo-del-giocatore-adesivo.jpg';
            $pizza->price = $faker->numberBetween(6, 12);
            $pizza->name = $faker->randomElement(['margherita', 'vesuvio', 'burratosa', 'gitaddpush', 'diavola', 'capricciosa', 'tonno e cipolla']);
            $pizza->formato = $faker->randomElement(['mignon', 'normale', 'maxi', 'famiglia']);
            $pizza->description = $faker->text(20);
            $pizza->save();
        }
    }
}
