<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin admin',
            'email' => 'admin@exemple.dz',
            'password' => Hash::make('admin'),
            'remember_token' => str_random(10)

        ]);
        //
    }
}
