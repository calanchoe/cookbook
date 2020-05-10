<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RecipeCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $currentDateTime = Carbon::now()->toDateTimeString();
        $recipe_category = [
            [
                'name' => 'Другі страви',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Перші страви',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Салати',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],  
            [
                'name' => 'Десерти',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ], 
            [
                'name' => 'Випічка',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ], 
            [
                'name' => 'Напої',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ], 
            [
                'name' => 'Коктейлі',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ], 
        ];
        DB::table('recipe_category')->insert($recipe_category);
    }
}
