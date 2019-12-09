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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Tobias de Vargas',
            'email' =>'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        DB::table('accs')->insert([
            'nome' => 'Estágios',
            'limiteHoras' =>'100',
            'horas' => '180',
            'user_id' => '1'
        ]);

    }
}
