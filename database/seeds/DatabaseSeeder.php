<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        //$this->call(TypePricesTableSeeder::class);//-
        $this->call(CollectionsTableSeeder::class);
        $this->call(IngrCategoriesTableSeeder::class);
        $this->call(CuisinesTableSeeder::class);
        $this->call(RecipeCategoriesTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        //$this->call(PricesTableSeeder::class);//-
        //$this->call(RecipesTableSeeder::class);//-
        //$this->call(StepsTableSeeder::class);//-
       // $this->call(RecipeCollectsTableSeeder::class);//-
        //$this->call(RecipeIngrsTableSeeder::class);//-
        //$this->call(LikesTableSeeder::class);//-
        //$this->call(FavoritesTableSeeder::class);//- 
    }
}
