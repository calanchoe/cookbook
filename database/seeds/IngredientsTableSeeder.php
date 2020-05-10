<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
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
        $ingredients = [
            [
                'name' => 'Курка',
                'ingr_category_id' => '1',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Курка(голень)',
                'ingr_category_id' => '1',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Курка(грудка)',
                'ingr_category_id' => '1',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Яловичина(фарш)',
                'ingr_category_id' => '1',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Бекон',
                'ingr_category_id' => '1',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Яловичина',
                'ingr_category_id' => '1',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Баранина',
                'ingr_category_id' => '1',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Баранина(фарш)',
                'ingr_category_id' => '1',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Свинина(фарш)',
                'ingr_category_id' => '1',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Лосось(филе)',
                'ingr_category_id' => '2',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Часник',
                'ingr_category_id' => '3',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Капуста',
                'ingr_category_id' => '3',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Лук-ріпчастий',
                'ingr_category_id' => '3',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Морква',
                'ingr_category_id' => '3',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Кінза свіжа (кориандр)',
                'ingr_category_id' => '10',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Масло оливкове',
                'ingr_category_id' => '20',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],        
        ];
        DB::table('ingredients')->insert($ingredients);
    }
}
