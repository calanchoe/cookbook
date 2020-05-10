<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
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
        $collections = [
            [
                'name' => 'Легкі сніданки',
                'description' => 'Сніданок повинен бути корисним та легким, адже це перший прийом їжі після доброго сну.',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Найкращі страви для нового року',
                'description' => 'Ці страви добре підійдуть для найголовнішого застілля року. Ці страви віглядають чудово та більшість є не складними в приготувані.',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Чудові торти на день народження',
                'description' => 'Ці страви добре підійдуть для найголовнішого застілля року. Ці страви віглядають чудово та більшість є не складними в приготувані.',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Колекція 1',
                'description' => 'Тестова колекція. Колекція для перевірки роботи системи.',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Колекція 2',
                'description' => 'Тестова колекція. Колекція для перевірки роботи системи.',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Колекція 3',
                'description' => 'Тестова колекція. Колекція для перевірки роботи системи.',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Колекція 4',
                'description' => 'Тестова колекція. Колекція для перевірки роботи системи.',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Колекція 5',
                'description' => 'Тестова колекція. Колекція для перевірки роботи системи.',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Колекція 6',
                'description' => 'Тестова колекція. Колекція для перевірки роботи системи.',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'Колекція 7',
                'description' => 'Тестова колекція. Колекція для перевірки роботи системи.',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
        ];
        DB::table('collections')->insert($collections);
    }
}
