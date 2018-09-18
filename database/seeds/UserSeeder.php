<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'username' => 'jj',
            'email' => 'jared@wheatley.it',
            'password' => bcrypt('test123'),
            'first_name' => 'Jared',
            'last_name' => 'Wheatley'
        ]);
    }
}
