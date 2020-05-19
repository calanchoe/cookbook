<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        $users = [
            [
                //'surname' => 'Адміністратор_прізвище',
                'name' => 'Адміністратор_імя',
                'role_id' => 1,
                'email' => 'admin@g.g',
                'password' => bcrypt('Admin'),
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                //'surname' => 'Модератор_прізвище',
                'name' => 'модератор_імя',
                'role_id' => 2,
                'email' => 'moderator@g.g',
                'password' => bcrypt('Moderator'),
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                //'surname' => 'Читач_прізвище',
                'name' => 'Читач_імя',
                'role_id' => 2,
                'email' => 'reader@g.g',
                'password' => bcrypt('Reader'),
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
        ];
        DB::table('users')->insert($users);
    }
}
