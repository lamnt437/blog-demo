<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'Test',
            'email' => 'admin@a.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
        ]);
    }
}
