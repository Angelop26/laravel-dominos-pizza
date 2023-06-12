<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = ['salsiccia', 'wurstel', 'norcia', 'patatine', 'piccante'];
        foreach ($ingredients as $ingredient) {
            $new_ingredient = new Ingredient();
            $new_ingredient->name = $ingredient;
            $new_ingredient->slug = Str::slug($new_ingredient->name);
            $new_ingredient->save();
        }

    }
}
