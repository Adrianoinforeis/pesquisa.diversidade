<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'João Leite',
            'email' => 'joaocrleite@gmail.com',
            'password' => bcrypt('password'),
            'nivel' => User::NIVEL_ADMIN,
        ]);


    }
}
