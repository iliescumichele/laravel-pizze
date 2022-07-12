<?php

use Illuminate\Database\Seeder;
use App\Pizza;
use App\Ingredient;

class IngredientPizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i < 10 ; $i++){

            $random_ingredient_id = Ingredient::inRandomOrder()->first()->id;
            $random_pizza = Pizza::inRandomOrder()->first();

            $random_pizza->ingredients()->attach($random_ingredient_id);
        }
    }
}
